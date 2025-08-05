<?php
namespace App\Controllers;

/**
 * Contrôleur d'authentification utilisateur
 */
class AuthController
{
    public function showLoginForm()
    {
        require_once '../app/Views/auth/login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Exemple simplifié : à adapter avec hash + vraie BDD
        $user = $this->findUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /');
        } else {
            echo "Identifiants invalides";
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }

    private function findUserByEmail($email)
    {
        $pdo = \Config\Database::getInstance();
        $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}

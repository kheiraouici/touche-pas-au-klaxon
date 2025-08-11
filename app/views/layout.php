<!DOCTYPE html> <html lang="fr"> 
    <head> <meta charset="utf-8"> <title><?= htmlspecialchars($title ?? ''); ?>
</title> </head> <body> <?php require VIEW_PATH . '/partials/navbar.php'; ?>
 <main><?= $content ?? '' ?></main> <?php require VIEW_PATH . '/partials/footer.php'; ?>
 </body> </html
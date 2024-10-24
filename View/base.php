<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta  charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $pagetitle ?></title>
        <meta name="description" content="<?= $description ?>"/>
        <meta name="keywords" content="social,site,communication"/>
        <meta name="robots" content="index,follow"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <?php
        if(isset($Css)){
            foreach ($Css as $PageCss){
                echo '<link rel="stylesheet" href="assets/css/'.$PageCss.'.css">';
            }
        }
        ?>

    </head>
    <body>
    <?php require_once 'View/includes/header.php'; ?>

    <main>
    <?php
        $filepath = File::build_path(array("View", $controller, "$view.php"));
        require_once $filepath;
        ?>
    </main>

    <?php require_once 'View/includes/footer.php'; ?>

</body>
<script type="text/javascript" src="assets/js/bugerMenu.js"></script>
</html>
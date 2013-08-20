<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login &middot; Unleash</title>
        <!-- Styles -->
        <?=$this->assets->loadCss()?>
        <!-- Login Only Style -->
        <link rel="stylesheet" href="<?=Assets::getConfig('cssFolder')?>/login.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <?=$yield?>
        </div>
        <!-- JavaScript -->
        <?=$this->assets->loadJs()?>
    </body>
</html>
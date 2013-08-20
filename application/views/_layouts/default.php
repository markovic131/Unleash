<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?=config_item('appName')?></title>
        <!-- Styles -->
        <?=$this->assets->loadCss('public')?>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <?php if(!$this->ion_auth->logged_in()): ?>
                        <li><a href="/auth/login">Member Login</a></li>
                        <li><a href="/auth/login">Admin Login</a></li>
                    <?php else: ?>
                        <li><a href="/auth/logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
                <h3 class="text-muted">Unleash</h3>
            </div>
            <?=$yield?>
        </div>
        <!-- JavaScript -->
        <?=$this->assets->loadJs('public')?>
    </body>
</html>
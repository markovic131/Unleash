<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin &middot; Unleash</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
        <!-- Custom styles-->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/admin.css">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="/page">Public</a></li>
                    <li><a href="/user/home">Authorized</a></li>
                    <li><a href="/admin/home">Admin</a></li>
                    <?php if(!$this->ion_auth->logged_in()): ?>
                        <li><a href="/auth/login">Login</a></li>
                    <?php else: ?>
                        <li><a href="/auth/logout">Logout</a></li>
                    <?php endif; ?>
                </ul>
                <h3 class="text-muted">Unleash - Administration</h3>
            </div>
            <?=$yield?>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
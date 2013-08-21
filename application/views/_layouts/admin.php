<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Administration Area &middot; <?=config_item('appName')?></title>
        <!-- Styles -->
        <?=$this->assets->loadCss('admin')?>
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Unleash</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/admin/home">Dashboard</a></li>
                        <li><a href="/admin/user">Users</a></li>
                        <li><a href="/admin/group">Groups</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?=config_item('logoutRoute')?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <?=$yield?>
        </div>
        <!-- JavaScript -->
        <?=$this->assets->loadJs('admin')?>
    </body>
</html>
<style>body {padding-top: 20px;}.header {margin-bottom: 30px}.container {max-width: 940px;}</style>
<div class="row">
    <div class="col-md-12">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <?php if(!$this->ion_auth->logged_in()): ?>
                    <li><a href="<?=config_item('loginRoute')?>">Member Login</a></li>
                    <li><a href="<?=config_item('loginRoute')?>">Admin Login</a></li>
                <?php else: ?>
                    <li><a href="<?=config_item('logoutRoute')?>">Logout</a></li>
                <?php endif; ?>
            </ul>
            <h3 class="text-muted">Unleash</h3>
        </div>
        <div class="jumbotron">
            <h1>Welcome to Unleash</h1>
            <p class="lead">The page you are looking is publicly accessible.</p>
            <p>If you would like to edit this page you'll find it located at:</p>
            <code>application/views/page/index.php</code>

            <p>The corresponding controller for this page is found at:</p>
            <code>application/controllers/page.php</code>
            <br><br>
            <?php if ($this->ion_auth->logged_in()): ?>
                <p>You can access the <a href="/user/home">Members Area</a>.</p>
            <?php endif ?>
             <?php if ($this->ion_auth->is_admin()): ?>
                <p>You can also access the <a href="/admin/home">Administration Area</a>.</p>
            <?php endif ?>
        </div>
    </div>
</div>
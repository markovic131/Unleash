<div class="row">
    <div class="col-md-12">
        <form class="form-signin" action="<?=config_item('loginRoute')?>" method="post">
            <h1><?=config_item('appName')?></h1>
            <input type="text" name="email" class="form-control" placeholder="Email Address" autofocus value="<?=set_value('email')?>">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <?php if ($message): ?>
                <div class="alert alert-danger alert-dismissable" id="validationMessage">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?=$message?>
                </div>
            <?php endif ?>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
        <p id="loginCopyright" class="text-center">
            &copy; 2013 <a href="http://markoaleksic.com" target="_blank"><strong>Marko Aleksic</strong></a>. All Rights Reserved. <br>
            Powered by <a href="https://github.com/psybaron/Unleash" target="_blank"><strong><?=config_item('appName')?></strong></a><br>
            <a href="https://github.com/psybaron/Unleash" target="_blank"><i class="icon-github icon-3x"></i></a>
        </p>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login &middot; <?=config_item('appName')?></title>
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
        <script>
            $(function(){
                $('#loginButton').on('click',function(e){
                    e.preventDefault();
                    $.ajax({
                        url: '/auth/postLogin',
                        type: 'post',
                        dataType : 'json',
                        data: $('.form-signin').serialize(),
                        success : function(data) {
                            window.location.replace(data.redirect);
                        },
                        error : function(data) {
                            $('#validationMessage').show().html(data.responseJSON.message);
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
</html>
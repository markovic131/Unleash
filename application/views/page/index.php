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
<style>
    body {padding-top: 20px;}
    .header {margin-bottom: 30px}
    .container {max-width: 940px;}
</style>
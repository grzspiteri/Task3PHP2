<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url('css/styles.min.css')?>">
    </head>
    <body>
        <main id="back">
            <ul id="signin">
                <?=form_open ('users/do_login'); ?>

        <?=form_input ($form['username']); ?>
        <?=form_input ($form['password']); ?>

        <?=form_submit (null, 'Login');?>

        <?=form_close (); ?>
            </ul>
        </main>
    </body>
</html>

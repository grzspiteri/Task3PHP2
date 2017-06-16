<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?=base_url('css/styles.min.css')?>">
    </head>
    <body>
        <main id="back">
            <ul id="signin">
                <?=form_open  ('users/do_register'); ?>
                    <span><h1 class="signcenter">Join Free!</h1></span>
                    <h4 class="signcenter">Over 100 students here.</h4>
                    <br>
                    <hr>
                    <br>
                    <?=form_input ($form['name']); ?>
                    <?=form_input ($form['surname']); ?>
                    <?=form_input ($form['email']); ?>
                    <?=form_input ($form['username']); ?>
                    <?=form_input ($form['password']); ?>
                    <?=form_input ($form['DOB']); ?>
                    <?=form_dropdown ('input-courseID', $form['Courses']); ?>
                    <?=form_submit (null, 'Register');?>
                <?=form_close (); ?>
                
            </ul>
        </main>
    </body>
</html>

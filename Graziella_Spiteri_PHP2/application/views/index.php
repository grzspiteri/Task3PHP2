<!DOCTYPE html>
<html>
    <head>
        <title>Educational Log - Login</title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <header id="site-header">
            <ul>
               <li>
                    <a class="active" href="#home">Educational Log</a>
               </li>
                <li>
                    <form id="login" action="home.php">

                        <input type="text" name="username" placeholder=" Username" required>
                        <input type="password" name="password" placeholder=" Password" required>
                         <button type="submit">Login</button>
                    </form>
               </li>
        </ul>
        </header>

        <main id="back">
          <ul id="signin">

            <?=form_open ('users/do_register'); ?>
            <?=form_input ($form['name']); ?>
            <?=form_input ($form['surname']); ?>
            <?=form_input ($form['email']); ?>
            <?=form_input ($form['username']); ?>
            <?=form_input ($form['password']); ?>
            <?=form_input ($form['DOB']); ?>
            <?=form_input ($form['CourseID']); ?>

            <?=form_submit (null, 'Register');?>

            <?=form_close (); ?>

            <form>
                <span><h1 class="signcenter">Join Free!</h1></span>
                <h4 class="signcenter">Over 100 students here.</h4>
                <br>
                <hr>
                <br>
                <input type="text" name="fname" id="fname" placeholder=" First Name" required>
                <input type="text" name="lname" id="lname" placeholder=" Last Name" required>

                <input type="email" name="email" id="email" placeholder=" Email" required>

                <input type="password" name="password" id="password" placeholder=" Password" required>

                <input type="password" name="repassword" id="repassword" placeholder=" Re-Type Password" required>

                <select id="occupation" required>
                    <option selected disabled>Ocucpation</option>
                    <option value="#sel-student">Student</option>
                    <option value="#sel-lecturer">Lecturer</option>
                </select>

                <select class="occupation" id="sel-student">
                    <option selected disabled>Course Type</option>
                    <option>Ba in GD</option>
                    <option>Ba in IM</option>
                    <option>Ba in Art</option>
                    <option>Diploma in </option>
                    <option>Diploma in IM</option>
                    <option>Diploma in Art</option>
                </select>

                <select class="occupation" id="sel-lecturer">
                    <option selected disabled>Lecturer Type</option>
                    <option>Graphic Design</option>
                    <option>Media</option>
                    <option>Art</option>
                </select>

                <br>
                <span class="signcenter">Date Of Birth:</span>

                <input type="date" name="dob" class="date">
                <br>

                <label class="signcenter">
                <input type="radio" name="gender" name="male" class="signcenter" class="gender"> Male
                </label>
                <label class="signcenter">
                <input type="radio" name="gender"  name="female" class="signcenter" class="gender"> Female
                </label>
                <br>
                <br>
                <button type="submit" class="signup">Sign Up</button>
            </form>
            </ul>
        </main>

        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>Educational Log - Calendar</title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <nav>
           <ul>
               <li>
                    <a class="active" href="#home">Educational Log</a>
               </li>

               <div class="navigation">
                   <li>
                        <a href="profile.php"><img src="images/profile.png"></a>
                   </li>
                    <li>
                        <a href="home.php"><img src="images/home.png"></a>
                   </li>
                    <li>
                        <a href="calendar.php"><img src="images/cal.png"></a>
                   </li>
                    <li>
                        <a href="contactUs.php"><img src="images/msg.png"></a>
                   </li>
                    <li>
                        <a href="index.php"><img src="images/out.png"></a>
                   </li>
                </div>   
        </ul>
        </nav>

    <main>
    <div class="calendar" data-year="2017" data-month="2">
        <header>
            <a href="#" class="calendar-nav previous">&lt;</a>
            <h1>Jan 2017</h1>
            <a href="#" class="calendar-nav next">&gt;</a>
        </header>

        <ul class="calendar-weekdays">
            <li>Sun</li>
            <li>Mon</li>
            <li>Tue</li>
            <li>Wed</li>
            <li>Thu</li>
            <li>Fri</li>
            <li>Sat</li>
        </ul>

        <ul class="calendar-days">
            <li class="disabled invisible">
                <span></span>
            </li>
            <li class="day invisible">
                <span></span>
            </li>
        </ul>
    </div>
    </main>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>

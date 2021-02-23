<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="Photos/Logoja/llogojaPerf.png" >
        <link rel="stylesheet" href="css/navigationBar.css">
        <link rel="stylesheet" href="css/mainHeader.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sliderStyle.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        
        
        <title>
            OnlineGeek
        </title>
        
    </head>

    <body>
        <!--navBar-->
        <div class='navBar'>
            <div class='navFillim'>
                <ul>
                    <li><a href='index.html'>
                       
                        <img src="Photos/Logoja/llogojaPerf.png" alt ="logoja" id='logo'>
                    </a>
                    </li>

                </ul>

            </div>
            <!--Hamburgeri-->
            <a href='#' class='butoni'>
                <span class='bar'></span>
                <span class='bar'></span>
                <span class='bar'></span>

            </a>
            <div class='navFund'>
                <ul class='navList' id='ul2'>
                    <li id='home'><a href="index.php">Home</a></li>
                    <?php
                        if (isset($_SESSION['Role']) && $_SESSION['Role'] == 1) {
                            echo "<li><a href='subPages/dashboard.php'>Dashboard</a></li>";
                            echo "<li><a href='includes/logout.php'>Logout<a></li>";
                        }
                   
                        else if (isset($_SESSION['Role']) && $_SESSION['Role'] == 0) {
                            echo "<li><a href='subPages/Courses.php'>Courses</a></li>";
                            echo "<li><a href='account.php'>Account</a></li>";
                            
                            echo "<li><a href='contact.php'>Contact Us<a></li>";
                            
                        }
                        else {
                            echo "<li><a href='subPages/Courses.php'>Courses</a></li>";
                            echo "<li><a href='logIn.php'>Login<a></li>";
                            echo "<li><a href='Register.php'>Register</a></li>";
                            
                             
                        }
                    
                    ?>
                    <?php
                        
                    ?>
                </ul>
            </div>
        </div>
        
        <div class ='slider-container'>
                <div class ='slide fade'>
                    <div class='slideNumber'>1/7</div>
                    <img src="Photos/sliderimg/s1.jpg" style="width:100%; height:650px;">
                    <p class="slideText">Online Geek</p>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>2/7</div>
                    <img src="Photos/sliderimg/Math.jpg" style="width:100%; height:650px">
                    <div class="slideText">Math</div>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>3/7</div>
                    <img src="Photos/sliderimg/s3.jpg" style="width:100%; height:650px">
                    <div class="slideText">Science</div>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>4/7</div>
                    <img src="Photos/sliderimg/s4.jpg" style="width:100%; height:650px">
                    <div class="slideText">Humanities</div>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>5/7</div>
                    <img src="Photos/sliderimg/s5.jpeg" style="width:100%; height:650px">
                    <div class="slideText">Economics</div>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>6/7</div>
                    <img src="Photos/sliderimg/s5.jpeg" style="width:100% ; height:650px">
                    <div class="slideText">Computing</div>
                </div>
                <div class ='slide fade'>
                    <div class='slideNumber'>7/7</div>
                    <img src="Photos/sliderimg/s7.jpeg" style="width:100%; height:650px">
                    <div class="slideText">Online geek</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)"><</a>
                <a class="next" onclick="plusSlides(1)">></a>
                <br>
                <div style="text-align: center;">
                    <span class="pika" onclick="currentSlide(1)"></span>
                    <span class="pika" onclick="currentSlide(2)"></span>
                    <span class="pika" onclick="currentSlide(3)"></span>
                    <span class="pika" onclick="currentSlide(4)"></span>
                    <span class="pika" onclick="currentSlide(5)"></span>
                    <span class="pika" onclick="currentSlide(6)"></span>
                    <span class="pika" onclick="currentSlide(7)"></span>

                </div>

            </div>
        <!--maini-->
        <div class='main'>
            <!--upperMain-->
            <div class=upperMain>
                <!--upper-UppeMain-->
                <div class='upper-UpperMain'>
                    <a href="https://www.jstor.org/"><img src="Photos/onlineSources/jStor.png" alt="logoja e JStore"></a>
                    <a href="https://scholar.google.com/"><img src="Photos/onlineSources/googleScholar.png" alt="logoja e googScholar"></a>
                    <a href="https://www.mendeley.com/guides/web"><img src="Photos/onlineSources/Mendeley.png" alt="logoja e Mendeley"  id='mendeley'></a>
                    <a href="https://www.ebsco.com/"><img src="Photos/onlineSources/EBSCOhost.jfif" alt="logoja e EBSCO"></a>
                    <a href="https://www.amazon.com/books-used-books-textbooks/b?node=283155"><img src="Photos/onlineSources/amazon.png" alt="logoja e amazon"></a>
                    
                    <div class='bottom-border'>

                    </div>

                </div>
                 <!--Rreshti  67 eshte vija e poshtme-->
                 <div class='bottom-border'></div>
                <!--div class='bottom-border'></div-->

                <!--mid-UpperMain-->
                <div class=down-UpperMain>
                    <h1>Achieve your goals with Online Geek</h1>
                    <div class='sub-downUpperMain'>
                        <div class=sub-items>
                            <img src="Photos/achieveGoalsIcons/first.png" alt="Latest skills Icon">
                            <h3>Learn the latest skills</h3>
                        </div>
                        <div class=sub-items>
                            <img src="Photos/achieveGoalsIcons/second.png" alt="career Icon"> 
                            <h3>Get ready for a career.</h3>
                        </div>
                        <div class=sub-items>
                            <img src="Photos/achieveGoalsIcons/fourth.png" alt="organisation Icon">
                            <h3>Upskill your organization</h3>
                        </div>
                    </div>

                </div>
                <!--down-UpperMain-->
                <div></div>
            </div>

            <!--midMain-->
            <div class='midMain'>
                <img src="Photos/parts.png" alt="copezaFotosh">
                <div class='midMain-text'>
                    <h1>Learners outcomes</h1>
                    <h4>87% of people learning for professional 
                        development report career benefits <br>like getting a promotion, 
                        a raise, or starting a new career</h4>
                </div>

            </div>

            <!--downMain-->
            <div class='downMain'>
                <!--upper-DownMain-->
                <div class='upper-downMain'>
                    <div>
                        <h1>You can learn <br> anything.</h1>
                        <h4>Build a deep, solid understanding in math, science, and <br> more.</h4>
                    </div>
                    <img src='Photos/Preview.png' alt="PreviewPhoto">
                </div>
                <!--down-DownMain-->
                <div class='down-downMain'>
                   <div class='first-down-downMain'>
                       <h2>“I come from a poor family. At home it’s one room, just a <br>
                        room we live in. When I was a child, I used to fear<br>
                        mathematics. But now, I am in love with mathematics <br>
                        because of OnlineGeek.”

                       </h2>
                   </div>

                   <div class='second-down-downMain'>
                       <h4>ANJALI</h4>
                       <img src='Photos/anjali.png' alt="Anjali">
                   </div>
                </div>

                <!--Bottom main-->
                <div class='bottomMain'>
                    <div>
                        <h1>Enabling transformation</h1>
                        <h4>Your <b>Online Geek</b> learning experience is grounded in cutting edge cognitive <br>
                            science. With more than two dozen distinct learning features to <br>
                            help you achieve your goals, our approach follows three key <br>
                            principles:
                        </h4>
                        <h2>Experience</h2>
                        <h4>
                            Learn new knowledge and skills in a variety of ways, from <br>
                            engaging video lectures and dynamic graphics to data <br>
                            visualizations and interactive elements.
                        </h4>
                        <h2>Practice</h2>
                        <h4>Demonstrating your knowledge is a critical part of learning. OnlineGeek <br>
                            courses and programs provide a space to practice with quizzes,<br> 
                            open response assessments, virtual environments, and more.
                        </h4>
                        <h2>Apply</h2>
                        <h4>
                            Learning on OnlineGeek transforms how you think and what you can do,<br> 
                            and translates directly into the real world—immediately apply your<br>
                            new capabilities in the context of your job.
                        </h4>
                    </div>
                    <div>
                        <img src='Photos/brain.png' alt="Truri">
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="JavaScript/slider.js"></script>
        <script type="text/javascript" src="JavaScript/responsive.js"></script>

    </body>
</html>
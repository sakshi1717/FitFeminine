<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon3.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/68bbd08d56.js" crossorigin="anonymous"></script>
    <title>FitFeminine | Beauty It's Time To Beast</title>
</head>

<body>
    <nav class="nav">
        <div class="nav__title">
            <div class="nav__title--logo"><img src="img/icon3.png" alt="FitFeminine icon"></div>
            <div class="nav__title--tag">FitFeminine</div>
        </div>
        <ul class="nav__list">
            <li class="nav__list--item"> <a href="#about">ABOUT</a></li>
            <li class="nav__list--item"> <a href="register.php#signup">SIGNUP</a></li>
            <li class="nav__list--item"> <a href="register.php#login">LOGIN</a></li>
        </ul>
    </nav>
    <header>
        <div class="header">
            <div class="header__cta">
                <div class="header__heading">Don't be the same,<br>Be better.</div>
                <a href="register.php#signup" class="btn">Get started for free</a>
            </div>

            <div class="header__bg">
                <img src="img/second.jpg" alt="Girl listening to music">
            </div>
        </div>
    </header>

    <section class="about" id="about">
        <div class="about__text">
            <h1 class="heading--1">Word from the founder</h1>

            <div class="about__text--group">
                <p class="text">"FitFeminine is your go-to destination for new workouts, 
                    legit nutrition advice and weight loss tips, the latest health news, healthy recipes, 
                    and more.."</p>
            </div>
            <div class="about__text--group">
                <p class="text">"It is a one stop health a fitness application for women through most
                     stages of life – it includes regular fitness data, energy indicator, 
                     health monitors, guides through the health cycles that women may go 
                     through, and helps through specific health situations or 
                     illness – probably also helps women through rhythm of medication and
                      tests that might be required."
                </p>
                
            </div>
            <div class="about__text--group">
            <p class="text"> - Sakshi Sharma</p>
            </div>

        </div>

        <div class="about__graphic">
            <div class="about__graphic--item about__graphic--item1"><img alt="" src="img/about1.jpg"></div>
            <div class="about__graphic--item about__graphic--item2"><img alt="" src="img/about2.jpg"></div>
            <div class="about__graphic--item about__graphic--item3"><img alt="" src="img/about3.jpg"></div>
            <div class="about__graphic--item about__graphic--item4"><img alt="" src="img/about4.jpg"></div>
            <div class="about__graphic--item about__graphic--item5"><img alt="" src="img/about5.jpg"></div>
            <div class="about__graphic--item about__graphic--item6"><img alt="" src="img/about6.jpg"></div>
        </div>
    </section>

    <section class="about" id="about">
     
        <div class="about__text">
            <h1 class="heading--1">Engaging Women in Community Sports</h1>

            <div class="about__text--group" >
                <p class="text" > Community sport has been touted as an important part of “the fabric of a community”.
                 Yet girls and women are less likely to participate in and lead these programs, missing opportunities
                 for physical, social and mental health benefits and personal development.
                 </p>
            </div>
            <div class="about__text--group">
                <p class="text" > FitFeminine is also serves as a platform where females can come together and find other females
                 with similar interests in sports, ultimately increasing their participaton in the community sport and developing leadership skills. 
                 This will not only help them to be mentally and physically fit, but will also help them meet different 
                 women and empower each other.
                </p>
                
            </div>
 

        </div>

        <div class="about__graphic">
            <div class="about__graphic--item about__graphic--item1"><img alt="" src="img/sport1.jpg"></div>
            <div class="about__graphic--item about__graphic--item2"><img alt="" src="img/sport2.jpg"></div>
            <div class="about__graphic--item about__graphic--item3"><img alt="" src="img/sport3.jpg"></div>
            <div class="about__graphic--item about__graphic--item4"><img alt="" src="img/sport4.jpg"></div>
            <div class="about__graphic--item about__graphic--item5"><img alt="" src="img/sport5.jpg"></div>
            <div class="about__graphic--item about__graphic--item6"><img alt="" src="img/sport6.jpg"></div>
        </div>
        
    </section>

    <section class="cta">
        <div class="cta__graphic">
            <img src="img/herobg.png" alt="girl jumping">
        </div>
        <div class="cta__text">
            <h1 class="heading--1">One stop for fitness and health .</h1>
            <div class="heading--2">Create your free account today.</div>
            <a href="register.php#signup" class="btn">Get started for free</a>
        </div>

    </section>


    <footer class="footer">
        <div class="footer__icon">
           <a href="https://twitter.com/sakshi_sharma__"> <i class="fab fa-twitter foot-icon"></i></a>
           <a href="https://www.facebook.com/people/Sakshi-Sharma/100009192201323"> <i class="fab fa-facebook-f foot-icon"></i></a>
           <a href="https://www.instagram.com/sakshi.sharma_._/"> <i class="fab fa-instagram foot-icon"></i></a>
           <a href="https://www.linkedin.com/in/sakshi-sharma-b72121173/"> <i class="fas fa-envelope foot-icon"></i></a>
        </div>
        <p>© Copyright 2020 FitFeminine</p>
    </footer>


    <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector(".nav").style.top = "0";
            } else {
                document.querySelector(".nav").style.top = "-100%";
            }
            prevScrollpos = currentScrollPos;
        }
    </script>

</body>

</html>
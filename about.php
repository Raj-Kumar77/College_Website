<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="img/pdm.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>About Us</h1>
    </section>

    <!-- About Us Content -->

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We are haryana's largest university</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit molestiae nulla fugiat expedita, illum omnis saepe. Recusandae ut labore fugiat sunt ullam, dolor hic, excepturi omnis doloribus unde accusamus saepe quis itaque quo reprehenderit voluptates, earum modi quasi dolore quia. Odio aut possimus eos magnam officia rem, assumenda cumque ipsam?</p>
                <a href="#" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="img/about.jpg" alt="">
            </div>
        </div>
    </section>
    
    

    <!-- Footer -->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis maxime reiciendis nostrum. Expedita quisquam consequatur odit<br> nisi doloremque maxime distinctio reiciendis quidem voluptatem ad!</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Raj</p>
    </section>



    <!------------- JavaScript for Toggle Menu --------------->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>
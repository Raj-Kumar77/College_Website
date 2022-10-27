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
        <h1>Contact Us</h1>
    </section>

    <!-- Contact Us -->

    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.076116916885!2d76.88759021456092!3d28.6873695883488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0b8bdd0d4dbd%3A0x676590a4f8ccce18!2sPDM%20University!5e0!3m2!1sen!2sin!4v1648460464325!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Banglore, Karnataka, IN</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+1 0123456789</h5>
                        <p>Monday to Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>xyz@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="mail" placeholder="Enter your email" required>
                    <input type="text" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" name="message" placeholder="Message" required></textarea>
                    <button type="submit" name="submit" class="hero-btn red-btn">Send Message</button>
                    <button class="hero-btn red-btn"><a href="display.php" style="text-decoration:none;color:#f44336">View</a></button>
                </form>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis maxime reiciendis nostrum.
            Expedita quisquam consequatur odit<br> nisi doloremque maxime distinctio reiciendis quidem voluptatem ad!
        </p>
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


<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $insertquery = "insert into message (name,email,subject,message) values ('$name','$email','$subject','$message')";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("Data Insrted Properly");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data Not Inserted");
        </script>
        <?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="header">
        <div class="info">
            <span><i class="fa fa-phone"></i>&nbsp;&nbsp;110 259 456</span>&nbsp;&nbsp;&nbsp;&nbsp;
            <span><i class="fa fa-envelope"></i>&nbsp;&nbsp; xyz@gmail.com</span>
        </div>
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
                    <li><a href="apply.php" class="hero-btn" style="padding: 5px 25px;border-radius:3px">APPLY</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Haryana's Biggest University</h1>
            <p>Making website is now one of the easiest thing in the world. You just need to learn HTML, CSS,<br>
                Javascript and you are good to go.</p>
            <a href="about.html" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>

    <!-- Course -->

    <section class="course">
        <h1>Courses We Offer</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col wow animate__flash" data-wow-duration="2s">
                <h3>Diploma</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quasi laborum id in deserunt neque
                    similique, aliquam quam nihil aut facere sint facilis veniam sunt doloribus, voluptatibus repellat,
                    distinctio ad.</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quasi laborum id in deserunt neque
                    similique, aliquam quam nihil aut facere sint facilis veniam sunt doloribus, voluptatibus repellat,
                    distinctio ad.</p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quasi laborum id in deserunt neque
                    similique, aliquam quam nihil aut facere sint facilis veniam sunt doloribus, voluptatibus repellat,
                    distinctio ad.</p>
            </div>
        </div>
    </section>
    <!-- Campus -->
    <section class="campus">
        <h1>Our Campus</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, repudiandae.</p>

        <div class="row">
            <div class="campus-col wow animate__rubberBand" data-wow-duration="2s">
                <img src="img/engineering.jpg" alt="">
                <div class="layer">
                    <h3>B.Tech</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/dental.jpg" alt="">
                <div class="layer">
                    <h3>Dental</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/pharmacy.jpg" alt="">
                <div class="layer">
                    <h3>Pharmacy</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Facilities -->

    <section class="facilites">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, et.</p>

        <div class="row">
            <div class="facilites-col">
                <img src="img/libraryy.jpg" alt="">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
            </div>
            <div class="facilites-col">
                <img src="img/gym.jpg" alt="">
                <h3>Well Equipped Gym</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
            </div>
            <div class="facilites-col">
                <img src="img/food.jpg" alt="">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->

    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, alias.</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="img/shubham.png" alt="">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo, natus molestiae odit similique commodi expedita laboriosam dignissimos eveniet. Dicta voluptatibus beatae assumenda omnis nemo.</p>
                    <h3>Shubham Singh</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="img/rajnish.png" alt="">
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem explicabo, natus molestiae odit similique commodi expedita laboriosam dignissimos eveniet. Dicta voluptatibus beatae assumenda omnis nemo.</p>
                    <h3>Rajnish Kumar</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action -->

    <section class="cta">
        <h1>Enroll For Our Various Online Courser<br>Anywhere From The World</h1>
        <a href="contact.html" class="hero-btn">CONTACT US</a>
    </section>

    <!-- Footer -->

    <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perspiciatis maxime reiciendis nostrum. Expedita quisquam consequatur odit<br> nisi doloremque maxime distinctio reiciendis quidem voluptatem ad!</p>
        <div class="icons">
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
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

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
    </script>
</body>

</html>
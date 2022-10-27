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
        <h1>Our Courses</h1>
    </section>

    <!-- Courses -->

    <section class="course">
        <h1>Courses We Offer</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
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

    <!-- Facilities -->

    <section class="facilites">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, et.</p>

        <div class="row">
            <div class="facilites-col">
                <img src="img/mechanical.jpg" alt="">
                <h3>Mechanical Lab</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
            </div>
            <div class="facilites-col">
                <img src="img/dental2.jpg" alt="">
                <h3>Dental Lab</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
            </div>
            <div class="facilites-col">
                <img src="img/mic.jpg" alt="">
                <h3>MIC Lab</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas doloribus, dolores nemo autem dicta
                    laudantium!</p>
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
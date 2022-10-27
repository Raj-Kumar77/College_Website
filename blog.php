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
        <h1>Our Certificate & Online Programs For 2021</h1>

    </section>

    <!-- Blog Page Content -->

    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <img src="img/graduation.jpg" alt="">
                <h2>Our Certificate & Online Programs For 2022</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil ab ipsum saepe necessitatibus tenetur
                    quidem sint praesentium voluptatem mollitia, ratione esse voluptate expedita laboriosam quod
                    nesciunt doloremque deserunt debitis porro.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore maiores minus et laborum voluptatem
                    aperiam. Porro sit nulla cum asperiores aliquid at, animi, aut explicabo accusantium accusamus
                    beatae voluptatum similique perferendis voluptate soluta. Alias modi, veniam nemo eum sapiente
                    repellendus. Reprehenderit cum eveniet ratione praesentium nam quis aspernatur consectetur tempore.
                </p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam iure quas aliquam reiciendis
                    perspiciatis rerum cum aut repellendus vel soluta necessitatibus enim facere architecto, autem sed
                    cumque nostrum culpa hic fuga modi suscipit, obcaecati voluptatum ex sunt.</p>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero tenetur assumenda impedit aspernatur
                    ratione alias perferendis adipisci itaque. Voluptatum, quia vero. Omnis aliquid enim asperiores nam,
                    magnam nostrum!</p>

                    <div class="comment-box">
                        <h3>Leave a comment</h3>
                        <form action="" class="comment-form">
                            <input type="text" placeholder="Enter Name">
                            <input type="email" placeholder="Enter Email">
                            <textarea rows="5" placeholder="Your Comment"></textarea>
                            <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                        </form>
                    </div>
            </div>
            <div class="blog-right">
                <h3>Post Categories</h3>
                <div>
                    <span>Business Analytics</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Science</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>34</span>
                </div>
                <div>
                    <span>AutoCAD</span>
                    <span>42</span>
                </div>
                <div>
                    <span>Journalism</span>
                    <span>22</span>
                </div>
                <div>
                    <span>Commerce</span>
                    <span>30</span>
                </div>
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
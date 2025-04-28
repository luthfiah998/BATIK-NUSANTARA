<?php 

    include 'includes/connection.php'; 

    $con = openCon(); // open connection
    $dbSelected = $con->select_db('tokoonline'); // select database
    if (!$dbSelected) {
        die("Can\'t use test_db : " . mysql_error());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="public/images/logo/LOGO.png">
    <link rel="stylesheet" href="public/css/main.css">

    <title>Batik Nusantara</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <!-- NAV -->
        <nav>
            <div class="container navbar">
                <div class="navbar-left">
                    <div class="navbar-logo">
                        <a href="#"><img src="public/images/logo/LOGO.png" alt="logo"></a>
                    </div>
                    <div class="overlay">
                        <ul class="menu">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="online/index.php">shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faqs.php">faq</a>
                            </li>
                            <div class="sign-in">
                                <button class="btn-signIn"><a href="online/masuk.php">sign in</a></button>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="navbar-button icon1">
                        <a href="online/keranjang.php"></a>
                    </div>
                    <div class="navbar-button icon2">
                        <a href="online/masuk.php"></a>
                    </div>
                    <div class="navbar-button hamburger">
                    </div>
                </div>
            </div>
        </nav>

        <!-- HERO SECTION -->
        <section class="hero">
            <div class="container">
                <div class="heading">
                    <h1>BATIK NUSANTARA</h1>
                </div>
                <div class="bottom">
                    <h2></h2>
                    <p>Batik, warisan budaya penuh makna yang mengajarkan kita tentang kesabaran, kreativitas, dan kebanggaan akan jati diri bangsa Indonesia.</p>
                    <div class="explore">
                        <button class="btn-explore"><a class="nav-link" href="online/index.php">Jelajahi</a></button>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- ABOUT US -->
    <section class="about-us">
        <h2 class="heading">about us</h2>
        <div class="container">
            <div class="left">
                <h2>BATIK NUSANTARA</h2>
                <p>Terinspirasi dari kekayaan budaya Indonesia, kami mempersembahkan Batik Nusantara sebagai warisan yang abadi. Setiap helai kain yang kami hadirkan adalah cerita tentang tanah air — tentang tangan-tangan terampil, tentang warna-warna yang merayakan alam, tentang tradisi yang dijaga turun-temurun.</p>
                <img src="public/images/pics/Batik Traditional Vibes.jpeg" alt="">
            </div>
            <div class="right">
                <img src="public/images/pics/Batik, kain bermotif khas Indonesia yang gak akan….jpeg" alt="">
                <div class="read">
                </div>
            </div>
        </div>
    </section>

    
    <!-- COLLECTION -->
    <section class="collection">
        <div class="container">
            <div class="heading">
                <h2>Macam Batik</h2>
                <button class="btn-explore2"><a class="nav-link" href="online/index.php">Jelajahi & Belanja</a></button>
            </div>
            <div class="carousel">
                <?php
                    $count_query = "SELECT count(*) FROM produk";
                    $count_result = $con->query($count_query);
                    $count_fetch = mysqli_fetch_array($count_result);
                    $postCount = $count_fetch;
                    $limit = 8;

                    $query = "SELECT * FROM `produk` ORDER BY `produk_id` ASC LIMIT 0, " . $limit;  
                    $result = $con->query($query);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_array()){ 
                            echo "<div class=\"slides item1\">";
                                $img = "online/gambar/produk/" . $row['produk_foto1'];
                                echo "<img src=$img alt=\"\" class=\"card__image\" />";
                                echo "<div class=\"details\">";
                                    echo "<p class=\"item-title\">" . $row['produk_nama'] . "</p>";
                                    echo "<p class=\"price\">Rp. " . $row['produk_harga'] . "</p>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }

                ?>
                
                <div class="next-prev">
                    <a class="prev" onclick="plusSlides(-1)">
                        <img src="public/images/icons/prev.png" alt="">
                    </a>
                    <a class="next" onclick="plusSlides(1)">
                        <img src="public/images/icons/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section class="gallery">
        <div class="container">
            <div class="pic">
                <img src="public/images/pics/1.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/6.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/pic49.jpg" alt="">
                </div>
            <div class="pic">
                <img src="public/images/pics/14.jpeg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/pic15.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/10.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/17.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/8.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/18.jpg" alt="">
            </div>
            <div class="pic">
                <img src="public/images/pics/19.jpg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/20.jpeg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/21.jpeg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/22.jpeg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/23.jpeg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/24.jpeg" alt="">
            </div>
            <div class="pic">
            <img src="public/images/pics/25.jpeg" alt="">
        </div>
    </section>

    <?php include 'includes/footer.php' ?>

    <?php
        closeCon($con); // close connection
    ?>

    <script src="public/js/app.js"></script>
    <script src="public/js/hamburger.js"></script>
</body>
</html>

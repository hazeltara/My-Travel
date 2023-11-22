<?php
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Bricolage+Grotesque&family=PT+Serif:ital@1&family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <!--header-->
        <header>
            <a href="#" class="logo">YUK JALAN!</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#category">Category</a></li>
                <li><a href="#destination">Destination</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>
        </header>

    <!--Home section-->
        <section class="home" id="home">
            <div class="home-text">
                <h1>Find Your Destination</h1>
                <p>Temukan berbagai macam wisata menarik yang tersebar di berbagai wilayah Indonesia</p>
                <a href="#category" class="home-btn">Let's Go Now</a>
            </div>
        </section>

    <!--category section-->
        <section class="category" id="category" ">
            <div class="text">
                <h2>Berbagai Macam Pilihan <br> Tempat WISATA MENARIK!</h2>
            </div>

            <div class="row-items ">
                <div class="category-box">
                    <div class="category-img">
                        <img src="bx-landscape.png" onclick="location.href='alam.html'">
                    </div>
                     <h4>Wisata Alam</h4>
                     <p>Jelajahi berbagai tempat <br> yang memanjakan mata</p>
                </div>

               <div class="category-box">
                    <div class="category-img">
                        <img src="bx-restaurant.png" onclick="location.href='kuliner.html'">
                    </div>
                     <h4>Wisata Kuliner</h4>
                     <p>Rasakan kuliner khas <br> dari berbagai Daerah</p>
                </div>

                <div class="category-box">
                    <div class="category-img">
                        <img src="bx-cart.png"  onclick="location.href='belanja.html'">
                    </div>
                     <h4>Wisata Belanja</h4>
                     <p>Berbelanja dengan suasana <br> Modern maupun Tradisional</p>
                </div>

                <div class="category-box">
                    <div class="category-img">
                        <img src="bxs-castle.png"  onclick="location.href='misteri.html'">
                    </div>
                     <h4>Wisata Misteri</h4>
                     <p>Rasakan suasana penuh Mistis <br> di berbagai tempat</p>
                </div>
            
            </div>
        </section>

    <!--destination section-->
    <section class="destination" id="destination">
        <div class="title">
            <h2>TEMPAT WISATA TERFAVORIT!</h2>
        </div>

        <div class="destination-content">
            <div class="col-content">
                <img src="lawangsewu.jpg">
                <h5>Lawang Sewu</h5>
                <p>SEMARANG, JAWA TENGAH</p>
            </div>

            <div class="col-content">
                <img src="komodo.jpg">
                <h5>Pink Beach</h5>
                <p>LOMBOK TIMUR, NTB</p>
            </div>

            <div class="col-content">
                <img src="gunung bromo.jpg">
                <h5>Gunung Bromo</h5>
                <p>PASURUAN, JAWA TIMUR</p>
            </div>

            <div class="col-content">
                <img src="candi prambanan.jpg">
                <h5>Candi Prambanan</h5>
                <p>YOGYAKARTA, JAWA TENGAH</p>
            </div>

            <div class="col-content">
                <img src="gwk bali.jpg">
                <h5>Garuda Wisnu Kencana</h5>
                <p>BADUNG, BALI</p>
            </div>

            <div class="col-content">
                <img src="safari.jpg">
                <h5>Taman Safari Indonesia Bogor</h5>
                <p>BOGOR, JAWA BARAT</p>
            </div>
        </div>
    </section>

    <ol>
    <?php
    $comments = mysqli_query($db, "SELECT * FROM komentar ORDER BY id DESC LIMIT 3");

    $records = mysqli_num_rows($comments);
    while($row_sections = mysqli_fetch_array($comments))
    {
        echo $row_sections['name'];
        echo $row_sections['email'];
        echo $row_sections['komentar'];
        echo "<br>";
    }
    ?>
    </ol>

    <!--feedback-->
    <section class="feedback" id="feedback">
        <div class="comment-box">
            <h2>Give Your Feedback</h2>
            <form action="feedback.php" method="post">
                <input type="text" name="nama" placeholder="Full Name...">
                <input type="email" name="email" placeholder="Email Address...">
                <textarea name="comment" placeholder="Type Your Comment..."></textarea>
                <button type="submit" name="submit">Submit Comment</button>
            </form>
        </div>
    </section>
    <!--link to js-->



    <script src="script.js"></script>
    
</body>
</html>
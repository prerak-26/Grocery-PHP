<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
    <style><?php include 'assets/css/styles.css'; ?></style>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Shop Online</title>
</head>
<body>

    <?php include 'assets/php/dbconnect.php';?>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">ShopOnline</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#special" class="nav__link">Special</a>
                    </li>
                    <li class="nav__item">
                        <a href="#discover" class="nav__link">Discover</a>
                    </li>
                    <li class="nav__item">
                        <a href="#place"><i class="ri-user-2-fill nav__icon nav__link">Login</i></a>
                    </li>
                </ul>

                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name">Dark mode</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
                
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            
        <?php 
         $sql = "SELECT * FROM `home`"; 
         $result = mysqli_query($conn, $sql);
         for($i=0;$row = mysqli_fetch_assoc($result);$i++){
            $imgpath[$i] = $row['image'];
         };
         ?>

         <?php echo '<img src="'.$imgpath[0].'" alt="" class="home__img">'; ?>

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">You deserve the Best!</span>
                    <h1 class="home__data-title"><b>Shop</b> <br>on a<br><b>Budget</b></h1>
                    <a href="components/selected.html" class="button">Explore</a>
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">Top most Selected</span>
                        <a href="components/selected.html" class="button button--flex button--link home__info-button">
                            More <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__info-overlay">
                        <?php echo '<img src="'.$imgpath[1].'" alt="" class="home__info-img">';?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<!--     ================================== Info__model ==================================== -->
    <section class="section">
        <div class="info__model container grid">
            <div class="info__container">
                <div class="info__box">
                    <h2 class="section__title">Welcome to our new site, see what's new.</h2>
                    <p class="info__description">From shopping the catalogue online to finding products and checking out – we've upgraded
                    to make your shop easier.</p>
                </div>
                <div class="info__button__section">
                    <a href="components/selected.html" class="info__button">Log in or sign up</a>
                    <a href="components/selected.html" class="info__button">Discover what's new</a>
                </div>
            </div>
        </div>
    </section>

            <!--==================== DISCOVER ====================-->
        <section class="discover section" id="discover">
            <h2 class="section__title">Discover the most <br>Attractive Offers</h2>
                <div class="grid__wrapper grid container">
                <?php
                        $sql = "SELECT * FROM `offercard`"; 
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['offer_id'];
                            $offercardpath = $row['offerimgpath'];
                            echo '<div class="grid__img__box">
                                    <a href="assets/php/offers.php?offerid='.$id.'"><img src="'.$offercardpath.'" alt="" class="grid__img"></a>
                                </div>';
                        }
                    ?> 
                </div>
        </section>

<!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

            <div class="experience__container container grid">
                <div class="experience__content grid">
                <?php
                        $sql = "SELECT * FROM `experienceinformation`"; 
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $experience_num = $row['experience_number'];
                            $experience_des = $row['experience_description'];
                            echo '<div class="experience__data">
                                    <h2 class="experience__number">'.$experience_num.'</h2>
                                    <span class="experience__description">'.$experience_des.'</span>
                                </div>';
                        }
                    ?>
                </div>

                <div class="experience__img grid">
                <?php
                        $sql = "SELECT * FROM `experienceimage`"; 
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $experience_img_path = $row['experience_imgpath'];
                            $experience_img_class = $row['class_name'];
                            echo '<div class="experience__overlay">
                                    <img src="'.$experience_img_path.'" alt="" class="'.$experience_img_class.'">
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </section>
    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line scrollup__icon"></i>
    </a>

    <script><?php include "assets/js/scrollreveal.min.js"; ?></script>
    <script><?php include "assets/js/main.js"; ?></script>
</body>
</html>
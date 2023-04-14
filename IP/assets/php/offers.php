<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <style>
            <?php include '../css/styles.css';
            ?>
        </style>

        <title>Offers</title>
    </head>

    <body>
    <?php include 'dbconnect.php';?>

    <?php
                $url_generate = 0;
                $item_array_id = [];
                if(isset($_POST['add'])){
                    echo 'hello';
                    if(isset($_SESSION['cart'])){
                        $item_array_id = array_column($_SESSION['cart'],"product_id");
                        $url_generate = http_build_query($item_array_id); 
                        if(in_array($_POST['product_id'],$item_array_id)){
                            echo "<script>alert('already added')</script>";
                            // $url_generate = http_build_query($item_array_id);
                        }else{
                            $count = count($_SESSION['cart']);
                            $item_array = array(
                                'product_id' => $_POST['product_id']
                            );

                            $_SESSION['cart'][$count] = $item_array;    
                        }
                        
                    }else{
                        $iteam_array = array(
                            'product_id' => $_POST['product_id']
                        );
                        $_SESSION['cart'][0] = $iteam_array;
                    }
                }
                if(isset($_POST['showcart'])){
                    if(isset($_SESSION['cart'])){
                        $url_generate = http_build_query($item_array_id); 
                    }else{
                        echo "<script>alert('No item added')</script>";
                    }
                }
            ?>

    <header class="search__header">
        <nav class="search__nav">
            <div class="add_to_cart">
            
               <?php 
    
               echo '<button class="" type="submit" name="showcart">
               <a href="#'.$url_generate.'"></button>'; ?> 
                    <i class="ri-shopping-cart-2-line"></i>
                    <?php

                            if (isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo '<span id="cart_count" class="">'.$count.'</span>';
                            }else{
                                echo '<span id="cart_count" class="">0</span>';
                            }
                            ?>
                </a> 
            </div>
            <div class="search__nav__menu">
                <form>
                    <i class="ri-search-eye-line"></i>
                    <input type="text" name="" id="search__item" placeholder="Search Products" onkeyup="search()">
                </form>
            </div>
        </nav>
    </header>

        <main class="main gallery__section">

            <!--================== gallery ========================-->
            
           <!-- <?php echo '<button class="" type="submit" name="showcart">submit</button>'; ?> -->

            <div class="gallery__container container grid">
            <?php
                        $sql = "SELECT * FROM `addcart`"; 
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['product_id'];
                            $name = $row['product_name'];
                            echo '<div class="gallery__block">
                            <form action="offers.php" method="post">
                                <div class="gallery__imgblock">
                                    <img src="../img/halfsoup.png" alt="" class="gallery__img">
                                </div>
                                <div class="offer_item_description">
                                    <div class="offer_item_name"><p>'.$name.'</p></div>
                                    <div class="offer_item_price">
                                        <div class="offer_item_newprice">
                                            <h3>$1.89</h3>
                                        </div>
                                        <div class="offer_item_saveprice">Save $1.89</div>
                                    </div>
                                    <i class="ri-star-half-s-line offer__item__rating"><p>4.5</p></i>
                                </div>
                                <button class="gallery__button" type="submit" name="add">
                                     <i class="ri-shopping-cart-2-line gallery_addcart"> add cart</i>
                                </button>
                                <input type="hidden" name="product_id" value="'.$id.'">
                                <div class="offer__label">
                                    <p>New</p>
                                </div>
                            </form>
                        </div>';
                        }
                    ?>
            </div>
        </main>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!-- 
            <?php include 'dbconnect.php';?>
            <?php
                $id = $_GET['offerid'];
                $sql = "SELECT * FROM `sample` WHERE offer_id = $id"; 
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $title = $row['text'];
                    echo '<h1>'.$title.'</h1>';
                }
            ?> -->
        <script><?php include "../js/offers.js"; ?></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>

</html>
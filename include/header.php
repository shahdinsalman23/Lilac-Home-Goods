<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>


    <!-- Header Section Start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-top-txt">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <h3>Lilac Home Goods</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="main-menu"><a href="shop.php">Shop <i class='bx bxs-down-arrow'></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                </ul>
                            </li>
                            <li class="main-menu"><a href="products.php">Products <i class='bx bxs-down-arrow'></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                </ul>
                            </li>
                            <li class="main-menu"><a href="#">Categories <i class='bx bxs-down-arrow'></i></a>
                                <ul class="dropdown">
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                    <li><a href="#">Lorem Ipsum</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-end">
                        <a href="contact.php" class="themebtn">Order Now</a>
                        <div class="header-user-icon">
                            <a href="#"><i class='bx bx-shopping-bag'></i></a>
                            <a href="#"><i class='bx bx-user'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
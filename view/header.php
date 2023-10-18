<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Bootie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Bootie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
   
    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="" aria-hidden="true">Daily</span></a></h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
  <li class="active">
    <a href="index.php">Trang chủ</a>
  </li>
  <li>
    <a href="index.php?act=about">Giới thiệu</a>
  </li>
  <li>
    <a href="?action=sanpham&amp;product_id=">Sản phẩm</a>
    <ul class="sub-menu">
      <?php foreach ($categories as $category) : ?>
        <li>
          <a href="?category_id=<?php echo $category['categoryID']; ?>">
            <?php echo $category['categoryName']; ?>
          </a>
          <ul class="menu_2">
            <?php
            if (isset($allproduct)) {
              foreach ($allproduct as $product) {
                if ($product['categoryID'] == $category['categoryID']) {
                  echo '<li>';
                  echo '<a href="?action=view_product&product_id=' . $product['productID'] . '">';
                  echo $product['productName'];
                  echo '</a>';
                  echo '</li>';
                }
              }
            }
            ?>
          </ul>
        </li>
      <?php endforeach; ?>
    </ul>
  </li>
  <li>
    <a href="index.php?act=lienhe">Liên hệ</a>
  </li>
  <li>
    <a href="index.php?act=viewcart">Giỏ hàng</a>
  </li>
</ul>
                </nav>
            </div>
        </header>
    </div>

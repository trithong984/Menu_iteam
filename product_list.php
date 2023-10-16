<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Single Page</li>
    </ol>
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <div class="row">
                <div class="side-bar col-lg-4">
                    <div class="left-side my-4">
                        <h3 class="sear-head">Danh mục</h3>
                        <ul class="w3layouts-box-list">
                        <?php
foreach ($categories as $category) {
    echo "<ul>";
    echo "<a href='?category_id={$category['categoryID']}'>{$category['categoryName']}</a>";

    foreach ($allproduct as $product) {
        if ($product['categoryID'] == $category['categoryID']) {
            echo "<li><a href='?action=view_product&product_id={$product['productID']}'>{$product['productName']}</a></li>";
        }
    }
    echo "</ul>";
}
?>
                          
                        </ul>
                    </div>
                    <div class="left-side">
                    </div>
                </div>
                <div class="left-ads-display col-lg-8">
                    <div class="row">
                        <?php 
                            foreach ($products as $product) {
                                echo '<div class="col-md-4 product-men">
                                <div class="product-shoe-info shoe text-center">
                                    <div class="men-thumb-item">
                                    <img src="./images/'.$product['img'].'" class="img-fluid" alt="">
                                      
                                        <span class="product-new-top">New</span>
                                    </div>
                                    <div class="item-info-product">
                                        <h4>
                                            <a href="product_view.php">'.$product['productName'].'</a>
                                        </h4>
    
                                        <div class="product_price">
                                            <div class="grid-price">
                                                <span class="money">'.$product['listPrice'].'</span>
                                            </div>
                                        </div>
                                        <ul class="stars">
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                            <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
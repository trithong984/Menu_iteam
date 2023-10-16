<main>
    <aside>
        <h1>Categories</h1>
        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($categories as $category) : ?>
                <li>
                    <a href="?category_id=<?php 
                              echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
    <section>
        <h1><?php echo $name; ?></h1>
        <div id="left_column">
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
    </section>
</main>
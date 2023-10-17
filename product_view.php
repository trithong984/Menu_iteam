<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="?action=list_products">Home</a>
        </li>
        <li class="breadcrumb-item active">Single Page</li>
    </ol>
<main>
    <section>
                <div class="right-ads-display col-lg-8">
                    <div class="row">
                    <?php 
                                echo
                        '<div class="desc1-right col-md-6">
                        <img src="./images/'.$product['img'].'" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 pl-lg-4">
                        <h1><div class="title_name">'.$name.'</div></h1>
                            <h5>Price :<span class="money">'.$product['listPrice'].'</span></h5>
                            <div class="available mt-3">
                                <form action="#" method="post" class="w3layouts-newsletter">
                                    <input type="email" name="Email" placeholder="Enter your email..." required="">
                                    <button class="btn1">Check</button>

                                </form>
                                <span><a href="#">login to save in wishlist </a></span>
                                <p>Lorem Ipsum has been the industrys standard since the 1500s. Praesent ullamcorper dui turpis.. </p>
                            </div>';
                        ?>
                            <div class="share-desc">
                                <div class="share">
                                    <h4>Share Product :</h4>
                                    <ul class="w3layouts_social_list list-unstyled">
                                        <li>
                                            <a href="#" class="w3pvt_facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#" class="w3pvt_twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="w3pvt_dribble">
                                                <span class="fa fa-dribbble"></span>
                                            </a>
                                        </li>
                                        <li class="ml-2">
                                            <a href="#" class="w3pvt_google">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row sub-para-w3layouts mt-5">
                        <h3 class="shop-sing">Lorem ipsum dolor sit amet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        <p class="mt-3 italic-blue">Consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
                    </div>
                    </div>
                </div>
                    </div>
                </div>
    </section>
</main>
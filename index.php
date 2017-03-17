<?php include 'inc/head.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
$categories = array('Furniture', 'Kitchen & Dining', 'Bed & Bath', 'Gardening', 'Pools & Spas', 'Bathroom Fittings', 'Home Decor', 'Storage Solutions', 'Lights');
?>
<div class="container home-container main-container">
    <div id="main-menu" class="home-categories col-12 mobile-hide">
        <ul>
            <?php foreach($categories as $category) { ?>
                <li>
                    <a class="" href="/category-landing.php"><?php echo $category ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="top-message notice col-12">
        <p>Welcome to MyDeal.com.au, one of Australia's favourite, most trusted online retailers.</p>
        <a class="hide-message fa fa-close" title="Hide Message"></a>
    </div>
    <div class="hero">
        <div class="hero-banner flexslider" id="main-homepage-slider">
            <ul class="banner-home slides">
                <li>
                    <div class="container">
                        <div class="col-6 tablet-col-8 mobile-col-12">
                            <a href="/category-landing.php" title="New Year New Decor">
                                <img alt="New Year New Decor" src="img/banner-img-1.jpg" />
                            </a>
                        </div>
                        <div class="col-3 tablet-col-4 mobile-hide">
                            <a href="/category-landing.php" title="Pendant Lights">
                                <img alt="Pendant Lights" src="img/banner-img-2.png" />
                            </a>
                        </div>
                        <div class="col-3 mobile-hide tablet-hide">
                            <a href="/category-landing.php" title="Room Dividers">
                                <img alt="Room Dividers" src="img/banner-img-3.png" />
                            </a>
                            <a href="/category-landing.php" title="Side Tables">
                                <img alt="Side Tables" src="img/banner-img-4.png" />
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/category-landing.php" title="The comfort zone - Entertainment Units">
                        <img alt="The comfort zone - Entertainment Units" src="img/banner-img-large.jpg" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="home-messages mobile-hide">
            <div class="container">
                <div class="col-4">
                    <div class="static-cta static-cta-1">
                        <i class="icon delivery"></i>
                        <div>
                            <h5 class="title">Fast Deliveries</h5>
                            <p>Delivered to your door</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="static-cta static-cta-2">
                        <i class="icon products"></i>
                        <div>
                            <h5 class="title">OVER 20,000 PRODUCTS</h5>
                            <p>From a range of categories</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="static-cta static-cta-3">
                        <i class="icon secure"></i>          
                        <div>          
                            <h5 class="title">100% SECURE TRANSACTIONS</h5>
                            <p><span>Secured by GeoTrust</span><sup>®</sup></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="col col-hero-ctas">
            <a href="/full-hd-waterproof-action-camera" class="cta-todays-deal" rel="nofollow"><img alt="" src="https://s3-ap-southeast-2.amazonaws.com/media1.mydeal.com.au/44124/SportsCamera_DealPic.jpg" /></a>
            <img alt="" class="ribbon-todays-deal" src="https://s3-ap-southeast-2.amazonaws.com/media1.mydeal.com.au/theme/ribbon-deal.png" />
            <div class="today-deal-content clearfix">
                <h3 class="title-todays-deal">FLASH SALE: Full HD Waterproof Action Cameras</h3>
                <div class="clearfix">
                    <div class="fl col-half">
                            <span class="was">RRP</span>
                            <span class="strike">$120.00</span>
                        <span class="now">Now $45</span>
                    </div>
                    <div class="fl col-half tar">
                        <a href="/full-hd-waterproof-action-camera" class="more">View Deal</a>
                    </div>
                </div>
            </div>
            <div id="CountdownTimer" class="countdown" style="display: none;">
                <strong><span id="hours"></span>h <span id="mins"></span>m <span id="secs"></span>s</strong> Remaining
            </div>
        </div> -->
        <div class="col popular-categories">
            <div class="wrapper">
                <h2>Popular Categories</h2>
                <a href="#" class="btn-see-all">See All</a>

                <div class="flexslider flexslider-custom-navigation-buttons" id="popular-categories-slides">
                    <ul class="slides">
                        <li>
                            <img src="/img/bedhead.png" />
                            <h5>Bed Frames</h5>
                        </li>
                        <li>
                            <img src="/img/ciabatta.png" />
                            <h5>Breadmakers</h5>
                        </li>
                        <li>
                            <img src="/img/clock.png" />
                            <h5>Clocks</h5>
                        </li>
                        <li>
                            <img src="/img/ciabatta.png" />
                            <h5>Coffee Machines</h5>
                        </li>
                        <li>
                            <img src="/img/clock.png" />
                            <h5>Curtain</h5>
                        </li>
                        <li>
                            <img src="/img/ciabatta.png" />
                            <h5>Caption 6</h5>
                        </li>
                        <li>
                            <img src="/img/clock.png" />
                            <h5>Caption 7</h5>
                        </li>
                        <li>
                            <img src="/img/ciabatta.png" />
                            <h5>Caption 8</h5>
                        </li>
                        <li>
                            <img src="/img/bedhead.png" />
                            <h5>Caption 9</h5>
                        </li>                        
                    </ul>
                </div>
            </div>            
        </div>

        <div class="col deals">
            <div class="wrapper">
                <div class="flexslider-custom-navigation-buttons" id="deals-slides">
                    <ul class="slides">
                        <li>
                            <img src="/img/3-promo-2.png" />
                            <div class="details-wrap">
                                <h5>Today's Deal</h5>
                                <div class="description">5-Day set of Earrings w/ Genuine Swarovski Crystals</div>
                                <div class="price-wrap">$209.00 <span class="rrp">RRP $280.00</span></div>
                                <div class="time-remaining">22h 16m 31s Remaining</div>
                            </div>                        
                        </li>
                         <li>
                            <img src="/img/3-promo-3.png" />
                            <div class="details-wrap">
                                <h5>Today's Deal</h5>
                                <div class="description">5-Day set of Earrings w/ Genuine Swarovski Crystals</div>
                                <div class="price-wrap">$209.00 <span class="rrp">RRP $280.00</span></div>
                                <div class="time-remaining">22h 16m 31s Remaining</div>
                            </div>                        
                        </li>
                         <li>
                            <img src="/img/3-promo-2.png" />
                            <div class="details-wrap">
                                <h5>Today's Deal</h5>
                                <div class="description"><a href="#">5-Day set of Earrings w/ Genuine Swarovski Crystals</a></div>
                                <div class="price-wrap">$209.00 <span class="rrp">RRP $280.00</span></div>
                                <div class="time-remaining">22h 16m 31s Remaining</div>
                            </div>                        
                        </li>
                         <li>
                            <img src="/img/3-promo-3.png" />
                            <div class="details-wrap">
                                <h5>Today's Deal</h5>
                                <div class="description">5-Day set of Earrings w/ Genuine Swarovski Crystals</div>
                                <div class="price-wrap">$209.00 <span class="rrp">RRP $280.00</span></div>
                                <div class="time-remaining">22h 16m 31s Remaining</div>
                            </div>                        
                        </li>
                         <li>
                            <img src="/img/3-promo-2.png" />
                            <div class="details-wrap">
                                <h5>Today's Deal</h5>
                                <div class="description">5-Day set of Earrings w/ Genuine Swarovski Crystals</div>
                                <div class="price-wrap">$209.00 <span class="rrp">$280.00</span></div>
                                <div class="time-remaining">22h 16m 31s Remaining</div>
                            </div>                        
                        </li>

                    </ul>
                </div>
            </div>
        </div>   

        <div class="col featured-category">
            <div class="wrapper">
                <h2>Featured Category</h2>
                <div class="container">
                    <div class="col-6 mobile-col-12">
                        <div class="category-wrapper">
                            <div class="main-image-wrapper">
                                <img src="/img/feat-cat-lrg-1.png" />
                                <div class="extra-images-wrapper">
                                    <img src="/img/feat-cat-sm-left-1.png" />
                                    <img src="/img/feat-cat-sm-right-1.png" />
                                </div>
                            </div>
                            <div class="details-wrapper">
                                <h2>Woman's Fashion</h2>
                                <a href="#" class="btn-see-all">See All</a>
                                <p>Proin semper nunc vitae luctus lacinia. Mauris fermentum at odio vel iaculis. Aenean sit amet ullamcorper est. Etiam viverra sed magna in dignissim. Nulla tempus nec turpis eget pharetra. Pellentesque metus odio, mollis a leo sed, varius lacinia justo. Ut lacus elit, malesuada hendrerit pretium a, tincidunt quis lacus. Morbi dapibus varius laoreet. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mobile-col-12">
                        <div class="category-wrapper">
                            <div class="main-image-wrapper">
                                <img src="/img/feat-cat-lrg-1.png" />
                                <div class="extra-images-wrapper">
                                    <img src="/img/feat-cat-sm-left-1.png" />
                                    <img src="/img/feat-cat-sm-right-1.png" />
                                </div>
                            </div>
                            <div class="details-wrapper">
                                <h2>Bedroom</h2>
                                <a href="#" class="btn-see-all">See All</a>
                                <p>Nunc rutrum est non malesuada lobortis. Phasellus a euismod enim. Nam placerat lacus at suscipit convallis. Vestibulum pellentesque efficitur placerat. Curabitur dapibus malesuada nulla ac rhoncus. </p>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>    

        <div class="col hot-deals">     
            <div class="wrapper">
                <h2>Hot Deals</h2>
                <a href="#" class="btn-see-all">See All</a>               
                <div class="flexslider flexslider-custom-navigation-buttons" id="hot-deals-slides">
                    <ul class="slides">
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping not-available"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> 

        <div class="col one-stop-shop-blurb">
            <div class="col-6 mobile-col-9">
                <p class="blurb">With over 20,000 products from a range of categories, MyDeal is your one stop shop</p>
            </div>
        </div>

        <div class="col more-categories">
            <div class="wrapper">
                <h2>More Categories</h2>
                <div class="flexslider flexslider-custom-navigation-buttons" id="more-categories-slider">
                    <ul class="slides">
                        <li>
                            <img src="https://placeimg.com/166/166/people" />
                            <h4 class="caption">Mattresses</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">iPhone</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">Coffee Makers</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">Living Room Furniture</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">LCD Television</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">LCD Television</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/tech" />
                            <h4 class="caption">LCD Television</h4>
                        </li>
                        <li>
                            <img src="https://placeimg.com/166/166/nature" />
                            <h4 class="caption">Living Room Furniture</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/architecture" />
                            <h4 class="caption">LCD Television</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/any" />
                            <h4 class="caption">LCD Television</h4>
                        </li>                    
                        <li>
                            <img src="https://placeimg.com/166/166/any" />
                            <h4 class="caption">LCD Television</h4>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>

        <div class="col newsletter-signup">
            <div class="container">
                <div class="col-6 mobile-col-12" id="blurb">
                    Be the first to know about our exclusive special offers
                </div>
                <div class="col-6 mobile-col-12">
                    <form>
                        <div class="newsletter-form-wrap container">
                            <div class="col-9 mobile-col-8">
                                <input type="text" id="txtEmail" name="" placeholder="Email Address" autocomplete="off" />
                            </div>
                            <div class="col-3 mobile-col-4">
                                <input type="submit" id="btnSubmit" class="btn primary" value="Sign Up"  />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col hot-deals">     
            <div class="wrapper">
                <h2>New Arrivals</h2>
                <a href="#" class="btn-see-all">See All</a>               
                <div class="flexslider flexslider-custom-navigation-buttons" id="new-arrivals-slides">
                    <ul class="slides">
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" />
                            </div>
                            <div class="free-shipping not-available"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                        <li>
                            <div class="image-wrapper">
                                <img src="/img/banner-img-2.png" width="160" height="160" style="background-color: red;" />
                            </div>
                            <div class="free-shipping"><img src="/img/free-shipping.png" /></div>
                            <h3>2x Eaton Replica Dining Chairs in Metallic</h3>
                            <div class="price-wrap">$45.50<span class="rrp">$55.90</span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>         

        <div class="col featured-brands">
            <div class="wrapper">
                <h2>Featured Brands</h2>
                <a href="#" class="btn-see-all">See All</a>
                <div class="flexslider flexslider-custom-navigation-buttons" id="featured-brands-slider">
                    <ul class="slides">
                        <li>
                            <a href="#"><img src="/img/brands/gucci.png" /></a>
                        </li>
                        <li>
                            <a href="#coleman"><img src="/img/brands/gucci.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/michael-kors.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/remington.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/tefal.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/gucci.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/gucci.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/coleman.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/michael-kors.png" /></a>
                        </li>
                        <li>
                            <a href="#"><img src="/img/brands/remington.png" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
   

</div>
<?php include 'inc/footer.php';?>
<?php include 'inc/footertags.php';?>

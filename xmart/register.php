<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Xmart - Clean, Minimal eCommerce HTML5 Template </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/preloader.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/backToTop.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/ui-range-slider.css">
   <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
   <link rel="stylesheet" href="assets/css/simple-line-icons.css">
   <link rel="stylesheet" href="assets/css/default.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <style>
      p.success{
         color: green !important;
      }


      p.error{
         color: red;
      }

   </style>
</head>
<body>
   <main>
      <!-- login Area Strat-->
      <section class="login-area pt-100 pb-100">
         <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="basic-login">
                           <h3 class="text-center mb-60">Sign up From Here</h3>

                           <form action="register-check.php" method="post">

                           <?php if (isset($_GET['error'])) { ?>
                           <p class="error"><?php echo $_GET['error']; ?></p>
                           <?php } ?>

                           <?php if (isset($_GET['success'])) { ?>
                           <p class="success"><?php echo $_GET['success']; ?></p>
                           <?php } ?>

                              <label for="name">Full name <span>**</span></label>
                              <input name="name" id="name" type="text" placeholder="Enter Username" />

                              <label for="uname">User name <span>**</span></label>
                              <input name="uname" id="uname" type="text" placeholder="Email username..." />

                              <label for="pass">Password <span>**</span></label>
                              <input name="password" id="pass" type="password" placeholder="Enter password..." />

                              <label for="pass">Confirm Password <span>**</span></label>
                              <input name="re_password" id="pass" type="password" placeholder="Enter confirm password..." />

                              <div class="mt-10"></div>
                              <button type="submit" class="e-btn e-btn-border w-100">Register Now</button>
                              <div class="or-divide"><span>or</span></div>
                              <a href="index.php" class="e-btn e-btn-black e-btn-black-2 w-100">login Now</a>
                           </form>
                           
                     </div>
                  </div>
               </div>
         </div>
      </section>
      <!-- login Area End-->

      <!-- product quick view modal start -->
      <div class="product__modal modal fade" id="exampleModal" aria-hidden="true">
         <div class="modal-dialog product__modal-wrapper modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
               <div class="product__modal-inner d-lg-flex ">
                  <button type="button" class="product__modal-close" data-bs-dismiss="modal" aria-label="Close">
                     <svg viewBox="0 0 22 22">
                        <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                        s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                        C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                     </svg>
                  </button>
                  <div class="product__modal-slider">
                     <div class="product__modal-img">
                        <img src="assets/img/product/quick/quick-1.jpg" alt="">
                        <div class="product__modal-view-details text-center">
                           <a href="product-details.html" class="z-btn z-btn-black w-100">view details <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="product__modal-content">
                     <div class="product__modal-top">
                        <h3 class="product__modal-title">
                           <a href="product-details.html">Ultrabreathe Support Sports Bra</a>
                        </h3>
                     </div>
                     <div class="product__modal-rating">
                        <ul>
                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                           <li><a href="#"><i class="fas fa-star"></i></a></li>
                           <li><a href="#"><i class="far fa-star"></i></a></li>
                        </ul>
                        <a href="#" class="product-review">03 reviews</a>
                     </div>
                     <div class="product__modal-price">
                        <span class="price">$195.00 - $220.00</span>
                     </div>
                     <p>In order to sit comfortably for long periods, people need freedom of movement. The Form rocking chair has a molded plastic shell with a wide, curved seat...</p>
                     <div class="product__modal-color mb-20">
                        <h3>Color: <span>Grey</span></h3>
                        <div class="product__color">
                           <ul>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/product/quick/color/color-1.png" alt="">
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/product/quick/color/color-2.png" alt="">
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/product/quick/color/color-3.png" alt="">
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="unavailable">
                                    <img src="assets/img/product/quick/color/color-4.png" alt="">
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/product/quick/color/color-5.png" alt="">
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <img src="assets/img/product/quick/color/color-6.png" alt="">
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="product__modal-size product__size  mb-40">
                        <h3>Size: <span>S</span></h3>
                        <ul>
                           <li><a href="#">M</a></li>
                           <li><a href="#" class="selected">S</a></li>
                           <li><a href="#">XXL</a></li>
                        </ul>
                     </div>
                     <div class="product__modal-action mb-10">
                        <div class="product__modal-quantity d-sm-flex align-items-center">
                           <div class="product-quantity-form mr-15 mb-10">
                              <form action="#">
                                 <button class="cart-minus"><i class="far fa-minus"></i></button>
                                 <input class="cart-input" type="text" value="1"/>
                                 <button class="cart-plus"><i class="far fa-plus"></i></button>
                              </form>
                           </div>
                           <div class="product__modal-add  mb-10">
                              <a href="#" class="d-flex align-items-center justify-content-center">
                                 <svg viewBox="0 0 22 22">
                                       <g>
                                       <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                       l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                       C18.83,18.71,18.44,19,18,19z"/>
                                       </g>
                                    </svg>
                                 Add to cart
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="product__modal-meta">
                        <span class="sku-wrapper">
                           <span class="meta-title">SKU:</span>
                           <span class="sku">463CS90</span>
                        </span>
                        <span class="categories">
                           <span class="meta-title">Categories:</span>
                           <a href="#">Trousers,</a>
                           <a href="#">Life style </a>
                        </span>
                        <span class="tag">
                           <span class="meta-title">Tags:</span>
                           <a href="#">Designer,</a>
                           <a href="#">Women</a>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- product quick view modal end -->

   </main>

</body>
</html>
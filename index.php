<?php 
if(isset($_POST['submit'])){
    $to = "er.deep.panwar@gmail.com"; // this is your Email address
    $from = $_POST['userEmail']; // this is the sender's Email address
    $first_name = $_POST['userName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['userMsg'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['userMsg'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ridhisidhi Artwares</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/responsive-layouts.css">
   </head>
   <body>
      <header>
         <div class="header-information">
            <div class="top-information-left">
               <div class="office-address">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>Rawat Building, Bagar Chowk, Jodhpur</span>
               </div>
               <div class="office-contact">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <span>+91-1234567890</span>
               </div>
               <div class="office-email">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>support@ridhisidhiartwares.co.in</span>
               </div>
            </div>
            <div class="top-information-right">
               <div class="follow-us-top">Follow us:</div>
               <div class="social-links">
                  <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i>facebook</a>
                  <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i>whatsapp</a>
               </div>
            </div>
         </div>
         <nav class="navbar navbar-default navbar-fixed-top custom-navbar">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html">
                  <img src="images/logo.png" class="img-responsive">
                  </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <a href="distratchpainted-item.html">
                              <li>Distratch Painted Items</li>
                           </a>
                           <a href="assortediron-furniture.html">
                              <li>Assorted Iron Items</li>
                           </a>
                           <a href="assorted-furniture.html">
                              <li>Assorted Items</li>
                           </a>
                           <a href="boxes-furniture.html">
                              <li>Boxes</li>
                           </a>
                           <a href="assortedwooden-furniture.html">
                              <li>Assorted Wooden Items</li>
                           </a>
                           <a href="bedsides-furniture.html">
                              <li>Bed Sides</li>
                           </a>
                           <a href="chesters-furniture.html">
                              <li>Chesters</li>
                           </a>
                           <a href="storagealmirah-furniture.html">
                              <li>Storage Almirah</li>
                           </a>
                           <a href="tibetianpainted-furniture.html">
                              <li>Tibetian Painted Furniture</li>
                           </a>
                           <a href="woodensideboards-furniture.html">
                              <li>Wooden Sideboards</li>
                           </a>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </header>
      <section class="web-banner">
         <div class="owl-carousel owl-theme" id="banner-carousel">
            <div class="item blank-banner-layout">
               <img src="images/01.jpg" class="img-responsive">
            </div>
            <div class="item blank-banner-layout">
               <img src="images/02.jpg" class="img-responsive">
            </div>
            <div class="item blank-banner-layout">
               <img src="images/03.jpg" class="img-responsive">
            </div>
            <div class="item blank-banner-layout">
               <img src="images/04.jpg" class="img-responsive">
            </div>
         </div>
      </section>
      <section class="about-section">
         <div class="container">
            <h1 align="center">About</h1>
            <div class="about-info">Carved From Fragments Of Wood, Wooden Craft Has Been A Popular Form Of Art From The Ancient Times. These Time-honored Creations Of Wood Reflect The Impeccable Craftsmanship, Creativity And Artistic Acumen Of Their Creators. They Have Also Invoked The Modern Art Lovers And Decorators With Their Remarkable Finesse, Aestheticism And Durability.</div>
            <div class="about-info">established In 2001, Ridhi Sidhi Artwares Is The Manufacturer And Exporter Of A Wide Range Of Wooden Furniture, Wooden Handicrafts, Gift Articles And Antique Collectables.</div>
         </div>
      </section>
      <section class="product-ranges">
         <div class="container">
            <h1 align="center">Product Range</h1>
            <div class="owl-carousel owl-theme" id="product-carousel">
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2356.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2398.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-3589.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-3595.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2388.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2408.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2382.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2369.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2364_1.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-3606.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-3598.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-3593.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2383 (2).jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-2118 copy.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="item">
                  <div class="product-range-list">
                     <img src="images/products/RSAWP-377.jpg" class="img-responsive">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="quality-section">
         <div class="container">
            <h1 align="center">Quality Policy / Processes</h1>
            <div class="about-info">When it comes to style, elegance and solidity; few can match the products that are manufactured by us. Ridhi Sidhi Artwares is a quality concerned company with the sole aim to succeed in its field by delivering the best in the market. All our products are designed to provide homogeneity of materials and styling. Their refined functionality, perfected technology, high product quality and contemporary designs make them indispensable, lasting constituents of home furnishings. Products are rigorously tested as part of the development process to ensure that they meet the most stringent standards for air permeability, wind resistance, and water penetration.</div>
         </div>
      </section>
      <section class="bestselling-section">
         <div class="container">
            <h1 align="center">Best Selling</h1>
            <div class="row">
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-2356.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-3605.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-2398.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-3589.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-2397.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-3600.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-2134.jpg" class="img-responsive">
                  </div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3">
                  <div class="best-selling-items">
                     <img src="images/products/RSAWP-2388.jpg" class="img-responsive">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="infrastructure-section">
         <div class="container">
            <h1 align="center">Infrastructure</h1>
            <div class="about-info">Ridhi Sidhi Artwares constantly invests in the upgradation and modernization of its manufacturing facilities. Our sophisticated manufacturing facility comprises of highly advanced technology and experienced workforce. An experienced staff of designers and technicians comprises as the cornerstone of our company. A time bound system is in place to ensure that all the customers' complaints are studied and analyzed, which ensures that they remain loyal to us.</div>
         </div>
      </section>
      <section class="product-tabs-sections">
         <div class="container">
            <h1 align="center">Product List</h1>
            <!-- MAIN (Center website) -->
            <div class="product-filter-mask">
               <div id="myBtnContainer">
                  <button class="btn product-filter-btn active" onclick="filterSelection('all')"> Show all</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('distratchpainteditems')"> Distratch Painted Items</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('assortedironitems')"> Assorted Iron Items</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('assorteditems')"> Assorted Items</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('boxes')"> Boxes</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('assortedwoodenitems')"> Assorted Wooden Items</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('bedsides')"> Bed Sides</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('chesters')"> Chesters</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('storagealmirah')"> Storage Almirah</button>
                  <button class="btn product-filter-btn" onclick="filterSelection('tibetianfurniture')"> Tibetian Painted Furniture</button>
               </div>
               <!-- Portfolio Gallery Grid -->
               <div class="product-filter-row">
                  <div class="product-filter-column distratchpainteditems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2134.jpg" alt="Mountains">
                     </div>
                  </div>
                  <div class="product-filter-column distratchpainteditems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2362.jpg" alt="Lights">
                     </div>
                  </div>
                  <div class="product-filter-column distratchpainteditems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2388.jpg" alt="Lights">
                     </div>
                  </div>
                  <div class="product-filter-column assortedironitems">
                     <div class="product-filter-content">
                        <img src="images/products/1423876934.jpg" alt="assorted iron items">
                     </div>
                  </div>
                  <div class="product-filter-column assortedironitems">
                     <div class="product-filter-content">
                        <img src="images/products/1423876581.jpg" alt="assorted iron items">
                     </div>
                  </div>
                  <div class="product-filter-column assortedironitems">
                     <div class="product-filter-content">
                        <img src="images/products/1423876744.jpg" alt="assorted iron items">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423877225.jpg" alt="assorted items">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423877255.jpg" alt="assorted items">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423877171.jpg" alt="assorted items">
                     </div>
                  </div>
                  <div class="product-filter-column boxes">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-3595.jpg" alt="boxes">
                     </div>
                  </div>
                  <div class="product-filter-column boxes">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2157.jpg" alt="boxes">
                     </div>
                  </div>
                  <div class="product-filter-column boxes">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-3600.jpg" alt="boxes">
                     </div>
                  </div>
                  <div class="product-filter-column assortedwoodenitems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2397.jpg" alt="assorted wooden items">
                     </div>
                  </div>
                  <div class="product-filter-column assortedwoodenitems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2408.jpg" alt="boxes">
                     </div>
                  </div>
                  <div class="product-filter-column assortedwoodenitems">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2382.jpg" alt="boxes">
                     </div>
                  </div>
                  <div class="product-filter-column bedsides">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2398.jpg" alt="bed sides">
                     </div>
                  </div>
                  <div class="product-filter-column bedsides">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2369.jpg" alt="bed sides">
                     </div>
                  </div>
                  <div class="product-filter-column bedsides">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-3593.jpg" alt="bed sides">
                     </div>
                  </div>
                  <div class="product-filter-column chesters">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2356.jpg" alt="chesters">
                     </div>
                  </div>
                  <div class="product-filter-column chesters">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-3593.jpg" alt="chesters">
                     </div>
                  </div>
                  <div class="product-filter-column chesters">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2100.jpg" alt="chesters">
                     </div>
                  </div>
                  <div class="product-filter-column storagealmirah">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2364.jpg" alt="storage almirah">
                     </div>
                  </div>
                  <div class="product-filter-column storagealmirah">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-377.jpg" alt="storage almirah">
                     </div>
                  </div>
                  <div class="product-filter-column storagealmirah">
                     <div class="product-filter-content">
                        <img src="images/products/RSAWP-2362.jpg" alt="storage almirah">
                     </div>
                  </div>
                  <div class="product-filter-column tibetianfurniture">
                     <div class="product-filter-content">
                        <img src="images/products/1423877387.jpg" alt="tibetian furniture">
                     </div>
                  </div>
                  <div class="product-filter-column tibetianfurniture">
                     <div class="product-filter-content">
                        <img src="images/products/1423877478.jpg" alt="tibetian furniture">
                     </div>
                  </div>
                  <div class="product-filter-column tibetianfurniture">
                     <div class="product-filter-content">
                        <img src="images/products/1423878093.jpg" alt="tibetian furniture">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423877796.jpg" alt="assorted items">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423877513.jpg" alt="assorted items">
                     </div>
                  </div>
                  <div class="product-filter-column assorteditems">
                     <div class="product-filter-content">
                        <img src="images/products/1423878057.jpg" alt="assorted items">
                     </div>
                  </div>
                  <!-- END GRID -->
               </div>
               <!-- END MAIN -->
            </div>
         </div>
      </section>
      <section class="ourcustomer-section">
         <div class="center-position">
            <div class="center-position-text">
               <div class="container">
                  <h1 align="center">Our Customers</h1>
                  <div class="owl-carousel owl-theme" id="ourcustomer-carousel">
                     <div class="item">
                        <div class="client-says-info">They having lots of collect of Handicraft items made by the local artisans, the Wooden Items and iron Items made are many. The collection of Rajathani items are admirable. You can have wider price range to buy it. If you want to have purchasing of the Rajasthani Handicraft items, it's the Most Authentic.</div>
                     </div>
                     <div class="item">
                        <div class="client-says-info">We visited this website only after reading very good reviews online, we found they have very wide range of wooden handmade handicrafts, and they very creative with there rajasthani and Tibetian pantings on it, you can find better deal on this online portals.</div>
                     </div>
                     <div class="item">
                        <div class="client-says-info">Just fall in love with the handmade wooden and Iron handicrafts. Very nominal range and higher range also available. Worth shopping, packaging of delivering item is also very good.</div>
                     </div>
                     <div class="item">
                        <div class="client-says-info">Excellent handicraft web portal with very much Rajasthani style - typical of wooden and Irons. Very good collection of Bed Sides, Assorted Wooden Items, Storage Almirah, Chesters etc. It exhibits wide range of handmade wooden handicrafts. Price range is also very pocket friendly.</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contactus-section">
         <div class="contactus-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.7833352625603!2d73.02847261462108!3d26.301122983394837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff0d84c9e7d936ab!2sBagar+Ground!5e0!3m2!1sen!2sin!4v1549390944292" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         <h1 align="center">Contact Us</h1>
         <div class="contactus-form">
            <div class="container">
               <div class="col-xs-12 col-sm-5 col-md-5">
                  <div class="company_address">
                     <h3>Company Information</h3>
                     <div class="address-text">Rawat Building, Bagar Chowk, 
                        <br> Jodhpur - 342 001, Rajasthan,
                        <br> India
                     </div>
                     <div class="address-contact"><span>Contact:</span>+91-76654-23002</div>
                     <div class="address-contact"><span>&nbsp;</span>+91-94141-29348</div>
                     <div class="address-text"><span>Email:</span> <a href="#">ridhisidhiartwares@gmail.com</a></div>
                     <div class="address-text"><span>Follow on:</span> <a href="#">Facebook</a>, <a href="#">Twitter</a></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-7 col-md-7">
                  <div class="contact-form">
                     <h3>Enquiry</h3>
                     <form method="post" action="">
                        <div class="form-field">
                           <input name="userName" placeholder="Name" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <input name="userEmail" placeholder="Email" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <input name="userPhone" placeholder="Mobile Number" type="text" class="textbox">
                        </div>
                        <div class="form-field">
                           <textarea name="userMsg" placeholder="Message">Message</textarea>
                        </div>
                        <div class="form-field-btn">
                           <span><input type="submit" name="submit" value="Submit" class="enquiry-btn"></span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="footer-copyright-section">
         <div class="copy-right">copyright © All rights reserved by Ridhisidhi Artwares 2018-2019</div>
      </footer>
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>   
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script>
         $('#banner-carousel').owlCarousel({
             loop:true,
             autoplay:true,
             margin:10,
             nav:false,
             dots:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:1
                 },
                 1000:{
                     items:1
                 }
             }
         })
         
         $('#product-carousel').owlCarousel({
             loop:true,
             autoplay:true,
             margin:10,
             nav:true,
             dots:false,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:3
                 },
                 1000:{
                     items:5
                 }
             }
         })
          $('#ourcustomer-carousel').owlCarousel({
             loop:true,
             margin:10,
             nav:false,
             dots:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:1
                 },
                 1000:{
                     items:1
                 }
             }
         })
          filterSelection("all")
         function filterSelection(c) {
           var x, i;
           x = document.getElementsByClassName("product-filter-column");
           if (c == "all") c = "";
           for (i = 0; i < x.length; i++) {
             w3RemoveClass(x[i], "show");
             if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
           }
         }
         
         function w3AddClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
           }
         }
         
         function w3RemoveClass(element, name) {
           var i, arr1, arr2;
           arr1 = element.className.split(" ");
           arr2 = name.split(" ");
           for (i = 0; i < arr2.length; i++) {
             while (arr1.indexOf(arr2[i]) > -1) {
               arr1.splice(arr1.indexOf(arr2[i]), 1);     
             }
           }
           element.className = arr1.join(" ");
         }
         
         
         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
           btns[i].addEventListener("click", function(){
             var current = document.getElementsByClassName("active");
             //current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
           });
         }
         
         /*header fixed function*/
         $(window).scroll(function() {
          var scroll = $(window).scrollTop();
           var bellposition = document.getElementById("bellButton");
           var notificationbox = document.getElementById("bellNotification");
           if (scroll >= 50) {
           $(".navbar-fixed-top").addClass("missing-top");
           
           } else if (scroll < 50) {
           $(".navbar-fixed-top").removeClass("missing-top");
           
         }
         
         });
         setInterval('scroll()', 600);
         /* end header fixed function*/
         
         $(function(){
             var includes = $('[data-include]');
             jQuery.each(includes, function(){
               var file = 'include/' + $(this).data('include') + '.html';
               $(this).load(file);
             });
           });
      </script>
   </body>
</html>
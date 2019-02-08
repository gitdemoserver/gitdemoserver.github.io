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
                     <a href="distratchpainted-item.php">
                        <li>Distratch Painted Items</li>
                     </a>
                     <a href="assortediron-furniture.php">
                        <li>Assorted Iron Items</li>
                     </a>
                     <a href="assorted-furniture.php">
                        <li>Assorted Items</li>
                     </a>
                     <a href="boxes-furniture.php">
                        <li>Boxes</li>
                     </a>
                     <a href="assortedwooden-furniture.php">
                        <li>Assorted Wooden Items</li>
                     </a>
                     <a href="bedsides-furniture.php">
                        <li>Bed Sides</li>
                     </a>
                     <a href="chesters-furniture.php">
                        <li>Chesters</li>
                     </a>
                     <a href="storagealmirah-furniture.php">
                        <li>Storage Almirah</li>
                     </a>
                     <a href="tibetianpainted-furniture.php">
                        <li>Tibetian Painted Furniture</li>
                     </a>
                     <a href="woodensideboards-furniture.php">
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

<script type="text/javascript">
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
</script>
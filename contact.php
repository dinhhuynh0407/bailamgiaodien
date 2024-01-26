<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>zon</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <?php include_once './inc/header.php' ?>
      <!-- end header inner -->
      <!-- section blue_bg -->
      <div class="section blue_bg">
         <div class="container-fluid">
            <div class="row">
               <!-- contact -->
               <div class="col-md-6 offset-md-3">
                  <div class="contact">
                     <div class="row ">
                        <div class="col-md-12">
                           <div class="titlepage text_align_center">
                              <h2>contact Us</h2>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <form id="request" class="main_form">
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Your name" type="type" name=" Name"> 
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="type" name="Email">                          
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                                 </div>
                                 <div class="col-md-12">
                                    <button class="send_btn">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- contact -->
            </div>
         </div>
      </div>
      <!-- end section blue_bg -->
      <!--  footer -->
      <?php include_once './inc/footer.php' ?>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
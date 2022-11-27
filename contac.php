<!DOCTYPE html>

<?php include('Php/contacto.php'); ?>     



<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta  name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Salazar Services</title>
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
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  
  <script src="js/jquery.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script> 


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.0/jquery.mask.min.js" integrity="sha512-aufmzrIcxlxSqV0H82piwJmv94MgVC8RBw3KHggB5ZoZmeb6TADOehoN1yF/VAj/Smb0Tipy5cDqIoy/dd8RGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
     
      <!-- loader  -->
     
      <!-- end loader --> 
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a id="logoA" href="index.html">Salazar Services</a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
                              <li> <a href="index.php">Home</a> </li>

                              <li class="active" > <a href="contact.php">Contact us</a> </li>                              
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner --> 
      </header>
      <div id="side-menu" class="side-nav">
         <a id="aUsuario" href="#cerrar" onclick="closeSideMenu()" class="btn-close">X</a>
         <a id="aUsuario2" href="# ">Login</a>
         <a id="aUsuario3" href="# ">Sign in</a>


      </div>
      <div id="menu"> 
      <!-- end header -->
   
   
    
      <!-- Testimonial -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Contact Us</h3>
                  </div>
               </div>
            </div>
      
<script>
 
 $(document).ready(function(){

$('#phone').mask('+1 000 000-0000');  

});   
</script>

            <div class="row">
             
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                  <div class="contact">
                     
             
                     




                     <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

                        <div class="row">
                           <div class="col-sm-12">
                              <input id="phone" class="contactus" placeholder="+1 469 354-8963"
                               type="text" name="phone" value="<?php if(isset($phone)) {echo $phone;} ?>">
                               <span class='error'><?php  if(isset($phone_error)) {echo $phone_error;}?> </span>
                           </div>
                           <div class="col-sm-12">
                              <input id="txtEmail" class="contactus" placeholder="Email" type="text"
                               name="email" value="<?php if(isset($email)) {echo $email;} ?>">
                               <span class='error'><?php  if(isset($email_error)) {echo $email_error;}?> </span>
                           </div>
                           <div class="col-sm-12">
                              <textarea id="txtcoment" class="textarea"
                               placeholder="Comment" type="text" name="coment"
                               ><?php if(isset($coment)) {echo $coment;} ?></textarea>

                               <span class='error'><?php  if(isset($coment_error)) {echo $coment_error;}?> </span>
                           </div>
                           <div class="col-sm-12">

                       <label class="form-label" style="color: white;">
Select one or more services 
                       </label>
                       <div class="form-check">
  
                        <input class="form-check-input" type="checkbox" value="Painting" id="flexCheckDefault" 
                        name="servicios[]" <?php  if(isset($servicios)){ if(in_array("Painting", $servicios)) echo "checked";}?> >
                        <label class="form-check-label" for="flexCheckDefault">
                          Painting
                        </label>
                      </div>
                         
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Landscape" id="flexCheckDefault2" 
                          name="servicios[]" <?php  if(isset($servicios)){ if(in_array("Landscape", $servicios)) echo "checked";}?> >
                          <label class="form-check-label" for="flexCheckDefault2">
                            Landscape 
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Roofing" id="flexCheckDefault3" 
                          name="servicios[]" <?php  if(isset($servicios)){ if(in_array("Roofing", $servicios)) echo "checked";}?>>
                          <label class="form-check-label" for="flexCheckDefault3">
                            Roofing 
                          </label>
                        </div>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="Pressure wash" id="flexCheckDefault4" 
                          name="servicios[]" <?php  if(isset($servicios)){ if(in_array("Pressure wash", $servicios)) echo "checked";}?>>
                          <label class="form-check-label" for="flexCheckDefault4">
                            Pressure wash
                          </label>
                        </div>
                        <span class='error'><?php  if(isset($servicios_error)) {echo $servicios_error;}?> </span>


                        </div>
                           <div class="col-sm-12">
                              <button class="send" name="send" type="submit">Send</button>
                           </div>
                        
                     </div>
            
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>




      <!-- end Testimonial --> 
      <!--  footer --> 
      <footr>
         <div class="footer">
            <div class="container">
               <div class="row">
   
                  <div class="col-lg-2 col-md-6 col-sm-12 width">
                     <div class="address">
                        <h3>Social Media </h3>
                        <ul class="contant_icon">
                           <li><a href="https://www.facebook.com/saul.salazar.39142" target="_blank">  <img src="icon/fb.png" alt="icon"/></a></li>
                           <li><a href="https://www.instagram.com/salaz995/" target="_blank">   <img src="icon/instagram.png" alt="icon"/></a></li>
         
                        </ul>
                     </div>
                  </div>
                 
               </div>
            </div>
            <div class="copyright">
               <p>Copyright 2022 All Right Reserved By ING-Erick</p>
            </div>
         </div>
      </footr>

   </div>
      <!-- end footer -->
      <!-- Javascript files--> 
      
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
    
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 


      <script src="https://kit.fontawesome.com/ae9de5bf1f.js" crossorigin="anonymous"></script>

      <script src="js/custom.js"></script>
      <script src="js/revolution/js/index.js"></script>
    
   </body>
</html>



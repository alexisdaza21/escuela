<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello World</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">

    <!-- fuentes-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/custom.js"></script>
  
    <!--modal-->
<style type="text/css">

a { 
    text-decoration:none; 
}

#content {  float: left; width: 100%;}

.post { margin: 0 auto; padding-bottom: 50px; float: left; width: 960px; }

.btn-sign {
    width:460px;
    margin-bottom:20px;
    margin:0 auto;
    padding:20px;
    border-radius:5px;
    background: -moz-linear-gradient(center top, #00c6ff, #018eb6);
    background: -webkit-gradient(linear, left top, left bottom, from(#00c6ff), to(#018eb6));
    background:  -o-linear-gradient(top, #00c6ff, #018eb6);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#00c6ff', EndColorStr='#018eb6');
    text-align:center;
    font-size:36px;
    color:#fff;
    text-transform:uppercase;
}

.btn-sign a { color:#000; text-shadow:0 1px 2px #161616; }

#mask {
    display: none;
    background: #000; 
    position: fixed; left: 0; top: 0; 
    z-index: 10;
    width: 100%; height: 100%;
    opacity: 0.8;
    z-index: 999;
}
body{
     background:#202020;}

.login-popup{
    display:none;
    background: #333;
    padding: 10px;  
    border: 2px solid #ddd;
    float: left;
    font-size: 1.2em;
    position: fixed;
    top: 50%; left: 50%;
    z-index: 99999;
    box-shadow: 0px 0px 20px #999;
    -moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
    border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}

img.btn_close {
    float: right; 
    margin: -28px -28px 0 0;
}

fieldset { 
    border:none; 
}

form.signin .textbox label { 
    display:block; 
    padding-bottom:7px; 
}

form.signin .textbox span { 
    display:block;
}

form.signin p, form.signin span { 
    color:#999; 
    font-size:11px; 
    line-height:18px;
} 

form.signin .textbox input { 
    background:#666666; 
    border-bottom:1px solid #333;
    border-left:1px solid #000;
    border-right:1px solid #333;
    border-top:1px solid #000;
    color:#fff; 
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    font:13px Arial, Helvetica, sans-serif;
    padding:6px 6px 4px;
    width:200px;
}

form.signin input:-moz-placeholder { color:#bbb; text-shadow:0 0 2px #000; }
form.signin input::-webkit-input-placeholder { color:#bbb; text-shadow:0 0 2px #000;  }

.button { 
    background: -moz-linear-gradient(center top, #f3f3f3, #dddddd);
    background: -webkit-gradient(linear, left top, left bottom, from(#f3f3f3), to(#dddddd));
    background:  -o-linear-gradient(top, #f3f3f3, #dddddd);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f3f3f3', EndColorStr='#dddddd');
    border-color:#000; 
    border-width:1px;
    border-radius:4px 4px 4px 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    color:#333;
    cursor:pointer;
    display:inline-block;
    padding:6px 6px 4px;
    margin-top:10px;
    font:12px; 
    width:214px;
}

.button:hover { background:#ddd; }


</style>
  
</head>
<body>
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title" >
                            <font size="10"><a  href="https://www.youtube.com/watch?v=1lyu1KKwC74&list=RDHyHNuVaZJ-k&index=28"  ><i class="balon icon-soccer-ball" style="color:#b3ffb3; text-decoration: none; "></i></a></font>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="elements.php">Sobre Nosotros</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                             <?php 

          if(isset($_SESSION["u"])){
          
            echo("<a style='color: #000; font-size: 25px; font-weight: bold; text-decoration: none;' href='index.php?c=home&a=logout' >-cerrar sesi&oacute;n-</a><br>");
            echo $_SESSION["u"]->nombres."   ".$_SESSION["u"]->apellidos 
            ."  -- ".$_SESSION["u"]->tipo; 
            //$_SESSION["u"]->tipo== administrador
          }

         ?>
         
      <?php
     if(!isset($_SESSION["u"]))

         echo ("   <a  style='color: #000; font-size: 25px; font-weight: bold; text-decoration: none;' href='#login-box' class='login-window'  >-iniciar sesi&oacute;n-</a>")
           ?>
                
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('a.login-window').click(function() {
        
        // Getting the variable's value from a link 
        var loginBox = $(this).attr('href');

        //Fade in the Popup and add close button
        $(loginBox).fadeIn(300);
        
        //Set the center alignment padding + border
        var popMargTop = ($(loginBox).height() + 24) / 2; 
        var popMargLeft = ($(loginBox).width() + 24) / 2; 
        
        $(loginBox).css({ 
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        
        // agregar la mask al body
        $('body').append('<div id="mask"></div>');
        $('#mask').fadeIn(300);
        
        return false;
    });
    
    // cerrar 
    /*$('a.close, #mask').live('click', function() { 
      $('#mask , .login-popup').fadeOut(300 , function() {
        $('#mask').remove();  


    }); 
    return false;
    });*/
});
</script>
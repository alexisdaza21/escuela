<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>

 		<title>The moment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	 	
	 	<link rel="stylesheet" type="text/css" href="assets/fonts/style.css">
        
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

.btn-sign a { color:#fff; text-shadow:0 1px 2px #161616; }

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
  <style type="text/css">

.loader,
.loader:before,
.loader:after {
  background: #FFF;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 0.5em;
  height: 2em;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
}
.loader {
  text-indent: -9999em;
  margin-left: 40%;
  position: relative;
  font-size: 5.5px;
  -webkit-animation-delay: 0.16s;
  animation-delay: 0.16s;
}
.loader:after {
  left: 1.5em;
  -webkit-animation-delay: 0.32s;
  animation-delay: 0.32s;
}

@-webkit-keyframes load1  {
  0%,
  00%,
  00% {
    box-shadow: 0 0 #FFF;
    height: 4em;
  }
  00% {
    box-shadow: 0 -2em #ffffff;
    height: 2.5em;
  }
}
@keyframes load1 {
  0%,
  0%,
  0% {
    box-shadow: 0 0 #FFF;
    height: 4em;
  }
  0% {
    box-shadow: 0 -2em #ffffff;
    height: 2.5em;
  }

} 
  </style>
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
<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/login-box-modal-dialog-window/index.html" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		<header id="header">
                
        <?php 

          if(isset($_SESSION["u"])){
          
            echo("<a style='color: #fff; text-decoration: none;' href='index.php?c=home&a=logout' >-cerrar sesi&oacute;n-</a>");
            echo $_SESSION["u"]->nombres."   ".$_SESSION["u"]->apellidos 
            ."  -- ".$_SESSION["u"]->perfil; 
            //$_SESSION["u"]->perfil== administrador
          }

         ?>
         
      <?php
     if(!isset($_SESSION["u"]))

         echo ("<a style='color: #fff;' href='#login-box' class='login-window' >-iniciar sesi&oacute;n-</a>")
           ?>
          <?php 
            if(isset($_SESSION["u"])){?>
                <nav>
                    <a style="margin-left: 1100%;" href="#menu">Menu</a>
                </nav>
                <!-- Nav -->
                <nav id="menu">
                <ul class="links">
                    <li><a href="index.php?c=home&a=home">Home</a>


                    </li>
                    <li><a href="index.php?c=usuarios&a=admin">Usuarios</a></li>
                    <li><a href="index.php?c=habitacion&a=admin">Habitaci&oacute;n</a></li>
                    <li><a href="index.php?c=productos&a=admin">Productos</a></li>
                      <li><a href="index.php?c=vehiculos&a=admin">vehiculos</a></li>
                 
                    <li><input type="text" name=""></a></li>
                     <li> <div id="contenedor">   
      <div class="loader" id="loader">Loading...</div>
  </div></li>
                </ul>
            </nav>
        <?php } ?>
                
           
            <div class="container">

      <div class="post">
</header>
   <div id="login-box" class="login-popup">
        
        <a href="" class="close"><img src="close_pop.png" class="btn_close" title="cerrar"  alt="Close" /></a>
        
          <form method="post" class="signin" action="index.php?c=home&a=login" name="login">
                <fieldset class="textbox">
                <label class="username">
                <span>Documento</span>
                <input id="username" required="" name="login[Documento]" name="documento"  type="text" autocomplete="on" placeholder="Documento">
                </label>
                
                <label class="password">
                <span>Contrase&ntilde;a</span>
                <input type="password" required="" id="password" name="login[pas]" name="contrasena"  type="password" placeholder="Contrase&ntilde;a">
                </label>
                
                <input style="background: #f2f2f2; font-size: 100%;" class="submit button" type="submit" value="Ingresar"/>
                    
                </fieldset>
  
          </form>
        </div>
    
    </div>
</div>
 <div id="content">
 
       

    
        
     


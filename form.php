<!doctype html>


<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Portfolio Aleksa Drozdova</title>
      <!-- Bootstrap -->
	  <?php include('form_process.php'); ?>
      <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet" type="text/css">
      <link href="css/contact.css" rel="stylesheet" type="text/css">
  <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
  <script>var __adobewebfontsappname__="dreamweaver"</script>
  <script src="http://use.edgefonts.net/open-sans-condensed:n3:default.js" type="text/javascript"></script>
  </head>
    <body>
      <!-- body code goes here -->
    <div class="container-fluid">
	    <header>
			
<nav class="navbar navbar-expand-lg navbar-light" id="fixednav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul>
      <li><a href="intro.html"> INTRO</a></li>
      <li><a href="work.html"> WORK</a></li>
      <li class="thispage"><a href="contact.html"> CONTACT</a></li>
    </ul>
  </div>
  <div class="div2"><a href="index.html"> Aleksa Drozdova </a></div>
</nav>
			
&nbsp;</header>
      <main> &nbsp;
      <div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4> I love emails so please get in contact.</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
fieldset>
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
      <span class="error"><?= $url_error ?></span>
    </fieldset>
    <fieldset>
      <textarea value="<?= $message ?>" name="message" tabindex="5">
      </textarea>
    </fieldset>
<div class="success"> <?=$success;?></div>
  </form>
 
  
</div>
      
      
      </main>
	    <footer><footer><div><a href="https://www.linkedin.com/in/aleksandra-drozdova/"><img src="image/icon3.jpg" alt="" width="142" height="142" class="icons"></a><a href="https://www.behance.net/aleksadesi05e3"><img src="image/icon2.jpg" alt="" width="142" height="142" class="icons"></a><a href="https://www.instagram.com/aleksa.designer/"><img src="image/icon.jpg" alt="" width="142" height="142" class="icons"></a></div> © 2018 Aleksa Drozdova. All rights reserved.</footer>
		  
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap-4.0.0.js"></script>
    <script>
    $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
    </script>

  </body>
  </html>


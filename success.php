<?php include_once 'functions.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tussey Consult</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <style type="text/css">
      *{padding:0;margin:0;}
      body{background:#e8e8e8;width:100%;height:100%;color:#555555;font-family:"Roboto",sans-serif;}
      h1,h2,h3{font-family:"Ubuntu",sans-serif;}
      .call-back-msg{width:60%;height:100%;margin:5% auto;padding:5%;text-align:center;}
      .tussey-logo{margin:5% auto;}
      a{text-decoration:none;color:#cd9933;}
      @media screen and (max-width:320px){body{width:100%;}.call-back-msg{width:80%;height:100%;}.united-way-logo{width:70%;padding:1%;}}
      @media screen and (min-width:320px) and (max-width:360px){body{width:100%;}.call-back-msg{width:80%;height:100%;}.united-way-logo{width:70%;padding:1%;}}
      @media screen and (min-width:361px) and (max-width:600px){body{width:100%;}.call-back-msg{width:80%;height:100%;}.united-way-logo{width:50%;padding:1%;}}
      @media screen and (min-width:601px) and (max-width:800px){body{width:100%;}.call-back-msg{width:80%;height:100%;}.united-way-logo{width:50%;padding:1%;}}
    </style>
    <div class="call-back-msg">
      <div class="tussey-logo">
        <img src="img/logo.png" alt="Logo">
      </div>
      <br/>
      <?php
      if(isset($_POST['submit']))
      {
        $name = sanitise($_POST['name']);
        $email = sanitise($_POST['email']);
        $message = sanitise($_POST['message']);
        
        if(!empty($name) && !empty($email) && !empty($message))
        {
          $subject = $name . ' sent you a message via the contact form';
          $to = 'rtussey.me@gmail.com';
          
          if(mail($to, $subject, $message, $email))
          {
            $msg = '<p>Your message was successfully sent. Kindly exercise patience while you await a reply from us.</p>';
          }
          else
          {
            $msg = '<p>Your message could not be sent at this time. Try again later.</p>';
          }
        }
        else 
        {
          $msg = '<p>All fields required.</p>';
        }

        echo $msg;

      }
      ?>
    </div>
  </body>
</html>

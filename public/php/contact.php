  <?php
  
  $name = $_POST['fname'];
  $lastname = $_POST['lname'];
  $visitor_email = $_POST['email'];
  $message = $_POST['subject'];




  $email_from = 'ehu-service@contact.dz';

  $email_subject = "Message Client";

  $email_body = "Nom: $name.\n"."Prénom: $lastname.\n"."Email: $visitor_email.\n\n"."Message: $message.\n";


    $to = "jalilmadara@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .="Reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: /resources/views/contact.blade.php");

  ?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Message envoyé</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="shortcut icon" href="/images/circle-cropped-2.png">
    <meta http-equiv = "refresh" content = "5; url = http://jalilkaneee.000webhostapp.com/contact" />
  </head>
  <body>
    <style>
        body
        {
          background-color: #ccc;
        }
        
        h1
        {
          font-family: sans-serif;
          padding-top: 100px;
          left: 200px;
        }
        </style>
        </style>
        <div class="col-sm-12"><center>
          <h1>
            <i class="fas fa-check-circle"></i>
            <strong> Votre message a bien été envoyé à notre service client.</strong>
          </h1>
          <h1><strong>Merci</strong></h1>
        </center>
        <center>
          <p>
            Vous allez être redirigé automatiquement à la page précedente.
          </p>
        </center>
    </div>
 </body>
</html>


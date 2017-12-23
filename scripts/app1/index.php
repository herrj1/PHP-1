<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Contact Form by Fullarrays</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!-- added for IE supporr -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <!-- codes starts here -->
        <h2>Contact me</h2>
        <form name="sendmail" action="" method="post">
            <label>Name</label>
            <input class="pretty" name="fname" type="text"/>
            <label>Email</label>
            <input class="pretty" name="email" type="text"/>
            <label>Subject</label>
            <input class="pretty" name="subject" type="text"/>
            <label>Email</label>
            <textarea class="pretty" name="message" type="text"></textarea>
        </form>
        <!-- codes ends here -->
        <?php 
          if(isset($_POST['submit']))
          {
              $name=$_POST['name'];
              $email=$_POST['email'];
              $subject=$_POST['subject'];
              $message=$_POST['message'];
              $siteContact="fullarray@herrj.com"
              $headers="Reply-to:$email";
              mail($siteContact, $subject, $message, $headers);
          }
        ?>
</body>
</html>

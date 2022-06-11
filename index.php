<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blank</title>

    <link rel="icon" type="image/png" href="images\favicon\Round Grey.png">
    <link rel="stylesheet" href="stylesheet.css">

    <?php
    $password = 'gris quartz';
    ?>

  </head>

  <body>

    <audio autoplay>
      <source src="morse.wav" type="audio/wav">
    </audio>


    <div class="page">

      <article id="main">
        <h1 id="carve-text">Where do i am.</h1>
      </article>

      <!-- <div class="extremely-long-vertical-space"></div> -->

      <?php


      //Let the user access protected content on page if the password match with the password that you have provided
      if (isset($_POST["password"]) && ($_POST["password"]=="$password")) { ?>
        <a href="thisisthepicture.php"><h1 class="lux-text">proceed.</h1></a>
      <?php }
      //Display this content if the provided password is wrong
      else{
        //Show the wrong password notice
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
          ?>
          <h5>NOt ThIs onE </h5>
        <?php } ?>
        <h5>,? ! ! .,??!?  ?? !  ? ,, ?  !?, ? </h5>
        <p align="center">
          <form id ="myForm" method="post"><p align="center">
            <input name="password" type="password" size="25" maxlength="12"><input value="Submit" type="submit" onClick=" header('Location: thisisthepicture.php');"></p>
          </form>
          <?php
        }
        ?>


    </div>

    <footer>
      <p>A secret project.</p>
      <p>--... ----- ...-- ----.</p>
      <p>7039</p>
    </footer>
  </body>

</html>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blank</title>

    <link rel="icon" type="image/png" href="images\favicon\Round Grey.png">
    <link rel="stylesheet" href="stylesheet.css">

    <?php  ?>
  </head>

  <body>


    <div class="page">

      <article id="main">
        <h1 class="carve-text">I don't know this.</h1>

        <img src="thisisthepicture.png" alt="x*y.">

        <?php
        //Let the user access protected content on page if the password match with the password that you have provided
        $password = '988423';
        if (isset($_POST["password"]) && ($_POST["password"]=="$password")) { ?>
          <a href="988423.php"><h1 class="lux-text">Next.</h1></a>
        <?php }
        //Display this content if the provided password is wrong
        else{
          //Show the wrong password notice
          if($_SERVER['REQUEST_METHOD'] == 'POST') {
            ?>
            <h5>NOt ThIs onE </h5>
          <?php } ?>
          <h5>? !.?.?.!? ,  .?  !  .. ? ,?... ?  !.,!!  ?? ?!</h5>
          <p align="center">
            <form id ="myForm" method="post"><p align="center">
              <input name="password" type="password" size="25" maxlength="12"><input value="Submit" type="submit"></p>
            </form>
            <?php
          }
          ?>

      </article>

    </div>

    <footer>
      <p>A secret project.</p>
      <p>--... ----- ...-- ----.</p>
      <p>7039</p>
    </footer>
  </body>

</html>

<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--link-->

    <!--google fonr-->

    <!--icon-->
    <link rel="shortcut icon" href="images/icon.png" title="Favicon"/>

    <title>Classroom Schedule</title>
  </head>
  <body>
    <h1>Wellcome
        <?php echo $_SESSION['username'] ?>
    </h1>
    <form action="homepage.php" method="post">
        <button name="logout">Log Out</button>
    </form>

    <!--logout-->
    <?php
        if(isset($_POST['logout']))
        {
            session_destroy();
            header('location:index.php');
        }
    ?>
  </body>
</html>
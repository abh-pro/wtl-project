<?php
    session_start();
    $servername = "localhost";
    $dbname = "wtl";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $facts = $conn->query("SELECT * FROM facts")->fetchAll();

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Brain Twister</title>
        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    </head>
    <body class="main-layout">
        <!--NavBar-->
        <header>
            <div class="header-top">
                <?php include('Header.php') ?>
            </div>
        </header>
        <div class="error">
            <?php if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } ?>
        </div>
        <div class="success">
            <?php if (isset($_SESSION['success'])) {
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            } ?>
        </div>

        <!--Content-->
        <?php if (count($facts) != 0) {
            foreach ($facts as $fact) {


            ?>
            <div id="blog" class="how_it">
                <div class="container-fluid paddimg_ouu">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 padding-right1">
                            <div class="two-box">
                                <figure><img src="images/<?php echo $fact['image']; ?>" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 padding-left1">
                            <div class="two-box_text">

                                <div class="travel">

                                    <h3><?php echo $fact['heading']; ?></h3>
                                    <p><?php echo $fact['descp']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row float-right pr-5 ml-auto">
                        <form class="" action="update.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $fact['id']; ?>">
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                        <form class="" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $fact['id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }}
        else {
            ?>
            <div class="row text-center justify-content-center">
                <form class="" action="insert.php" method="post">
                    <button type="submit" class="btn btn-success">Add New</button>
                </form>
            </div>
            <?php

        }
         ?>

        <!--Footer-->
        <?php include('Footer.php') ?>

        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<?php
$conn=null;
 ?>

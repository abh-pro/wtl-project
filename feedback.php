<?php
    session_start();
    $servername = "localhost";
    $dbname = "wtl";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if (isset($_SESSION['search'])) {
            $facts = $_SESSION['facts'];
            unset($_SESSION['search']);
        }
        else {
            $facts = $conn->query("SELECT * FROM contact")->fetchAll();
        }


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

        <!--Content-->
            <div class="col-md-10 offset-md-1">
                <form class="" action="search.php" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <input class="contactus mr-3" placeholder="Enter email" type="text" name="email" minlength="3" required><button type="submit" class="btn btn-info pl-2 ml-auto">Search</button>
                            <div class="error float-right">
                                <?php if (isset($_SESSION['error'])) {
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                } ?>
                            </div>
                            <div class="success float-right">
                                <?php if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                } ?>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (isset($facts)) {


                         foreach ($facts as $fact): ?>
                            <tr>
                                <th scope="row"><?php echo $fact['id']; ?></th>
                                <td><?php echo $fact['name']; ?></td>
                                <td><a style="color:blue;" href="mailto:<?php echo $fact['email']; ?>"><?php echo $fact['email']; ?></a></td>
                                <td><?php echo $fact['msg']; ?></td>
                            </tr>
                        <?php endforeach; }
                        else {
                            ?>
                            <tr>
                                <th scope="row">No records found.</th>
                            </tr>

                            <?php
                        }?>
                        </tbody>
                </table>
            </div>

        <!--Footer-->
        <?php include('Footer.php') ?>

        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<?php
//TODO close connection
$conn=null;
 ?>

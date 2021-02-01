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
        <link rel="stylesheet" type="text/css" href="css/TypingTest.css">

    </head>
    <body class="main-layout">
        <!--NavBar-->
        <header>
            <div class="header-top">
                <?php include('Header.php') ?>
            </div>
        </header>

        <!--Content-->
        <div class="row justify-content-center">
            <div class="col-md-2 offset-md-1 pr-0 pl-0 scoreBox">
                <div class="header_text">Timer</div>
                <div class="header_text" id="time">60 S</div>
            </div>
            <div class="col-md-2 pr-0 pl-0 scoreBox">
                <div class="header_text">WPM</div>
                <div class="header_text" id="wpm"></div>
            </div>
            <div class="col-md-2 pr-0 pl-0 scoreBox">
                <div class="header_text">Errors</div>
                <div class="header_text" id="errors">0</div>
            </div>
            <div class="col-md-2 pr-0 pl-0 scoreBox">
                <div class="header_text">Accuracy</div>
                <div class="header_text" id="accuracy">100</div>
            </div>
            <div class="col-md-2 pr-0 pl-0">
                <button type="button" class="btn btn-info" id="btn-reset" onclick="resetGame()">Reset</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pr-0">
                <div class="textDisplay" id="textDisplay">
                    Click in Typing Box to start test.
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <textarea type="text" name="textInput" class="textInput" id="textInput" onfocus="startGame()" oninput="checkInput()"></textarea>
            </div>
        </div>

        <!--Footer-->
        <?php include('Footer.php') ?>

        <!--JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/TypingTest.js"></script>
    </body>
</html>

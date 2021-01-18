<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">

        <title>Brain Games|Typing Test</title>

        <link rel="stylesheet" type="text/css" href="../../Public/CSS/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../Public/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="../../Public/CSS/TypingTest.css">
    </head>

<body>
    <header>
          <?php include('../Layouts/Navbar.php') ?>
    </header>
    <div class="container-fluid">

        <br>
        <div class="header">
            Brain Games - Typing Test
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-1 pr-0 pl-0 scoreBox">
                <div class="header_text">Timer</div>
                <div class="header_text" id="time"></div>
            </div>
            <div class="col-md-2 pr-0 pl-0 scoreBox">
                <div class="header_text">WPM</div>
                <div class="header_text" id="wpm"></div>
            </div>
            <div class="col-md-2 pr-0 pl-0 scoreBox">
                <div class="header_text">Errors</div>
                <div class="header_text" id="errors"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 pr-0">
                <div class="textDisplay" id="textDisplay">
                    Click in Typing Box to start test.
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <textarea type="text" name="textInput" class="textInput" id="textInput" onfocus="startGame()"></textarea>
            </div>
        </div>
    </div>
    <script src="../../Public/JS/TypingTest.js">
    </script>

    <?php include_once('../Layouts/Footer.php') ?>
</body>
</html>

<?php
    session_start();
    $servername = "localhost";
    $dbname = "wtl";
    $username = "root";
    $password = "";


    //get post data
    function input_check($data)
    {
    	$data=trim($data);
    	$data=stripslashes($data);
    	$data=htmlspecialchars($data);
    	return $data;
    }


if (($_POST["email"] ?? false)) {
            $email = input_check($_POST["email"]);

            //insert
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $email = $_POST['email'];
                $facts = $conn->query("SELECT * FROM contact where email='$email'")->fetchAll();

                $_SESSION['search'] = 'true';
                $_SESSION['facts'] = $facts;
                header("location: feedback.php");
                exit();


            } catch(PDOException $e) {
                $_SESSION['error'] = $e->getMessage();
                header("location: feedback.php");
                exit();
            }
        }
        else {
            $_SESSION['error'] =  "error";
            header("location: feedback.php");
            exit();
        }

 ?>

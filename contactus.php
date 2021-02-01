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

    if (($_POST["name"] ?? false) && ($_POST["email"] ?? false) && ($_POST["phone"] ?? false) && ($_POST["message"] ?? false)) {
        $name = input_check($_POST["name"]);
        $phone = input_check($_POST["phone"]);
        $email = input_check($_POST["email"]);
        $message = input_check($_POST["message"]);
        //verification
        if(!preg_match("/^[0-9]{10}$/", $phone)){
            $_SESSION['error'] = "Enter valid phone number";
            header('Location: index.php#contact');
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Enter valid email";
            header('Location: index.php#contact');
            exit();
        }
        //insert
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //insert query
            $sql = "INSERT INTO contact(name,phone,email,msg) VALUES (?,?,?,?)";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $phone, $email, $message]);
            $_SESSION['success'] = 'Submitted successfully';
            header('Location: index.php#contact');
            exit();
        } catch(PDOException $e) {
            $_SESSION['error'] =  $e->getMessage();
            header('Location: index.php#contact');
            exit();
        }
    }
    else {
        $_SESSION['error'] =  'error';
        header('Location: index.php#contact');
        exit();
    }
 ?>

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


if (($_POST["id"] ?? false) && ($_POST["heading"] ?? false) && ($_POST["descp"] ?? false)) {
            $heading = input_check($_POST["heading"]);
            $descp = input_check($_POST["descp"]);
            $id = input_check($_POST['id']);

            //insert
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // query
                    if (isset($_POST['insert'])) {
                        $stmt = $conn->prepare("INSERT INTO facts(heading,descp) values(?,?)");
                        $stmt->execute([$heading,$descp]);
                        $_SESSION['success'] = "Record Inserted";
                        header("location: admin.php");
                        exit();
                    }
                    else {
                        $stmt = $conn->prepare("UPDATE facts set heading=?, descp=? where id=?");
                        $stmt->execute([$heading,$descp,$id]);
                        $_SESSION['success'] = "Record updated";
                        header("location: admin.php");
                        exit();
                    }




            } catch(PDOException $e) {
                $_SESSION['error'] =  $e->getMessage();
                header("location: admin.php");
                exit();
            }
        }
        else {
            $_SESSION['error'] =  "error";
            header("location: admin.php");
            exit();
        }

 ?>

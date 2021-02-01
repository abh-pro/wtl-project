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


    if (($_POST["id"] ?? false) && ($_POST["heading"] ?? false) && ($_POST["desc"] ?? false) /*&& ($_POST["image"] ?? false)*/) {
            $heading = input_check($_POST["heading"]);
            $desc = input_check($_POST["desc"]);

            //insert
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // query
                if (isset($_POST['insert'])) {
                    $stmt = $conn->prepare("INSERT into facts(heading,desc) values(?,?)");
                    $stmt->execute([$heading,$desc]);

                    $_SESSION['success'] = "Record inserted";
                    header("location: admin.php");
                    exit();
                }
                else{
                    $stmt = $conn->prepare("UPDATE facts set heading=? and desc=? where id=?");
                    $stmt->execute([$heading,$desc,$id]);

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
    }
 ?>

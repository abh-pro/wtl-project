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

    if (($_POST["username"] ?? false) && ($_POST["password"] ?? false)) {
        $user = input_check($_POST["username"]);
        $pass = input_check($_POST["password"]);
        //insert
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // query
            $stmt = $conn->prepare("SELECT* from users where username=?");
            $stmt->execute([$user]);
            $arr_login=$stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($arr_login) != 0) {

          		foreach ($arr_login as $key) {
          			$tmp_pass = $key['password'];
                    $tmp_name = $key['username'];
          		}

          		if ($tmp_pass == $pass) {
                    $_SESSION['username'] = $user;
                    header("location: admin.php");
                    exit();
                }else {
                 $_SESSION['error'] = "Wrong Username or Password";
                 header("location: login.php");
                 exit();
                }
            }
            else {
              $_SESSION['error'] = "Wrong Usename or Password.";
              header("location: login.php");
              exit();
            }
        } catch(PDOException $e) {
            $_SESSION['error'] =  $e->getMessage();
            header("location: login.php");
            exit();
        }
    }
    $conn=null;
 ?>

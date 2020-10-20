<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    session_start();
    include 'dbconnect.php';
	$Email    = "";
    $errors   = array();
    	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
    }
    if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
    }
    
    // LOGIN USER
	function login(){
		global $conn, $Email, $errors;

		// grap form values
		$Email = $_POST['Email'];
		$password = $_POST['password'];

		// make sure form is filled properly
		if (empty($Email)) {
			array_push($errors, "Email Id is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

	// 	// attempt login if no errors on form
	// 	if (count($errors) == 0) {
	// 		$password = password_hash($password, PASSWORD_DEFAULT);

	// 		$query = "SELECT * FROM model WHERE Email='$Email' AND password='$password' LIMIT 1";
	// 		$results = mysqli_query($conn, $query);

	// 		if (mysqli_num_rows($results) == 1) { // user found
	// 			// check if user is admin or user
    //             $logged_in_user = mysqli_fetch_assoc($results);
    //             $_SESSION['user'] = $logged_in_user;
    //             echo $_SESSION["Email"];
    //                      $_SESSION['success']  = "You are now logged in";
     
    //                      header('location: index.php');
				
    //         }
    //         else {
	// 			array_push($errors, "Wrong username/password combination");
	// 		}
    // 	}
    if($stmt=$conn->prepare('SELECT Email, password FROM model WHERE Email = ?'))
    {
        $stmt -> bind_param('s',$Email);
        $stmt->execute();
        $stmt -> store_result();
        if($stmt->num_rows>0)
        {
            $stmt -> bind_result($Email, $password);
            $stmt -> fetch();
            if(password_verify($_POST['password'], $password)){
                session_regenerate_id();
                if(!empty($_POST["remember"])){
                    setcookie("loggedin",$_POST["Email"],time()+(10*365*24*60*60));
                }
                else{
                    if(isset($_COOKIE["loggedin"])){
                        setcookie("loggedin","");
                    }
                }
                $_SESSION['loggedin']= TRUE;
                $_SESSION['Email'] = $_POST['Email'];
                echo 'Welcome' . $_SESSION['Email']. '!';
                header('Location: templates/query.php');
            } 
            else{
                echo 'Incorrect Password!!!';
            }
        }
        else{
            echo 'Incorrect Email!!';
        }

        $stmt->close();
    }
	 }

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

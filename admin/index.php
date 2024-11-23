<?php 

session_start();

	include("adminconnection.php");
	include("adminfunctions.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['admin_id'] = $user_data['admin_id'];
						header("Location: adminpanel.php");
						die;
					}
				}
			}
			
            echo '<script>alert("wrong username or password!");</script>';
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title>RemiAlert - Admin Login</title>
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <script src="/js/script.js"></script>
</head>

<body>

 

<div class="wrapper">
    

    <div class="form-box login">
    <h2>Admin Login</h2>
    <form method="post">
        <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input type="text" name="user_name" required>
            <label>Username</label>
        </div>
<div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" name="password" required>
            <label>Password</label>
</div>
<button type="submit" class = "btn" >Login </button>
<div class="login-register">
    
    </div>
   </form>
  </div> 
</div>


	


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	
</body>
</html>

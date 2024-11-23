<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: userlogin.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function random_phone($length) 
{

  $text = "";
  for ($i = 0; $i < $length; $i++) {
    $text .= random_int(0, 9);
  }
  return $text;
}




function random_phone44($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 7;
	}

	$len = rand(4,$length);

	for ($i=1; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}




<?php 
session_start();

	include("adminconnection.php");
	include("adminfunctions.php");

  if (isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    $delete=mysqli_query($con,"DELETE FROM users WHERE user_id = '$user_id'");
  }

  $user_data = check_login($con);

  $admin_id = $user_data['admin_id'];
  $select = "SELECT * FROM users";
  $query=mysqli_query($con,$select);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <title> RemiAlert - User Dashboard - Bill Types</title>
    <link rel="stylesheet" type="text/css" href="/styles/viewusers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/script.js"></script>
</head>

<header>
        <!-- <h2 class="logo">RemiAlert</h2> -->
        <img src="/img/logov2.png" alt="Logo" height="60px">
        <nav class="navigation">
            <a href="/admin/adminpanel.php">Admin Panel</a>
            <a href="/about.php">About</a>
            <a href="/contact.php">Contact</a>
            <button class="btnLogout-popup" onclick="redirectToLogout()">Log out</button>
        </nav>

        
</header>


<div class="user-profile">
    <img src="/img/profile.jpg" alt="Profile Picture" class="profile-pic"> 
    
    <span class="username">
    <?php echo $user_data['user_name']; ?><br>
    <?php echo 'example@mail.com'; ?></span>
    </div>

<body>
<div>
<h1 class="dashbooard" > BILL REMINDERS</h1>
</div>	




<!--<div class="wrapper">-->
    

<div class="form-box login">


    

    <table border="1" cellpadding="0">
      <tr>
        <!-- <th>BILL ID</th> -->
        <th>Username</th>
        <th>Email</th>
        <th>Operation</th>
      </tr>
      <?php 
      $num=mysqli_num_rows($query);
      if($num>0){
        while ($result=mysqli_fetch_assoc($query)){
          echo "
          <tr> 
            
            <td>".$result['user_name']."</td>
            <td>".$result['email']."</td>
            <td>
              <a href='viewusers.php?user_id=".$result['user_id']."' 
              class='btn5'>Delete</a>

            </td>
          </tr>
          ";

        }
      }
      ?>

     
      
    </table>   
    <div class="backbtn">
      <br>
    <a href="/admin/adminpanel.php" class='btn6'>Back</a>
    <br>
    </div>
    
    <br>
        </div>
        </div>



<script>
  function redirectToCustomLink() {
    window.location.href = "/viewreminders.php";
  }
</script>






</body>


   
</body>
</html>
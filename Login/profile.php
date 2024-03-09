<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <link rel="stylesheet" type="text/css" href="profilestyle.css">
</head>
<body>
     <!--NAVBAR-->
    <div class="navbar">
        <input type="checkbox" id="check">
        <label for="check">
                <i class="material-icons" id="btn">subject</i>
                <i class="material-icons" id="close">close</i>
            </label>
        <a href="index.html">
            <h2 class="logo">NASŚH BEAUTY</h2>
        </a>
        <ul class="navbar-menu">
            <li><a href="../index.html">HOME</a></li>
            <li><a href="../about.html">ABOUT</a></li>
            <li><a href="../product.html">PRODUCT</a></li>
            <li><a href="../contact.php">CONTACT</a></li>
            <li><a style="color: #ca6850" href="#">PROFILE</a></li>
        </ul>
    </div>
    <!--NAVBAR SELESAI-->
     <h1>MY PROFILE</h1> 
     <table cellspacing=5px>
          <tr>
               <td style="background-color: #ca6850; color: #f7f7f7; width: 350px"><b>NAME</b></td>
               <td style="background-color: #f7f7f7"><?php echo $_SESSION['name']; ?></td>
          </tr>
          <tr>
               <td style="background-color: #ca6850; color: #f7f7f7;"><b>USERNAME</b></td>
               <td style="background-color: #f7f7f7"><?php echo $_SESSION['user_name']; ?></td>
          </tr>
          <tr>
               <td style="background-color: #ca6850; color: #f7f7f7;"><b>EMAIL</b></td>
               <td style="background-color: #f7f7f7"><?php echo $_SESSION['email']; ?></td>
          </tr>
          <tr>
               <td style="background-color: #ca6850; color: #f7f7f7;"><b>BIRTHDAY</b></td>
               <td style="background-color: #f7f7f7"><?php echo $_SESSION['birthday']; ?></td>
          </tr>
          <tr>
               <td style="background-color: #ca6850; color: #f7f7f7;"><b>ADDRESS</b></td>
               <td style="background-color: #f7f7f7"><?php echo $_SESSION['address']; ?></td>
          </tr>
     </table>

     <form action="change-password.php">
          <input type="submit" value="Change Password" />
     </form>

     <form action="logout.php">
          <input type="submit" value="Logout" />
     </form>

     <!--
     <a href="change-password.php">Change Password</a>
     <a href="logout.php">Logout</a>
     -->
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
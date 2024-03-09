<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post" style="margin-top: 150px">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <!-- Nama -->
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <!-- Email -->
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
          
          <!-- Birthday -->
          <?php if (isset($_GET['birthday'])) { ?>
               <input type="text" 
                      name="birthday" 
                      placeholder="Birthday"
                      onfocus="(this.type='date')"
                      onblur="(this.type='text')"
                      value="<?php echo $_GET['birthday']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="birthday" 
                      placeholder="Birthday"
                      onfocus="(this.type='date')"
                      onblur="(this.type='text')"><br>
          <?php }?>

          <!-- Address -->
          <?php if (isset($_GET['address'])) { ?>
               <input type="text" 
                      name="address" 
                      placeholder="Address"
                      value="<?php echo $_GET['address']; ?>"><br>
          <?php }else{ ?>
               <input type="address" 
                      name="address" 
                      placeholder="Address"><br>
          <?php }?>

          <!-- Username -->
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>


     	<!-- Password -->
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <!-- Confirm Password -->
          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br>

     	<button type="submit">SIGN UP</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
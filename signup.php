<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
     <form action="signup-check.php" method="post" style="margin-top:300px;">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>First Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="First Name"><br>
                          
                          <?php } ?>

<label>Middle Name</label>
          <?php if (isset($_GET['mname'])) { ?>
               <input type="text" 
                      name="mname" 
                      placeholder="Middle Name"
                      value="<?php echo $_GET['mname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="mname" 
                      placeholder="Middle Name" ><br>
                         
                          <?php } ?>

 <label>Last Name</label>
          <?php if (isset($_GET['lname'])) { ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name"
                      value="<?php echo $_GET['lname']; ?>" required><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Last Name" required><br>







<?php } ?>

          <label>Address</label>
          <?php if (isset($_GET['address'])) { ?>
               <input type="text" 
                      name="address" 
                      placeholder="address"
                      value="<?php echo $_GET['address']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="address" 
                      placeholder="address"><br>








<?php } ?>

          <label>Phone</label>
          <?php if (isset($_GET['phone'])) { ?>
               <input type="text" 
                      name="phone" 
                      placeholder="phone"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="phone" 
                      placeholder="phone"><br>








          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="loog.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
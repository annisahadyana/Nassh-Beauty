<?php   
 include 'db_conn.php';  
 $query = "select * from users";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="adminstyle.css">  
 </head>  
 <body>  
 <header>
    <h1>ADMIN DASHBOARD</h1>
 </header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>id</th>  
           <th>Name</th>  
           <th>Username</th>  
           <th>Email</th>  
           <th>Birthday</th>  
           <th>Address</th>   
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                          <td>".$i++."</td>  
                               <td>".$result['name']."</td>  
                               <td>".$result['user_name']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['birthday']."</td>  
                               <td>".$result['address']."</td>  
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  

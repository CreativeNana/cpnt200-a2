<?php
  include('includes/config.php');
  $page_title = "Customer Page";

  // Fetch one by using GET '/customer/:id' /////
  // Use SELECT queries to retrieve one customer
  $id = $_GET['id']; 

  $sql = "SELECT * FROM customer WHERE id = '$id'";

  // get the result set
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customer = mysqli_fetch_row($result);

  if(!$customer[$id]){
    echo("<script>location.replace('error.php');</script>");
  }

  // Cleanup ////////////////////////////////////
  // free the $result from memory 
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include("includes/partials/head.php"); ?>
  </head>

   <body>
   <div id="wrapper">
      <?php include("includes/partials/header.php"); ?>

      <h2>Customers Detail Information</h2>
      <table class="customer">
         <thead>
            <tr>
               <th>First name</th>
               <th>Last name</th> 
               <th>Date of birth</th>
               <th>Driver license number</th> 
               <th>Phone number</th>
               <th>Email address</th> 
            </tr>
         </thead>
         <tbody>
            <tr>
               <td><?php echo $customer[1] ?></td>
               <td><?php echo $customer[2] ?></td>
               <td><?php echo $customer[3] ?></td>
               <td><?php echo $customer[4] ?></td>
               <td><?php echo $customer[5] ?></td>
               <td><?php echo $customer[6] ?></td>
            </tr>
         </tbody>
      </table>
      <button><a href = "index.php">Back</a></button>

      <?php include("includes/partials/footer.php"); ?>
    </div>
  </body>
</html>
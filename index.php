<?php
  include('includes/config.php');
  $page_title = "Home Page";

  // Fetch all by using GET '/customer/' ///////////////////
  // Use SELECT queries to retrieve the entire customer list
  $SQL = 'SELECT * FROM customer ORDER BY id';

  // Get the result set (set of rows)
  $result = mysqli_query($conn, $SQL);

  // Fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
  // Cleanup ////////////////////////////////////
  // free the $result from memory (good practise)
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

      <h2>Customers List</h2>
      <p>Click on the full name to view the customer details.</p>

      <table class="home">
        <thead>
          <tr>
            <th>Full name</th>
            <th>Phone number</th> 
            <th>Email address</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $customer) { ?>
          <!--tr onmouseover = "this.style.background='white'" onmouseout = "this.style.background = 'blue'"-->
          <tr>
            <td><a href="customer.php?id=<?php echo $customer["id"] ?>"><?php echo $customer["last_name"] . ', ' . $customer["first_name"] ?></a></td>
            <td><?php echo $customer["phone"] ?></td> 
            <td><?php echo $customer["email"] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>      
      <?php include("includes/partials/footer.php"); ?>
      <script>
        $('.home tr').on('click', function() {
          $(this).toggleClass('active');
        });
        </script>
    </div>
  </body>
</html>
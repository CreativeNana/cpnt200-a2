<?php
  include('includes/config.php');
  $page_title = "Error Page";
?>

<!doctype html>
<html>
<head>
  <?php include("includes/partials/head.php"); ?>
</head>
<body>
	<div id="wrapper">
    <?php include("includes/partials/header.php"); ?>
    <main class="error">
      <h1>404</h1>
      <p>Oh, this is definitely not the destination you want.</p>
      <button><a href = "index.php">Back</a></button>
      <img src="assets/images/pexels-olya-kobruseva-5428829.jpg" class="feature">
    </main>
    <?php include("includes/partials/footer.php"); ?>
  </div>
</body>
</html>
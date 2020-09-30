<!DOCTYPE html>
<html lang="en">
<?php
$pageTitle = 'About Page';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>

  <!-- Style(s) -->
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <!-- Scripts(s) -->
  <script type="text/JavaScript" src="js/scripts.js" defer></script>
</head>
<body>
  <h1><?php echo "TECHCareers | " . $pageTitle; // We can echo it, or change it, wherever we need to! ?></h1>
  <?php include './navigation.php'; // Include will execute the file RIGHT HERE?>
</body>
</html>
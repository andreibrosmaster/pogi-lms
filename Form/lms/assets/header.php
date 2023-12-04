<?php

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

}else{
  echo '<script>window.location = "../index.php";</script>';
}

require_once('connection.php');



$squery = "SELECT * FROM header WHERE id = 1;";
$resulta = mysqli_query($conn, $squery);

if (mysqli_num_rows($resulta) > 0) {
    while ($header_row = mysqli_fetch_assoc($resulta)) {
        // Display the 'textarea' and 'video' columns
        $school_name = $header_row['school_name'];
        $logo = $header_row['logo'];

    }}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Header</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 
  <link rel="stylesheet" href="/webdev2/Form/lms/css/header.css">
</head>
<body>
   


  <div class="header-dynamic">
  <div class="logo">
    <img src="<?php echo "header/$logo"?>" alt="School Logo" class="logo-ncu">
    <?php if (!empty($school_name)) { ?>
      <span class="company-name"><?php echo "$school_name"?></span>
    <?php } else { ?>
      <span class="company-name">School name not found</span>
    <?php } ?>
    </div>
 
    <div class="user-greeting">
    <p>Hello, <span id="username"> <?php echo $username; ?></span></p>
    </div>
  </div>
  


  </div>

    <!-- JavaScript -->

</body>
</html>
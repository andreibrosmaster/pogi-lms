
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/webdev2/Form/lms/css/style.css">
        <link rel="stylesheet" href="/webdev2/Form/lms/css/sidebar-button.css">
		<link rel="stylesheet" href="/webdev2/Form/lms/css/navigation-menu.css">
		<link rel="stylesheet" href="/webdev2/Form/lms/css/main.css">
    <script type="module" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@latest/dist/ionicons/ionicons.js"></script>
</head>
<body>
   


  

<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu ">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
          <ion-icon name="grid-outline"></ion-icon>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="dashboard.php" class="logo">LMS</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
            <a href="users.php"><ion-icon name="people-outline"></ion-icon> <span class="label-menu">Users</span></a>
	          </li>
            <li>
	              <a href="header.php"><ion-icon name="easel-outline" class="sideicon"></ion-icon> <span class="label-menu">Header</span></a>
	          </li>
	          <li>
	              <a href="landing-page.php"><ion-icon name="home-outline" class="sideicon"></ion-icon> <span class="label-menu">Landing Page</span></a>
	          </li>
	          <li>
              <a href="courses.php"><ion-icon name="file-tray-outline" class="sideicon"></ion-icon> <span class="label-menu">Course Box</span></a>
	          </li>
	          <li>
              <a href="teacher.php"><ion-icon name="folder-open-outline" class="sideicon"></ion-icon> <span class="label-menu">Course Content</span></a>
	          </li>
	          <li>
              <a href="calendar.php"><ion-icon name="calendar-outline" class="sideicon"></ion-icon> <span class="label-menu">Calendar</span></a>
	          </li>
            </ul>
           
        <form action="../lms/logout.php" method="post">
          <button type="submit" name="logoutBtn" class="logout-button" id="logoutButton"><ion-icon name="log-out-outline"></ion-icon></button>
        </form>
      </li>
	        

	       

	   <!--     <div class="footer copyright">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by Grupong Malakas!
						</p>
	        </div> -->

	      </div>
    	</nav>


 

  

    <!-- JavaScript -->
  
    <script src="/webdev2/Form/lms/js/jquery.min.js"></script>
    <script src="/webdev2/Form/lms/js/popper.js"></script>
    <script src="/webdev2/Form/lms/js/bootstrap.min.js"></script>
    <script src="/webdev2/Form/lms/js/main.js"></script>
</body>
</html>
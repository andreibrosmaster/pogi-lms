<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating Menu</title>

    <link rel="stylesheet" href="/webdev2/Form/lms/css/floating-navigation.css">
</head>
<body>
<div class="floating-navigation">
  <ul>
    <li class="list active">
      <a href="#">
        <span class="icon">
        <ion-icon name="people-outline"></ion-icon>
        </span>
        <span class="text">Table</span>
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
        <ion-icon name="add-outline"></ion-icon>
        </span>
        <span class="text">Add</span>
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
        <ion-icon name="create-outline"></ion-icon>
        </span>
        <span class="text">Edit</span>
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
        <ion-icon name="checkmark-done-outline"></ion-icon>
        </span>
        <span class="text">Status</span>
      </a>
    </li>
    <li class="list">
      <a href="#">
        <span class="icon">
        <ion-icon name="trash-outline"></ion-icon>
        </span>
        <span class="text">Delete</span>
      </a>
    </li>
    <div class="indicator"></div>
  </ul>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    const list = document.querySelectorAll(".list");

function activeLink() {
  list.forEach((item) => item.classList.remove("active"));
  this.classList.add("active");
}
list.forEach((item) => item.addEventListener("click", activeLink));

</script>
</body>
</html>
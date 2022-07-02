<?php
  $title = "Home";
  require "Styles&Script/header.php";
?>

    <div class="navbar navbar-secondary bg-secondary">
      <ul class="nav nav-tabs ms-3">
        <li class="nav-item">
          <a href="#" class="nav-link active">
            <img src="" alt="logo">
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <img src="" alt="News">
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <img src="" alt="message">
          </a>
        </li>
        <!-- Example single danger button -->
        <li class="btn-group">
          <img src="" class="btn btn-danger dropdown-toggle" alt="notif" data-bs-toggle="dropdown" aria-expanded="false">
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
    
<?php
  require "Styles&Script/Footer.php";
?>
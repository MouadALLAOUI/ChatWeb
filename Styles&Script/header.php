<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="styles&script/Style/myStyle.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="media/images/home.ico" alt="home" class="logo">
          <span>Logo</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <img src="media/images/news.ico" alt="News" class="logo">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="media/images/message.ico" alt="message" class="logo">
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="media/images/notif.ico" class="logo" alt="notif">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">new friends</a></li>
                <li><a class="dropdown-item" href="#">mouad liked your post</a></li>
                <li><a class="dropdown-item" href="#">moha wish you a good birth day</a></li>
                <li><hr class="dropdown-divider"></li>
                <li class="w-100 btn btn-warning" ><a class="dropdown-item" href="#">make all read</a></li>
              </ul>
            </li>
          </ul>
          <div class="btn-group dropstart">
            <button type="button" class="btn btn-light" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="media/images/users.ico" class="logo" alt="users">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">account</a></li>
              <li><a class="dropdown-item" href="#">friends list</a></li>
              <li><a class="dropdown-item" href="#">setting</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Disconnect</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
<?php
  $title = "Home";
  require "Styles&Script/header.php";
?>

<main class="container-fluid row mt-5 p-5">
  <div class="col d-flex flex-row-reverse justify-content-center border flex-wrap">
    <div class="container d-flex flex-row-reverse flex-wrap align-items-center justify-content-center shadow p-3 mb-5 bg-body rounded">
      <p class="w-100 text-center">my Profile</p>
      <div class="w-100  text-center"><img src="media/images/users.ico" alt="profile photo"></div>
      <hr>
      <ul>
        <li>devlopment</li>
        <li>morocco</li>
        <li>juillet 2022</li>
      </ul>
    </div>
    <div class="container d-flex flex-row-reverse flex-wrap align-items-center justify-content-center shadow mb-5 rounded list-group bg-body">
        <a 
          data-bs-toggle="collapse"
          href="#collapse1" role="button"
          aria-expanded="false"
          aria-controls="collapse1"
          class="btn btn-outline-dark btn-outline-dark w-100 mb-1 text-start"
          >
            <img class="logo" src="media/images/group.ico" alt="groups">
            <span>My Groups</span>
        </a>
        <div class="collapse w-100 mx-1" id="collapse1">
          <div class="card card-body">
          Some text ...
          </div>
        </div>
        <a
          data-bs-toggle="collapse"
          href="#collapse2"
          role="button"
          aria-expanded="false"
          aria-controls="collapse2"
          class="btn btn-outline-dark btn-outline-dark w-100 mb-1 text-start"
          >
          <img class="logo" src="media/images/event.ico" alt="events">
          <span>My events</span>
        </a>
        <div class="collapse w-100 mx-1" id="collapse2">
          <div class="card card-body">
          Some Other text ...
          </div>
        </div>
        <a
          data-bs-toggle="collapse"
          href="#collapse3"
          role="button"
          aria-expanded="false"
          aria-controls="collapse3"
          class="btn btn-outline-dark btn-outline-dark w-100 mb-1 text-start"
          >
          <img class="logo" src="media/images/album.ico" alt="album">
          <span>My Albums</span>
        </a>
        <div class="collapse w-100 mx-1" id="collapse3">
          <div class="card card-body">
                  <img src="media/images/image1.jpg" class="myImgSm" alt="image 1">
                  <img src="media/images/image2.jpg" class="myImgSm" alt="image 2">
                  <img src="media/images/image3.jpg" class="myImgSm" alt="image 3">
                  <img src="media/images/image4.jpg" class="myImgSm" alt="image 4">
                  <img src="media/images/image5.jpg" class="myImgSm" alt="image 5">
                  <img src="media/images/image6.jpg" class="myImgSm" alt="image 6">
          </div>
        </div>
    </div>
  </div>
  <div class="col-7 border"></div>
  <div class="col border"></div>
</main>









<?php
  require "Styles&Script/Footer.php";
?>
<?php
  $title = "Home";
  require "Styles&Script/header.php";
?>

<main class="container-fluid row mt-5 p-5">
  <div class="col d-flex flex-row-reverse justify-content-center flex-wrap">
    <div class="container d-flex flex-row-reverse flex-wrap me-auto align-items-center justify-content-center shadow p-3 mb-5 bg-body rounded">
      <p class="w-100 text-center">my Profile</p>
      <div class="w-100  text-center"><img src="media/images/users.ico" alt="profile photo"></div>
      <hr>
      <ul>
        <li>devlopment</li>
        <li>morocco</li>
        <li>juillet 2022</li>
      </ul>
    </div>
    <div class="container d-flex flex-row-reverse flex-wrap me-auto align-items-center justify-content-center shadow mb-5 rounded list-group bg-body">
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
            <div class="row mb-1">
              <div class="col"><img src="media/images/image1.jpg" class="w-100 h-100" alt="image 1"></div>
              <div class="col"><img src="media/images/image2.jpg" class="w-100 h-100" alt="image 2"></div>
            </div>
            <div class="row mb-1">
              <div class="col"><img src="media/images/image3.jpg" class="w-100 h-100" alt="image 3"></div>
              <div class="col"><img src="media/images/image4.jpg" class="w-100 h-100" alt="image 4"></div>
            </div>
            <div class="row mb-1">
              <div class="col"><img src="media/images/image5.jpg" class="w-100 h-100" alt="image 5"></div>
              <div class="col"><img src="media/images/image6.jpg" class="w-100 h-100" alt="image 6"></div>
            </div>
          </div>
        </div>
    </div>
    <div class="container shadow mb-5 p-1 rounded bg-body me-auto text-center">
      <p>Interests</p>
      <a class="btn btn-outline-primary m-1 mw-50" href="#">News</a>
      <a class="btn btn-outline-primary m-1 mw-50" href="#">W3Schools</a>
      <a class="btn btn-outline-primary m-1 mw-50" href="#">Labels</a>
      <a class="btn btn-outline-primary m-1 mw-50" href="#">Games</a>
      <a class="btn btn-outline-primary m-1 mw-50" href="#">Friends</a>
    </div>
    <div class="container alert alert-secondary alert-dismissible me-auto fade show" role="alert">
      <strong>Hey!</strong>
      <p>People are looking at your profile. <a href="#" class="">Find out who.</a></p>
      <button type="button" class="btn btn-close btn-warning" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
  <div class="col-7 border">
    <form class="container shadow p-3 mb-5 bg-body rounded">
      <h4>Social Media template by w3.css</h4>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Status: </label>
      </div>
      <div class="btn btn-secondary m-1">post</div>
    </form>
    <form class="container shadow p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col-8 fs-3">
          <img src="media/images/users.ico" alt="profile1" class="logo">
          Mouad Allaoui
        </div>
        <div class="col text-end">1 min</div>
      </div>
      <div class="row m-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sunt,
        pariatur commodi ad excepturi amet atque voluptatibus quam nemo provident obcaecati,
        nesciunt hic aspernatur deserunt mollitia accusamus perferendis? Aspernatur,
        quam!
      </div>
      <div class="row">
        <div class="col"><img src="media/images/image1.jpg" class="w-100 h-100"></div>
        <div class="col"><img src="media/images/image2.jpg" class="w-100 h-100"></div>
      </div>
      <div class="my-1">
        <button class="btn btn-secondary">liked</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comment1">comment</button>
        <div class="modal fade" id="comment1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Comments</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <form class="container shadow p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col-8 fs-3">
          <img src="media/images/users.ico" alt="profile1" class="logo">
          Ahmed
        </div>
        <div class="col text-end">1 min</div>
      </div>
      <div class="row m-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sunt,
        pariatur commodi ad excepturi amet atque voluptatibus quam nemo provident obcaecati,
        nesciunt hic aspernatur deserunt mollitia accusamus perferendis? Aspernatur,
        quam!
      </div>
      <div class="my-1">
        <button class="btn btn-secondary">liked</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comment2">
          comment
        </button>
        <div class="modal fade" id="comment2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Comments</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <form class="container shadow p-3 mb-5 bg-body rounded">
      <div class="row">
        <div class="col-8 fs-3">
          <img src="media/images/users.ico" alt="profile1" class="logo">
          Mouad Allaoui
        </div>
        <div class="col text-end">1 min</div>
      </div>
      <div class="row m-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sunt,
        pariatur commodi ad excepturi amet atque voluptatibus quam nemo provident obcaecati,
        nesciunt hic aspernatur deserunt mollitia accusamus perferendis? Aspernatur,
        quam!
      </div>
      <div class="row">
        <div class="col"><img src="media/images/image1.jpg" class="w-100 h-100"></div>
        <div class="col"><img src="media/images/image2.jpg" class="w-100 h-100"></div>
      </div>
      <div class="my-1">
        <button class="btn btn-secondary">liked</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comment3">
          comment
        </button>
        <div class="modal fade" id="comment3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Comments</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col border"></div>
</main>









<?php
  require "Styles&Script/Footer.php";
?>
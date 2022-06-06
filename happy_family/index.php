<?php

include "database.php";
$details = mysqli_query($connection, "SELECT * FROM `messages`");

?>



<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>chat</title>
  <link rel="stylesheet" href="css/bootstrap.rtl.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="" width="30" height="30">
          خانواده شاد

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="row mt-5">
      <div class="col-12">

        <?php foreach ($details as $detail) : ?>

          <ul class="list-group ">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold"><?php echo $detail["name"]; ?></div>
                <?php echo $detail["text"]; ?>
              </div>
              <span class="badge bg-primary rounded-pill"><?php echo $detail["time"]; ?></span>
            </li>

          </ul>
        <?php endforeach; ?>

      </div>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <img src="img/plus.png" width="35" />
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ارسال پیام</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="post" action="new_message.php">
              <div class="form-group">
                <label for="exampleInputEmail1">نام</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">پیام</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <button type="submit " class="btn btn-primary mt-3">ارسال</button>
            </form>
          </div>

        </div>
      </div>
    </div>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
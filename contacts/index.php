<?php

include "database.php";
$details = mysqli_query($connection, "SELECT * FROM `items`");

?>



<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet" href="css/bootstrap.rtl.css">
  <link rel="stylesheet" href="css/stylee.css">

</head>

<body>

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="" width="30" height="30">
          دفترچه تلفن

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">مخاطبین</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">اخیر</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              خودکار
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
                <div class="fw-bold"><?php echo $detail["name"], " ", $detail["lastname"]; ?></div>
                <br>
                <img src="img/mobile.png" alt="" width="30" height="30">
                <?php echo $detail["mobile"]; ?>
                <img src="img/phone.png" alt="" width="30" height="30">
                <?php echo $detail["phone"]; ?>
                <img src="img/email.png" alt="" width="30" height="30">
                <?php echo $detail["email"]; ?>
              </div>
              <button class=" bg-success rounded-pill" style="padding: 20px ;">
                Call

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
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">افزودن مخاطب</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form method="post" action="new_item.php">
              <div class="form-group">
                <label for="exampleInputEmail1">نام</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">نام خانوادگی</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">ایمیل</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">شماره موبایل</label>
                <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">شماره تلفن ثابت </label>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <button type="submit " class="btn btn-primary mt-3">افزودن</button>
            </form>
          </div>

        </div>
      </div>
    </div>



    <!-- Button trigger modal -->
    <button type="button" class="ms-2 btn btn-danger btn-delete" data-bs-toggle="modal" data-bs-target="#exampleModal1">
      <img src="img/minus.png" width="35" />
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">حذف همه مخاطبین</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form method="post" action="delete.php">
            <div class="modal-body">
              <div class="mb-3 text-center">
              آیا مطمعنی؟
              </div>
              <div class="d-flex justify-content-center">
                <button type="button" style="margin-left: 15px;" class="btn btn-danger" data-bs-dismiss="modal">خیر</button>
                <button type="sumbit" name="yes" class="btn btn-success">بله</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>



  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
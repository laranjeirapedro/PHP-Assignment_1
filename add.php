<?php

// Include database file
include 'database.php';

$recordsObj = new database();

// Insert Record in records table
if(isset($_POST['submit'])) {
  $recordsObj->insertData($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Student Record</title>
  <meta name="description" content="Page to add and store Students Records">

  <!--  Add our Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >

  <!--  Add our custom CSS  -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- NAV -->
        <nav id="nav">
            <div class="navTop">
                <img src="img/logo.png" alt="" class="logo-img">

                <div class="dropdown">
                    <button class="dropbtn">RECORD MENU</button>
                    <div class="dropdown-content">
                        <a href="index.php">View Student Record</a>
                        <a href="add.php">Add Student Record</a>
                    </div>
                </div>

                <div class="navItem">
                    <div class="search">
                        <input type="text" placeholder="Search a Student Record" class="searchInput">
                        <img src="img/search.png" width="20" height="20" alt="" class="searchIcon">
                    </div>
                </div>
            </div>
        </nav>
    </header>
  <!-- <header>
    <h1>Add Student Record</h1>
  </header> -->
  <main>
    <section class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="card">
            <div class="card-header bg-dark text-white">
              <div class="d-flex justify-content-between align-items-center">
                  <h2 class="m-0">Insert Data</h2>
                  <a class="btn btn-success" href="index.php" role="button">Back</a>
              </div>
            </div>
            <div class="card-body bg-light">
              <form action="add.php" method="POST">
                <div class="form-group">
                  <label for="name">First Name:</label>
                  <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required="">
                </div>
                <div class="form-group">
                  <label for="name">Last Name</label>
                  <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required="">
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Enter Subject Name" required="">
                </div>
                <div class="form-group">
                  <label for="salary">Assignment:</label>
                  <input type="text" class="form-control" name="assignment" placeholder="Enter Assignment" required="">
                </div>
                <div class="form-group">
                  <label for="grade">Grade:</label>
                  <input type="text" class="form-control" name="grade" placeholder="Enter Grade" required="">
                </div>
                <input type="submit" name="submit" class="btn btn-success" style="float:right;" value="Submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer style="text-align: center; margin-top: 20px;">
    &copy; Copyright by Professior Union | All Rights Reserved
  </footer>
</body>
</html>
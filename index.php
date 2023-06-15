
<?php
  // Include database file
  include 'database.php';
  $recordsObj = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--  Add our Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >

    <!--  Add our custom CSS  -->
    <link rel="stylesheet" href="style.css">
    <title>View Student Record</title>
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

    <main class="container">
    <?php
      if (isset($_GET['msg1']) == "insert") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
        $(".alert .close").on("click", function(e) {
            $(this).parent().hide();
        });
    });
    </script>
    <section>
      <h2>View Student Records
      <a href="add.php" style="float:right;"><button class="btn btn-success">Add<i class="fas fa-plus"></i></button></a>
      </h2>
      <table class="table table-hover table-striped table-active">
        <thead>
        <tr>
          <th>Id</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Subject</th>
          <th>Assignment</th>
          <th>Grade</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $records = $recordsObj->displayData();
        foreach ($records as $record) {
          ?>
          <tr>
            <td><?php echo $record['id'] ?></td>
            <td><?php echo $record['fname'] ?></td>
            <td><?php echo $record['lname'] ?></td>
            <td><?php echo $record['subject'] ?></td>
            <td><?php echo $record['assignment'] ?></td>
            <td><?php echo $record['grade'] ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </section>
</main>

<footer>
    &copy; Copyright by Professior Union | All Rights Reserved
</footer>
</body>
</html>
<?php
include "db_conn.php";

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the user details from the database
    $sql = "SELECT * FROM `crud` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "No user ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>View User Details</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application - View User
  </nav>

  <div class="container">
    <h3 class="text-center mb-3">User Details</h3>

    <div class="card">
      <div class="card-body">
        <p><strong>First Name:</strong> <?php echo $user['first_name']; ?></p>
        <p><strong>Last Name:</strong> <?php echo $user['last_name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Gender:</strong> <?php echo $user['gender']; ?></p>
        <!-- <p><strong>Password:</strong> <?php echo $user['password']; ?></p> Display the password -->
        <a href="index.php" class="btn btn-primary">Back to List</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

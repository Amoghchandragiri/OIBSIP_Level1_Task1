<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script  type="text/Javascript" src="script.js"></script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="indoor.html">Indoor Sports</a></li>
        <li><a href="outdoor.html">Outdoor Sports</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form action="#" method="post">
        <label for="username"><b>Name</b></label>
        <input type="text" id="name" placeholder="Enter Username"
        name="name" required="true"><br><br>
        <label for="text"><b>Number</b></label>
        <input type="text" id="number" placeholder="Enter number"
        name="number" required="true"><br><br>
        <label for="text"><b>Gender</b></label>
        <input type="text" id="gender" placeholder="Enter gender"
        name="gender" required="true"><br><br>
        <label for="text"><b>Age</b></label>
        <input type="text" id="age" placeholder="Enter age"
        name="age" required="true"><br><br>
        <label for="text"><b>Pincode</b></label>
        <input type="text" id="pincode" placeholder="Enter pincode"
        name="pincode" required="true"><br><br>
        <button type="submit">Login</button><br>
    </form>
  </main>
  <footer>
    &copy; 2023 Elite Sports Center. All rights reserved.
  </footer>
</body>
</html>
<?php
    if(isset($_POST["name"])&&isset($_POST["number"])&&isset($_POST["gender"])&&isset($_POST["age"])&&isset($_POST["pincode"])){
      $name=$_POST["name"];
      $number=$_POST["number"];
      $gender=$_POST["gender"];
      $age=$_POST["age"];
      $pincode=$_POST["pincode"];
      
      
      $conn=mysqli_connect("127.0.0.1:3307","root","","sports");
      if(!$conn){
          die("Not connected".mysqli_connect_error());
      
      }
      else
      {
          echo "Connected";
          $sql="INSERT INTO `sports1`(`name`, `number`, `gender`, `age`, `pincode`) VALUES ('$name','$number','$gender','$age','$pincode')";
          $result=mysqli_query($conn,$sql);
          if($result){
              echo '<script type ="text/JavaScript">';  
              echo 'alert("Feedback successfully submitted")';  
              echo '</script>';
          }
          else{
              echo "Insertion failed";
          }
        }
    }
    else{
        echo 'Nothing';
    }

      
      
      
      
      ?>
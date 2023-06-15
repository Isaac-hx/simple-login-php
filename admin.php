<?php
    $data = unserialize(file_get_contents('data.txt'));
    if($data == null){
        header("Location: 7login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .profile-card {
      width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 20px;
    }

    .profile-card img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px;
      display: block;
      border: 5px solid lightgray;
    }

    .profile-card h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .profile-card h2 {
      font-size: 18px;
      color: #888;
      margin-bottom: 20px;
    }

    .profile-card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 20px;
    }

    .profile-card .btn {
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }

    .profile-card .btn:hover {
      background-color: #0056b3;
    }
    .my-button {
        display: inline-block;
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        }

    .my-button:hover {
        background-color: #0056b3;
    }


    </style>
</head>
<body>
    
<h1>Selamat Datang <?php echo $data["nim"];?></h1><br>
<!-- <ul>
    <li>Nama : <?php echo $data["nama"];?></li>
    <li>Nim : <?php echo $data["nim"];?></li>
    <li>Jurusan : <?php echo $data["jurusan"];?></li>
    <li><img src="img/<?php echo $data["image"];?>"></li>


</ul> -->
<div class="profile-card">
    <img src="img/<?php echo $data["image"];?>" alt="Profile Picture">
    <h1><?php echo $data["nama"];?></h1>
    <h2><?php echo $data["nim"];?></h2>
    <h2><?php echo $data["jurusan"];?></h2>
</div><br>

<a href="index.php" class="my-button">Logout</a>



</body>
</html>

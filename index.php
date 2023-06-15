<?php
//data mahasiswa
$mahasiswa = 	[
	["nama" => "Dimas Ananda Riyadi",
	"nim" => "3922250001",
    "jurusan" => "Teknik Informatika",
    "image" => "1.jpg",
    "password"=>"dimas123"],

	["nama" => "Ahmad Hamzah maulana",
	"nim" => "3922250043",
	"jurusan" => "Teknik Informatika",
    "image" => "2.jpg",
    "password"=>"hamzah281002"],

	["nama" => "Dede Farhan",
	"nim" => "3922250042",
    "jurusan" => "Teknik Informatika",
    "image" => "3.jpg",
    "password"=>"dedefarhan123"],
    
	["nama" => "Danang Setyo Wibowo",
	"nim" => "3922250048",
    "jurusan" => "Teknik Informatika",
    "image" => "4.jpg",
    "password"=>"danang123"],

	["nama" => "Ilham khoironi",
	"nim" => "3912250011",
    "jurusan" => "sistem informasi",
    "image" => "5.jpg",
    "password"=>"persija1928"],

	["nama" => "energeo joshua",
	"nim" => "3922250046",
    "jurusan" => "Teknik Informatika",
    "image" => "6.jpg",
    "password"=>"3922250046"],

	["nama" => "nurhasan",
	"nim" => "3942230001",
    "jurusan" => "manajemen informatika",
    "image" => "7.jpg",
    "password"=>"3942230001"],

	["nama" => "ahmad ridwan",
	"nim" => "3922250040",
    "jurusan" => "Teknik Informatika",
    "image" => "8.jpg",
    "password"=>"r1dwan"],

	["nama" => "Bangkit Hatri",
	"nim" => "3922250006",
    "jurusan" => "Teknik Informatika",
    "image" => "9.jpg",
    "password"=>"hatri123"],

	["nama" => "Azzahra Wizard K",
	"nim" => "3922250004",
	"jurusan" => "Teknik Informatika",
    "image" => "10.jpg",
    "password"=>"wizard123"],

	["nama" => "Muhammad Sabarudin",
	"nim" => "3922250053",
    "jurusan" => "Teknik Informatika",
    "image" => "11.jpg",
    "password"=>"sabar123"],

	["nama" => "Wasilatul Faqih",
	"nim" => "3922250058",
    "jurusan" => "Teknik Informatika",
    "image" => "12.jpg",
    "password"=>"faqih123"],

	["nama" => "Mohammad Sabir Farhan",
	"nim" => "3912250009",
    "jurusan" => "Sistem Informasi",
    "image" => "13.jpg",
    "password"=>"sbr123"],

	["nama" => "Asyraf Riayatsyah",
	"nim" => "3922250059",
    "jurusan" => "Teknik Informatika",
    "image" => "14.jpg",
    "password"=>"Asr123"],

	["nama" => "M. Awaludin Majid",
	"nim" => "3922250011",
    "jurusan" => "Teknik Informatika",
    "image" => "15.jpg",
    "password"=>"amat123"],

	["nama" => "Andrian Suherman",
	"nim" => "3912250016",
    "jurusan" => "Sistem Informasi",
    "image" => "16.jpg",
    "password"=>"ads070801"],

	["nama" => "Siti nabila",
	"nim" => "3922250057",
	"jurusan" => "teknik informatika",
    "image" => "17.jpg",
    "password"=>"NabilaPrameswari2023"],
 
  ["nama" => "Sabrina",
	"nim" => "3922250003",
	"jurusan" => "teknik informatika",
    "image" => "18.jpg",
    "password"=>"181203"],

	["nama" => "Fikri Ardiansyah Saputra",
	"nim" => "3922250047",
	"jurusan" => "teknik informatika",
    "image" => "19.jpg",
    "password"=>"saputra30"]
];
//membersihkan data 
file_put_contents('data.txt',null);

//variabel error jika nanti salah menginput username dan password
$error = false;

//cek tombol submit apakah sudah diklik
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    function main(){
        global $username,$password,$mahasiswa,$error;
        $i = 0;
        $lengtharr = count($mahasiswa);

        //melakukan perulangan pada array
        while($i<$lengtharr){
            
            //cek username & Pass
            if ($username == $mahasiswa[$i]["nim"] && $password == $mahasiswa[$i]["password"]) {
                $data = $mahasiswa[$i]; 
                file_put_contents('data.txt', serialize($data));
                header("Location: admin.php");
                exit;}
            
            $i++;}

            $error = true;
    }

    main();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif; }
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
        ul{
            list-style-type : none;
            padding:10px;
            margin : 20px;
        }
        ul li{
            width : 18%;
            margin : 10px;
            display : flex;
            flex-direction : column;
        }
        ul li input{
            padding : 8px;
            border-radius:4px;
        }
        #created{
            font-size : 8px;
        }

    </style>
</head>

<body>

    <h1>Login Admin</h1>


    <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">Username / Password Salah!</p>

    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password"  autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit" class="my-button">LOGIN</button>
            </li>
        </form>
    </ul>



        <p id="created">made by @dimasanndr/Isaac-hx</p>
</body>

</html>
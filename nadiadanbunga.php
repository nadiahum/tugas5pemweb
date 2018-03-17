<?php
date_default_timezone_set("Asia/Jakarta");

session_start();

$time = date('H');
$timestamp = date('d-m-Y H:i:s');

if ($time>=0 && $time<=11){
    $greeting = 'PAGI:)';
}
elseif ($time >=12 && $time<=14) {
    $greeting = 'SIANG:)';
}
elseif ($time>=15 && $time<=17){
    $greeting = 'SORE:)';
}
elseif ($time>18 && $time<=24) {
    $greeting = 'MALAM:)';
}
if($_SESSION['counter'] == NULL) {
    $_SESSION['counter'] = 0;
    $_SESSION['timestamps'] = array();
}
$counter = $_SESSION['counter'];
$_SESSION['timestamps'][$counter]['time'] = $timestamp;
$_SESSION['counter'] += 1;

$info=$_SERVER['HTTP_USER_AGENT'];
 

?>

<!DOCTYPE html>
<head>
<center>
    <title></title>
    <style>
    body {color: #DF013A;

            background-image: url(bulubulu.jpg);
            font-family: "Times New Roman", Times, serif;
        }
        .form-box {
            background: #F8E0E6;
            border-radius: 1px;
            min-width: 130px;
            max-width: 40%;
            padding: 10px;
            margin: 20px auto;
        }
        tr {border: 6px solid black}
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}
        </style>
</head>
<body>
       <div class="form-box">
           <h2><?php echo "SELAMAT $greeting" ?></h2>
       </div> 
        <div class="form-box">
            <h4><?php echo "WAKTU MENUJUKKAN PUKUL: " . date("h:i:s a") ?></h4>
        </div>
        <div class="form-box">
         <h5><?php echo "BROWSER YANG ANDA GUNAKAN ADALAH: $info"; ?></h5>
        </div>
        <div class="form-box">
         Halaman ini telah dikunjungi sebanyak <?php echo $counter + 1 ?> kali <br><br>   
        </div>
        
      
    </div>
</body>
</center>
</html>

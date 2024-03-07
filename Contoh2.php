<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BIODATA</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    color: #333;
    margin: 0;
    padding: 0;
  }
  //.container {
    width: 70%;
    margin: 80px auto;
    background-color: #FFEBCD;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    justify-content: flex-end;
   
  
  }
  
  h1 {
    color: #FF0000;
    font-weight: bold;
    text-align: center;
    font-size: 25px;
    
  }
  p {
    margin-bottom: 10px;
    color: #007bff;
    text-align: center;
 
     
    
  }
</style>
</head>
<body>
<div class="container">
<h1><strong>BIODATA</strong></h1>


  <?php
    $nama    = "Daniel Agustino";
    $email   = "daneljr16@mail.com";
    $jurusan = "Teknik Informatika";
    $hoby    = "Investasi";
  ?>
<p> Nama   : <?php echo $nama; ?></p>
<p> Email  : <?php echo $email; ?></p>
<p> Jurusan: <?php echo $jurusan; ?></p>
<p> Hoby   : <?php echo $hoby; ?></p>
</div>
</body>
</html>
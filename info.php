<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:bisque;
            width:full;
            height: full;
            background-size: cover;
            background-image: url(img/A.jpg);
        }
        h1{
           
            text-align: center;
            font-weight: bold;
            color:red;
        }

.full{
    border-radius: 5px;
    border: 2px solid black;
     box-shadow: 0px 0px 50px purple;
     width: 800px;
     backdrop-filter:blur(10px);
     margin-left: 100px;   
}
h2{
    color:white;
    text-align: center;
}

    </style>
</head>
<body>
    <h1>Your Summary info</h1>
    <div class="full">
<?php
$Name= $_POST["txtname"];
$Gender= $_POST["txtgender"];
$Country= $_POST["txtcountry"];
$Language= $_POST["txtlanguage"];
$Language1= $_POST["txtlanguage1"];
$Language2= $_POST["txtlanguage2"];
$Language3= $_POST["txtlanguage3"];
$Address= $_POST["txtAddress"];
$Submit= $_POST["txtSubmit"];
echo "<h1>Name: </h1> <h2>$Name<h2/> ";
echo "<h1>Gender:</h1> <h2>$Gender <h2/> ";
echo "<h1>Country:</h1> <h2>$Country<h2/>  ";
echo "<h1>Language: </h1> <h2>$Language,$Language1,$Language2,$Language3<h2/> ";
echo "<h1>Address:</h1> <h2>$Address <h2/> ";

?>
  </div>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>
    <style>
        body{
            background-image: url(img/A.jpg);
            background-size: cover;
        }
        .full {
            display: flex;
            justify-content: center;
          

        }

        .form {
            border: 2px solid black;
            backdrop-filter: blur(5px);
            box-shadow: 0px 0px 50px gray;
            padding: 20px;
            border-radius: 20px;
        }

        label {
            font-weight: bold;
       
    
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        input {
            border-radius: 5px;

        }

        button {
            background-color: black;
            color: white;
            box-shadow: 0px 0px 5px gray;
            transition: all 0.5s;
            border-radius: 5px;
            text-align: center;
            margin-left: 50px;
        }

        button:hover {
            transform: scale(1.1);
            background-color: green;
            color: white;

        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Resgister Form</h1>
    <div class="full">
        <form action="info.php" method="post" class="form">
          
            <label  for="">Name</label> <br>
            <input type="text" name="txtname"> <br>
            <label for="Gender">Gender</label> <br>
            <input type="radio" name="txtgender" value="M">M<br>
            <input type="radio" name="txtgender" value="F">F<br>
            <label for="">Country</label> <br>
            <select for="" name="txtcountry">Country<br>
                <option value="Cambodia">Cambodia</option>
                <option value="China">China</option>
                <option value="USA">USA</option>
                <option value="Thai">Thai</option>
            </select> <br>
            <label for="">Language</label> <br>
            <input type="checkbox" name="txtlanguage" value="China">China <br>
            <input type="checkbox" name="txtlanguage1" value="English">English <br>
            <input type="checkbox" name="txtlanguage2" value="Cambodia">Cambodia <br>
            <input type="checkbox" name="txtlanguage3" value="French">French<br>
            <label for="Address">Address</label> <br>
            <textarea name="txtAddress"></textarea> <br>
            <button type="Submit" name="txtSubmit" value="Submit">Submit</button>
        </form>

    </div>


</body>

</html>
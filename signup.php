<?php

include("classes/connect.php");
include("classes/signup.php");

if($_SERVER['REQUEST_METHOD'] == 'POST');
{
$signup = new Signup();
$result = $signup->evaluate($_POST);
if($ressult = ""){
  echo $result;
}




//echo "<pre>";
//print_r();
//echo "</pre>";
  
}


?>



<html>
<head>
  <title>My book | sign up</title>
</head>

<style>
  #bar{height:100px;
    background-color:rgb(59,39,152);
   color:rgb(255, 255, 255);
   padding: 4px;
   }

   #signup_button{
    background-color: #42b72a;
    width: 70px;
    text-align: center;
    padding: 4px;
    border-radius: 4px;
    float:right;
   }

   #bar2{
    background-color: grey;
    width:800px;
    margin:auto; 
    margin-top: 50px;
    font-weight:bold;
    padding: 10px;
    padding-top:50px;
    text-align:center;

   }

   #text{
    height:40px;
    width:300px;
    border-radius:4px;
    border:solid 1px #aaa;
    padding: 4px;
    font-size: 14px;

   }

   #button{
    width: 300px;
    height: 40px;
    border-radius:4px;
    font-weight: bold;
    border:none;
    background-color:rgb(59,39,152);
    color:white;

   }
</style>

<body style="font-family: tahoma;background-color;rgb(131, 140, 155);">


  <div id="bar">

    <div style="font-size: 40px;">Mybook</div>
    <div id="signup_button">log in</div>
    
  </div>


  <div id="bar2">
    sign up to Mybook<br><br>


    <form method="post" action="">
    <input  name="first_name" id="text" placeholder="First name"><br><br>
    <input  name="last_name" id="text" placeholder="Last name"><br><br>
    <span style="font-weight:normal;">Gender:</span><br>
    <select id="text" name="gender">
        <option>Male</option>
        <option>Female</option>

    </select>
    <br><br>
    <input name="email" type="text" id="text" placeholder="Email"><br><br>
    <input name="password" type="password" id="text" placeholder="Password"><br><br>
    <input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>

    <input type="submit"id="button" value="Sign up">
<br><br><br><br>

  </form>

  </div>

</body>
</html>
<?php

session_start();

if(isset($_SERVER["username"]))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username +  password";
    }
    else
    {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
    }

if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", param_username);

    $param_username = $username;

    if(mysqli_stmt_execute($stmt))
    {
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
        {
            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
            if(mysqli_stmt_fetch($stmt))
            {
                if(password_verify($password, $hashed_password))
                {
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["id"] = $id;
                    $_SESSION["loggedin"] = true;
                
                    header(location: welcome.php);
                }
            }
        }
    }
}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
    <div class="home">
        <div class="box">
            <div class="home-part1">
                <div class="btn-box">
                    <button type="btn" class="admin-btn" onclick="admin()">Student</button>
                    <button type="btn" class="teacher-btn" onclick="teacher()">Teacher</button>
                    <!--<button type="btn" class="student-btn" onclick="student()">Student</button>-->
                </div>
                
                <div class="formBx">
                    <h2>Sign In</h2>
                    <form action="welcome.php" id="admin" class="input-grp" method="POST">
                        <div class="inputBx">
                            <span>Username</span>
                            <input type="text" name="username" placeholder="Email address" required>
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="remember">
                            <label for=""><input type="checkbox">Remember me</label>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Sign In"  name="" id="">
                        </div>
                    </form>
                    <form action="welcome.php" id="teacher" class="input-grp">
                        <div class="inputBx">
                            <span>Username</span>
                            <input type="text" name="" placeholder="Email address">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="" placeholder="Password">
                        </div>
                        <div class="remember">
                            <label for=""><input type="checkbox">Remember me</label>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Sign In"  name="" id="">
                        </div>
                    </form>
                </div>
            
            </div>
            <div class="home-part2" id="slided">
                <img src="logo-removebg-preview.png" alt="" height="300" width:"100">
                <h1>EduStacks</h1>
            </div>
        </div>
        
    </div>

    <script>
        var p = document.getElementById("admin");
        var q = document.getElementById("teacher");
       //var r = document.getElementById("student");

        /*function student()
        {
            p.style.left = "-800px"
            q.style.left = "-400px"
            r.style.left = "0px"
        };*/
        function teacher()
        {
            p.style.left = "-400px"
            q.style.left = "0px"
            //r.style.left = "400px"
        };
        function admin()
        {
            p.style.left = "0px"
            q.style.left = "400px"
            //r.style.left = "800px"
        };

    </script>
</body>
</html>

<style>
body
{
    margin: 0;
    padding: 0;
    backgrond-image: url(./back.jpg);
    background: wheat;
}
.navbar{
    display: flex;
    background-color: #03192d26;
    color: whitesmoke;
   align-items: center;
    height: 80px;
    justify-content: center;
}
.heading-logo{
    display: flex;
    margin-left: 2.5%;
}
.heading-logo h1{
    font-family:Georgia, 'Times New Roman', Times, serif;
    margin-left: 8px;
    margin-top: 7%;
}
.navtabs{
    display: flex;
    margin-left: 60vw;
    align-items: center;
    text-align: center;
    justify-content: center;
}
.navtabs a{
    font-size: 1.4rem;
   margin-left: 15px;
    text-decoration: none;
    color: black;
    background-color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 18px;
    padding-right: 18px;
}
.navtabs a:hover
{
    color: #fff;
    background-color: #062642;
}
.navbtn{
    border-radius: 2px; 
}
.home
{
    position: absolute;
    width: 100%;
    height: 87.5vh;
    display: flex;
}
.box
{
    display: flex;
    margin-left: 22.5%;
    margin-top: 8.5%;
    background-color: white;
    width: 60vw;
    height: 65vh;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
}
.btn-box
{
    margin-top: 5%;
    margin-left: 10%;
}
.box .home-part1
{
    margin: 0;
    padding: 0;
    width: 50%;
    height: 100%;
    background-color: cat;
}

.box .home-part1 .admin-btn
{
    margin-left: 10%;
    margin-top: 3%;
    background-color: white;
    background: transparent;
    border: 1px solid #607d8b;
    border-radius: 10px;
    padding: 10px 45px;
    font-size: 1rem;
    cursor: pointer;
}
.box .home-part1 .teacher-btn
{
    margin-left: 2%;
    margin-top: 3%;
    background-color: white;
    background: transparent;
    border: 1px solid #607d8b;
    border-radius: 10px;
    padding: 10px 40px;
    font-size: 1rem;
    cursor: pointer;
}
.box .home-part1 .student-btn
{
    margin-left: 2%;
    margin-top: 3%;
    background: transparent;
    border: 1px solid #607d8b;
    border-radius: 10px;
    padding: 10px 30px;
    font-size: 1rem;
    
}
.box .home-part1 button[type="btn"]
{
    cursor: pointer;
    background-color: #00538e;
    color: white;
    border: none;
    font-weight: 500;
}
.box .home-part1 button[type="btn"]:hover
{
    background-color: #062642;
}
.box .home-part1 .formBx
{
    height: 330px;
    margin: none;
    margin-left: 20%;
    margin-top: 6%;
    width: 70%;
    overflow: hidden;
}
.box .home-part1 .formBx h2
{
    color: black;
    font-weight: 600;
    font-size: 1.8rem;
    margin-bottom: 20px;
    border-bottom: 4px solid #00538e;
    display: inline-block;
}
.box .home-part1 .formBx .inputBx
{
    margin-bottom: 10px;
}
.box .home-part1 .formBx .inputBx span
{
    font-size: 1rem;
    color: gray;
    font-weight: 300;
}

.box .home-part1 .formBx .inputBx input[type="submit"]
{
    cursor: pointer;
    background-color: #00538e;
    color: white;
    border: none;
    font-weight: 500;
    width: 17vw;
    margin-left: 1%;
    margin-top: 3%;
}
.box .home-part1 .formBx .inputBx input[type="submit"]:hover
{
    background-color: #062642;
}
.box .home-part1 .formBx .remember
{
    margin-bottom: 10px;
    color: #607d8b;
    font-size: 0.9rem;
    font-weight: 400;
}
.input-grp
{
    transition: 2s;
}
#admin
{
    position: relative;
}
#teacher
{
    position: relative;
    top: -220px;
    left: 450px;
}
.inputBx input
{
    width: 250px;
    border: 1px solid #607d8b;
    border-radius: 30px;
    padding: 10px 8px;
}
.box .home-part2
{
    width: 50%;
    height: 100%;
    background-color: #00538e;
    margin: 0;
    padding: 0;
}
.box .home-part2 img
{
    margin-top: 10%;
    margin-left: 20%;
}
.box .home-part2 h1
{
    color: white;
    margin-left:25%;
    margin-top: -5%;
    font-size:3.5rem;
}
</style>
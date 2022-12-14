<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="notice.css">
    <link rel="stylesheet" href="deadline.css">
    <link rel="stylesheet" href="report.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portal</title>
</head>
<body>
    
    <div class="section-1">
        <div class="navbar">
            <div class="header-logo">
                <img src="logo-removebg-preview.png" alt="" width="90" height="90">
                <h1><a href="index.php" style="text-decoration: none;">EduStacks</a></h1>
                <!--<h1>Portal</h1>--->
            </div>
            <div class="header-tabs">
                <a href="Notice.php" id="#aa">Notices </a>
                <a href="report.php">Reports </a>
                <a href="DeadLine.php">Deadlines </a>
                
            </div>
            <!--<div class="header-login">
                <a href="">Login</a>
                <button>Sign Up</button>
            </div>-->
        </div>
    </div>
    <div class="sec-2">
        <div class="place-box">
            <form action="" id="formreport">
                
                <div class="name">
                    <h3>Name:</h3>
                    <input type="text" id="name"  placeholder="Enter Name" required>
                </div>
                <div class="rollno">
                    <h3>Rollno:</h3>
                    <input type="number" id="rollno" placeholder="Enter rollno" required>
                </div>
                <div class="math">
                    <h3>Math:</h3>
                    <input type="number" id="math" placeholder="Enter math" required>
                </div>
                <div class="phy">
                    <h3>Phy:</h3>
                    <input type="number" id="phy" placeholder="Enter phy" required>
                </div>
                <div class="chem">
                    <h3>Chem:</h3>
                    <input type="number" id="chem" placeholder="Enter chem" required>
                </div>
                <div class="submit-report">
                    <button  id="submit-repo">Submit</button>
                </div>
               
                
            </form>
        </div>
        <div class="as-report" >
            <table id="as-table">
                <!--<th>Attendence Report</th>-->
                <tr>
                    <th>Name</th>
                    <th>Roll No</th>
                    <th>Math</th>
                    <th>Phys</th>
                    <th>Chem</th>
                    <th>Total</th>
                </tr>

                <tbody id="insertdata">


                </tbody>
                
            
            </table>

        </div>
    </div>
    <script src="report.js"></script>
    </body>
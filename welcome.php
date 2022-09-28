<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portal</title>
</head>
<body>
<a href="Notice.php">
<div class="home">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="notice.png" alt="" width="300px" height="300px">
    </div>
    <div class="flip-card-back">
      <h1>Notices</h1> 
      <p>They prove to be a convenient communication tool for displaying important information including events, school announcements, timetables and schedules to parents, students and teachers.</p>
    </div>
  </div>
</div>
</a>
<a href="report.php">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="report_image.png" alt="" width="300px" height="300px">
    </div>
    <div class="flip-card-back">
      <h1>Report</h1> 
      <p>Reporting is the process used to communicate knowledge gained from assessing student learning. The purpose of reporting is to provide relevant information about a student's progress to students, parents, support staff and other teachers.</p>
    </div>
  </div>
</div>
</a>

<a href="DeadLine.php">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="deadline_image.jpg" alt="" width="300px" height="300px">
    </div>
    <div class="flip-card-back">
      <h1>Deadline</h1> 
      <p>Deadlines provide a clear expectation of what's to be delivered, and when it should be delivered by. This allows students to take control of their work, and implement deadlines in their time management skills.</p>
    </div>
  </div>
</div>
</div>
</body>
</html>
</a>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.home
{
    display: flex;
}
.flip-card
{
    padding:50px;
    margin-top: 30%;
    margin-left: 35%;
    background-color: transparent;
    width: 300px;
    height: 300px;
    perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.flip-card-front i{
    margin-top: 5%;
}
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  padding: 10px;
  transform: rotateY(180deg);
}
.flip-card-back h1
{
    margin-top:10%;
    font-size: 2rem;
}
.flip-card-back p
{
    margin-top:10%;
    font-size: 1rem;
}


</style>
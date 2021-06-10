<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 15px;
  text-align: center;
  background: blue;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
  
}
/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 7px 10px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 5px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>PBKK C</h1>
</div>



<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5></h5>
    <div class="profilePicture"> 
        <img src="../assets/img/profile-1.jpg" alt = "it's me" style="height:200px;"></div>
    <h3></h3>
    <p>Hi! I'm Dicksen. This is my profile.</p>
    
    <p style="font-weight: bold;">Name</p>
    <p>Dicksen Alfersius Novian</p>
    <p style="font-weight: bold;">Birthdate</p>
    <p>July 18, 2001</p>
    <p style="font-weight : bold;">Address</p>
    <p>Mojokerto, East Java</p>
    <p style="font-weight: bold;">E-mail</p>
    <p>dicksenan@gmail.com</p>

  </div>
  <div class="main">
    <h2>My first Code Igniter Project</h2>
    <br>
    <br>
    <p style= font-size:25px >My Skills</p>
    <p style= font-size:20px>C/C++</p>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
      80%
    </div>
  </div>
  <p style= font-size:20px>HTML & CSS</p>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
  </div>
  <p style= font-size:20px>Java</p>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
  <p style= font-size:20px>Public Speaking</p>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width:84%">
      84%
    </div>
  </div>
  

   
  </div>
</div>

<div class="footer">
  <h2>PBKK C 2021</h2>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Library Metrics</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
	
    margin-left:40%;
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
   
  margin-top:5%;
  margin-left:40%;
  position: center;
  display: inline-block;
}

.dropdown-content {
	
   margin-left:40%; 
  display: none;
  position: center;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- // -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Stats</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    
  </ul>
</nav>
<!-- //-->



<br>
<h1 style=" text-align :center ; color : green;">SELECT LANGAUGE</h1>




<div class="container"> 
    <div  class="dropdown" >
      <button class="dropbtn ">Langauge</button>
        <div class="dropdown-content">
            <a href="python.php">Python</a>
            <a href="java.php">Java</a>
            <a href="javascript.php">Javascript</a>
        </div>
    </div>
</div>




 
</body>
</html>

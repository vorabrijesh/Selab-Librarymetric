<?php
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "selab";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $sql1 = 'select repo from javascriptgit';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Library Metrics</title>
    <link rel="stylesheet" href="php_checkbox.css" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
	
  margin-left: 600%;
	
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {

  
  position: relative;
  display: inline-block;
}

.dropdown-content {
	margin-left: 600%;
	
  display: none;
  position: absolute;
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
      <a class="nav-link" href="index.php">Home</a>
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
<div class="container">
<div class = "main">
<form action="compare.php" method="post">
<label class="heading">Select Javascript Libraries to Compare</label>

<?php
     if ($result = $conn -> query($sql1)) 
      {   
           $j=0;
          while ($row = $result -> fetch_row())
         {
                  
               
//                if($j%3==0)
//                {
//                    echo '<input type="checkbox" name="check_list[]" value="'.$row[0].'">'.$row[0].'<label></label><br>';
//                     
//                }
//                else
//                { 
                    echo '<input type="checkbox" name="check_list[]" value="'.$row[0].'">'.$row[0].'<label></label><br>';
                   
//                }
                $j++;
          }
          $result -> free_result();
       }
   
?>

<input type="submit" name="submit" Value="Submit"/>
</div>
</div>
</body>
</html>

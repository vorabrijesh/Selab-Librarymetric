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

  $libs = array();

  if(isset($_POST['submit']))
  {
    if(!empty($_POST['check_list'])) 
    {
        // Counting number of checked checkboxes.
        $checked_count = count($_POST['check_list']);
        //echo "You have selected following ".$checked_count." option(s): <br/>";
        // Loop to store and display values of individual checked checkbox.
        
        foreach($_POST['check_list'] as $selected) {
            array_push($libs, $selected);
        }
       
    }
    else
    {
        echo "<b>Please Select Atleast One Option.</b>";
    }
  }
  // sort($libs);
  $lib =$libs;
  $libs = implode("', '", $libs);
 

  $sql1 = "select  stars from javascriptgit where repo in ('$libs') order by repo asc";
  $sql2 = "select  num_forks from forks where repo in ('$libs') order by repo asc";
  $sql3 = "select  num_ques from soques where repo in ('$libs')order by repo asc";
  $sql4 = "select date(mod_date) from lmd where repo in ('$libs') order by repo asc";
  $sql5 = "select date(creation_date) from ldso where repo in ('$libs') order by repo asc";
  $sql6 = "select  watch from javascriptgit where repo in ('$libs') order by repo asc";
  $sql7 = "select  description from javascriptgit where repo in ('$libs') order by repo asc";
  $sql8 = "select  issues from javascriptgit where repo in ('$libs') order by repo asc";
  $sql9 = "select  licence from javascriptgit where repo in ('$libs') order by repo asc";
  $sql10 = "select releasefreq  from relfreq where repo in ('$libs') order by repo asc";
  $sql11 = "select num_proj  from projGithub where repo in ('$libs') order by repo asc";
  
  $i=0;
  for($i=0;$i<count($lib);$i++)
  {
      $lib[$i]=strtolower($lib[$i]);
  }
  sort($lib);
  

?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Library Metrics</title>
	
        <script src="jquery.min.js"></script>
        <script src="ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="static/dashboard.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


        
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
<!-- <h2 style="color:"> Chosse the best library according to your need!</h2> -->

<div class="table-responsive pt-3 pl-2 pr-2 pb-4" id="comparisontable">
            <table class="table table-striped table-bordered" >
              <thead>
                <tr>
                  <?php
                    foreach($lib as $value)
                    {
                     echo '<th class="text-center"  ><button type="button" class="btn btn-success btn-block" style="font-size: 0.8vw"><a href="#" style="color:white">' .$value.'</a></button></th>';
                    
                    }
                  ?>
                     <!-- <th class="text-center"  ><button type="button" class="btn btn-success btn-block" style="font-size: 0.8vw"><a href="https://github.com/apache/derby" style="color:white"> vuejs/vue</a></button></th>
                     <th class="text-center"  ><button type="button" class="btn btn-success btn-block" style="font-size: 0.8vw"><a href="https://github.com/h2database/h2database" style="color:white"> facebook/react</a></button></th> -->
                </tr>
              </thead>
              <tbody><div class="table-responsive pt-3 pl-2 pr-2 pb-4" id="comparisontable">
              <tr>
                    <th  colspan="20">Description</th>
                </tr>
                
                <tr>
                  
                  <?php
                      function decode($payload) {
                        return array_pop(json_decode('["'.$payload.'"]'));
                      }
                      
                      // $sql1 = "select  stars from countstars where repo in ('facebook/react','angular/angular','vuejs/vue')";
                      if ($result = $conn -> query($sql7)) 
                      {
                          while ($row = $result -> fetch_row()) {
                            //preg_replace('/[\x{10000}-\x{10FFFF}]/u', "\xEF\xBF\xBD", $row[0]);
                            echo '<td class="text-center" data-toggle="tooltip" >'.($row[0]).'</td>';
                          }
                          $result -> free_result();
                      }

                  ?>
                
                     
                </tr>

                <tr>
                    <th  colspan="20">Number of Stars on Github</th>
                </tr>
                
                <tr>
                  
                  <?php
                      // $sql1 = "select  stars from countstars where repo in ('facebook/react','angular/angular','vuejs/vue')";
                      if ($result = $conn -> query($sql1)) 
                      {
                          while ($row = $result -> fetch_row()) {
                            echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' stars</td>';
                          }
                          $result -> free_result();
                      }

                  ?>
                
                     
                </tr>

                <tr>
                    <th  colspan="20">Number of Forks on Github</th>
                </tr>
                
                <tr>
                <?php
                      // $sql2 = "select  num_forks from forks where repo in ('facebook/react','angular/angular','vuejs/vue')";
                      if ($result = $conn -> query($sql2)) 
                      {
                          while ($row = $result -> fetch_row()) {
                            echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' forks</td>';
                          }
                          $result -> free_result();
                      }

                  ?>
                     
                </tr>
                    
                <tr>
                    <th  colspan="20">Number of Question on Stackoverflow</th>
                </tr>
                
                <tr>
                  <?php
                        // $sql3 = "select  num_ques from soques where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql3)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' questions</td>';
                            }
                            $result -> free_result();
                        }

                    ?> 
                     
                </tr>
                <tr>
                    <th  colspan="20">Number of projects in Github</th>
                </tr>
                
                <tr>
                  <?php
                        // $sql3 = "select  num_ques from soques where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql11)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' projects</td>';
                            }
                            $result -> free_result();
                        }

                    ?> 
                     
                </tr>
                <tr>
                    <th  colspan="20">Watch on github</th>
                </tr>
                
                <tr>
                <?php
                      // $sql2 = "select  num_forks from forks where repo in ('facebook/react','angular/angular','vuejs/vue')";
                      if ($result = $conn -> query($sql6)) 
                      {
                          while ($row = $result -> fetch_row()) {
                            echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' watch</td>';
                          }
                          $result -> free_result();
                      }

                  ?>
                     
                </tr>
                <tr>
                    <th  colspan="20">Open Issues</th>
                </tr>
                
                <tr>
                <?php
                      // $sql2 = "select  num_forks from forks where repo in ('facebook/react','angular/angular','vuejs/vue')";
                      if ($result = $conn -> query($sql8)) 
                      {
                          while ($row = $result -> fetch_row()) {
                            echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' issues</td>';
                          }
                          $result -> free_result();
                      }

                  ?>
                     
                </tr>

               
                
                <tr>
                    <th  colspan="20">Last Modification Date</th>
                </tr>

                <tr>
                  <?php
                        // $sql4 = "select date(mod_date) from lmd where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql4)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              $diff = strtotime(date("Y-m-d")) - strtotime($row[0]);
                              //echo $diff;
                              $diff = abs(round($diff / 86400));
                              if ($diff ==0)
                              {
                                echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' i.e '.' Today</td>';
                              }
                              else 
                                echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' i.e '.$diff.' days ago</td>';
                            }
                            $result -> free_result();
                        }
                    ?>
                     
                </tr>
                <tr>
                    <th  colspan="20">Last Discussed on stackoverflow</th>
                </tr>
                <tr>
                  <?php
                        // $sql4 = "select date(mod_date) from lmd where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql5)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              $diff = strtotime(date("Y-m-d")) - strtotime($row[0]);
                              //echo $diff;
                              $diff = abs(round($diff / 86400));
                              if ($diff ==0)
                              {
                                echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' i.e '.' Today</td>';
                              }
                              else 
                                echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].' i.e '.$diff.' days ago</td>';
                            }
                            $result -> free_result();
                        }
                    ?>
                  </tr>
                <tr>
                    <th  colspan="20">Licence</th>
                </tr>
                
                <tr>
                  <?php
                        // $sql3 = "select  num_ques from soques where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql9)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              echo '<td class="text-center" data-toggle="tooltip" >'.$row[0].'</td>';
                            }
                            $result -> free_result();
                        }

                    ?> 
                     
                </tr>
                
                <tr>
                    <th  colspan="20">Release Frequency</th>
                </tr>
                
                <tr>
                  <?php
                        // $sql3 = "select  num_ques from soques where repo in ('facebook/react','angular/angular','vuejs/vue')";
                        if ($result = $conn -> query($sql10)) 
                        {
                            while ($row = $result -> fetch_row()) {
                              echo '<td class="text-center" data-toggle="tooltip" > Every '.$row[0].' days on average</td>';
                            }
                            $result -> free_result();
                        }

                    ?> 
                     
                </tr>


              </tbody>

       
  
</body>
</html>

<?php 
session_start(); 
include "dbconnection.php";
if(!$_SESSION['a'])
{
    header('location: admin.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <script src='jquery-3.0.0.js' type='text/javascript'></script>
        <script src='script.js' type='text/javascript'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  .delete{
    color: red;
}

.delete:hover{
	cursor: pointer;
}
  </style>
  
    <link rel="stylesheet" href="style2.css">
    <title>JHIC</title>
  </head>
  <body>
  <div class="container mt-4">
   <a href="logout.php" style="float:right; border:2px solid #f99245; padding: 0px 4px; text-decoration:none; border-radius:10px 5px; background-color:#f99245; color:black">Log Out</a>
</div>
      <div class="container " id="a">
    <h3>Notice Board</h3>
  <form class="mt-4" action="insert.php" id="usrform" method="POST">
  
  

  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="date" name="dates" class="form-control" id="dates" aria-describedby="emailHelp" placeholder="Date">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Notice</label>
    <textarea name="notice" class="form-control" form="usrform" placeholder="Enter text here..."></textarea>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary ">Update Notice Board</button>
</form>
</div>
<div class='container mt-4'>
<table class="table" >
                <tr style='background: whitesmoke;'>
                    <th style="text-align:center">S.no</th>
                    <th style="text-align:center">Date</th>
                    <th style="text-align:center">Notice</th>
                    <th style="text-align:center">Delete</th>
                </tr>

                <?php 
                $query = "SELECT * FROM notice";
                $result = mysqli_query($conn,$query);

                $count = 1;
                while($row = mysqli_fetch_array($result) ){
                    $id = $row['id'];
                    $title = $row['dates'];
                    $link = $row['notice'];

                ?>
                    <tr>
                        <td align='center'><?= $count; ?></td>
                        <td align='center'><?= $title; ?></td>
                        <td align='center'><?= $link; ?></td>
                        <td align='center'><span class='delete' data-id='<?= $id; ?>'>Delete</span></td>
                    </tr>
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
   
  </body>
</html>
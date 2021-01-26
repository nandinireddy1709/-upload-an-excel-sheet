<?php 
$con = mysqli_connect('localhost','root','N@nduchinnoda17','table');

if(isset($_POST["submit"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$i = 0;
while(($file_data = fgetcsv($handle, 1000, ",")) !== false)
{	
$name = $file_data[0];
$roll = $file_data[1];
$class = $file_data[2];

$sql = mysqli_query($con,"INSERT IGNORE INTO students (name, roll,class) VALUES ('".$name."','".$roll."','".$class."')");
$i = $i + 1;
	
}
//echo $sql;
if($sql)
{
echo "You database has imported successfully. You have inserted records";
}
else
{
echo "Sorry!";
}

}
 
?>
<html>
 <head>
  <title>PHP Excel Importer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color: #0cb313b3;
  }
  .box
  {
   width:700px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  input[type="file"]{
    border:1px solid gray;
  }
  
  </style>
 </head>
 <body>
  <div class="container box">
   <form method="post" enctype="multipart/form-data">
    <div class="container-fluid">
      <h3 align="center" class="text-success" style="font-weight:600;">Excel to Mysql Importer</h3><br />
      <div class="row" style="margin-bottom:20px">
        <div class="col-md-4 col-xs-4 col-sm-4"></div>  <!-- Blank Div -->
        <div class="col-md-4 ">
          <img src="img/excel.png" height="150px" width="150px">
        </div>
      </div>
      <div class="row">
       
        <div class="col-xs-7 col-md-7 col-sm-6 col-lg-7">
        <form method="post" action="" enctype="multipart/form-data">
          Upload Excel File : <input type="file" name="file" /><br />
          <input type="submit" name="submit" value="Upload" />
       </form>
        </div>
      </div>
  </div>
   </form>
   <br />
   <br />
   
  </div>
 </body>
</html>
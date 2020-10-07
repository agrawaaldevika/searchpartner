<!DOCTYPE html>
<html lang="en">
<head>
	<title>GetHelp</title>
  <meta charset="utf-8">
<base target="_parent">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Delius+Unicase" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
<style>
table {
    border-collapse: collapse;
    width: 40%;
	margin-left:10%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr{background-color: #eeeeee ; border:1px solid;}

th {
    background-color:#555555;
    color: white;
}
</style>
</head>
<header class="top-header">
	<div class="container">
		<div class="logo">
			<img src="logo.svg" />
		</div>
		<div class="searchmenu" style="font-family: 'Delius Unicase', cursive;">
			<div class="search"><a href="dashboard.php">MY ACCOUNT</a><a class="search1" href="">search</a></div>
		</div>
		
		
	</div>
</header>
<footer>
 </div> <!-- /.container -->

		
<footer>
	
    <div class="container">
      
        <form method="GET" action="http://setfreelancer.com/socialjersey/login.php">
 <input type="text" placeholder="Type here.." name="q" required>
    <button type="submit">Search</button>
</form>  
    </div>
  </div>
<div style="font-size:30px;">
<?php
	
require_once('dbconnect.php');
if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
} else {
   $pageno = 1;
} // if

if(isset($_GET['q']) ||isset($_GET['link']))

		{
			
		
			$q=$_GET['q'];
			$q1=$q.",";
	
	$query = "SELECT count(*) FROM articleinfo WHERE keywords like '%$q1%'";
$result = mysqli_query( $conn,$query) or trigger_error("SQL", E_USER_ERROR);
$query_data = mysqli_fetch_row($result);
$numrows = $query_data[0];
$rows_per_page = 1;
$lastpage      = ceil($numrows/$rows_per_page);
$pageno = (int)$pageno;
if ($pageno > $lastpage) {
   $pageno = $lastpage;
} // if
if ($pageno < 1) {
   $pageno = 1;
} // if

$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;

$query = "SELECT * FROM articleinfo WHERE keywords like '%$q1%' $limit";
$result = mysqli_query($conn,$query) or trigger_error("SQL", E_USER_ERROR);

    
echo "<div class='view_status' style='color:gray;'>";
echo "<table>";
echo "<tr>
<th>Article</th>
</tr><br><tr>";

while(($row = mysqli_fetch_array($result)) ) {
	
   echo "<td><a target='_blank'  href=".$row['url'].">".$row['title']."</a></td>";
  
	 echo "</tr>";
}
if($result->num_rows==0){
	 echo "<td>No records found.</td>";
  
	 echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "<br><br>";



if ($pageno == 1) {
   echo "&nbsp;&nbsp; FIRST PREV ";
} else {
   echo " <a href='{$_SERVER['PHP_SELF']}?pageno=1&q=$q'>FIRST</a> ";
   $prevpage = $pageno-1;
   echo " <a href='{$_SERVER['PHP_SELF']}?pageno=$prevpage&q=$q'>PREV</a> ";
} // if

echo " ( Page $pageno of $lastpage ) ";

if ($pageno == $lastpage) {
   echo " NEXT LAST ";
} else {
   $nextpage = $pageno+1;
   echo " <a href='{$_SERVER['PHP_SELF']}?pageno=$nextpage&q=$q'>NEXT</a> ";
   echo " <a href='{$_SERVER['PHP_SELF']}?pageno=$lastpage&q=$q'>LAST</a> ";
} // if
		}
	?>

	
 <?php 
/*
if(isset($_POST['uname']) ||isset($_GET['link']))

		{
			
		
			$q=$_POST['uname'];
//	$q2=$_GET['link'];
	/*$sql2="SELECT user_designation.desig_shortcode FROM user_master,user_designation,file_movement_master
	where file_movement_master.file_recepient_per_no=user_master.per_no
	and user_master.designation_id=user_designation.desig_id AND file_movement_master.file_id='$q'";

$result2 = mysqli_query($conn,$sql2);
echo mysqli_error($conn);

$row2 = mysqli_fetch_array($result2); 
	$q1=$q.",";
	
	$sql=" SELECT * FROM articleinfo WHERE keywords like '%$q1%'";
	$result = mysqli_query($conn,$sql);
	
    
      
echo "<div class='view_status' style='color:gray;'>";
echo "<table>";
echo "<tr>
<th>Article</th>
</tr><br><tr>";

while(($row = mysqli_fetch_array($result)) ) {
	
   echo "<td><a href=".$row['url'].">".$row['title']."</a></td>";
  
	 echo "</tr>";
}
if($result->num_rows==0){
	 echo "<td>No records found.</td>";
  
	 echo "</tr>";
}
echo "</table>";
echo "</div>";

		}
 */
?><br>
  <br /> <br />

</div></footer>

  </body>
</html>
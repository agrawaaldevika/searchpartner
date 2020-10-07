<?php

define("PERPAGE_LIMIT",2);
function connectDB(){
	
	$servername="localhost";
    $username = "root";
$password = "";
$dbname = "article";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $conn;
}
function getFAQ() {
$sql = "SELECT * FROM articleinfo";
$conn=connectDB();
// getting parameters required for pagination
$currentPage = 1;
if(isset($_GET['pageNumber'])){
$currentPage = $_GET['pageNumber'];
}
$startPage = ($currentPage-1)*PERPAGE_LIMIT;
if($startPage < 0) $startPage = 0;
$href = "/perpage.php?";

//adding limits to select query
$query =  $sql . " limit " . $startPage . "," . PERPAGE_LIMIT; 
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result)) {
$questions[] = $row;
}

if(is_array($questions)){
$questions["page_links"] = paginateResults($sql,$href);
return $questions;
}
}

//function creates page links
function pagination($count, $href) {
$output = '';
if(!isset($_REQUEST["pageNumber"])) $_REQUEST["pageNumber"] = 1;
if(PERPAGE_LIMIT != 0)
$pages  = ceil($count/PERPAGE_LIMIT);

//if pages exists after loop's lower limit
if($pages>1) {
if(($_REQUEST["pageNumber"]-3)>0) {
$output = $output . "<a href='{$_SERVER['PHP_SELF']}?pageNumber=1' class='page'> 1</a>";
}
if(($_REQUEST["pageNumber"]-3)>1) {
$output = $output . '...';
}

//Loop for provides links for 2 pages before and after current page
for($i=($_REQUEST["pageNumber"]-2); $i<=($_REQUEST["pageNumber"]+2); $i++)	{
if($i<1) continue;
if($i>$pages) break;
if($_REQUEST["pageNumber"] == $i)
$output = $output . '<span id='.$i.' class="current">'.$i.'</span>';
else				
$output = $output . "<a href='{$_SERVER['PHP_SELF']}?pageNumber=" .($i) ."' class='page'>" . ($i) .'</a>';
}

//if pages exists after loop's upper limit
if(($pages-($_REQUEST["pageNumber"]+2))>1) {
$output = $output . '...';
}
if(($pages-($_REQUEST["pageNumber"]+2))>0) {
if($_REQUEST["pageNumber"] == $pages)
$output = $output . '<span id=' . ($pages) .' class="current">' . ($pages) .'</span>';
else				
$output = $output . "<a href='{$_SERVER['PHP_SELF']}?pageNumber=" .($pages) ."' class='page'>" . ($pages) .'</a>';
}

}
return $output;
}

//function calculate total records count and trigger pagination function	
function paginateResults($sql, $href) {$conn=connectDB();
$result  = mysqli_query($conn,$sql);
$count   = mysqli_num_rows($result);
$page_links = pagination($count, $href);
return $page_links;
}
?>
<html>
<head>
<title>PHP Pagination</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td>Frequently Asked Questions</td>
</tr>
<?php
connectDB();
$questions = getFAQ();
if(is_array($questions)) {
for($i=0;$i<count($questions)-1;$i++) {
?>
<tr class="tablerow">
<td><h2><?php echo $questions[$i]["title"]; ?></h2><br/>
<span class="date">Added Date: <?php echo $questions[$i]["date_created"]; ?></span></td>
</tr>
<?php
}
?>
<tr class="tableheader">
<td colspan="2"><?php echo $questions["page_links"]; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
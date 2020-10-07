<html>
    <head>
        <title>PR Article Directory Business Listing</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=	edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 3 Fixed Layout Example</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
    	
	<div class="searchBar">
		<div>
			<form action="http://127.0.0.1:8080/article/search.php" method="GET">  
				<div class="col-lg-6 form-group " style="margin-left:10%;margin-top:2%;" >                   
				
<?php
	
require_once('dbconnect.php');
echo "<input class=\"form-control\" id=\"search\" value =\"".$_GET['q']."\" name=\"q\" type=\"text\"/></div><button type=\"submit\" style=\"margin-top:2%;\" class=\"btn btn-default\">Search</button></div></form></div><div class=\"searchResult\">";
if (isset($_GET['pageno'])) {
   $pageno = $_GET['pageno'];
} else {
   $pageno = 1;
} // if
if(isset($_GET['q']) ||isset($_GET['link']))

		{
			$q=trim($_GET['q']);
			
			$condition = explode(" ",$q);
$GLOBALS['a'] ;	
$GLOBALS['x'] ;

for($x=0;$x<count($condition);$x++){
	if($x==0){
		$GLOBALS['a'] = "keywords like '%".$condition[$x]."%'";
	}else{
		$GLOBALS['a'] = $GLOBALS['a']." and keywords like '%".$condition[$x]."%'";
	}
}
for($l=0;$l<count($condition);$l++){
	if($l==0){
		$GLOBALS['m'] = "name like '%".$condition[$l]."%'";
	}else{
		$GLOBALS['m'] = $GLOBALS['m']." and name like '%".$condition[$l]."%'";
	}
}
$query = "SELECT count(*) FROM articleinfo WHERE 1=1 and (".$GLOBALS['a'].") or url like '%$q%' or title  like '%$q%' or (".$GLOBALS['m'].")";
$result = mysqli_query( $conn,$query) or trigger_error("SQL", E_USER_ERROR);
$query_data = mysqli_fetch_row($result);
$numrows = $query_data[0];
$rows_per_page = 10;
$lastpage      = ceil($numrows/$rows_per_page);
$pageno = (int)$pageno;
if ($pageno > $lastpage) {
   $pageno = $lastpage;
} // if
if ($pageno < 1) {
   $pageno = 1;
} // if

$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;

$query = "SELECT * FROM articleinfo WHERE 1=1 and (".$GLOBALS['a'].") or url like '%$q%' or title  like '%$q%' or (".$GLOBALS['m'].") $limit";
$result = mysqli_query($conn,$query) or trigger_error("SQL", E_USER_ERROR);

$GLOBALS['b']=0 ;
while(($row = mysqli_fetch_array($result)) ) {
   if($GLOBALS['b']==0){
    	echo "<div style=\"font-size: 25; margin-top:-40px;\"><u><b>Search</b></u></div>";
    	$GLOBALS['b']++;
   }		
   echo "<div class='linkText'><a href=".$row['url'].">".$row['title']."</a></div>";
}
if($result->num_rows==0){
	 echo "<div class='linkText'>No records found. Please try with another keyword(s)</div>";
}
echo "</div>";

//  Paging starts
echo "<div class=\"pagging pagination\"> Page $pageno of $lastpage <div style=\"margin-left:25%;margin-right:25%\">";
$i=0;
while($i<$lastpage){
		$i++;
		echo " <a href='{$_SERVER['PHP_SELF']}?pageno=$i&q=$q'>$i</a> ";	
	
}
}

?>
	</div>
	</div>
    </body>
<style>

.linkText{
	padding:2px;
	font-size: 20px;
    	text-decoration-color: blueviolet;
}
.searchBar{
	background-color:#fafafa;
	height:15%;
	width:100%;
	border-bottom-style: solid;
        border-bottom-width: 2px;
        border-bottom-color: rgba(0, 128, 93, 0.77);
}
.searchResult{
	height:70%;
	width:70%;
	margin-left:10%;
	padding-top:4%;
	padding-left:6%;

}

.pagging{
	height:10%;
	width:100%;
	background-color:#fafafa;
	border-top-style: solid;
        border-top-width: 2px;
        border-top-color: rgba(0, 128, 93, 0.77);
}
}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: red;
    color: blue;
    border-radius: 5px;
}

.pagination a:hover:not(.active) {
    background-color:rgba(51, 51, 51, 0.38);;
    border-radius: 5px;
}


</style>


</html>
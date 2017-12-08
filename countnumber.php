<?php 
if(isset($_POST['count'])){
	$start = $_POST['start_point'];
	$end = $_POST['end_point'];
	$find = $_POST['find'];
	for($i=$start;$i<=$end;$i++){
		$string = "$i";
		$search_string = $find;
		$array[] = substr_count($string,$search_string);
	}
	echo array_sum($array);
}
?>
<html>
<body>
<form action="" method="post">
Start Number:<input type="number" name="start_point">
End Number:<input type="number" name="end_point">
Search Number:<input type="number" name="find">
<input type="submit" name="count">
</form>
</body>
</html>
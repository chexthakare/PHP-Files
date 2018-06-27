<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<table>
			<form id="myForm" name="myForm">
				
			<tr>
				<td>First Name</td><td><input type="text" name="fname"></td>
			</tr>
			<tr>
				<td>Last Name</td><td><input type="text" name="lname"></td>
			</tr>
			<tr>
				<td>Email</td><td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Username</td><td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" id="submit" name="submit" value="submit"></td>
			</tr>
			</form>
		</table>
	</div>

	<p class="footer">If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
</div>


<script>   //no need to specify the language
 $(function(){
  $("#submit").click(function(e){  // passing down the event 
    $.ajax({
       url:'<?php echo base_url();?>welcome/add',
       type: 'POST',
       data: $("#myForm").serialize(),
       success: function(){
           alert("record added");
       },
       error: function(){
           alert("Fail")
       }
   });
   e.preventDefault(); // could also use: return false;
 });
});
</script>

</body>
</html>
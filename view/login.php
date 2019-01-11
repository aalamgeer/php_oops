<?php
 session_start();
 include_once "../class.user.php";
 $user = new User;
 if(isset($_REQUEST['submit']) == 'Login'){
	 $username = trim(htmlspecialchars($_POST['emailusername']));
	 $password = trim(htmlspecialchars($_POST['password']));
	if($user->userLogin($username,$password)){
		header("Location:home.php");
	}
 }
 if(isset($_REQUEST['q']) == 'logout'){
	$user->logout();
 }
 
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
OOP Login Module
<style><!--
            #container{width:400px; margin: 0 auto;}

--></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	 $("input[type='submit']").on('click', function(){
		 event.preventDefault();
		 console.log($(this).val());
		 submitlogin();
	 });
	 $("[href]").on('mouseover',function(){ 
		$('#showtxt').load('home.php', function(responseTxt, statusTxt, xhr){
			if(statusTxt == 'success'){
				alert('div loded successfully');
			}
			if(statusTxt == 'error'){
				alert('Error: '+xhr.status+ ": "+xhr.status);
			}
		});
	 });
	 $(document).one('click', function(){
		 alert("asfsdafg");
		 $('#showtxt').remove();
		 
	 });
 });
function submitlogin() {
	var form = document.login;
	if(form.emailusername.value == ""){
		alert( "Enter email or username." );
		return false;
	}
	else if(form.password.value == ""){
		alert( "Enter password." );
		return false;
	}
	$.ajax({
		url
	});
}

</script>

<span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;"><div id="container"></span>
<h1>Login Here</h1>
<form action="" method="post" name="login">
<table>
<tbody>
<tr>
<th>UserName or Email:</th>
<td><input type="text" name="emailusername" required="" /></td>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="password" required="" /></td>
</tr>
<tr>
<td></td>
<td><input  type="submit" name="submit" value="Login" /></td>
</tr>
<tr>
<td></td>
<td><a href="registration.php">Register new user</a></td>
</tr>
</tbody>
</table>
</form></div>
<div id='showtxt'></div>

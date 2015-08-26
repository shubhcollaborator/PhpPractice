<!DOCTYPE html>
<html>
<head>
<title>PHP Refresher</title></head>
<body>
<?php 
echo "This should appear!";

if(isset($_POST['submit'])){
	$ok = true;
	
	 if(!isset($_POST['name']) || $_POST['name'] === '' ){
		$ok = false;
	}
	
	 if(!isset($_POST['password']) || $_POST['password'] === ''){
		$ok = false;
	}
	
	if(!isset($_POST['comments']) || $_POST['comments'] === ''){
		$ok = false;
	}
	
	if(!isset($_POST['gender']) || $_POST['gender'] === ''){
		$ok = false;
	}
	
	if(!isset($_POST['tc']) || $_POST['tc'] === ''){
		$ok = false;
	}
	
	if(!isset($_POST['color']) || $_POST['color'] === ''){
		$ok = false;
	}
	
	if(!isset($_POST['languages']) || !is_array($_POST['languages']) || count($_POST['languages']) === 0){
		$ok = false;
	} 
	 
	if($ok){
printf('User name: %s
			<br>Password: %s
			<br>Gender: %s
			<br>Color: %s
			<br>Languages: %s
			<br>Comments: %s
			<br>T&amp;C: %s',
			htmlspecialchars($_POST['name'],ENT_QUOTES), $_POST['password'],$_POST['gender'],$_POST['color'],implode('  ', $_POST['languages']),$_POST['comments'],$_POST['tc']);
	}	
	else{
		
		printf('%s',' Failed');
	}
	
}
		
		

?>
<form method="post" action="" >
<label for="name">User Name:  </label>
<input type="text" name="name" />
<br>
<label for="password">Password: </label>
 <input type="password" name="password" />
<br />
Gender <br>
<label for="male">Male</label>
<input type="radio" value="male" name="gender"  />
<label for="female">Female</label>
<input type="radio" value="female"  name="gender"  />
<br>
Color:
<select name="color">
<option value="">Select</option>
<option value="red">Red</option>
<option value="blue">Blue</option>
<option value="orange">Orange</option>

</select>
<select name="languages[]" multiple size="3">
<option value="en">English</option>
<option value="sp">Spanish</option>
<option value="fr">French</option>
<option value="de">German</option>
</select>
<br>
I accept the terms and condition.
<input type="checkbox" name="tc" checked />
<br>
Comments: <textarea rows="5" name="comments" cols="`0"></textarea>
<br>
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>

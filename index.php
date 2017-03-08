<form method="get" action="index.php">
<p>Enter PIN:</p>
User Name:
<input type="text" placeholder="User Name" name="username">
<br/>
<span>Years:</span>
<select name="years">
	<option value="default"></option>
	<option value="28">28</option>
	<option value="19">19</option>
	<option value="22">22</option>
	<option value="24">24</option>
</select>
<br/>
Gender:
<input type="radio" name="gender" value="">Male</input>
<input type="radio" name="gender" value="">Female</input>
<br/>
Password:
<input type="text" placeholder="Password" name="password">
<br/>
Pin:
<input type="text" placeholder="Pin" name="enterpin">
<br/>
Confirm Pin:
<input type="text" placeholder="Confirm Pin" name="confirmpin">
<br/>
<button type="submit">Log In</button>
</form>


<?php 	

// var_dump($_GET);
// exit;

echo '<a href="index.html">Link</a>';

echo '<br/>';


//if(!empty($_GET) > 0)
if(count($_GET) > 0){
	if(isset($_GET['username']) && strlen($_GET['username']) > 5 && isset($_GET['password']) && strlen($_GET['password']) > 5 && isset($_GET['years']) && $_GET['years'] != ''){
		if(isset($_GET['enterpin']) && is_numeric($_GET['enterpin']) && isset($_GET['confirmpin']) && is_numeric($_GET['confirmpin']) && isset($_GET['gender'])){
				if($_GET['confirmpin'] === $_GET['enterpin']){
					echo "Pinovite se isti i validni";
				} else {
					echo 'Validni ama razlichni pinovi<br/>';
				}
		} else {
		 echo 'Nevaliden pin!';
		}
	} else {
		echo 'Nevaliden user name i password i/ili godini';
	}
}








?>




<?php


?>

<!DOCTYPE html>
<html>
<head>
<style>
div.container {
    width: 100%;
  
}

header, footer {
    padding: 1em;
    color: LightCoral;
    background-color: pink;
    clear: left;
    text-align: center;
	background: url(header.jpg);
	background-position: 100% 100%;
    
}




article {
   
    padding: 1em;
    overflow: hidden;
    color:PaleVioletRed;
	text-align: left;
    
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button {
    background-image: #ffffff;
    color: #C71585;
    padding: 14px 20px;
    margin: 8px 0;
    border: #C71585;
    cursor: pointer;
    width: 40%;
text-align:center;
}



/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>



</head>
<body>

<div class="container">
<header>
   <h1>MyParty</h1>
</header>

<article>
<form id="signup_form" action="#" method="POST" enctype="multipart/form-data">

		<label for="First name">First name:</label><br />
		<input id="Fname" type="text" placeholder="First Name" class="input" name="Fname"  required>
	
		<label for="Last name">Last name:</label><br />
		<input id="Lname" placeholder="First Name" class="input" name="Lname" type="text" value="" required>
    
        <label for="phone">phone number:</label><br />
		<input id="phone" placeholder="phone number" class="input" name="phone" type="text" value="" required>
	
		<label for="email">Email:</label><br />
		<input id="email" placeholder="Email" class="input" name="email" type="text" value="" required>
		<label>Password</label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<label>Repeat Password</label>
    	<input type="password" placeholder="Repeate Password" name="psw" required>
		
		<div >
		 <input class="button" type="submit" name="submit" value="Sign Up">
		 </div>

     
</div>
</form>						
</article>

<footer>Copyright &copy; MyParty.com </footer>

</div>

</body>
</html>

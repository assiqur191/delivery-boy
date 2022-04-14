<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
    <link rel="stylesheet" href="../view/css/registresion.css" type="text/css">
    
</head>
<body>
    <div>
<?php
if (isset($post['create'])){
    echo'user submitted.'
}
?>
        
    </div>
	<form name="form1" id="form1" action="../controller/RegistrationAction.php" method="post" novalidate>
		<fieldset>
			<legend><h2>Regisration Form</h2></legend>

			<table>

				<tr height="40px">
                    <td width="150px">
                        <label for="fName">First Name*:</label>
                    </td>
                    <td>
                        <input type="text" name="fname" id="firstname" placeholder="please write your first name" autofocus>
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="lastname">Last Name*:</label>
                    </td>
                    <td>
                        <input type="text" name="lastname" id="lastname" placeholder="write your last name">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label>Gender*:</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male" id="	male"><label for="male">Male</label>

						<input type="radio" name="gender" value="female" id="female"><label for="female">Female</label>
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="dob">Date of Birth*:</label>
                    </td>
                    <td>
                        <input type="Date" name="dob" id="dob">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="phone">Phone:</label>
                    </td>
                    <td>
                        <input type="tel" name="phone" id="phone" placeholder="01XXX-XXXXXX" pattern="{0}{1}[0-9]{3}-[0-9]{6}">
                    </td>
                </tr>

				<tr height="40px">

                    <td width="150px">
                        <label for="email">Email*:</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" placeholder="@gmail.com">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="username">User Name*:</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" maxlength="10" placeholder="username_123">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="pass">Password*:</label>
                    </td>
                    <td>
                        <input type="Password" name="pass" id="pass">
                    </td>
                </tr>

                <tr height="40px">

                    <td width="150px">
                        <label for="confirmPass">Confirm Password*:</label>
                    </td>
                    <td>
                        <input type="Password" name="confirmPass" id="confirmPass">
                    </td>
                </tr>

            </table>

			<input type="submit" name="submit" id="submit">

			<br><br>

			<label>Already have an account?</label><a href="../view/login.php">Login</a>


		</fieldset>
		
	</form>
</body>
</html>
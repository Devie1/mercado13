<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<title>Employee Account</title>
</head>
<body>

<ul>
  <li><a href="homelogin_admin.php">Home</a></li>
  <li><a href="record_employeeacc.php">Records</a></li>

</ul>

<center>
	<div class="container">
		<link rel="stylesheet" type="text/css" href="style_employeeacc.css">
		<form method="POST" action="add_employeeacc.php">
            
            <h1>Employee Account</h1>
        <p>Please fill in this form.</p>
            <hr>
            
            <div class="foform">
			<label>Last Name</label>
            <input type="text" name="acc_lastname" placeholder="Last Name"required>
            </div>
            
            <div class="foform">
			<label>First Name</label>
            <input type="text" name="acc_firstname" placeholder="First Name"required>
            </div>
            
            <div class="foform">
			<label>Middle Name</label>
            <input type="text" name="acc_middlename" placeholder="Middle Name"required>
            </div>
            
            <div class="foform">
			<label>Birthday</label>
            <input type="date" name="acc_birthday" required>
            </div>
       
             <div class="custom-select">
            <label>Account Type</label>
            <select id="acc_type" name="acc_type">
            <option value="Admin">Admin</option>
             <option value="Staff">Staff</option>   
            </select>
            </div>
            
             <div class="foform">
			<label>Username</label>
            <input type="text" name="acc_username" placeholder="Username"required>
            </div>
            
              <div class="foform">
            <label>Password</label><input type="password" name="acc_password" placeholder="Password"  id="toggle" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
       
<input type="checkbox" onclick="myFunction()">Show Password
<script>
function myFunction() {
  var x = document.getElementById("toggle");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>            

<script>
function clicked(e)
{
    if(!confirm('Are you sure you want to submit this form?')) {
        e.preventDefault();
    }
}
</script>

    <input type="submit" onclick="clicked(event)" />
		</form> 
	</div>
    
                <br>
    <br>
    <br>
    <div class="footer">
    <label>Barangay Baesa Information System 2021 | JTech</label> 
    
    
    </div>

				



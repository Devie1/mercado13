<!DOCTYPE html>
<html>
<head>
    <body>
        
<ul>
  <li><a href="homelogin_admin.php">Home</a></li>
  <li><a href="record_brgyclearance.php">Records</a></li>

</ul>
        <center>
            <div class="container">
    <title>BARANGAY CLEARANCE APPLICATION FORM</title>
    <link rel="stylesheet" type="text/css" href="style_brgyclearance.css">
         <form method="POST" action="add_brgyclearance.php">
             <h1>BARANGAY CLEARANCE APPLICATION FORM</h1>     
             <p>Please fill in this form. If item is not applicable indicate N/A.</p>
             <hr>
             
    <div class="foform">
    <label>Apply Date</label>  
    <input type="date" name="brgyclearance_applydate" autofocus="true"><br>
             </div>
             
      
             <div class="foform">
    <label>Last Name</label> <input type="text" name="brgyclearance_lastname" placeholder="Last Name"required>
             </div>
             
             <div class="foform">
    <label>First Name</label><input type="text" name="brgyclearance_firstname"  placeholder="First Name"required>
             </div>
             
             <div class="foform">
    <label>Middle Name</label><input type="text" name="brgyclearance_middlename" placeholder="Middle Name"required><br>
             </div>
             
             <div class="foform">
    <label>Home Address</label><br><input type="text" name="brgyclearance_homeaddress" placeholder="Home Address"required><br>
             </div>
             
             <div class="foform">
    <label>House Number</label><input type="text" name="brgyclearance_housenum" placeholder="House Number"required>
             </div>
             
             <div class="foform">
    <label> Street</label><input type="text" name="brgyclearance_streetaddress" placeholder="Street"required>
             </div>
             
             <div class="custom-select">
    <label>Barangay</label><select id="brgyclearance_brgyaddress" name="brgyclearance_brgyaddress">
    <option value="Baesa">Baesa</option> ><br></select>
             </div>
             
             <div class="custom-select">
    <label>City:</label><select id="brgy_city" name="brgyclearance_brgycity">
    <option value="Quezon City">Quezon City</option> ><br></select>
             </div>
             
             <div class="button">
    <label>Gender</label>
    <input type="radio" name="brgyclearance_gender" value="Male" required>Male
    <input type="radio" name="brgyclearance_gender" value="Female" required> Female<br>
             </div>
             
    <div class="foform">
    <label>Birthdate</label><br><input type="date" name="brgyclearance_birthdate" placeholder="Bithdate"required><br>
             </div>
             
             <div class="foform">
    <label>Birthplace</label> <input type="text" name="brgyclearance_birthplace" placeholder="Birthplace"required>
             </div>
             
             <div class="foform">
    <label>Religion</label><input type="text" name="brgyclearance_religion" placeholder="Religion"required><br>
             </div>
             
             <div class="custom-select">
    <label>Civil Status</label><select id="brgyclearance_civilstatus" name="brgyclearance_civilstatus"><br>
      <option value="Single">Single</option>
      <option value="Married">Married</option>
    <option value="Separated">Separated</option>
    <option value="Divorced">Divorced</option>
                 <option value="Widowed">Widowed</option>         </select>
             </div>
             
             <div class="foform">
    <label>Contact Number</label><input type="text" name="brgyclearance_contact"  placeholder="Contact Number"required><br>
             </div>
             
             <div class="custom-select">
    <label>Register Voter?</label><select id="brgy_registervoter" name="brgyclearance_registervoter"><br>
    <option value="YES">Yes</option>
    <option value="NO">No</option></select><br>
             </div>
             
             <div class="foform">
    <label>Father's Name</label><input type="text" name="brgyclearance_fathername"  placeholder="LN, FN, MI"required>
             </div>
             
             <div class="num">
    <label>Father's Age</label><input type="number" name="brgyclearance_fatherage"  placeholder="Age"required><br>
             </div>
             
             <div class="foform">
    <label>Father's Occupation</label><input type="text"  name="brgyclearance_fatheroccupation"  placeholder="Occupation"required><br>
             </div>
             
             <div class="foform">
    <label>Mother's Name</label><input type="text" name="brgyclearance_mothername"  placeholder="LN, FN, MI"required><br>
             </div>
             
             <div class="num">
    <label>Mother's Age</label><input type="number" name="brgyclearance_motherage"  placeholder="Age" required><br>
             </div>
             
             <div class="foform">
    <label>Mother's Occupation</label><input type="text"  name="brgyclearance_motheroccupation"  placeholder="Occupation"required><br>
             </div>
             
             <div class="foform">
    <label>Purok Leader</label> <input type="text" name="brgyclearance_purokleader"  placeholder="Purok Leader"required><br>
             </div>
             
             <div class="foform">
    <label>Purpose</label> <input type="text" name="brgyclearance_purpose" placeholder="Purpose" required>
             </div>
     
                         
        <script>
function clicked(e)
{
    if(!confirm('Are you sure you want to submit this form?')) {
        e.preventDefault();
    }
}
</script>
    <input type="submit" name="add" onclick="clicked(event)" />
        </form>
            </div>
        </center>
</body>   
    <br>
    <br>
    <br>
    <div class="footer">
    <label>Barangay Baesa Information System 2021 | JTech</label> 
    
    
    </div>
        </head></html>
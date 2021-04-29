<html>
<head>
    <title> Barangay ID </title>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
</head>
<body>
        <link rel="stylesheet" type="text/css" href="style_id.css">


        
<center>

    <ul>
<li><a href="homelogin_admin.php">HOME</a></li>
<li><a href="record_id.php">RECORDS</a></li>
    </ul>
<form action="add_id.php" method="POST" enctype="multipart/form-data">
    <h1>Barangay Identification Card</h1>
    <hr>
    <p>Click "Choose File" button to upload image:</p>  
                            <input type="file" name="image" id="profile-img" required/><br>
                                    <img src="" id="profile-img-tag" width="200px" />
      
                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
<br>

                        <div class="foform">
                            <label >Name:</label>
                            <input type="text" name="name" placeholder="FN MI LN"required/><br>
                            <br>
                            </div>
    
                         <div class="foform">
                            <label>Address</label>
                            <input type="text" name="address"placeholder="Address" required/><br>
                            <br> 
                        </div>
    
                        <div class="foform">
                            <label>Contact No.:</label>
                            <input type="text" name="contact" placeholder="Contact Number"required/><br>
                            <br>
                            </div>
    
                            <div class="foform">
                            <label>Issued on:</label>
                            <input type="text" name="issued" placeholder="mm-dd-yy"required/><br>
                            <br>
    </div>
                                <div class="foform">     
                            <label>Until:</label>
                            <input type="text" name="until"placeholder="mm-dd-yy" required/><br>
                            <br>
    </div>
                                    
           <div class="foform">                          
                            <label>Birthday:</label>
                            <input type="text" name="birthday"placeholder="mm-dd-yy" required/><br>
                            <br>
                           
    </div>
    
     <div class="foform">
                   <script>
function clicked(e)
{
    if(!confirm('Are you sure you want to submit this form?')) {
        e.preventDefault();
    }
}
</script>
   
    <input type="submit" onclick="clicked(event)" />\
    

    </div>
        </form>
            </center>
    
                <br>
    <br>
    <br>
    <div class="footer">
    <label>Barangay Baesa Information System 2021 | JTech</label> 
    
    
    </div>
</body>
</html>
 
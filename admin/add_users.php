<!DOCTYPE html>
<html>
<head>
    <title>Create New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>
    body {
        padding-top:50px;
    }
    fieldset {
        border: thin solid #ccc;
        border-radius: 4px;
        padding: 20px;
        padding-left: 40px;
        background: #fbfbfb;
    }
    legend {
        color: #678;
    }
    .form-control {
        width: 95%;
    }
    label small {
        color: #678 !important;
    }
    span.req {
        color:maroon;
        font-size: 112%;
    }
</style>
<script>
    function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
        }
    }

</script>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="register_users.php" method="post" id="fileForm" role="form">
                <div class="text-center">
                    <img src="img/index.png" class="rounded" height="60">
                </div>
                    <div class="form-group">
                        <label>Counties:</label>
                        <select class="form-control" name="county" required>
                            <option value='Select'>Select County</option>
                            <option value='Baringo'>Baringo</option>
                            <option value='Bomet'>Bomet</option>
                            <option value='Bungoma'>Bungoma</option>
                            <option value='Busia'>Busia</option>
                            <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                            <option value='Embu'>Embu</option>
                            <option value='Garissa'>Garissa</option>
                            <option value='Homa Bay'>Homa Bay</option>
                            <option value='Isiolo'>Isiolo</option>
                            <option value='Kajiado'>Kajiado</option>
                            <option value='Kakamega'>Kakamega</option>
                            <option value='Kericho'>Kericho</option>
                            <option value='Kiambu'>Kiambu</option>
                            <option value='Kilifi'>Kilifi</option>
                            <option value='Kirinyaga'>Kirinyaga</option>
                            <option value='Kisii'>Kisii</option>
                            <option value='Kisumu'>Kisumu</option>
                            <option value='Kitui'>Kitui</option>
                            <option value='Kwale'>Kwale</option>
                            <option value='Laikipia'>Laikipia</option>
                            <option value='Lamu'>Lamu</option>
                            <option value='Machakos'>Machakos</option>
                            <option value='Makueni'>Makueni</option>
                            <option value='Mandera'>Mandera</option>
                            <option value='Marsabit'>Marsabit</option>
                            <option value='Meru'>Meru</option>
                            <option value='Migori'>Migori</option>
                            <option value='Mombasa'>Mombasa</option>
                            <option value='Murang'a'>Murang'a</option>
                            <option value='Nairobi City'>Nairobi City</option>
                            <option value='Nakuru'>Nakuru</option>
                            <option value='Nandi'>Nandi</option>
                            <option value='Narok'>Narok</option>
                            <option value='Nyamira'>Nyamira</option>
                            <option value='Nyandarua'>Nyandarua</option>
                            <option value='Nyeri'>Nyeri</option>
                            <option value='Samburu'>Samburu</option>
                            <option value='Siaya'>Siaya</option>
                            <option value='Taita-Taveta'>Taita-Taveta</option>
                            <option value='Tana River'>Tana River</option>
                            <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                            <option value='Trans Nzoia'>Trans Nzoia</option>
                            <option value='Turkana'>Turkana</option>
                            <option value='Uasin Gishu'>Uasin Gishu</option>
                            <option value='Vihiga'>Vihiga</option>
                            <option value='West Pokot'>West Pokot</option>
                            <option value='wajir'>wajir</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username"><span class="req">* </span> Username: </label>
                        <input class="form-control" type="text" name="username" id = "txt" onkeyup = "Validate(this)" required />
                        <div id="errFirst"></div>
                    </div>
                    <div class="form-group">
                        <label for="password"><span class="req">* </span> Password: </label>
                        <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16"  id="pass1" /> </p>

                        <label for="password"><span class="req">* </span> Password Confirm: </label>
                        <input required name="confirm_password" type="password" class="form-control inputpass" minlength="4" maxlength="16" placeholder="Enter again to validate"  id="pass2" onkeyup="checkPass(); return false;" />
                        <span id="confirmMessage" class="confirmMessage"></span>
                    </div>


                    <div class="form-group">
                        <input class="btn btn-success" type="submit" name="register" value="Add User">
                    </div>



                </fieldset>
            </form><!-- ends register form -->
        </div><!-- ends col-6 -->

    </div>
</div>


</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    body{
        background-image: url(img/niu-niu-5HzOtV-FSlw-unsplash.jpg);
    }
</style>

<body>

<div style="margin-top:5%" class="container">

    <div class="col-sm-4">
    </div>

    <got class="row justify-content-center">

        <div class="col-sm-4" style="background:white;">
            <h2></h2>
            <form id="formID" action="verify_admin.php" method="POST">
                <div class="text-center" >
                    <img src="img/index.png" class="rounded" height="60">
                </div>
                <div class="form-group">
                    <label>Username:</label>

                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">

                </div>
                <div class="form-group">
                    <label>Password:</label>

                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">

                </div>
                <div class="form-group">
                <input type="submit" name="login" id="register" value="Login" class="btn btn-success" style="margin-left: 40%;"/></form>

              </div>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
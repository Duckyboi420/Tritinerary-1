<!-- Login Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Login_Style.css">
    <title>Login</title>
</head>
<body>
    <div class="signup">
        <h2>LOGIN</h2>
        <form action="Login_PHP.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" name="Username" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" name="Password" class="form-control" id="inputPassword3">
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>    
    </div>
</body>
</html>
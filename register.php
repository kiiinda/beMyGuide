<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be My Guide </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
<div class="containerr">
        <form action="register_handler.php" method="POST">
            <div class="card ">
                <div class="card-header p-4">
                    <h4 class="card-title text-center">BE MY GUIDE</h4>        
                </div>
                <div class="card-body">
                <label for="u_name">Name: </label>
                    <input class="form-control" type="text" name="name" required><br><br>
                    <label for="pass"> Username: </label>&nbsp;
                    <input class="form-control" type="text" name="u_name" required><br><br>
                    <label for="u_name">ID Number: </label>
                    <input class="form-control" type="number" name="u_id_num" required><br><br>
                    <input class="btn " type="submit" value="Sign Up" name="reg-btn">
                </div>
                <div class="footer text-center">
                    <h1>Already have an account?<a href="login.php">Sign In</a></h1>
                </div>
              </div>
        </form>
   
    </div>
</body>
</html>
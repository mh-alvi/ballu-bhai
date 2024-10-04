<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'guest.php';
include_once 'app/User.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User;
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];

    if ($user->register()) {
        $_SESSION['success'] = "Registration Successful!!";
    } else {
        $_SESSION['error'] = "Registration Failed!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auth System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['success'])) {
        ?>
            <div class="alert alert-success">
                <strong>Success!</strong> <?php echo $_SESSION['success']; ?>
            </div>
        <?php
            unset($_SESSION['success']);
        }
    if (isset($_SESSION['error'])) {
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
            </div>
        <?php
            unset($_SESSION['error']);
        }
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-4">
                <h2>Register form</h2>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="login.php" type="submit" class="btn btn-dark">Login</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
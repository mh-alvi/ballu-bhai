<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'auth.php';
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
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-4">
                <h2>User Dashboard</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $_SESSION['id']; ?></td>
                            <td><?php echo $_SESSION['name']; ?></td>
                            <td><?php echo $_SESSION['email']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>
            </div>
        </div>
    </div>

</body>

</html>
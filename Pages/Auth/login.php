<?php
pageAdd('include/header.php');
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
            <h2>Login form</h2>
            <form action="submit-login" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="register" type="submit" class="btn btn-dark">Register</a>
            </form>
        </div>
    </div>
</div>
<?php pageAdd('include/footer.php'); ?>
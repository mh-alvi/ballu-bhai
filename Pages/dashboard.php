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
            <a href="logout" class="btn btn-dark btn-sm">Logout</a>
        </div>
    </div>
</div>
<?php pageAdd('include/footer.php'); ?>
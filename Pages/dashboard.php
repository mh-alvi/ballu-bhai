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
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="logout" class="btn btn-dark btn-sm">Logout</a>

            <?php foreach ($posts as $post) { ?>
                <div class="card p-4">
                    <h3><a href="posts/<?php echo $post['id']; ?>"></a><?php echo $post['title']; ?></h3>
                    <h3><?php echo $post['content']; ?></h3>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
<?php pageAdd('include/footer.php'); ?>
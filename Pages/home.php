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
<div>
    <h1>Home</h1>
</div>
<?php pageAdd('include/footer.php'); ?>
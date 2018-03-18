<!-- example.com/src/pages/hello.php -->
<?php $name = isset($_GET['name'])?$_GET['name']:'world'; ?>

Hello <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>


<?php include_once('head.php'); ?>
<?php include_once('header.php'); ?>

<form action="login-connect.php" method="POST">
    <input type="text" name="usuario" placeholder="Nombre de usuario" required>
    <input type="password" name="pass" placeholder="Contraseña" required>
    <input type="submit" value="Confirmar">
</form>


<?php include_once('footer.php'); ?>
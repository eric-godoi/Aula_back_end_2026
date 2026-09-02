<form action="loging.phg" method="post">
    <?php
    $msg = $_GET['msg'] ?? "";
    if($msg == "erro" ) {
        echo "<p style='color: red;'>Usuário ou senha invalidos!</p>";
    }
    ?>
    Login <br>
    <input type="text" name="usuario"> <br>
    Senha <br>
    <input type="password" name="senha"> <br><br>
    <input type="submit" value="Entrar">


</form>
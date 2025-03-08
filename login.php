<?php
    session_start();
    $user=$_POST['txtusername'];
    $password1=$_POST['txtpassword'];
    include('koneksi.php');
    $sql = $pdo->query("SELECT * FROM tb_admin where username='$user' AND password='$password1'");
    $qry = $sql->fetch();
    $num = $sql->rowCount();
        if ($num > 0) {
            $_SESSION['USER']=$qry['id_admin'];
            header("Location: include/index.php");
        }
            ?>
            <script type="text/JavaScript">
                alert('Username Tidak Sesuai');
                document.location='index.php';
            </script>
<?php
?>
<?php 
include("config.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql  = "INSERT INTO komentar (name, email, komentar) VALUES ('$nama', '$email', '$comment')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: home.php?status=sukses');
    } else {
        header('Location: home.php?status=gagal');
    }
} else {
    die(mysqli_error($db));  
}

?>
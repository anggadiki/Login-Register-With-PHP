<?php
@include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type=$_POST['user_type'];

    $sql1 = "insert into user_form values('','$nama','$email','$pass','$user_type')";
    $q1 = mysqli_query($conn, $sql1);

    if ($pass != $cpass) {
        echo "<script>alert('konfirmasi password tidak sama!')</script>";
        
    } else {
        echo "<script>alert('berhasil memasukan data!')</script>";
        header('location:login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</body>
</head>
<body>
<div class="form-container">
    <form action="" method="post">
        <h3>Register</h3>
        <input type="text" name="nama" required placeholder="enter your name">
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="password" required placeholder="enter your password">
        <input type="password" name="cpassword" required placeholder="confirm your password">
        <select name="user_type" id="">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" name="submit" value="regiter now" class="form-btn">
        <p>already have an account ? <a href="login.php">Login Now</a></p>
    </form>
</div>
    
</body>
</html>
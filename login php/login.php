<?php
@include 'koneksi.php';

if(isset($_POST['submit'])){
    // $nama =$_POST['nama'];
    $email =$_POST['email'];
    $pass = md5($_POST['pasword']);
    // $cpass = md5($_POST['cpasword']);
    // $user_type=$_POST['user_type'];

    $select = "SELECT * from user_form where email = '$email' && password='$pass'";

$result = mysqli_query($conn,$select);

if(mysqli_num_rows($result)> 0 ){

    $row = mysqli_fetch_array($result);

    if($row['user_type']=='admin'){
        $SESSION['admin_name']= $row['name'];
        header('location:admin_page.php');

    }elseif($row['user_type']=='user'){
        $SESSION['user_name']= $row['name'];
        header('location:user_page.php');
    }

}else{
    echo "<script>alert('password atau email yang di masukan salah!')</script>";
}
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</body>
</head>
<body>
<div class="form-container">
    <form action="" method="post">
        <h3>Log In</h3>
        <input type="email" name="email" required placeholder="enter your email">
        <input type="password" name="pasword" required placeholder="enter your password">
        <input type="submit" name="submit" value="Login now" class="form-btn">
        <p>don't have an account ? <a href="register.php">Register Now</a></p>
    </form>
</div>
    
</body>
</html>
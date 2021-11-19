<?php
    session_start();
    include "koneksi.php";
?>

<html>
<head>
<title>Masuk Yuk</title>
</head>
<body> 
    <form method="post" align="center">
         
    <label> Username </label><input type="text" name="user" placeholder="masukan username"><br><br>        
        <label> Password </label><input type="password" name="pass" placeholder="hati - hati passwordnya"> <br><br>
        <label>level:</label>
            <select name="level">
                <option value="admin">Adminisator</option>
                <option value="user">Pengguna</option>
            </select>
            <br><br>
        <input type="submit" name="login" value="login"/><br>
</form>
<?php
    if (isset($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $data_user = mysqli_query ($koneksi,"SELECT * FROM data WHERE username='$user' AND password=md5('$pass')");
        $r = mysqli_fetch_array($data_user);
        $username=$r['username'];
        $password=$r['password'];
        $level=$r['level'];

        if ($user==$username && $pass=$password){
            $_SESSION['level']=$level;
            header ("location:tampilan.php");
            exit;
        }
        else{
            echo "Data yang di input salah";
        }
    }
?>
</body>
</html>

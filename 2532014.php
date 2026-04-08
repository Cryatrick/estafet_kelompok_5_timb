<?php 
$host = "10.11.11.78";
$user = "estafet_user";
$pass = "Qwerty123$%";
$db = "estafet_db";
$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die("Connection Failed: " . Mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Estafet</title>
</head>
<body>
    <label>NPM</label>
    <input type="text" name="mahasiswa_npm" required="masukan NPM">

    <button type="submit" name="login">Login</button>
    <?php 
    session_start();

    if (isset($_POST["login"])) {
        $mahasiswa_npm = mysqli_real_escape_string($conn, $_POST['mahasiswa_npm']);

        $querry = "SELECT * FROM mahasiswa WHERE mahasiswa_npm = '$mahasiswa_npm'";
        $result = mysqli_query($conn, $querry);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assic($result);

            if ($user[""] == $mahasiswa_npm) {
                $_SESSION["mahasiswa_nama"] = $user["mahasiswa_nama"]

                if ($user[""] == $mahasiswa_npm) {
        }
    }
    ?>
</body>
</html>
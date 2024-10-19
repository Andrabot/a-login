<?php
// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Tampilkan data yang akan dicek
echo "Data Login: Username = $username, Password = $password<br>";

// Membaca file user_data.txt
$file = "/data/data/com.termux/files/home/a-login/user_data.txt";
$contents = file_get_contents($file);

// Cek apakah username dan password cocok
if (strpos($contents, $username . ":" . $password) !== false) {
    echo "Login berhasil!";
} else {
    echo "Login gagal, username atau password salah.";
}
?>


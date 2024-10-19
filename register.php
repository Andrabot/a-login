<?php
// Mengambil data dari form register
$username = $_POST['username'];
$password = $_POST['password'];

// Tampilkan data yang akan ditulis
echo "Data yang akan ditulis: Username = $username, Password = $password<br>";

// Menyimpan data ke file user_data.txt di folder a-login
$data = $username . ":" . $password . "\n";

// Menulis data ke file
if(file_put_contents("/data/data/com.termux/files/home/a-login/user_data.txt", $data, FILE_APPEND)) {
    echo "Data berhasil ditulis ke user_data.txt";
} else {
    echo "Gagal menulis data!";
}
?>


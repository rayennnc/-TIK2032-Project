<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style.css">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </header>
        <script src="script.js"></script>
    </body>
    <?php
include 'koneksi.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Nama: " . $row["nama"]. "<br>" . "Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
    <main>
        <h2>Ini untuk menambahkan Data</h2>
    <form action="tambah_data.php" method="post">
    Nama:<br>
    <input type="text" name="nama">
    <br>
    Email:<br>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Tambah">
</form>

<h2>Ini untuk menghapus data</h2>
<form action="hapus_data.php" method="post">
    Nama:<br>
    <input type="text" name="nama">
    <br>
    Email:<br>
    <input type="text" name="email">
    <br><br>
    <input type="submit" value="Hapus">
</form>

    <h1>Ini adalah tampilan Home dari Website Dinamis</h1>
    <br>
    <p><b>Nama: Ryan Christian Fabian Rattu</b> </p>
    <br>
    <p><b>NIM: 220211060114</b></p>
</main>
</html>

<?php

require 'ubah-data.php';

require 'query.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

  // cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
  } else {
    echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ubah data SISWA</title>
</head>

<body>
  <h1>Ubah data SISWA</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $siswa["gambar"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $siswa["nama"]; ?>">
      </li>
      <li>
        <label for="nis">NIS : </label>
        <input type="text" name="nis" id="nis" required value="<?= $siswa["nis"]; ?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="<?= $siswa["email"]; ?>">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $siswa["jurusan"]; ?>">
      </li>
      <li>
        <label for="hobi">Hobi :</label>
        <input type="text" name="hobi" id="hobi" value="<?= $siswa["hobi"]; ?>">
      </li>
      <li>
        <label for="makanan">Makanan :</label>
        <input type="text" name="makanan" id="makanan" value="<?= $siswa["makanan"]; ?>">
      </li>
      <li>
        <label for="gambar">Gambar :</label> <br>
        <img src="img/<?= $siswa['gambar']; ?>" width="40"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>

  </form>




</body>

</html>
<?php

require_once "koneksi.php";

require_once "upload-gambar.php";

function ubah($data)
{
  global $conn;

  $id = $data["id"];
  $nis = htmlspecialchars($data["nis"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $hobi = htmlspecialchars($data["hobi"]);
  $makanan = htmlspecialchars($data["makanan"]);
  $gambarLama = htmlspecialchars($data["gambarLama"]);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }


  $query = "UPDATE siswa SET
				nis = '$nis',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				hobi = '$hobi',
				makanan = '$makanan',
				gambar = '$gambar'
			  WHERE id = $id
			";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
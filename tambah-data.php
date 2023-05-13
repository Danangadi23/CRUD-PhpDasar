<?php

require_once "koneksi.php";

require_once "upload-gambar.php";

function tambah($data)
{
  global $conn;

  $nis = htmlspecialchars($data["nis"]);
  $hobi = htmlspecialchars($data["hobi"]);
  $makanan = htmlspecialchars($data["makanan"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO siswa
				VALUES
			  ('', '$nis', '$nama', '$email', '$jurusan', '$hobi', '$makanan', '$gambar')
			";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
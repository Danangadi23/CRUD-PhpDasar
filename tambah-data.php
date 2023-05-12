<?php

require_once "koneksi.php";

require_once "upload-gambar.php";

function tambah($data)
{
  global $conn;

  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  // upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO mahasiswa
				VALUES
			  ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
			";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

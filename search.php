<?php

require_once "query.php";

function cari($keyword)
{
	$query = "SELECT * FROM siswa
				WHERE
			  nama LIKE '%$keyword%' OR
			  nis LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%' OR
			  hobi LIKE '%$keyword%' OR
			  makanan LIKE '%$keyword%'
			";
	return query($query);
}
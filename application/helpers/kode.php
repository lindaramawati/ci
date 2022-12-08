<?php

function idkodeotomatis (){
	$ci = get_instance();
	$query = "SELECT max(id_produk) as maxkode FROM produk ";
	$data = $ci->db->query($query)->row_array();
	$kode = $data['maxkode'];
	$urutan = (int) substr($kode, 1, 6);
	$urutan++;
	$char = "P";
	$kodebaru = $char . sprintf("%06s", $urutan);
	return $kodebaru;
}

 ?>
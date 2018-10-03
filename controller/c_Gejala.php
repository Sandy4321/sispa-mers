<?php 
/**
 * 
 */
class Gejala
{

	function TampilSemua()
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * from ds_gejala");
		$i = 0;
		while($d = mysqli_fetch_array($query))
		{
			$data[$i]['id'] = $d['id'];
			$data[$i]['kode'] = $d['kode'];
			$data[$i]['nama'] = $d['nama'];
			$i++;
		}
		return $data;
	}

	function InsertGejala($kode, $nama){
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "insert into ds_gejala (kode, nama)
			values('$kode', '$nama')");
	}

	function HapusGejala($id)
	{
		include "../koneksi/koneksi.php";
		mysqli_query($con, "DELETE FROM ds_gejala WHERE id = '$id'");
	}

	function EditGejala($id,$kode,$nama)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "UPDATE ds_gejala set kode='$kode',nama='$nama' WHERE id='$id'");
	}

	function TampilSatuData($id)
	{
		include "../koneksi/koneksi.php";
		$query = mysqli_query($con, "SELECT * FROM ds_gejala WHERE id = '$id'");
		$g = mysqli_fetch_object($query);
		$this->kode = $g->kode;
		$this->nama = $g->nama;
	}
}
?>
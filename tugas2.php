<?php 
echo '<center>';
	require_once 'tugas.php';

	$identitas1 = new identitas ('burung', 'putih', 'dua', 'dua');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "warnanya = ".$identitas1->get_warna().'<br>';
	echo "kakinya = ".$identitas1->get_kaki().'<br>';
	echo "matanya = ".$identitas1->get_mata().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('sapi', 'coklat', 'empat', 'dua');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "warnanya = ".$identitas1->get_warna().'<br>';
	echo "kakinya = ".$identitas1->get_kaki().'<br>';
	echo "matanya = ".$identitas1->get_mata().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	$identitas1 = new identitas ('ayam', 'hitam', 'dua', 'dua');
	
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';
	echo "Nama = ".$identitas1->get_nama().'<br>';
	echo "warnanya = ".$identitas1->get_warna().'<br>';
	echo "kakinya = ".$identitas1->get_kaki().'<br>';
	echo "matanya = ".$identitas1->get_mata().'<br>';
	echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".'<br>';

	
?>
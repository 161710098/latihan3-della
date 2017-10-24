<?php 

	class identitas {
		public $nama;
		public $warna;
		public $kaki;
		public $mata;

		function __construct ($nama, $warna, $kaki, $mata){
			$this->nama = $nama;
			$this->tempat = $warna;
			$this->kelas = $kaki;
			$this->status = $mata;
		}
		public function get_nama(){
			return $this->nama;
		}
		public function get_warna(){
			return $this->warna;
		}
		public function get_kaki(){
			return $this->kaki;
		}
		public function get_mata(){
			return $this->mata;
		}
	}

?>
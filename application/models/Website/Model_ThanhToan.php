<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_ThanhToan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getCustomerById($taikhoan){
		$sql = "SELECT * FROM khachhang WHERE TaiKhoan = ?";
		$result = $this->db->query($sql,array($taikhoan));
		return $result->result_array();
	}

	public function add($makhachhang, $soluong, $thanhtien, $diachi, $giamgia, $tencongty, $phuongthucthanhtoan){
		$data = array(
	        "MaKhachHang" => $makhachhang,
	        "SoLuong" => $soluong,
	        "ThanhTien" => $thanhtien,
	        "DiaChi" => $diachi,
	        "GiamGia" => $giamgia,
	        "TenCongTy" => $tencongty,
	        "PhuongThucThanhToan" => $phuongthucthanhtoan
	    );

	    $this->db->insert('donhang', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

	public function addDetail($madonhang, $masanpham, $soluong, $mausac){
		$data = array(
	        "MaDonHang" => $madonhang,
	        "MaSanPham" => $masanpham,
	        "SoLuong" => $soluong,
	        "MauSac" => $mausac
	    );

	    $this->db->insert('chitietdonhang', $data);
	    $lastInsertedId = $this->db->insert_id();

	    return $lastInsertedId;
	}

}

/* End of file Model_ThanhToan.php */
/* Location: ./application/models/Model_ThanhToan.php */
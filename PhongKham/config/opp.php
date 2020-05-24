<?php 
	class Database {

	private $conn;
	private $result;

	public function connect() {
		$this->conn = mysqli_connect( 'localhost', 'root' , '' , 'qly_phongkham' );

		if(!$this->conn) {
			echo 'Không thể kết nối Database';
		} else {
			mysqli_set_charset( $this->conn, 'utf8' );
			date_default_timezone_set('Asia/Ho_Chi_Minh');
		}
		return $this->conn;
	}
	public function query($sql)
	{
		if(!$this->result = mysqli_query($this->conn,$sql))
		{
			echo "error query";
		}
		return $this->result; 
	}
	public function numrow()
	{
		return mysqli_num_rows($this->result);
	}
	public function selectall_cf()
	{
		if($this->numrow()>0)
			{
				while($row = mysqli_fetch_assoc($this->result))
				{
					$data[]=$row;
				}
			}else
			{
				$data=0;
			}
			return $data;

		}


	public function select_cf()
	{
		if($this->numrow()>0)
			{
				return mysqli_fetch_assoc($this->result);
			}else
			{
				return 0;
			}
	}

	public function login($name,$pass)
	{
		$sql="SELECT * FROM nhanvien WHERE name='".$name."' AND pass='".$pass."'";
		$this->query($sql);
		return $this->select_cf();
	}

	public function benh_nhan()
	{
		$sql = "SELECT * FROM benhnhan ORDER BY id DESC";
		$this->query($sql);
		return $this->selectall_cf();
	}

	public function check_phone($phone)
	{
		$sql = "SELECT * FROM benhnhan WHERE phone = '".$phone."'";
		$this->result = $this->query($sql);
		return $this->select_cf();
	}

	public function add_benhnhan($name,$phone,$diachi,$cmnd,$ngay_sinh,$gioi_tinh,$ngay_taikham,$ghi_chu,$ngay_kham)
	{
		$sql = "INSERT INTO benhnhan (id, name, phone, diachi, cmnd, ngay_sinh, gioi_tinh, ngay_kham, ngay_taikham, ghi_chu) 
		VALUES 
		(NULL, '".$name."', '".$phone."','".$diachi."', '".$cmnd."', '".$ngay_sinh."', '".$gioi_tinh."', '".$ngay_kham."', '".$ngay_taikham."', '".$ghi_chu."')";
		return $this->query($sql);
	}
}
 ?>
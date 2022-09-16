<?php 
    require_once('dbModel.php');
    class LoginModel extends dbModel{
        public function CheckLogin($a,$b){
            $conn = $this -> connect();
            $sql = $this->execute("select * from taikhoan where TenDangNhap = '$a' and MatKhau = '$b'");
            $rs = mysqli_num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
        }
        public function CheckDangKi($a,$b){
            $conn = $this -> connect();
            $sql = $this->execute("select * from taikhoan where TenDangNhap = '$a'");
            $rs = mysqli_num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
        }
        public function addUser($a,$b){
            $conn = $this -> connect();
            $sql = $this->execute("insert into taikhoan(id,TenDangNhap,MatKhau,MaQuyen) VALUES (null,'$a','$b',2)");
        }
    }
?>
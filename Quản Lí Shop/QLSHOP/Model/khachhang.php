<?php 
    require_once('dbModel.php');
    class KHModel extends dbModel{
        public function GetDataKH(){
            $api_url = 'https://saogiay.000webhostapp.com/QLSHOP/Model/apiKH.php';

            $data = file_get_contents($api_url);
            return $data;
        }
        public function AddKH($ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $api_url = "https://saogiay.000webhostapp.com/QLSHOP/Model/addKH.php?ten='$ten'&ngaysinh='$ngaysinh'&gioitinh='$gioitinh'&diachi='$diachi'&sdt='$sdt'";

            $tb = file_get_contents($api_url);
            return $tb;
         }
         public function GetDataKHID($idkh){
            $this -> connect();
            $table = 'khachhang';
            $idname = 'MaKH';
            $dataID = $this->getDataID($table,$idname,$idkh);
            return $dataID;
         }
         public function UpdateKH($id,$ten,$ngaysinh,$gioitinh,$diachi,$sdt){
            $this -> connect();
            $sql = "UPDATE `khachhang` SET `TenKH`='$ten',`NgaySinh`='$ngaysinh',`GioiTinh`='$gioitinh',`DiaChi`='$diachi',`SDT`='$sdt' WHERE `MaKH`='$id'";
            $this->execute($sql);
         }
         public function DeleteKH($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `khachhang` WHERE MaKH = '$XoaID'";
            $this->execute($sql);
         }
         public function SearchKH($key){
            $this -> connect();
            $table = 'khachhang';
            $Searchname = 'TenKH';
            $idname ='MaKH';
            $dataID = $this->SearchData($table,$Searchname,$key,$idname);
            return $dataID;
         }
         public function GetDataKhachHang(){
            $table = 'khachhang';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
}
?>
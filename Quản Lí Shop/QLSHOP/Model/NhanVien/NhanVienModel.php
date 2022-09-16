<?php 
    require_once('Model/dbModel.php');
    class NVModel extends dbModel{
        public function GetDataNV(){
            $table = 'nhanvien';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
        public function AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu){
            $this->connect();
            $this->execute("INSERT INTO `nhanvien`(`MaNhanVien`, `TenNhanVien`,`NgaySinh`, `GioiTinh`, `DiaChi`, `SoDT`, `MaChucVu`) VALUES (null,'$tenNV', '$ngaysinh','$gioitinh','$diachi','$sdt','$machucvu')");
        }
        public function CheckNV($tenNV,$diachi){
            $this -> connect();
            $sql = $this->execute("select * from nhanvien where TenNhanVien = '$tenNV' and DiaChi ='$diachi'");
            $rs =  $this->num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
         }
         public function GetDataNVID($idNV){
            $this -> connect();
            $table = 'nhanvien';
            $idname = 'MaNhanVien';
            $dataID = $this->getDataID($table,$idname,$idNV);
            return $dataID;
         }
         public function UpdateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu){
            $this -> connect();
            $sql = "UPDATE `nhanvien` SET `TenNhanVien`='$tenNV',`NgaySinh`='$ngaysinh',`GioiTinh`='$gioitinh',`DiaChi`='$diachi',`SoDT`='$sdt',`MaChucVu`='$machucvu' WHERE `MaNhanVien`='$id'";
            $this->execute($sql);
         }
         public function DeleteNV($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `nhanvien` WHERE MaNhanVien = '$XoaID'";
            $this->execute($sql);
         }
        //  public function SearchNV($key){
        //     $this -> connect();
        //     $table = 'nhanvien';
        //     $Searchname = 'TenNhanVien';
        //     $idname ='MaNhanVien';
        //     $dataID = $this->SearchData($table,$Searchname,$key,$idname);
        //     return $dataID;
        //  }
         public function GetDataNhanVien(){
            $table = 'nhanvien';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
        public function HienThiNV(){
            $conn = $this->connect();
            $sql = $this-> execute("SELECT MaNhanVien,TenNhanVien,NgaySinh,GioiTinh,DiaChi,SoDT,TenChucVu From nhanvien JOIN chucvu on nhanvien.MaChucVu=chucvu.MaChucVu");
            
            return $sql;
        }
        public function SearchNV($key){
            $table1 = 'nhanvien';
            $table2 = 'chucvu';
            $key1 = 'nhanvien.MaChucVu';
            $key2 = 'chucvu.MaChucVu';
            $colnum = 'TenChucVU';
            $search =$key;
            $this -> connect();
            $conn = $this->connect();
$sql = $this-> execute("select * from $table1 Join $table2 ON $key1 = $key2 Where $colnum LIKE '%$search%'");
            
            return $sql;
         }
}
?>
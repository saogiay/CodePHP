<?php
require_once('dbModel.php');
class sanPhamModel extends dbModel{
    public function GetDataSanPham(){
        $table = 'sanpham';
        $this->connect();
        $data = $this->getAlldata($table);
        return $data;
    }
    public function HienThiSP(){
        $conn = $this->connect();
        $sql = $this-> execute("SELECT MaSP,TenSP,GiaNhap,GiaBan,TonKho,Image,TenLoaiSP FROM sanpham JOIN loaisanpham on sanpham.MaLoaiSP=loaisanpham.MaLoaiSP");
        return $sql;
    }
    public function ThemSanPham($TenSP,$GiaNhap,$GiaBan,$TonKho,$Image,$TenLoaiSP){
        $this-> Connect();
        $sql=$this->execute("INSERT INTO `sanpham` (MaSP, TenSP, GiaNhap, GiaBan, TonKho,Image,MaLoaiSP) VALUES (null, '$TenSP', '$GiaNhap', '$GiaBan', '$TonKho','$Image','$TenLoaiSP');");
    }
    public function CheckSP($TenSP){
        $this -> connect();
        $sql = $this->execute("select * from sanpham where TenSP = '$TenSP'");
        $rs =  $this->num_rows($sql);
        if($rs==1){
            return 1;
        }
        else{
            return 0;
        }
    }
    public function DeleteSP($XoaIDSP){
        $this -> connect();
        $sql = "DELETE FROM `sanpham` WHERE MaSP = '$XoaIDSP'";
        $this->execute($sql);
    }
    
    public function GetDataSPID($idsp){
        $this -> connect();
        $table = 'sanpham';
        $idname = 'MaSP';
        $dataID = $this->getDataID($table,$idname,$idsp);
        return $dataID;
     }
     public function UpdateSP($id,$TenSP,$GiaNhap,$GiaBan,$TonKho,$Image,$TenLoaiSP){
        $this -> connect();
        $sql = "UPDATE `sanpham` SET `TenSP` = '$TenSP', `GiaNhap` = '$GiaNhap', `GiaBan` = '$GiaBan', `TonKho` = '$TonKho',`Image` ='$Image', `MaLoaiSP` = '$TenLoaiSP'  WHERE `sanpham`.`MaSP` = $id";
        echo $sql;
        $this->execute($sql);
     }
     public function SearchSP($key){
        $table1 = 'sanpham';
        $table2 = 'loaisanpham';
        $key1 = 'sanpham.MaLoaiSP';
        $key2 = 'loaisanpham.MaLoaiSP';
        $colnum = 'TenSP';
        $search =$key;
        $this -> connect();
        $conn = $this->connect();
        $sql = $this-> execute("select * from $table1 Join $table2 ON $key1 = $key2 Where $colnum LIKE '%$search%'");
        return $sql;
     }
}
?>
<?php 
    require_once('dbModel.php');
    class HDModel extends dbModel{
        public function GetDataHD(){
            $table = 'hoadon';
            $this->connect();
            $data = $this->LKet();
            return $data;
        }
        public function AddHD($tennv,$tenkh,$tensp,$ngaylap,$soluong){
            $this->connect();
            $dt=$this->getGiaBan($tensp);
            $giaban = $dt["GiaBan"];
            $tongtien = $soluong * $giaban;
            $this->execute("INSERT INTO `hoadon` (`MaHoaDon`, `MaNhanVien`, `MaKH`, `MaSP`, `NgayLap`, `SoLuong`,`TongTien`) VALUES (NULL, '$tennv', '$tenkh', '$tensp', '$ngaylap', '$soluong','$tongtien')");
        }
        public function CheckHD($tennv,$tenkh){
            $this -> connect();
            $sql = $this->execute("select * from hoadon where MaNhanVien = '$tennv' and MaKH ='$tenkh'");
            $rs =  $this->num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
         }
         public function GetDataHDID($idhd){
            $this -> connect();
            $table = 'hoadon';
            $idname = 'MaHoaDon';
            $dataID = $this->getDataID($table,$idname,$idhd);
            return $dataID;
         }
         public function UpdateHD($id,$tennv,$tenkh,$tensp,$ngaylap,$soluong){
            $this -> connect();
            $sql = "UPDATE `hoadon` SET `MaNhanVien`='$tennv',`MaKH`='$tenkh',`MaSP`='$tensp',`NgayLap`='$ngaylap',`SoLuong`='$soluong' WHERE `MaHoaDon`='$id'";
            $this->execute($sql);
         }
         public function DeleteHD($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `hoadon` WHERE MaHoaDon = '$XoaID'";
            $this->execute($sql);
         }
         public function SearchHD($key){
            $this -> connect();
            $table = 'hoadon,khachhang,nhanvien,sanpham';
            $Searchname = 'nhanvien.MaNhanVien=hoadon.MaNhanVien and khachhang.MaKH=hoadon.MaKH and sanpham.MaSP=hoadon.MaSP and khachhang.TenKH';
            $idname ='hoadon.MaHoaDon';
            $dataID = $this->SearchData($table,$Searchname,$key,$idname);
            return $dataID;
         }
}
?>
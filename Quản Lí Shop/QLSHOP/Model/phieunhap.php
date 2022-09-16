<?php 
    require_once('dbModel.php');
    class PNModel extends dbModel{

        public function GetDataPN(){
            $this -> connect();
            $data = $this -> Lienket();
            return $data;
        }

        

        public function AddPN($manv,$mancc,$masp,$ngaynhap,$soluong){
            $this -> connect();
            $dt=$this->getGiaNhap($masp);
            $gianhap = $dt["GiaNhap"];
            $tongtien = $soluong * $gianhap;
            $sql = $this-> execute("INSERT INTO`phieunhap`(`MaPhieuNhap`,`MaNhanVien`,`MaNCC`,`MaSP`,`NgayNhap`,`SoLuong`,`TongTien`) VALUES(null,$manv,$mancc,$masp,'$ngaynhap',$soluong,$tongtien)");
        }

        public function CheckPN($manv,$mancc,$masp,$ngaynhap,$soluong){
            $conn = $this -> connect();
            $sql = $this-> execute("select * from phieunhap where MaNhanVien='$manv' and MaNCC ='$mancc' and MaSP='$masp' and NgayNhap='$ngaynhap' and SoLuong='$soluong' ");
            $rs = mysqli_num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
        }

        public function GetDataPNID($idpn){
            $this -> connect();
            $table = 'phieunhap';
            $idname = 'MaPhieuNhap';
            $dataID = $this->getDataID($table,$idname,$idpn);
            return $dataID;
         }

        public function UpdatePN($id,$manv,$mancc,$masp,$ngaynhap,$soluong){
            $this -> connect();
            $sql = "UPDATE `phieunhap` SET `MaNhanVien`='$manv',`MaNCC`='$mancc',`MaSP`='$masp',`NgayNhap`='$ngaynhap',`SoLuong`='$soluong' WHERE `MaPhieuNhap`='$id'";
            $this->execute($sql);
        }

        public function DeletePN($Xoa){
            $this -> connect();
            $sql = "DELETE FROM `phieunhap` WHERE `MaPhieuNhap` = '$Xoa'";
            $this->execute($sql);
        }

        public function SearchPN($key){
            $this -> connect();
            $table = 'phieunhap';
            $Searchname = 'TenNCC';
            $idname ='MaNCC';
            $dataID = $this->SearchData1($key);
            return $dataID;
        }

    }
?>
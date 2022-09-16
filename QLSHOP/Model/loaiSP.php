<?php
    require_once('dbModel.php');
    class loaiSPModel extends dbModel{
        public function GetDataLSP(){
            $table = 'loaisanpham';
            $this -> connect();
            $data = $this -> getAlldata($table);
            return $data;
        }
        public function CheckLSP($MaLoaiSP,$TenLoaiSP){
            $conn = $this -> connect();
            $sql = $this -> execute("SELECT * FROM loaisanpham where MaLoaiSP = '$MaLoaiSP' and TenLoaiSP='$TenLoaiSP'");
            $rs = mysqli_num_rows($sql);
            if($rs == 1){
                return 1;
            }
            else {
                return 0;
            }
        }
        public function AddLSP($TenLoaiSP){
            $this -> Connect();
            $sql = $this -> execute("INSERT INTO `loaisanpham` (`MaLoaiSP`, `TenLoaiSP`) VALUES (null, '$TenLoaiSP')");
        }
        public function DelLoaiSP($MaLoaiSP){
            $this -> Connect();
            $sql = $this -> execute("DELETE FROM `loaisanpham` WHERE `MaLoaiSP` = '$MaLoaiSP'");
        }
        public function UpdateLoaiSP($MaLoaiSP,$TenLoaiSP){
            $this-> Connect();
            $sql = $this-> execute("UPDATE `loaisanpham` SET `TenLoaiSP` = '$TenLoaiSP' WHERE `loaisanpham`.`MaLoaiSP` = '$MaLoaiSP'");
        }
        public function Sua($MaLoaiSP){
            $table = 'loaisanpham';
            $this -> connect();
            $data = $this -> getDataID($table,"MaLoaiSP",$MaLoaiSP);
            return $data;
        }
    }
?>
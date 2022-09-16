<?php
    class dbModel{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'qlshop';

        private $conn = null;
        private $result = null;

        public function Connect(){
            $this->conn = new  mysqli($this -> hostname,$this -> username,$this -> pass,$this -> dbname);
            if(!$this->conn){
                echo 'Lỗi kết nối';
            }else{
                mysqli_set_charset($this->conn,'utf8');
            }
            return $this->conn;
         }

         public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
         }

         public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
         }

         public function GetDataPN(){
            $this -> connect();
            $data = $this -> Lienket();
            return $data;
        }

        public function Lienket()
        {
           $sql = "SELECT MaPhieuNhap,TenNhanVien,TenNCC,TenSP,NgayNhap,SoLuong,(SoLuong*GiaNhap) as TongTien FROM phieunhap,nhanvien,nhacungcap,sanpham WHERE phieunhap.MaNhanVien=nhanvien.MaNhanVien AND phieunhap.MaNCC=nhacungcap.MaNCC AND phieunhap.MaSP=sanpham.MaSP";
           $this->execute($sql);
           if($this->num_rows()==0){
               $data = 0;
           }
           else{
               while($datas =$this->getData()){
                   $data[] = $datas;
               }
           }
           return $data;
        }

         public function getDataID($table,$idname,$id){
            $sql = "select * from $table where $idname = '$id'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
         }
         public function getAllData($table)
         {
            $sql = "select * from $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($datas =$this->getData()){
                    $data[] = $datas;
                }
            }
            return json_encode($data);
         }     

         public function num_rows(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
         }
         public function SearchData($table,$Searchname,$Key,$idname)
         {
            $sql = "select * from $table Where $Searchname LIKE '%$Key%' ORDER BY $idname DESC";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($datas =$this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function SearchData1($key)
         {
            $sql = "SELECT MaPhieuNhap,TenNhanVien,TenNCC,TenSP,NgayNhap,SoLuong,(SoLuong*GiaNhap) as TongTien FROM phieunhap,nhanvien,nhacungcap,sanpham WHERE phieunhap.MaNhanVien=nhanvien.MaNhanVien AND phieunhap.MaNCC=nhacungcap.MaNCC AND phieunhap.MaSP=sanpham.MaSP and TenNCC LIKE '%$key%' ORDER BY MaPhieuNhap DESC";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($datas =$this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
         }
        public function LKet(){
           $sql = "SELECT MaHoaDon,TenNhanVien,TenKH,TenSP,NgayLap,SoLuong,(SoLuong*GiaBan) as TongTien FROM hoadon,nhanvien,khachhang,sanpham WHERE HoaDon.MaNhanVien=nhanvien.MaNhanVien AND HoaDon.MaKH=khachhang.MaKH AND hoadon.MaSP=sanpham.MaSP";
           $this->execute($sql);
           if($this->num_rows()==0){
               $data = 0;
           }
           else{
               while($datas =$this->getData()){
                   $data[] = $datas;
               }
           }
           return $data;
        }
        public function getGiaBan($tensp){
           $sql = "SELECT GiaBan FROM SanPham Where MaSP='$tensp'";
           $this->execute($sql);
           if($this->num_rows()!=0){
               $data = mysqli_fetch_array($this->result);
           }
           else{
               $data = 0;
           }
           return $data;
        }
        public function getGiaNhap($tensp){
            $sql = "SELECT GiaNhap FROM SanPham Where MaSP='$tensp'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
         }
}   
?>
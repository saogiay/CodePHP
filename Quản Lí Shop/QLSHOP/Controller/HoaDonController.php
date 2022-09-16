<?php
    require_once('Model/hoadon.php');
    require_once('Model/NhanVien/NhanVienModel.php');
    require_once('Model/khachhang.php');
    require_once('Model/sanPham.php');
    class hdcontroller{
        public function ViewHD(){
            $hd = new HDModel();
            $data = $hd->getDataHD();
            require_once('View/HoaDon/hoadon.php');
        }
        public function ViewEditHD(){
            $nv = new NVModel();
            $datanv = $nv ->GetDataNhanVien();
            $kh = new KHModel();
            $datakh = $kh ->GetDataKhachHang();
            $sp = new sanPhamModel();
            $datasp = $sp ->GetDataSanPham();
            require_once('View/HoaDon/add_hoadon.php');
        }
        public function addHD($tennv,$tenkh,$tensp,$ngaylap,$soluong){
            $hd = new HDModel();
            if($ngaylap ==''||$soluong ==''){
                $this->ViewEditHD();
                echo 'Hãy điền đủ vào tất cả các mục !';
                }else{
                    $hd->AddHD($tennv,$tenkh,$tensp,$ngaylap,$soluong);
                    $this->ViewHD();
                    echo'Thêm thành công !';
                }
            }
        public function updateHD($id,$tennv,$tenkh,$tensp,$ngaylap,$soluong){
            $hd = new HDModel();
            if($ngaylap ==''||$soluong ==''){
                $this->ViewEditHD();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $hd->UpdateHD($id,$tennv,$tenkh,$tensp,$ngaylap,$soluong);
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $nv = new NVModel();
            $datanv = $nv ->GetDataNhanVien();
            $kh = new KHModel();
            $datakh = $kh ->GetDataKhachHang();
            $sp = new sanPhamModel();
            $datasp = $sp ->GetDataSanPham();
            $hd = new HDModel();
            $dataID = $hd->GetDataHDID($id);
            require_once('View/HoaDon/edit_hoadon.php');
        }
        public function DeleteHD($id){
            $hd = new HDModel();
            $hd->DeleteHD($id);
            $this->ViewHD();
            echo 'Xóa thành công';
        }
        public function SearchHD($key){
            $hd = new HDModel();
            $data = $hd->SearchHD($key);
            require_once('View/HoaDon/hoadon.php');
        }

    }
?>
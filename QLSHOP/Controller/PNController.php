<?php
    require_once('Model/phieunhap.php');
    require_once('Model/nhacungcap.php');
    require_once('Model/NhanVien/NhanVienModel.php');
    require_once('Model/sanPham.php');

    class PNController{

        public function ViewPN(){
            $pn = new PNModel();
            $data = $pn->GetDataPN();
            $data4 = $pn -> Lienket();
            require_once('View/PhieuNhap/phieunhap.php');
        }

        public function ViewDataID($id){
            $nv = new NVModel();
            $data5 = $nv -> GetDataNV(); 

            $sp = new sanPhamModel();
            $data6 = $sp -> GetDataSanPham();

            $ncc = new NCCModel();
            $data7 = $ncc -> GetDataNCC();

            $pn = new PNModel();
            $dataID = $pn->GetDataPNID($id);
            require_once('View/PhieuNhap/editpn.php');
        }

        public function ViewEditPN(){
            $nv = new NVModel();
            $data5 = $nv -> GetDataNV(); 

            $sp = new sanPhamModel();
            $data6 = $sp -> GetDataSanPham();

            $ncc = new NCCModel();
            $data7 = $ncc -> GetDataNCC();
            $pn = new PNModel();
            require_once('View/PhieuNhap/addpn.php');
        }

        public function addPN($manv,$mancc,$masp,$ngaynhap,$soluong){
            $pn = new PNModel();
            if($ngaynhap ==''||$soluong ==''){
                $this->ViewEditPN();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $pn -> CheckPN($manv,$mancc,$masp,$ngaynhap,$soluong);
                if($check == 1){
                    $this->ViewEditPN();
                    echo 'Phiếu Nhập đã tồn tại!';
                }else{
                    $pn->AddPN($manv,$mancc,$masp,$ngaynhap,$soluong);
                    $this->ViewEditPN();
                    echo'Thêm thành công !';
                }
            }
        }

        public function updatePN($id,$manv,$mancc,$masp,$ngaynhap,$soluong){
            $pn = new PNModel();
            if($ngaynhap ==''||$soluong ==''){
                $this->ViewDataID($id);
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $pn->UpdatePN($id,$manv,$mancc,$masp,$ngaynhap,$soluong);
                    $this->ViewPN();
                    echo'Sửa thành công !';
                }
            }

        public function DeletePN($id){
            $pn = new PNModel();
            $pn->DeletePN($id);
            $this->ViewPN();
            echo 'Xóa thành công';
        }

        public function SearchPN($key){
            $pn = new PNModel();
            $data = $pn->SearchPN($key);
            require_once('View/PhieuNhap/phieunhap.php');
        }
    }
?>

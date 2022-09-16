<?php
    require_once('Model/loaiSP.php');
    class LoaiSPController {
        public function ViewLoaiSP(){
            $loaiSP = new loaiSPModel();
            $data = $loaiSP -> GetDataLSP();
            require_once('View/LoaiSanPham/loaiSP.php');
        }
        public function AddLoaiSP(){
            $TenLoaiSP = isset($_POST['name']) ? $_POST['name'] : null;
            $loaiSP = new loaiSPModel();
            $loaiSP->AddLSP($TenLoaiSP);
            header("Location: /QLShopQA/Index.php?action=LoaiSP");
            exit;
        }
        public function DelLoaiSP(){
                $MaLoaiSP=$_GET['MaLoaiSP'];
                $loaiSP = new loaiSPModel();
                try {
                    $a=$loaiSP -> DelLoaiSP($MaLoaiSP);
                    echo"<script>alert('Xóa thành công');window.location='/QLShopQA/Index.php?action=LoaiSP';</script>";
                } catch (\Throwable $th) {
                   echo"<script>alert('Xóa thất bại');window.location='/QLShopQA/Index.php?action=LoaiSP';</script>";
                }
        }
        public function ViewEditLoaiSP($MaLoaiSP,$TenLoaiSP){
            $loaiSP = new loaiSPModel();
            if($TenLoaiSP==''){
                echo"<script>alert('Hãy Nhập Đầy Đủ Thông Tin');window.location='/QLShopQA/Index.php?action=LoaiSP';</script>";
            } else{
                $loaiSP->UpdateLoaiSP($MaLoaiSP,$TenLoaiSP);
                echo 'Sửa thành công !';
                header("Location: /QLShopQA/Index.php?action=LoaiSP");
            }
        }
        public function ViewDataID($MaLoaiSP){
            $loaiSP = new loaiSPModel();
            $dataID = $loaiSP->Sua($MaLoaiSP);
            require_once('View/LoaiSanPham/EditLoaiSP.php');
        }
    }
?>

<?php
    require_once('Model/NhanVien/NhanVienModel.php');
    require_once('Model/chucvu.php');
    class NVcontroller{
        public function ViewNV(){
            $nv = new NVModel();
            $data = $nv->HienThiNV();
            $cv = new CVModel();
            $data1 = $cv->GetDataCV();
            require_once('View/NhanVien/NhanVien.php');
        }
        public function ViewEditNV(){
            $cv = new CVModel();
            $data1 = $cv->GetDataCV();
            require_once('View/NhanVien/addNV.php');
        }
        public function AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu){
            $nv = new NVModel();
            $cv = new CVModel();
            $data1 = $cv->GetDataCV();
            if($tenNV ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''||$machucvu ==''){
                $this->ViewEditNV();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $nv -> CheckNV($tenNV,$diachi);
                if($check == 1){
                    $this->ViewEditNV();
                    echo ';Nhân viên đã tồn tại!';
                }else{
                    $nv->AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu);
                    $this->ViewNV();
                    echo'Thêm thành công !';
                }
            }
        }
        public function updateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu){
            $nv = new NVModel();
            $cv = new CVModel();
            $data1 = $cv->GetDataCV();
            if($tenNV ==''||$ngaysinh ==''||$gioitinh ==''||$diachi ==''||$sdt ==''||$machucvu ==''){
                $this->ViewEditNV();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $nv->UpdateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu);
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $cv = new CVModel();
            $data1 = $cv->GetDataCV();
            $nv = new NVModel();
            $dataID = $nv->GetDataNVID($id);
            require_once('View/NhanVien/editNV.php');
        }
        public function DeleteNV($id){
            $nv = new NVModel();
            $nv->DeleteNV($id);
            $this->ViewNV();
            echo 'Xóa thành công';
        }

        public function SearchNV($key){
            $nv = new NVModel();
            $data = $nv->SearchNV($key);
            require_once('View/NhanVien/NhanVien.php');
        }
    }
?>
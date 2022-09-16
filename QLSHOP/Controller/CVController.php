<?php
    require_once('Model/chucvu.php');
    class CVcontroller{
        public function ViewCV(){
            $cv = new CVModel();
            $data = $cv->getDataCV();
            require_once('View/ChucVu/chucvu.php');
        }
        public function ViewEditCV(){
            require_once('View/ChucVu/addcv.php');
        }
        public function addCV($ten){
            $cv = new CVModel();
            if($ten ==''){
                $this->ViewEditCV();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $cv -> CheckCV($ten);
                if($check == 1){
                    $this->ViewEditCV();
                    echo 'Khách hàng đã tồn tại !';
                }else{
                    $cv->AddCV($ten);
                    $this->ViewEditCV();
                    echo'Thêm thành công !';
                }
            }
        }
        public function updateCV($id,$ten){
            $cv = new CVModel();
            if($ten ==''){
                $this->ViewDataID($id);
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $cv->UpdateCV($id,$ten);
                    $this->ViewCV();
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $cv = new CVModel();
            $dataID = $cv->GetDataCVID($id);
            require_once('View/ChucVu/editcv.php');
        }
        public function DeleteCV($id){
            $cv = new CVModel();
            $cv->DeleteCV($id);
            $this->ViewCV();
            echo 'Xóa thành công';
        }
        public function SearchCV($key){
            $cv = new CVModel();
            $data = $cv->SearchCV($key);
            require_once('View/ChucVu/chucvu.php');
        }

    }
?>
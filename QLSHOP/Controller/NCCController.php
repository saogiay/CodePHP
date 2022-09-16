<?php
    require_once('Model/nhacungcap.php');
    class NCCcontroller{
        public function ViewNCC(){
            $ncc = new NCCModel();
            $data1 = $ncc->getDataNCC();
            $data = json_decode($data1,true);
            require_once('View/NhaCungCap/nhacungcap.php');
        }
        public function ViewEditNCC(){
            require_once('View/NhaCungCap/addncc.php');
        }
        public function addNCC($ten,$diachi,$sdt,$email){
            $ncc = new NCCModel();
            if($ten ==''||$diachi ==''||$sdt ==''||$email ==''){
                $this->ViewEditNCC();
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                $check = $ncc -> CheckNCC($ten,$diachi);
                if($check == 1){
                    $this->ViewEditNCC();
                    echo 'Nhà Cung Cấp đã tồn tại!';
                }else{
                    $ncc->AddNCC($ten,$diachi,$sdt,$email);
                    $this->ViewEditNCC();
                    echo'Thêm thành công !';
                }
            }
        }
        public function updateNCC($id,$ten,$diachi,$sdt,$email){
            $ncc = new NCCModel();
            if($ten ==''||$diachi ==''||$sdt ==''||$email ==''){
                $this->ViewDataID($id);
                echo 'Hãy điền đủ vào tất cả các mục !';
            }else{
                    $ncc->UpdateNCC($id,$ten,$diachi,$sdt,$email);
                    $this->ViewNCC();
                    echo'Sửa thành công !';
                }
            }
        public function ViewDataID($id){
            $ncc = new NCCModel();
            $dataID = $ncc->GetDataNCCID($id);
            require_once('View/NhaCungCap/editncc.php');
        }
        public function DeleteNCC($id){
            $ncc = new NCCModel();
            $ncc->DeleteNCC($id);
            $this->ViewNCC();
            echo 'Xóa thành công';
        }
        public function SearchNCC($key){
            $ncc = new NCCModel();
            $data = $ncc->SearchNCC($key);
            require_once('View/NhaCungCap/nhacungcap.php');
        }

    }
?>
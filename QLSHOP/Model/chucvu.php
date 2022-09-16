<?php 
    require_once('dbModel.php');
    class CVModel extends dbModel{
        public function GetDataCV(){
            $table = 'chucvu';
            $this->connect();
            $data = $this->getAllData($table);
            return $data;
        }
        public function AddCV($ten){
            $this->connect();
            $this->execute("INSERT INTO `chucvu`(`MaChucVu`, `TenChucVu`) VALUES (null,'$ten')");
        }
        public function CheckCV($ten){
            $this -> connect();
            $sql = $this->execute("select * from chucvu where TenChucVu = '$ten'");
            $rs =  $this->num_rows($sql);
            if($rs==1){
                return 1;
            }
            else{
                return 0;
            }
         }
         public function GetDataCVID($idcv){
            $this -> connect();
            $table = 'chucvu';
            $idname = 'MaChucVu';
            $dataID = $this->getDataID($table,$idname,$idcv);
            return $dataID;
         }
         public function UpdateCV($id,$ten){
            $this -> connect();
            $sql = "UPDATE `chucvu` SET `TenChucVu`='$ten' WHERE `MaChucVu` = '$id'";
            $this->execute($sql);
         }
         public function DeleteCV($XoaID){
            $this -> connect();
            $sql = "DELETE FROM `chucvu` WHERE MaChucVu = '$XoaID'";
            $this->execute($sql);
         }
         public function SearchCV($key){
            $this -> connect();
            $table = 'chucvu';
            $Searchname = 'TenChucVu';
            $idname ='MaChucVu';
            $dataID = $this->SearchData1($table,$Searchname,$key,$idname);
            return $dataID;
         }
}
?>
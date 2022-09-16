<?php
require_once('dbModel.php');
class NCCModel extends dbModel
{
    public function GetDataNCC()
    {
        $api_url = 'https://saogiay.000webhostapp.com/QLSHOP/Model/apiNCC.php';

        $data = file_get_contents($api_url);

        return $data;
    }
    public function AddNCC($ten, $diachi, $sdt, $email)
    {
        $this->connect();
        $this->execute("INSERT INTO `nhacungcap`(`MaNCC`, `TenNCC`, `DiaChi`, `SDT`, `Email`) VALUES (null,'$ten','$diachi','$sdt','$email')");
    }
    public function CheckNCC($ten, $diachi)
    {
        $this->connect();
        $sql = $this->execute("select * from nhacungcap where TenNCC = '$ten'");
        $rs =  $this->num_rows($sql);
        if ($rs == 1) {
            return 1;
        } else {
            return 0;
        }
    }
    public function GetDataNCCID($idncc)
    {
        $this->connect();
        $table = 'nhacungcap';
        $idname = 'MaNCC';
        $dataID = $this->getDataID($table, $idname, $idncc);
        return $dataID;
    }
    public function UpdateNCC($id, $ten, $diachi, $sdt, $email)
    {
        $this->connect();
        $sql = "UPDATE `nhacungcap` SET `TenNCC`='$ten',`DiaChi`='$diachi',`SDT`='$sdt',`Email`='$email' WHERE `MaNCC`='$id'";
        $this->execute($sql);
    }
    public function DeleteNCC($XoaID)
    {
        $this->connect();
        $sql = "DELETE FROM `nhacungcap` WHERE MaNCC = '$XoaID'";
        $this->execute($sql);
    }
    public function SearchNCC($key)
    {
        $this->connect();
        $table = 'nhacungcap';
        $Searchname = 'TenNCC';
        $idname = 'MaNCC';
        $dataID = $this->SearchData($table, $Searchname, $key, $idname);
        return $dataID;
    }
}

<?php
require_once('Controller/LoginController.php');
require_once('Controller/KHController.php');
require_once('Controller/NCCController.php');
require_once('Controller/NhanVien/NhanVienController.php');
require_once('Controller/PNController.php');
require_once('Controller/HoaDonController.php');
require_once('Controller/LoaiSPController.php');
require_once('Controller/SanPhamController.php');
require_once('Controller/CVController.php');
$LoaiSPController = new LoaiSPController();
$SanPhamController = new SanPhamController();
$loginController = new LoginController();
$khcontroller = new KHcontroller();
$ncccontroller = new NCCController();
$nvcontroller = new NVController();
$pnController = new PNController();
$hdcontroller = new HDController();
$cvController = new CVController();
if(isset($_GET['action'])){
    $action=$_GET['action'];
}
else{
    $action='';
}
if($action == ''){
   $loginController -> Viewlogin();
}
else{
switch($action){
    case 'TC':{
            $loginController -> Viewtrangchu();
        break;
    }
    case 'DN':{
        if(isset($_POST['DN'])){
            $u = $_POST['tenTK'];
            $p = $_POST['MK'];
            $loginController -> login($u,$p);
        }
        break;
    }
    case 'DK':{
        if(isset($_POST['DangKi'])){
            $u1 = $_POST['tenTK1'];
            $p1 = $_POST['MK1'];
            $rep1=$_POST['reMK1'];
            $loginController -> Dangki($u1,$p1,$rep1);
        }else{
            $loginController -> Viewdangki();
        }
        break;
    }
    case 'KH':{
        if(isset($_GET['timkiem'])){
            $key = $_GET['tukhoa'];
            $khcontroller -> SearchKH($key);
        }else
        $khcontroller -> ViewKH();
        break;
    }
    case 'NV':{
        if(isset($_GET['timkiem'])){
            $key = $_GET['tukhoa'];
            $nvcontroller -> SearchNV($key);
        }else
        $nvcontroller -> ViewNV();
        break;
    }
    case 'EditNV':{
        if(isset($_POST['ThemNV'])){
        $tenNV =$_POST['tenNV'];
        $ngaysinh =$_POST['ngaysinh'];
        $gioitinh =$_POST['gioitinh'];
        $diachi =$_POST['diachi'];
        $sdt =$_POST['SoDT'];
        $machucvu =$_POST['chucvu'];
        $nvcontroller -> AddNV($tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu);
        }
        else if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['SuaNV'])){
                $tenNV =$_POST['tenNV'];
                $ngaysinh =$_POST['ngaysinh'];
                $gioitinh =$_POST['gioitinh'];
                $diachi =$_POST['diachi'];
                $sdt =$_POST['SoDT'];
                // img src="'.fixUrl($anh['Image']).'" style="height: 100px"
                $machucvu =$_POST['chucvu'];
                $nvcontroller->updateNV($id,$tenNV,$ngaysinh,$gioitinh,$diachi,$sdt,$machucvu);
                $nvcontroller->ViewNV();
            }else{
                $nvcontroller->ViewDataID($id);
            }
        }
        else if(isset($_GET['Xoa'])){
            $Xoa = $_GET['Xoa'];
            $nvcontroller->DeleteNV($Xoa);
        }
        else{
            $nvcontroller->ViewEditNV();
        }
        break;
    }
    case 'NCC':{
        if(isset($_GET['timkiem'])){
            $key = $_GET['tukhoa'];
            $ncccontroller -> SearchNCC($key);
        }else
        $ncccontroller -> ViewNCC();
        break;
    }
    case 'EditNCC':{
        if(isset($_POST['ThemNCC'])){
        $ten =$_POST['namencc'];
        $diachi =$_POST['diachincc'];
        $sdt =$_POST['sdtncc'];
        $email =$_POST['emailncc'];
        $ncccontroller -> addNCC($ten,$diachi,$sdt,$email);
        }
        else
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['SuaNCC'])){
                $ten =$_POST['namencc'];
                $diachi =$_POST['diachincc'];
                $sdt =$_POST['sdtncc'];
                $email =$_POST['emailncc'];
                $ncccontroller->updateNCC($id,$ten,$diachi,$sdt,$email);
            }else{
                $ncccontroller->ViewDataID($id);
            }
        }else
        if(isset($_GET['Xoa'])){
            $Xoa = $_GET['Xoa'];
            $ncccontroller->DeleteNCC($Xoa);
        }
        else{
            $ncccontroller->ViewEditNCC();
        }
        break;
    }
    case 'EditKH':{
        if(isset($_POST['ThemKH'])){
        $ten =$_POST['namekh'];
        $ngaysinh =$_POST['ngaysinhkh'];
        $gioitinh =$_POST['gioitinhkh'];
        $diachi =$_POST['diachikh'];
        $sdt =$_POST['sdtkh'];
        $khcontroller -> AddKH($ten,$ngaysinh,$gioitinh,$diachi,$sdt);
        }
        else
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['SuaKH'])){
                $ten =$_POST['namekh'];
                $ngaysinh =$_POST['ngaysinhkh'];
                $gioitinh =$_POST['gioitinhkh'];
                $diachi =$_POST['diachikh'];
                $sdt =$_POST['sdtkh'];
                $khcontroller->updateKH($id,$ten,$ngaysinh,$gioitinh,$diachi,$sdt);
            }else{
                $khcontroller->ViewDataID($id);
            }
        }else
        if(isset($_GET['Xoa'])){
            $Xoa = $_GET['Xoa'];
            $khcontroller->DeleteKH($Xoa);
        }
        else{
            $khcontroller->ViewEditKH();
        }
        break;
    }
    case 'PN':{ 
        if(isset($_GET['timkiem'])){
            $key = $_GET['tukhoa'];
            $pnController -> SearchPN($key);
        } else 
        $pnController -> ViewPN();
        break;
    }
    case 'EditPN':{
        if(isset($_POST['ThemPN'])){
        $manv =$_POST['manv'];
        $mancc =$_POST['mancc'];
        $masp =$_POST['masp'];
        $ngaynhap =$_POST['ngaynhappn'];
        $soluong =$_POST['soluongsp'];
        $pnController -> addPN($manv,$mancc,$masp,$ngaynhap,$soluong);
        } else
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['SuaPN'])){
                $manv =$_POST['manv'];
                $mancc =$_POST['mancc'];
                $masp =$_POST['masp'];
                $ngaynhap =$_POST['ngaynhappn'];
                $soluong =$_POST['soluongsp'];
                $pnController->updatePN($id,$manv,$mancc,$masp,$ngaynhap,$soluong);
                $pnController->ViewPN();
            }else{
                $pnController->ViewDataID($id);
            }
        } else
        if(isset($_GET['Xoa'])){
            
            $Xoa = $_GET['Xoa'];
            $pnController->DeletePN($Xoa);
        }
        else{
           
            $pnController->ViewEditPN();
        }
        break;
    }
    case 'HD':{
        if(isset($_GET['timkiem'])){
            $key = $_GET['tukhoa'];
            $hdcontroller -> SearchHD($key);
        }else
        $hdcontroller -> ViewHD();
        break;
    }
    case 'EditHD':{
        if(isset($_POST['ThemHD'])){
        $tennv =$_POST['tennv'];
        $tenkh =$_POST['tenkh'];
        $tensp =$_POST['tensp'];
        $ngaylap =$_POST['ngaylap'];
        $soluong =$_POST['soluong'];
        $hdcontroller -> addHD($tennv,$tenkh,$tensp,$ngaylap,$soluong);
    }
    else
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_POST['SuaHD'])){
                $tennv =$_POST['tennv'];
                $tenkh =$_POST['tenkh'];
                $tensp =$_POST['tensp'];
                $ngaylap =$_POST['ngaylap'];
                $soluong =$_POST['soluong'];
                $hdcontroller->updateHD($id,$tennv,$tenkh,$tensp,$ngaylap,$soluong);
                $hdcontroller->ViewHD();
            }else{
                $hdcontroller->ViewDataID($id);
            }
        }else
        if(isset($_GET['Xoa'])){
            $Xoa = $_GET['Xoa'];
            $hdcontroller->DeleteHD($Xoa);
        }
        else{
            $hdcontroller->ViewEditHD();
        }
        break;
    
    }
    case 'SanPham':{
        $SanPhamController ->ViewSanPham();
        break;
    }
    case 'ThemSanP':{
        if(isset($_POST['ThemSP'])){
            $TenSP =$_POST['TenSP'];
            $GiaNhap =$_POST['GiaNhap'];
            $GiaBan =$_POST['GiaBan'];
            $TonKho =$_POST['TonKho'];
            $MaLoaiSP =$_POST['MaLoaiSP'];
            $SanPhamController -> ThemSanPham1($TenSP,$GiaNhap,$GiaBan,$TonKho,$MaLoaiSP);
            }
            else{
                $SanPhamController->ViewThemSP();
            }
            break;
        }
    case'XoaSP':{
        if(isset($_GET['MaSP'])){
            $Xoa = $_GET['MaSP'];
            $SanPhamController->DeleteSP($Xoa);
        }
        else{
            $SanPhamController->ViewSanPham();
        }
        break;
    }
    case 'EditSP':{
        if(isset($_GET['MaSP'])){
            $a1 = $_GET['MaSP'];
            //lấy dữ liệu từ View
            if(isset($_POST['update_SP'])){
                $TenSP = $_POST['TenSP'];
                $GiaNhap = $_POST['GiaNhap'];
                $GiaBan = $_POST['GiaBan'];
                $TonKho = $_POST['TonKho'];
                $MaLoaiSP = $_POST['MaLoaiSP'];
                if($SanPhamController->updateSP($a1,$TenSP,$GiaNhap,$GiaBan,$TonKho,$MaLoaiSP)){
                    $SanPhamController->ViewSanPham();
                    
                }
            }else{
                    $SanPhamController->ViewDataID($a1);
                }
            }
            break;
        }
        case 'SP':{
            if(isset($_GET['timkiem'])){
                $key = $_GET['tukhoa'];
                $SanPhamController -> SearchSP($key);
            }else{
            $SanPhamController -> ViewSanPham();
            }
            break;
        }
        case 'CV':{ 
            if(isset($_GET['timkiem'])){
                $key = $_GET['tukhoa'];
                $cvController -> SearchCV($key);
            } else 
                $cvController -> ViewCV();
            break;
        }
        
        case 'EditCV':{
            if(isset($_POST['ThemCV'])){
            $tencv =$_POST['tencv'];
            $cvController -> addCV($tencv);
            } else
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                if(isset($_POST['SuaCV'])){
                    $tencv =$_POST['tencv'];
                    $cvController->updateCV($id,$tencv);
                    $cvController->ViewCV();
                }else{
                    $cvController->ViewDataID($id);
                }
            } else
            if(isset($_GET['Xoa'])){
                
                $Xoa = $_GET['Xoa'];
                $cvController->DeleteCV($Xoa);
            }
            else{
               
                $cvController->ViewEditCV();
            }
            break;
        }
}
}
?>
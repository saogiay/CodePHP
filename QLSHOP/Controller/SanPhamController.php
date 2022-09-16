<?php
require_once('Model/sanPham.php');
require_once('Model/loaiSP.php');
class SanPhamController
{
    public function ViewSanPham()
    {
        $sanPham = new sanPhamModel();
        $data = $sanPham->HienThiSP();
        $LoaiSanPham = new loaiSPModel();
        $data1 = $LoaiSanPham->GetDataLSP();
        require_once('View/SanPham/sanPham.php');
    }
    public function ThemSanPham1($TenSP, $GiaNhap, $GiaBan, $TonKho, $MaLoaiSP)
    {
        $sp = new sanPhamModel();
        if (!isset($_FILES["Anh"])) {
            echo "Dữ liệu không đúng cấu trúc";
            die;
        }

        // Kiểm tra dữ liệu có bị lỗi không
        if ($_FILES["Anh"]['error'] != 0) {
            echo "Dữ liệu upload bị lỗi";
            die;
        }

        // Đã có dữ liệu upload, thực hiện xử lý file upload

        //Thư mục bạn sẽ lưu file upload
        $target_dir    = "uploads/";
        //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        $target_file   = $target_dir . basename($_FILES["Anh"]["name"]);

        $allowUpload   = true;

        //Lấy phần mở rộng của file (jpg, png, ...)
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        // Cỡ lớn nhất được upload (bytes)
        $maxfilesize   = 800000;

        ////Những loại file được phép upload
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


        if (isset($_POST["submit"])) {
            //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES["Anh"]["tmp_name"]);
            if ($check !== false) {
                echo "Đây là file ảnh - " . $check["mime"] . ".";
                $allowUpload = true;
            } else {
                echo "Không phải file ảnh.";
                $allowUpload = false;
            }
        }
        // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
        if ($_FILES["Anh"]["size"] > $maxfilesize) {
            echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            $allowUpload = false;
        }


        // Kiểm tra kiểu file
        if (!in_array($imageFileType, $allowtypes)) {
            echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }


        if ($allowUpload) {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES["Anh"]["tmp_name"], $target_file)) {
                //   echo "File ". basename( $_FILES["Anh"]["name"]).
                //   " Đã upload thành công.";

                //   echo "File lưu tại " . $target_file;

            } else {
                echo "Có lỗi xảy ra khi upload file.";
            }
        } else {
            echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
        }
        if ($TenSP == '' || $GiaNhap == '' || $GiaBan == '' || $TonKho == '') {

            echo 'Hãy điền đủ vào tất cả các mục !';
        } else {
            
            $check = $sp->CheckSP($TenSP);
            if ($check == 1) {
                // echo 'Sản phẩm đã tồn tại!';
                header("Location: /QLShopQA/Index.php?action=SanPham");
            } else {
                $sp->ThemSanPham($TenSP, $GiaNhap, $GiaBan, $TonKho, basename($_FILES["Anh"]["name"]), $MaLoaiSP);
                $this->ViewSanPham();
                echo 'Thêm thành công !';
            }
        }
        // require_once('View/SanPham/addSanPham.php');
    }
    public function DeleteSP($id)
    {
        $sp = new sanPhamModel();
        $sp->DeleteSP($id);
        $this->ViewSanPham();
        echo 'Xóa thành công';
    }
    public function updateSP($id, $TenSP, $GiaNhap, $GiaBan, $TonKho, $TenLoaiSP)
    {
        $sp = new sanPhamModel();
        if (!isset($_FILES["Anh"])) {
            echo "Dữ liệu không đúng cấu trúc";
            die;
        }

        // Kiểm tra dữ liệu có bị lỗi không
        if ($_FILES["Anh"]['error'] != 0) {
            echo "Dữ liệu upload bị lỗi";
            die;
        }

        // Đã có dữ liệu upload, thực hiện xử lý file upload

        //Thư mục bạn sẽ lưu file upload
        $target_dir    = "uploads/";
        //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
        $target_file   = $target_dir . basename($_FILES["Anh"]["name"]);

        $allowUpload   = true;

        //Lấy phần mở rộng của file (jpg, png, ...)
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        // Cỡ lớn nhất được upload (bytes)
        $maxfilesize   = 800000;

        ////Những loại file được phép upload
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


        if (isset($_POST["submit"])) {
            //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES["Anh"]["tmp_name"]);
            if ($check !== false) {
                echo "Đây là file ảnh - " . $check["mime"] . ".";
                $allowUpload = true;
            } else {
                echo "Không phải file ảnh.";
                $allowUpload = false;
            }
        }
        // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
        if ($_FILES["Anh"]["size"] > $maxfilesize) {
            echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
            $allowUpload = false;
        }


        // Kiểm tra kiểu file
        if (!in_array($imageFileType, $allowtypes)) {
            echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
            $allowUpload = false;
        }


        if ($allowUpload) {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES["Anh"]["tmp_name"], $target_file)) {
                //   echo "File ". basename( $_FILES["Anh"]["name"]).
                //   " Đã upload thành công.";

                //   echo "File lưu tại " . $target_file;

            } else {
                echo "Có lỗi xảy ra khi upload file.";
            }
        } else {
            echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
        }
        if ($TenSP == '' || $GiaNhap == '' || $GiaBan == '' || $TonKho == '') {
            echo 'Hãy điền đủ vào tất cả các mục !';
        } else {
            $sp->UpdateSP($id, $TenSP, $GiaNhap, $GiaBan, $TonKho, basename($_FILES["Anh"]["name"]), $TenLoaiSP);
            echo 'Sửa thành công !';
            header("Location: /QLShopQA/Index.php?action=SanPham");
        }
    }
    public function ViewDataID($id)
    {
        $LoaiSanPham = new loaiSPModel();
        $data1 = $LoaiSanPham->GetDataLSP();
        $sp = new sanPhamModel();
        $dataID = $sp->GetDataSPID($id);
        require_once('View/SanPham/editsp.php');
    }
    public function SearchSP($key)
    {
        $LoaiSanPham = new loaiSPModel();
        $data1 = $LoaiSanPham->GetDataLSP();
        $sp = new sanPhamModel();
        $data = $sp->SearchSP($key);
        require_once('View/SanPham/sanpham.php');
    }
    public function ViewThemSP(){
        $LoaiSanPham = new loaiSPModel();
        $data1 = $LoaiSanPham->GetDataLSP();
        require_once('View/SanPham/addSanPham.php');
    }
}

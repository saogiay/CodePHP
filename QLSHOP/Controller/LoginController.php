<?php
    require_once('Model/login.php');

    class LoginController
    {
        public function  Viewlogin(){
            require_once('View/Login/login.php');
        }
        public function Checklogin($a,$b){
            $LoginModel = new LoginModel();
            $i=$LoginModel -> CheckLogin($a,$b);
            if($i==1){
                return 1;
            }
            else{
                return 0;
            }
        }
        public function  login($u,$p){
            $login =$this -> Checklogin($u,$p);
            if($login == 1){
                $this -> Viewtrangchu();
            }
            else{
                $this -> Viewlogin();
                echo 'Đăng nhập thất bại';
            }
        }
        public function  Viewdangki(){
            require_once('View/Login/dangki.php');
        }
        public function  Viewtrangchu(){
            require_once('View/trangchu.php');
        }
        public function CheckDangKi($a,$b){
            $LoginModel = new LoginModel();
            $i1 = $LoginModel -> CheckDangKi($a,$b);
            if($i1==1){
                return 1;
            }
            else{
                return 0;
            }
        }
        public function  DangKi($a,$b,$b1){
            if($a == ''||$b == ''||$b1==''){
                $this -> Viewdangki();
                echo 'hãy điền tất cả các trường !'; 
            }else if($b != $b1){
                $this -> Viewdangki();
                echo 'nhập lại mật khẩu chưa đúng';
            }else{
                $check = $this -> CheckDangKi($a,$b);
                if($check == 1){
                    $this -> Viewdangki();
                    echo 'Tên đăng nhập đã tồn tại';
                }else{
                    $this -> addUser($a,$b);
                    $this -> Viewlogin();
                    echo 'Tạo Tài Khoản Thành Công';
                }
        }
        }
        public function addUser($a,$b){
            $LoginModel = new LoginModel();
            $LoginModel -> addUser($a,$b);
        }
    }
    
?>
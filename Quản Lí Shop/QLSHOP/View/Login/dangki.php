<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Kí</title>
</head>
<body>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body{
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg,#dd2f6e, #8e44ad);
    height: 100vh;
    overflow: hidden;
  }
  .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  }
  .center h1{
    text-align: center;
    padding: 20px 0;
    border-bottom: 1px solid silver;
  }
  .center form{
    padding: 0 40px;
    box-sizing: border-box;
  }
  form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
  }
  .txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }
  .txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
  }
  .txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #2691d9;
    transition: .5s;
  }
  .txt_field input:focus ~ label,
  .txt_field input:valid ~ label{
    top: -5px;
    color: #ad189d;
  }
  .txt_field input:focus ~ span::before,
  .txt_field input:valid ~ span::before{
    width: 100%;
  }
  .pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
  }
  .pass:hover{
    text-decoration: underline;
  }
  input[type="submit"]{
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: #dd2f6e;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
  }
  input[type="submit"]:hover{
    border-color: #dd2f6e;
    transition: .5s;
  }
  .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }
  .signup_link a{
    color: #dd2f6e;
    text-decoration: none;
  }
  .signup_link a:hover{
    text-decoration: underline;
  }

</style>

<div class="center">
      <h1>Đăng Ký</h1>
      <form method="post" action="Index.php?action=DN">
      <input type="hidden" value="1" name="s">
        <div class="txt_field">
          <input type="text" required name="tenTK1" minlength = "6">
          <span></span>
          <label>Tên Đăng Nhập</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="MK1"  minlength = "6">
          <span></span>
          <label>Mật Khẩu</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="reMK1"  minlength = "6">
          <span></span>
          <label>Nhập Lại Mật Khẩu</label>
        </div>
        <input type="submit" name="DangKi" value="Đăng Ký">
        <div class="signup_link">
        <a href="Index.php?action=">Đã có tài khoản</a>
        </div>
      </form>
    </div>

</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
</head>


<body>
<form  method="post">
    <h1>Đăng Kí</h1>
    <table>
        <input type="hidden" value="1" name="s" >
        <tr>
            <td>Tên Đăng Nhập : </td>
            <td><input type="text" name="tenTK1" minlength = "6"></td>
        </tr>
        <tr>
            <td>Mật Khẩu : </td>
            <td><input type="password" name="MK1" minlength = "6"></td>
        </tr>
        <tr>
            <td>Nhập Lại Mật Khẩu : </td>
            <td><input type="password" name="reMK1" minlength = "6"></td>
        </tr>
        <tr>
            <td><input type="submit" name="DangKi" value="Đăng kí"></td>
            <td><a href="Index.php?action=">Đã có tài khoản</a></td>
        </tr>
        </form>
    </table>
</body>
</html> -->

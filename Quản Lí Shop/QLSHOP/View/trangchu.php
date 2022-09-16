<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">    
    <link rel="stylesheet" href="style.css">
    <title>Nhóm 1</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Nhóm 1</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active">
                        <span class="las la-igloo"></span>
                        <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=SanPham">
                        <span class="las la-users"></span>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=NV">
                        <span class="las la-clipboard-list"></span>
                        <span>Nhân viên</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=KH">
                        <span class="las la-shopping-bag"></span>
                        <span>Khách hàng</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=NCC">
                        <span class="las la-receipt"></span>
                        <span>Nhà cung cấp</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=PN">
                        <span class="las la-user-circle"></span>
                        <span>Phiếu nhập</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php?action=HD">
                        <span class="las la-clipboard-list"></span>
                        <span>Hóa Đơn</span>
                    </a>
                </li>
                <li>
                    <a href="Index.php">
                        <span  class="las la-users"></span>
                        <span>Đăng Xuất</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>

                    Trang chủ
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here">
                </div>

                <div class="user-wrapper">
                    <img src="img/2.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>dai</h4>
                        <small>admin</small>
                    </div>
                </div>
            
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Khách hàng</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Hóa đơn</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>124</h1>
                        <span>Sản phẩm</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>2000</h1>
                        <span>Khách Hàng</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Hóa đơn</h3>
                            <button>Tất cả <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI/UX</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Mobile
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Frontend</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Web-Sivece
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Backend</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Web-mobile
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Mobile
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Frontend</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Web-Sivece
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Backend</td>
                                            <td>Web</td>
                                            <td>
                                                <span class="status"></span>
                                                Web-mobile
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customer</h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
    
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ngoc Dai</h4>
                                        <small>CEO Cuong</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-user-comment"></span>
                                    <span class="las la-user-phone"></span>
                                </div>
                            </div>
    
                            <div class="customer">
                                <div>
                                    <img src="img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ngoc Dai</h4>
                                        <small>CEO Cuong</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-user-comment"></span>
                                    <span class="las la-user-phone"></span>
                                </div>
                            </div>
    
                            <div class="customer">
                                <div>
                                    <img src="img/2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ngoc Dai</h4>
                                        <small>CEO Cuong</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-user-comment"></span>
                                    <span class="las la-user-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
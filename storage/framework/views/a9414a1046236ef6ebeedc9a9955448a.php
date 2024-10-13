<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('scss/interface.css')); ?>">
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #e6f0ff;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-left">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#">
                            <img src="<?php echo e(asset('image/logo/home.png')); ?>" alt="Trang chủ"
                                 style="height: 40px; width: auto; margin-right: 8px;">
                        </a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#"><span class="highlight">Trang chủ</span></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Tính năng</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Bảng giá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tài nguyên</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-right">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" style="color:#1a4c9d">Đăng xuất</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#"><b>Đăng Nhập</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php echo $__env->yieldContent('main'); ?>
<div class="footer-content">
    <div class="footer-container">
        <div class="logo">
            <img src="<?php echo e(asset('image/logo/logo.png')); ?>" alt="Logo">
            <h3>TESTCENTER.VN</h3>
        </div>
        <div class="solution">
            <h4><b>GIẢI PHÁP CHO DOANH NGHIỆP</b></h4>
            <ul>
                <li><a href="">Tạo tài khoản miễn phí</a></li>
                <li><a href="">Công cụ tạo bài test online</a></li>
                <li><a href="">Ngân hàng đề thi mẫu đa dạng</a></li>
                <li><a href="">Đánh giá năng lực nhân sự</a></li>
                <li><a href="">Đào tạo nhân sự hiệu quả</a></li>
                <li><a href="">Giảm tỉ lệ tuyển dụng sai người</a></li>
            </ul>
        </div>
        <div class="testcenter">
            <h4><b>VỀ TESTCENTER</b></h4>
            <ul>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Điều khoản sử dụng</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
            </ul>
        </div>
        <div class="phone">
            <h6>Hotline tư vấn</h6>
            <p>098.917.4495</p>
            <h6>@Testcenter.vn 2021</h6>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
</html>
<?php /**PATH D:\laragon\www\interface\resources\views/layout/home.blade.php ENDPATH**/ ?>
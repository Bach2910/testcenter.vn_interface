<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('scss/interface.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .footer-resources{
            display: flex;
            justify-content: space-around;
            align-items: start;
            background-color: white;
            padding: 20px;
            gap:10px;
        }
        img{
            width:250px;
            height:150px;
        }
        .logo{
            margin-left: 100px;
            padding-top: 10px;
        }
        .watch-us {
            flex:0 0 35%
        }
        .about-us-footer{
            width:35%
        }
        .footer-resources .about-us-footer p{
            font-size: 14px;
        }
        .watch-us .button{
            display: flex;
            padding: 10px 0 0 0 ;
            color: white; /* Màu chữ */
            cursor: pointer; /* Hiển thị con trỏ khi hover */
            gap:20px;
        }
        .watch-us button:hover{
            background-color: #2980b9; /* Màu nền khi hover */
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #e6f0ff;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-right">
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#">
                            <img src="<?php echo e(asset('image/logo/home.png')); ?>" alt="Trang chủ"
                                 style="height: 40px; width: auto; margin-right: 8px;">
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-right">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#"><span class="highlight">Trang chủ</span></a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Nhân sự</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Mẫu đề Test Online</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tài liệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-group-lg"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>
</header>
<body>
<?php echo $__env->yieldContent('main'); ?>
</body>
<footer>
    <div class="footer-resources">
        <div class="logo">
            <img src="<?php echo e(asset('image/logo/logo2.png')); ?>" alt="Logo">
        </div>
        <div class="about-us-footer">
            <h5><b>Về chúng tôi</b></h5>
            <br>
            <p>Nền tảng công nghệ tạo bài test và tổ chức kỳ thi online dành riêng cho doanh nghiệp Việt Nam trong đánh
                giá
                năng lực nhân sự toàn diện, giúp tiết kiệm tối đa chi phí và nguồn lực so với các phương pháp truyền
                thống.</p>
            <p><b>Hotline:</b> 0967-778-018</p>
            <p><b>Địa chỉ:</b> Tầng 3, Tòa nhà Goldseason, 47 Nguyễn Tuân, Thanh Xuân, Hà Nội</p>
            <br>
            <p>Liên hệ chúng tôi: soncd@testcenter.vn</p>
        </div>
        <div class="watch-us">
            <h5><b>Theo dõi chúng tôi</b></h5>
            <div class="button">
                <button type="button" class="btn btn-info"><i class="fa-brands fa-facebook"></i> </button>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></button>
                <button type="button" class="btn btn-info"><i class="fa-solid fa-envelope"></i></button>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</html>
<?php /**PATH C:\laragon\www\interface\resources\views/resources.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1Fs">
    <title>Password Toggle with Font Awesome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/account.js'])
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 p-0 box-slide">
            <div id="exampleCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner slide h-100">
                    <div class="carousel-item h-100 active">
                        <img src="{{asset('image/auth/online-courses.png')}}"
                             alt="Image 1"
                             class="img-fluid">
                        <h2 class="item-heading">Tự động tổng hợp kết quả</h2>
                        <p class="item-text">Hệ thống tự động chấm điểm hỗ trợ tối đa việc lọc kết quả của từng thí
                            sinh. Tổng hợp kết quả
                            nhanh chóng, giúp tiết kiệm thời gian, giảm thiểu công sức và hạn chế tối đa sai sót.</p>
                    </div>
                    @include('components.carousel_inner',[
                        'img' => asset('image/auth/e-learning.png'),
                        'heading' => 'Tạo bài Test dễ dàng',
                        'description' => 'Dễ dàng tạo bài kiểm tra online không giới hạn số lượng với nhiều dạng câu hỏi khác nhau:
        trắc
        nghiệm, đúng/sai, tự luận, matching, điền vào chỗ trống, câu hỏi nhóm.... đáp ứng hầu hết
        nhu
        cầu của các vị trí trong mọi ngành nghề, lĩnh vực.'
])
                    @include('components.carousel_inner',[
                        'img' => asset('image/auth/report.png'),
                        'heading' => 'Đánh giá năng lực dựa trên dữ liệu cụ thể',
                        'description' => 'Đánh giá năng lực ứng viên/nhân viên trên nhiều khía cạnh thông qua các bài test online. Hỗ
        trợ
        tạo form mẫu đánh giá ứng viên sau phỏng vấn, nhằm đưa ra các quyết định chính xác trong
        tuyển
        dụng & quản trị nhân sự. Đảm bảo tính công bằng, nhất quán trong quy trình đánh giá.'
])
                </div>
                <!-- Carousel controls -->
                <div class="carousel-controls">
                    <a class="carousels-control-prev" role="button" style="margin-left: 40px" type="button"
                       data-bs-target="#exampleCarousel"
                       data-bs-slide="prev">
                        <span class="carousels-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousels-control-next" role="button" style="margin-right: 40px" type="button"
                       data-bs-target="#exampleCarousel"
                       data-bs-slide="next">
                        <span class="carousels-control-next-icon" aria-hidden="true"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#exampleCarousel"
                                data-bs-slide-to="0" class="active button-slide" aria-current="true" aria-label="Slide 1"></li>
                        <li data-bs-target="#exampleCarousel" class="button-slide" data-bs-slide-to="1"
                                aria-label="Slide 2"></li>
                        <li data-bs-target="#exampleCarousel" class="button-slide" data-bs-slide-to="2"
                                aria-label="Slide 3"></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 box-action">
            <div class="card">
                <div class="country mb-5 mb-md-5">
                    @yield('country')
                </div>
                <div class="text-center mb-2 mb-md-4"><img class="img-responsive"
                                                           src="{{asset('image/logo/new_logo.png')}}" alt="icon">
                </div>
                <div class="text-center mb-2 mb-md-4 ">
                    <h2 class="auth-title">@yield('title')</h2>
                </div>
                <form action method="POST" role="form">
                    @yield('form')
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/hidden-password.js')}}">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>

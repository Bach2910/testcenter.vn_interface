<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Toggle with Font Awesome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('scss/account.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

</head>
<body>
<div class="register container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 p-0 ">
            <div id="exampleCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner slide h-100">
                    <div class="carousel-item h-100 active">
                        <div class="slide-img img-fluid"><img src="https://app.testcenter.vn/images/auth/online-courses.png"
                                                    alt="Image 1"
                                                    class="d-block mx-auto"></div>
                        <h2>Tự động tổng hợp kết quả</h2>
                        <p>Hệ thống tự động chấm điểm hỗ trợ tối đa việc lọc kết quả của từng thí sinh. Tổng hợp kết quả
                            nhanh chóng, giúp tiết kiệm thời gian, giảm thiểu công sức và hạn chế tối đa sai sót.</p>
                    </div>
                    <div class="carousel-item h-100">
                        <div class="slide-img img-fluid">
                            <img src="https://app.testcenter.vn/images/auth/report.png" alt="Image 2"
                                 class="d-block mx-auto">
                        </div>
                        <h2>Tạo bài Test dễ dàng</h2>
                        <p>Dễ dàng tạo bài kiểm tra online không giới hạn số lượng với nhiều dạng câu hỏi khác nhau:
                            trắc
                            nghiệm, đúng/sai, tự luận, matching, điền vào chỗ trống, câu hỏi nhóm.... đáp ứng hầu hết
                            nhu
                            cầu của các vị trí trong mọi ngành nghề, lĩnh vực.</p>
                    </div>
                    <div class="carousel-item h-100">
                        <div class="slide-img img-fluid">
                            <img src="https://app.testcenter.vn/images/auth/e-learning.png" alt="Image 3"
                                 class="d-block mx-auto"></div>
                        <h2>Đánh giá năng lực dựa trên dữ liệu cụ thể</h2>
                        <p>Đánh giá năng lực ứng viên/nhân viên trên nhiều khía cạnh thông qua các bài test online. Hỗ
                            trợ
                            tạo form mẫu đánh giá ứng viên sau phỏng vấn, nhằm đưa ra các quyết định chính xác trong
                            tuyển
                            dụng & quản trị nhân sự. Đảm bảo tính công bằng, nhất quán trong quy trình đánh giá.</p>
                    </div>
                </div>
                <!-- Carousel controls -->
                <div class="carousel-controls">
                    <a class="carousels-control-prev" role="button" style="margin-left: 40px" type="button" data-bs-target="#exampleCarousel"
                            data-bs-slide="prev">
                        <span class="carousels-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousels-control-next" role="button" style="margin-right: 40px" type="button" data-bs-target="#exampleCarousel"
                            data-bs-slide="next">
                        <span class="carousels-control-next-icon" aria-hidden="true"><i
                                class="fas fa-chevron-right"></i></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#exampleCarousel"
                                data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#exampleCarousel" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#exampleCarousel" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-div col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 box-action">
            <div class="card">
                <div class="country mb-5 mb-md-5 w-100">
                    @yield('country')
                </div>
                <div class="logo text-center mb-4 mb-md-4 w-100"><img
                        src="https://app.testcenter.vn/images/logo/new_logo.png" alt="icon">
                </div>
                <div class="title mb-2 mb-md-4 auth-title text-center w-100">
                    <h3>@yield('title')</h3>
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

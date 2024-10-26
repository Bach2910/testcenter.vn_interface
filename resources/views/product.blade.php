@extends('layout.home')
@section('name','body-container-product')
@section('main')
    <div class="container product-section">
        <div class="mb-4 product-section-intro">
            <div class="row">
                <div class="col-md-5 product-section-intro-left p-0 pt-3">
                    <h1><span>Tiêu chuẩn đánh giá</span><br><span
                            class="highlight p-0">năng lực nhân sự</span><br><span>cho doanh nghiệp</span></h1>
                    <div class="mt-4">
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Hơn 300 đề thi tuyển dụng nhân sự mẫu
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Tạo bài test online nhanh chóng chỉ
                            trong 5 phút
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Công cụ quản lý năng lực ứng viên
                            thông minh
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Đánh giá năng lực làm việc của nhân
                            viên trực quan
                        </p>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-primary btn-register " href="{{route('register')}}">Đăng ký miễn phí</a>
                        <a class="btn btn-link font-weight-500 primary-color" href="{{route('blog')}}">Tìm hiểu thêm</a>
                    </div>
                </div>
                <div class="col-md-7 product-section-intro-right">
                    <img src="https://www.testcenter.vn/images/products/introduction/group_8710.png" alt>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-4 pt-4 product-section-problem">
            <p class="product-section-title mt-4">
                Problem
            </p>
            <div class="row">
                <h5 class="font-weight-500 p-4 mobile-show pc-hidden text-center">Doanh nghiệp bạn có đang gặp phải vấn
                    đề này?</h5>
                <div class="col-md-5 align-items-center d-flex p-0 product-section-problem-left">
                    <img src="https://www.testcenter.vn/images/products/problem/group_8676.png" class="img-fluid"
                         alt=""/>
                </div>
                <div class="col-md-7 pl-5 product-section-problem-right">
                    <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Doanh nghiệp bạn có đang gặp phải vấn đề
                        này?</h4>
                    <ul class="pl-3">
                        <li>
                            <p>Khó khăn trong tìm kiếm ứng viên phù hợp</p>
                            <p class="text-normal">70% nhà tuyển dụng có hơn 2 lần tuyển ứng viên không phù hợp</p>
                        </li>
                        <li>
                            <p>Chi phí tuyển dụng nhân sự lớn</p>
                            <p class="text-normal">Ngân sách cho tuyển dụng ứng viên tiềm năng lên tới hàng trăm
                                triệu/năm</p>
                        </li>
                        <li>
                            <p>Chưa đánh giá đúng năng lực ứng viên </p>
                            <p class="text-normal">Khó khăn trong đánh giá năng lực nhân sự trên nhiều khía cạnh khác
                                nhau.</p>
                        </li>
                        <li>
                            <p>Đào tạo nhân viên chưa đúng mục đích</p>
                            <p class="text-normal">Khó khăn trong đào tạo nhân viên vì không nắm rõ điểm mạnh và điểm
                                yếu của từng cá nhân</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section product-container-fluid product-section-function" style="overflow: hidden;">
        <p class="product-section-title mb-4 mt-4">
            Function
        </p>
        <h5 class="font-weight-500 mb-4 mobile-show pc-hidden text-center">Các tính năng nổi bật của TestCenter.vn</h5>
        <div class="row">
            <p class="mobile-show pc-hidden text-center">Testcenter.vn là nền tảng số cung cấp giải pháp test online
                đánh giá năng lực nhân sự toàn diện</p>
            <div class="col-md-5 col-12">
                <img alt="Công cụ test online" src="https://www.testcenter.vn/images/products/group-1.png"
                     class="product-feature-image mobile-hidden pc-show"/>
                <div class="d-flex justify-content-center mobile-show pc-hidden text-center-mobile">
                    <img class="img-fluid" alt="Công cụ test online" src="images/products/image-function-mobile.png"/>
                </div>
            </div>
            <div class="col-md-7 product-section-function-right">
                <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Các tính năng nổi bật của TestCenter.vn</h4>
                <p class="mobile-hidden pc-show">Testcenter.vn là nền tảng số cung cấp giải pháp test online đánh giá
                    năng lực nhân sự toàn diện</p>
                @include('components.product_section',[
                   'img' => asset('image/product/icon-question.png'),
                   'title' => 'Đa dạng hình thức câu hỏi',
                   'description' => 'Cung cấp nhiều loại câu hỏi khác nhau như Trắc nghiệm online, Tự luận, Đúng/Sai, Matching, SQL, Coding,...'
               ])
                @include('components.product_section',[
                    'img' => asset('image/product/icon-protection.png'),
                    'title' => 'Cá nhân hóa đề thi',
                    'description' => 'Hoàn toàn chủ động thao tác trong nội dung từng câu hỏi'
                ])
                @include('components.product_section',[
                    'img' => asset('image/product/icon-to-do-list.png'),
                    'title' => 'Quản lý đề thi dễ dàng',
                    'description' => 'Tạo và quản lý đề thi trực tuyến theo nhu cầu của doanh nghiệp'
                ])
                @include('components.product_section',[
                    'img' => asset('image/product/icon-chart.png'),
                    'title' => 'Thống kê kết quả trực quan',
                    'description' => 'Kết quả được biểu thị thông qua nhiều loại biểu đồ khác nhau kết hợp với số liệu cụ thể.'
                ])
                <div class="d-flex justify-content-start ">
                    <a class="btn btn-primary btn-register" href="https://app.testcenter.vn/register/?source=web">Đăng
                        ký miễn phí</a>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section container product-section-advantage">
        <p class="product-section-title mb-2 mt-4">Advantage</p>
        <div class="mb-4 text-center pl-4 pr-4">
            <h4 class="font-weight-bold mb-2 mobile-hidden pc-show">Ưu điểm vượt trội của TestCenter.vn</h4>
            <p>Số hóa quy trình đánh giá năng lực nhân viên của Doanh nghiệp Việt Nam</p>
        </div>
        <div class="row product-section-advantage-box"
             style="padding-right:0px !important;background: linear-gradient(180deg, #F3F9FF 0%, #EDEEFB 100%);">
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Giải pháp test online với hình thức câu hỏi đa dạng
                    </p>
                    <div class="feature-item-des mt-2 mb-4">
                        Chỉ với 5 phút để có thể xây dựng một bộ đề thi theo ý muốn với đa dạng hình thức câu hỏi. Hãy
                        để Testcenter.vn đồng hành cùng bạn!
                    </div>
                    @include('components.feature_item',[
                        'text1' => 'Ngân hàng đề với 300+ đề thi mẫu',
                        'text2' => 'Đa dạng các test trắc nghiệm MBTI, DISC, EQ, IQ, đề thi TOEIC,...'
                    ])
                    @include('components.feature_item',[
                        'text1' => 'Tùy chọn dạng câu hỏi',
                        'text2' => 'Đa dạng câu hỏi: Trắc nghiệm, Đúng – Sai, Hình ảnh, Video,…'
                    ])
                    @include('components.feature_item',[
                        'text1' => 'Thiết lập thời gian dễ dàng',
                        'text2' => 'Cài đặt thời gian cho từng câu hỏi và từng bộ đề thi'
                    ])
                    @include('components.feature_item',[
                        'text1' => 'Tương thích với mọi thiết bị',
                        'text2' => 'Tương thích với máy tính, máy tính bảng và điện thoại di động'
                    ])
                </div>
            </div>
            <div class="col-md-6 pt-4 mobile-hidden pc-show" style="padding-right: 0;">
                <img alt="Giải pháp test online" src="{{asset('image/product/group-2.png')}}"
                     style="width: 100%;"/>
            </div>
        </div>

        <div class="row mt-4 product-section-advantage-box"
             style="background: linear-gradient(180deg, #F3F9FF 0%, #EDFBF3 100%);">
            <div class="col-md-6 mobile-hidden pc-show">
                <img alt="Số hóa quy trình đánh giá nhân sự" src="{{asset('image/product/group-3.png')}}"
                     style="width: 100%;"/>
            </div>
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Số hóa quy trình đánh giá nhân sự
                    </p>
                    <div class="feature-item-des mt-2">
                        Đánh giá năng lực nhân sự toàn diện đòi hỏi rất nhiều nguồn lực của tổ chức. Hãy để Testcenter
                        giảm bớt gánh nặng cho doanh nghiệp Việt Nam!
                    </div>
                </div>
                @include('components.feature_item',[
                        'text1' => 'Chủ động upload và tạo ra kho đề thi riêng',
                        'text2' => 'Xây dựng bài test online dành riêng cho mô hình doanh nghiệp'
                    ])
                @include('components.feature_item',[
                        'text1' => 'Thiết lập mã khóa nâng cao bảo mật đề thi',
                        'text2' => 'Bảo mật tuyệt đối bằng QR code'
                    ])

            </div>
        </div>

        <div class="row mt-4 product-section-advantage-box"
             style="background: linear-gradient(180deg, #FFF9F3 0%, #E8EEFF 100%);">
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Thống kê kết quả trực quan
                    </p>
                    <div class="feature-item-des mt-2">
                        Với sự trợ giúp đắc lực của Testcenter, việc đánh giá kết quả sau đợt thi trở nên vô cùng
                        đơn giản
                    </div>
                </div>
                @include('components.feature_item',[
                       'text1' => 'Kết quả được biểu thị dưới dạng biểu đồ',
                       'text2' => 'Biểu đồ cột, biểu đồ tròn, phần trăm,…'
                   ])
                @include('components.feature_item',[
                       'text1' => 'Báo cáo và phân tích dễ dàng',
                       'text2' => 'Tự động tổng hợp kết quả phục vụ cho đánh giá nhân sự'
                   ])
            </div>
            <div class="col-md-6 mobile-hidden pc-show" style="padding-right: 0;">
                <img alt="Thống kê kết quả trực quan" src="{{asset('image/product/group-4.png')}}"
                     style="width: 100%;"/>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-primary btn-register" href="{{route('register')}}">Đăng ký miễn phí</a>
        </div>
    </div>
    <div class="product-section product-section-price mt-4 mb-md-4 pb-4 pt-2" id="price">
        <div class="container">
            <p class="product-section-title mt-4">
                Pricing
            </p>
            <h3 class="font-weight-bold text-center mb-4 mobile-hidden pc-show">
                Bảng giá dịch vụ TestCenter.vn
            </h3>
            <h4 class="font-weight-500 text-center mobile-show pc-hidden">
                Bảng giá dịch vụ TestCenter.vn
            </h4>
            <div class="row">
                <div class="col-md-3 col-12 product-section-price-box product-section-price-box-primary">
                    <div class="product-section-price-box-header">
                        <img src="{{asset('image/product/diamon-1.png')}}">
                        <p class="text-uppercase mt-2 font-weight-500">Free</p>
                        <h3 class="font-weight-bold">Miễn phí</h3>
                        <p>Sử dụng trọn đời</p>
                    </div>
                    <hr>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Mở khóa toàn bộ tính
                        năng Premium
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tạo đề thi online dễ
                        dàng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tổ chức nhiều đợt thi
                        cùng lúc
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 300+ bộ đề mẫu đa
                        dạng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 20 lượt test mỗi
                        tháng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Thống kê kết quả chi
                        tiết trực quan
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Hỗ trợ trong giờ hành
                        chính 24/7
                    </p>
                    <a href="{{route('register')}}" class="btn btn-register btn-light">Đăng ký miễn phí</a>
                </div>
                @include('components.product_price_box',[
                  'img' => asset('image/product/diamond-1.png'),
                  'status' => 'STARTER',
                  'price' => '3.000.000',
                  'currency' => 'VND/năm',
                  'text1' => 'Mở khoá toàn bộ tính năng sản phẩm',
                  'text2' => 'Miễn phí cập nhật tính năng mới',
                  'text3' => 'Tổ chức nhiều đợt thi cùng lúc',
                  'text4' => '300+ bộ đề mẫu đa dạng',
                  'text5' => '100 lượt test mỗi tháng',
                  'text6' => 'Tối đa 1 tài khoản quản lý',
                  'text7' => '200 người test cùng lúc',
                  'text8' => 'Hỗ trợ trong giờ hành chính 24/7'
              ])
                @include('components.product_price_box',[
                      'img' => asset('image/product/diamond-2.png'),
                      'status' => 'BUSINESS',
                      'price' => '25.000.000',
                      'currency' => 'VND/năm',
                      'text1' => 'Mở khoá toàn bộ tính năng sản phẩm',
                      'text2' => 'Miễn phí cập nhật tính năng mới',
                      'text3' => 'Tổ chức nhiều đợt thi cùng lúc',
                      'text4' => '300+ bộ đề mẫu đa dạng',
                      'text5' => '100 lượt test mỗi tháng',
                      'text6' => 'Tối đa 3 tài khoản quản lý',
                      'text7' => '500 người test cùng lúc',
                      'text8' => 'Hỗ trợ trong giờ hành chính 24/7'
                  ])
                @include('components.product_price_box',[
                     'img' => asset('image/product/diamond-3.png'),
                     'status' => 'BUSINESS PLUS',
                     'price' => '30.000.000',
                     'currency' => 'VND/năm',
                     'text1' => 'Mở khoá toàn bộ tính năng sản phẩm',
                     'text2' => 'Miễn phí cập nhật tính năng mới',
                     'text3' => 'Tổ chức nhiều đợt thi cùng lúc',
                     'text4' => '300+ bộ đề mẫu đa dạng',
                     'text5' => '100 lượt test mỗi tháng',
                     'text6' => 'Tối đa 5 tài khoản quản lý',
                     'text7' => '200-500 người test cùng lúc',
                     'text8' => 'Hỗ trợ trong giờ hành chính 24/7'
                 ])
                @include('components.product_price_box',[
                     'img' => asset('image/product/diamond-4.png'),
                     'status' => 'ENTERPRISE',
                     'price' => 'Liên hệ',
                     'currency' => 'Liên hệ để có giá tốt nhất',
                     'text1' => 'Mở khoá toàn bộ tính năng sản phẩm',
                     'text2' => 'Miễn phí cập nhật tính năng mới',
                     'text3' => 'Tổ chức nhiều đợt thi cùng lúc',
                     'text4' => '300+ bộ đề mẫu đa dạng',
                     'text5' => '100 lượt test mỗi tháng',
                     'text6' => 'Tối đa 10 tài khoản quản lý',
                     'text7' => '10.000 người test cùng lúc',
                     'text8' => 'Hỗ trợ trong giờ hành chính 24/7'
                 ])
            </div>
        </div>
    </div>
    <div class="container product-section">
        <div class="mt-4 pb-0">
            <div class="product-section-benefit">
                <p class="product-section-title mb-4 mt-md-4 text-left text-center-mobile">
                    Benefit
                </p>
                <div class="row">
                    <div class="col-md-7 col-12 product-section-problem-right">
                        <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Những lợi ích khi doanh nghiệp sử dụng
                            TestCenter.vn</h4>
                        <h5 class=" text-center font-weight-500 mb-4 mobile-show pc-hidden text-center-mobile">Những lợi
                            ích khi doanh nghiệp sử dụng TestCenter.vn</h5>
                        @include('components.product_section_benefit',[
                            'img' => asset('image/product/line-chart-icon.png'),
                            'title' => 'Nâng tầm thương hiệu tuyển dụng',
                            'description' => 'Chỉ thêm vài bước nhỏ trong quá trình tuyển dụng, ứng viên có thể thấy được sự chuyên nghiệp và chỉn chu trong từng hoạt động của doanh nghiệp.'
                        ])
                        @include('components.product_section_benefit',[
                            'img' => asset('image/product/users-icon.png'),
                            'title' => 'Nâng tầm thương hiệu tuyển dụng',
                            'description' => 'Chỉ thêm vài bước nhỏ trong quá trình tuyển dụng, ứng viên có thể thấy được sự chuyên nghiệp và chỉn chu trong từng hoạt động của doanh nghiệp.'
                        ])
                    </div>
                    <div
                        class="col-md-5 align-items-center d-flex p-0 product-section-problem-left mobile-hidden pc-show">
                        <img src="{{asset('image/product/benefit.png')}}" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section product-section-operate pt-4">
        <div class="container">
            <p class="product-section-title mb-4 text-left text-center-mobile">
                Operate
            </p>
            <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">TestCenter.vn vận hành như thế nào?</h4>
            <h5 class="font-weight-500 mb-4 text-center-mobile mobile-show pc-hidden">TestCenter.vn vận hành như thế
                nào?</h5>
            <div class="step-wrapper mobile-hidden">
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            class="step-number step-number-1 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 1
                    </div>
                    <div class="step-des">
                        Xây dựng kho đề thi dựa trên
                        nhu cầu tuyển dụng của doanh nghiệp
                    </div>
                </div>
                <div class="line "></div>
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            class="step-number step-number-2 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            2
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 2
                    </div>
                    <div class="step-des">
                        Tổ chức thi online cho ứng viên hoặc nhóm nhân sự
                    </div>
                </div>
                <div class="line "></div>
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div
                            class="step-number step-number-3 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            3
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 3
                    </div>
                    <div class="step-des">
                        Tổng hợp kết quả và
                        xuất báo cáo file excel
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

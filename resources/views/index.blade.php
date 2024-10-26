@extends('layout.home')
@section('name','body-container')
@section('main')
    <div class="mt-5">
        <div>
            <section class="container">
                <div class="d-flex justify-content-center">
                    <div class="row text-center d-flex flex-column">
                        <div class="w-100">
                            <h1 id="main-title">
                                Nền tảng đánh giá năng lực nhân sự <span style="color: #2B4AA0">hàng đầu Việt Nam</span>
                            </h1>
                        </div>
                        <div class="main-description mt-1">
                            Hỗ trợ thiết lập và hoàn thiện quy trình phỏng vấn tuyển dụng của doanh nghiệp, đánh giá
                            nhân sự theo tiêu chuẩn của các tập đoàn lớn như Google, Microsoft…
                        </div>
                        <div class="form-inline justify-content-center button-group mt-3">
                            <div>
                                <a href="{{route('register')}}" target="_blank">
                                    <button type="button" class="btn btn-primary font-weight-normal btn-register">
                                        Đăng ký miễn phí
                                    </button>
                                </a>
                            </div>
                            <div>
                                <a href="/blog" target="_blank">
                                    <button type="button" class="btn btn-outline-primary btn-more-infor">
                                        Tìm hiểu thêm
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <img class="w-100" src="{{asset('image/card/image1.png')}}"
                                 alt="Testcenter">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <section class="container px-4 py-3">
                <div class="text-center">
                    <h4 style="color: #333333" class="title-section">Tại sao doanh nghiệp <span style="color: #2B4AA0">nên sử dụng</span>
                        TestCenter.vn?</h4>
                </div>
                <div class="group-features mt-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '1. Đơn giản & dễ sử dụng',
                                        'description' => 'Giao diện đơn giản, thân thiện và thông minh. Dễ dàng sử dụng và thao tác sau 15 phút làm quen',
                                        'img' => asset('image/card/image1.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '2. Đánh giá năng lực dựa trên dữ liệu cụ thể',
                                        'description' => 'Đánh giá năng lực ứng viên/nhân viên trên nhiều khía cạnh thông qua các bài test online. Hỗ trợ tạo form mẫu đánh giá ứng viên sau phỏng vấn, nhằm đưa ra các quyết định chính xác trong tuyển dụng & quản trị nhân sự, hạn chế tuyển sai và dùng sai người. Đảm bảo tính công bằng, nhất quán trong quy trình đánh giá.',
                                        'img' => asset('image/card/image2.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '3. Số hóa quy trình đánh giá nhân sự',
                                        'description' => 'Dẫn đầu xu hướng chuyển đổi số trong hoạt động quản trị nguồn nhân lực của doanh nghiệp bằng cách ứng dụng nền tảng công nghệ hiện đại. Chuẩn hóa quy trình tuyển dụng và đánh giá nhân sự theo tiêu chuẩn, phương pháp quốc tế.',
                                        'img' => asset('image/card/image3.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '4. Nâng cao hiệu quả đào tạo và phát triển nhân sự',
                                        'description' => 'Đo lường, đánh giá và tối ưu hiệu quả nhờ hệ thống tạo bài kiểm tra online trước, trong và sau đào tạo nhân sự. Từ đó, xác định đúng nhu cầu, xây dựng lộ trình, phương pháp đào tạo phù hợp.',
                                        'img' => asset('image/card/image4.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '5. Tối ưu chi phí nhân sự',
                                        'description' => 'Tiết kiệm lên đến 50% thời gian đánh giá ứng viên, nhân viên giúp quy trình tuyển dụng nhanh chóng và hiệu quả. Giảm tới 30% chi phí thuê cơ sở vật chất, trang thiết bị, xây dựng đề thi cho kỳ thi đánh giá nhân sự.',
                                        'img' => asset('image/card/image6.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '6. Thúc đẩy hiệu suất làm việc của đội ngũ nhân viên',
                                        'description' => 'Có các chiến lược, chính sách phù hợp nhằm khai thác tối đa tiềm lực của mỗi nhân viên, tuyển dụng phát triển và giữ chân nhân tài.',
                                        'img' => asset('image/card/image5.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 justify-content-center">
                        <a href="{{route('register')}}" target="_blank">
                            <button type="button" class="btn btn-primary font-weight-normal btn-register">
                                Đăng ký miễn phí
                            </button>
                        </a>
                    </div>
                </div>
            </section>
        </div>
        <div class="features mt-4 py-4">
            <section class="container">
                <div class="text-center">
                    <h4 class="title-section">
                        Khám phá <span style="color: #2B4AA0">tính năng nổi bật</span> của TestCenter.vn
                    </h4>
                </div>
                <div class="group-features mt-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '1. Ngân hàng 300+ đề thi mẫu',
                                        'description' => '300+ đề thi được xây dựng trên tiêu chuẩn quốc tế: quiz trắc nghiệm tính cách, trắc nghiệm disc, test trí thông minh IQ, EQ, đánh giá năng lực chuyên môn (PHP online test, test Marketing, Sales, Kế toán - Tài chính,…) phù hợp với nhiều mô hình doanh nghiệp khác nhau.',
                                        'img' => asset('image/card/image7.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '2. Tổ chức thi với quy mô hàng ngàn người',
                                        'description' => 'Thiết lập đợt thi chỉ trong 5 phút. Gửi đề thi đến hàng nghìn người cùng lúc bằng email hoặc mã QR. Hệ thống bảo mật tuyệt đối bằng mã truy cập giúp kỳ thi diễn ra bảo mật, công bằng, hạn chế tối đa gian lận.',
                                        'img' => asset('image/card/image8.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '3. Tạo bài test online nhanh chóng với các tùy chỉnh đa dạng',
                                        'description' => 'Dễ dàng tạo bài kiểm tra online không giới hạn số lượng với nhiều dạng câu hỏi khác nhau: trắc nghiệm, đúng/sai, tự luận, matching, điền vào chỗ trống, câu hỏi nhóm…. đáp ứng hầu hết nhu cầu của các vị trí trong mọi ngành nghề, lĩnh vực.',
                                        'img' => asset('image/card/image9.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '4. Tự động tổng hợp kết quả, chính xác và nhanh chóng',
                                        'description' => 'Hệ thống tự động chấm điểm hỗ trợ tối đa việc lọc kết quả của từng thí sinh. Tổng hợp kết quả nhanh chóng, giúp tiết kiệm thời gian, giảm thiểu công sức và hạn chế tối đa sai sót.',
                                        'img' => asset('image/card/image10.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '5. Báo cáo trực quan',
                                        'description' => 'Thống kê kết quả trực quan, toàn diện và cập nhật real-time dưới dạng biểu đồ kết hợp số liệu chi tiết. Giúp đánh giá năng lực chính xác dựa trên các con số cụ thể, rõ ràng.',
                                        'img' => asset('image/card/image11.png')
                                    ])
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 container-content">
                            <div class="box-container">
                                <div class="d-flex flex-column align-items-center">
                                    @include('components.group_features',[
                                        'title' => '6. Phân quyền, cộng tác dễ dàng',
                                        'description' => 'Hệ thống phân quyền tài khoản quản lý nhằm tối đa hiệu quả làm việc nhóm và bảo mật đề thi.',
                                        'img' => asset('image/card/image12.png')
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="mt-4 py-4">
            <section class="container">
                <div class="text-center">
                    <h4 class="title-section">Công cụ <span style="color: #2B4AA0">đánh giá năng lực nhân sự IT</span>
                        dành cho doanh nghiệp</h4>
                    <div style="color: #2B4AA0">
                        <a href="" style="color: #2B4AA0" target="_blank">
                            <div class="d-flex justify-content-center align-items-center">
                                <div><a href="{{route('blog')}}">Tìm hiểu thêm</a></div>
                                <div class="ml-1"><img
                                        src="{{asset('image/card/arrow-right.png')}}"
                                        alt="testcenter"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <img class="w-100" src="{{asset('image/card/image13.png')}}"
                                 alt="TestcenterIT">
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="d-flex flex-column" style="row-gap: 20px">
                                <div class="d-flex align-items-center">
                                    @include('components.tool_evaluates',[
                                        'img' =>  asset('image/card/image14.png'),
                                        'text' => 'Hỗ trợ hầu hết các ngôn ngữ lập trình phổ biến hiện nay trên thị trường.',
                                    ])
                                </div>
                                <div class="d-flex align-items-center">
                                    @include('components.tool_evaluates',[
                                        'img' =>  asset('image/card/image15.png'),
                                        'text' => 'Hỗ trợ tạo testcase, upload test case hoặc tạo code mẫu
                                        giúp doanh nghiệp linh hoạt trong đánh giá.',
                                    ])
                                </div>
                                <div class="d-flex align-items-center">
                                    @include('components.tool_evaluates',[
                                        'img' =>  asset('image/card/image16.png'),
                                        'text' => ' Tự động chấm điểm và thống kê kết quả trực quan.',
                                    ])
                                </div>
                                <div class="d-flex align-items-center">
                                    @include('components.tool_evaluates',[
                                       'img' =>  asset('image/card/image17.png'),
                                       'text' => 'Ngân hàng đề IT đa dạng được nghiên cứu và phát triển
                                        bởi những chuyên gia hàng đầu trong lĩnh vực công nghệ.',
                                   ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <a href="{{route('register')}}" target="_blank">
                        <button type="button" class="btn btn-primary font-weight-normal btn-register">
                            Đăng ký miễn phí
                        </button>
                    </a>
                </div>
            </section>
        </div>
        <div class="about-us mt-4 py-4">
            <section class="container">
                <div class="text-center">
                    <h4 class="title-section">
                        Về <span style="color: #2B4AA0">chúng tôi</span>
                    </h4>
                </div>
                <div class="mt-3">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 text-about">
                            <p>
                                Chiêu mộ, đào tạo và phát triển đội ngũ nhân sự luôn là chủ đề cấp
                                thiết đối với mọi mô hình doanh nghiệp trong mục tiêu phát triển bền
                                vững. Với TestCenter.vn, chúng tôi mong muốn cung cấp cho doanh
                                nghiệp Việt Nam công cụ đánh giá nhân sự tối ưu và toàn diện, giúp
                                tiết kiệm thời gian và nâng cao chất lượng nhân sự.
                            </p>
                            <p>
                                Với hơn 500 khách hàng doanh nghiệp như Honda, Sailun, Petrolimex,
                                Ngân hàng TMCP Hàng Hải Việt Nam (MSB), Đại học FPT, Đại học
                                Luật Hà Nội,... đã trải nghiệm TestCenter.vn đều nhận định rằng:
                                TestCenter.vn là giải pháp test online không thể thiếu đối với mọi
                                mô hình doanh nghiệp. Không chỉ là công cụ tạo bài test online và
                                tổ chức các kỳ thi nhân sự với quy mô lên tới hàng nghìn nhân sự, đây
                                còn là một bước "nhảy vọt" trong đánh giá nhân sự toàn diện và
                                chính xác nhất.
                            </p>
                        </div>
                        <hr id="border-para">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <img class="w-100" src="{{asset('image/card/image18.png')}}"
                                 alt="AboutTestCenter">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="mt-4 py-4">
            <section class="container">
                <div class="text-center">
                    <h4 class="title-section">
                        <span style="color: #2B4AA0">500+ doanh nghiệp</span> đã sử dụng TestCenter.vn
                    </h4>
                </div>
                <div class="mt-4">
                    <div class="branch-container bg-white">
                        <img class="w-100" src="{{asset('image/card/image19.png')}}"
                             alt="testcenter">
                    </div>
                </div>
            </section>
        </div>
        <div class="trial py-4 mt-5 pt-5">
            <section class="container py-3">
                <div class="text-center px-5" style="font-size: 24px; line-height: 30px; font-weight: 500">
                    Trải nghiệm <span style="color: #2B4AA0">miễn phí & không giới hạn tính năng</span> của
                    TestCenter.vn
                    để nâng cao chất lượng tuyển dụng và quản trị nhân sự
                </div>
                <div class="row mt-3">
                    <img class="w-100" src="{{asset('image/card/image20.png')}}"/>
                </div>
                <div class="row justify-content-center mt-2">
                    <a href="{{route('register')}}" target="_blank">
                        <button type="button" class="btn btn-primary font-weight-normal btn-register">
                            Đăng ký miễn phí
                        </button>
                    </a>
                </div>
                <div class="row justify-content-center mt-3 font-weight-normal"
                     style="font-size: 15px; line-height: 20px; font-weight: 500">
                    <div>
                        Đã có tài khoản?
                    </div>
                    <div class="ml-2" style="color: #2B4AA0">
                        <a href="{{route('login')}}" style="color: #2B4AA0" target="_blank">Đăng nhập</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="mt-4 newest-posts d-none d-lg-block">
            <section class="container">
                <h4 class="text-center title-section">
                    Bài viết <span style="color: #2B4AA0">mới nhất</span>
                </h4>
                <div class="slider-panel-latest-new position-relative mt-3">
                    <div id="prev-slider" class="cursor-pointer position-absolute arrow-slide arrow-slide-left">
                        <svg style="color: #2C4A9F" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"/>
                        </svg>
                    </div>
                    <div id="next-slider" class="cursor-pointer position-absolute arrow-slide arrow-slide-right">
                        <svg style="color: #2C4A9F" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                             fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
                        </svg>
                    </div>
                    <div class="owl-carousel owl-theme owl-loaded owl-carousel-latest-news hidden-md">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                @include('components.owl_items',[
                                    'link' => route('blog_true'),
                                    'img' => asset('image/card/iq-va-eq-cai-nao-quan-trong-hon-testcenter.jpg'),
                                    'descriptionIMG' => 'IQ và EQ cái
                                            nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                    'linkTitle' => route('blog_true'),
                                    'title' => 'IQ và EQ cái
                                            nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                    'description' =>  'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển
                                    dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không
                                    biết IQ và EQ cái nào quan trọng hơn trong quá trình đánh giá ứng
                                    viên. Nếu bạn cũng đang tìm hiểu vấn đề IQ và [&hellip;]',
                                    'linkButton' => route('blog')
                                ])

                                @include('components.owl_items',[
                                        'link' => route('blog_true'),
                                        'img' => asset('image/card/iq-va-eq-cai-nao-quan-trong-hon-testcenter.jpg'),
                                        'descriptionIMG' => 'IQ và EQ cái
                                                nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                        'linkTitle' => route('blog_true'),
                                        'title' => 'IQ và EQ cái
                                                nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                        'description' =>  'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển
                                        dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không
                                        biết IQ và EQ cái nào quan trọng hơn trong quá trình đánh giá ứng
                                        viên. Nếu bạn cũng đang tìm hiểu vấn đề IQ và [&hellip;]',
                                        'linkButton' => route('blog')
                                    ])


                                @include('components.owl_items',[
                                        'link' => route('blog_true'),
                                        'img' => asset('image/card/iq-va-eq-cai-nao-quan-trong-hon-testcenter.jpg'),
                                        'descriptionIMG' => 'IQ và EQ cái
                                                nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                        'linkTitle' => route('blog_true'),
                                        'title' => 'IQ và EQ cái
                                                nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                        'description' =>  'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển
                                        dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không
                                        biết IQ và EQ cái nào quan trọng hơn trong quá trình đánh giá ứng
                                        viên. Nếu bạn cũng đang tìm hiểu vấn đề IQ và [&hellip;]',
                                        'linkButton' => route('blog')
                                    ])


                                @include('components.owl_items',[
                                         'link' => route('blog_true'),
                                         'img' => asset('image/card/iq-va-eq-cai-nao-quan-trong-hon-testcenter.jpg'),
                                         'descriptionIMG' => 'IQ và EQ cái
                                                 nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                         'linkTitle' => route('blog_true'),
                                         'title' => 'IQ và EQ cái
                                                 nào quan trọng hơn? Chọn yếu tố gì trong tuyển dụng',
                                         'description' =>  'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển
                                         dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không
                                         biết IQ và EQ cái nào quan trọng hơn trong quá trình đánh giá ứng
                                         viên. Nếu bạn cũng đang tìm hiểu vấn đề IQ và [&hellip;]',
                                         'linkButton' => route('blog')
                                     ])

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection




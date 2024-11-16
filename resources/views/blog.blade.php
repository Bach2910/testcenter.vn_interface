@extends('layout.resources')
@section('main')
    <div class="tdc-row td-pb-span2">
        <div id="exampleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner slide">
                <div class="carousel-item h-100 active">
                    <div class="slide-img"><img
                            src="{{asset('image/resources/equity-theory-la-gi-testcenter-1.jpg')}}"
                            alt="Image 1"
                            class="d-block mx-auto"></div>
                    <div class="title">
                        <div class="link-button">
                            <a href="{{route('news')}}" class="button-link" type="submit">Tin tức</a>
                        </div>
                        <a href="{{route('blog_true')}}">Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị
                            cần biết</a>
                    </div>
                </div>
                @include('components.carousel-item',[
                    'img' => asset('image/resources/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter.jpg'),
                    'link' => route('news'),
                    'title' => 'Tin tức',
                    'link_title' => route('blog_true'),
                    'description' => 'Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị
                            cần biết'
                ])
                @include('components.carousel-item',[
                    'img' => asset('image/resources/tuyen-mass-la-gi-testcenter.jpg'),
                    'link' => route('news'),
                    'title' => 'Tin tức',
                    'link_title' => route('blog_true'),
                    'description' => 'tuyển mass là gì'
                ])
                @include('components.carousel-item',[
                    'img' => asset('image/resources/equity-theory-la-gi-testcenter-1.jpg'),
                    'link' => route('news'),
                    'title' => 'Tin tức',
                    'link_title' => route('blog_true'),
                    'description' => 'Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp'
                ])
            </div>
            <!-- Carousel controls -->
            <div class="carousel-controls">
                <button class="carousel-control-prev" type="button" data-bs-target="#exampleCarousel"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#exampleCarousel"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="tdc-row td-pb-row mt-5">
        <div class="tdc-news-row ">
            @include('components.blog_item', [
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
                'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
                'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
            ])
            @include('components.blog_item', [
                    'img' => asset('image/resources/cats1-1-1-324x160.jpg'),
                    'name' => 'Tài liệu',
                   'title' => 'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
                   'desc' => 'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...'
               ])
            @include('components.blog_item',[
                    'img' => asset('image/resources/bo-tri-nhan-su-324x160.jpg'),
                    'name' => 'Tài liệu',
                    'title' =>'Bỏ túi “bí kíp” bố trí nhân sự hiệu quả dành...',
                    'desc' =>'Testcenter - Đối với doanh nghiệp, tuyển dụng được nhân sự giỏi và tài năng đã là một việc khó nhưng để bố trí...',
                ])
        </div>
    </div>
    <div class="picture1 pt-5 pb-5 td-pb-row tdc-row td-pb-span3">
        <img src="{{asset('image/resources/panter.png')}}" alt="">
    </div>
    <div class="blog-container tdc-row td-pb-row">
        <div class=" mt-5 news">
            <div class="tdc-row">
                <div class="td-left-blog td-pb-span8">
                    <div class="title-titles">
                        <h2 class="title-textTitle"><span>Bài viết mới nhất</span></h2>
                    </div>
                    @include('components.new_resources',[
                            'img'=> asset('image/resources/324x235/equity-theory-la-gi-testcenter-1-324x235.jpg'),
                            'title' => 'Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết...',
                            'button' => 'Tin tức',
                            'description' => 'Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng với sự “dẫn đường” của học thuyết Equity Theory, nhiều nhà quản lý có...'
                    ])
                    @include('components.new_resources',[
                            'img'=>   asset('image/resources/324x235/lean-la-gi-testcenter-324x235.jpg'),
                            'title' =>  'Phương pháp Lean là gì?',
                            'button' => 'Tin tức',
                            'description' => 'Bỏ túi những dấu hiệu nhận biết ứng viên không trung thực khi phỏng vấn sẽ giúp quá trình tìm kiếm và lựa chọn nhân tài của các nhà tuyển dụng trở nên thuận...'
                    ])

                    @include('components.new_resources',[
                           'img'=> asset('image/resources/324x235/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg'),
                           'title' =>  'IQ và EQ: Cái nào quan trọng hơn?',
                           'button' => 'Tin tức',
                           'description' =>  'Bộ phận QC nói chung và nhân viên QC đóng vai trò khá quan trọng, giúp thúc đẩy sự phát triển của doanh nghiệp, thông qua việc đảm bảo về chất lượng sản phẩm. Vậy, nhân viên QC là gì? Và đâu là phần mềm giúp thực hiện các bài test nhân viên QC hiệu quả. Mời bạn cùng Testcenter khám phá trong bài viết dưới đây nhé.'
                   ])
                    @include('components.new_resources',[
                        'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                        'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                        'button' => 'Tin tức',
                        'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                    ])
                </div>
                <div class="td-right-blog td-pb-span4">
                        <div class="card-image">
                            <a href="https://example.com">
                                <img src="{{asset('image/resources/panter2.png')}}"
                                     alt="Image">
                            </a>
                        </div>
                        <div class="form-register mb-5">
                            <div class="card-body">
                                <div class="title-titles">
                                    <div class="title-titles">
                                        <h2 class="title-textTitle"><span>Bài viết mới nhất</span></h2>
                                    </div>
                                </div>
                                <form>
                                    <p>
                                        <label>
                                            Họ tên
                                            <br>
                                            <input value type="text">
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            Email
                                            <br>
                                            <input value type="email">
                                        </label>
                                    </p>
                                    <p>
                                        <input type="submit" value="Đăng ký">
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="news-content card-news-list">
                            <div class="title-titles">
                                <div class="title-titles">
                                    <h2 class="title-textTitle"><span>Tin tức</span></h2>
                                </div>
                            </div>
                            @include('components.card-news-list',[
                        'img' => asset('image/resources/280/bai-test-nhan-vien-ban-hang-testcenter-280x280.jpg'),
                        'title' => 'Reference check là gì? 4 điểm cần lưu ý khi kiểm tra tham chiếu',
                        'button' => 'Tài liệu'
                        ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/equity-theory-la-gi-testcenter-1-280x280.jpg'),
                                'title' => '5 nhóm chỉ số nhất định phải có trong KPI cho Content Marketing',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                                'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/tuyen-mass-la-gi-testcenter-280x280.jpg'),
                                'title' => 'Mẫu quyết định điều chuyển nhân sự và những vấn đề cần lưu ý',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                                'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/kpi-cho-content-marketing-testcenter-280x280.jpg'),
                                'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-280x280.jpg'),
                                'title' => 'Top 10 mẫu email từ chối ứng viên lịch sự và chuyên nghiệp',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                                'title' => 'Top 5 mẫu thư từ chối ứng viên bằng tiếng Anh cho nhà tuyển...',
                                'button' => 'Tài liệu'
                                ])
                            @include('components.card-news-list',[
                                'img' => asset('image/resources/280/tuyen-mass-la-gi-testcenter-280x280.jpg'),
                                'title' => 'Download 6 biểu mẫu nhân sự Excel miễn phí 2023',
                                'button' => 'Tài liệu'
                                ])
                        </div>
                        <div class="load-more">
                            <a type="button" id="viewMoreBtnNews">Xem thêm</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class=" mt-5 news">
            <div class="tdc-row">
                <div class="td-left-blog card-list-exam td-pb-span8">
                    <div class="title-titles">
                        <div class="title-titles">
                            <h2 class="title-textTitle"><span>Mẫu đề</span></h2>
                        </div>
                    </div>
                    @include('components.hidden_div_exam',[
                             'img'=> asset('image/resources/324x235/equity-theory-la-gi-testcenter-1-324x235.jpg'),
                            'title' => 'Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết...',
                            'button' => 'Tin tức',
                            'description' => 'Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng với sự “dẫn đường” của học thuyết Equity Theory, nhiều nhà quản lý có...'
                    ])
                    @include('components.hidden_div_exam',[
                            'img'=>   asset('image/resources/324x235/lean-la-gi-testcenter-324x235.jpg'),
                            'title' =>  'Phương pháp Lean là gì?',
                            'button' => 'Tin tức',
                            'description' => 'Bỏ túi những dấu hiệu nhận biết ứng viên không trung thực khi phỏng vấn sẽ giúp quá trình tìm kiếm và lựa chọn nhân tài của các nhà tuyển dụng trở nên thuận...'
                    ])
                    @include('components.hidden_div_exam',[
                           'img'=> asset('image/resources/324x235/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg'),
                           'title' =>  'IQ và EQ: Cái nào quan trọng hơn?',
                           'button' => 'Tin tức',
                           'description' =>  'Bộ phận QC nói chung và nhân viên QC đóng vai trò khá quan trọng, giúp thúc đẩy sự phát triển của doanh nghiệp, thông qua việc đảm bảo về chất lượng sản phẩm. Vậy, nhân viên QC là gì? Và đâu là phần mềm giúp thực hiện các bài test nhân viên QC hiệu quả. Mời bạn cùng Testcenter khám phá trong bài viết dưới đây nhé.'
                   ])
                    @include('components.hidden_div_exam',[
                           'img'=> asset('image/resources/324x235/batchbusinesswoman-571153_1920-324x235.jpeg'),
                           'title' => 'Tuyển Mass là gì và cách tối ưu',
                           'button' => 'Tin tức',
                           'description' =>  'Bạn đã biết cách để phỏng vấn và tạo bài test nhân viên thu mua hiệu quả chưa? Nếu chưa thì bạn đừng bỏ qua bài viết này nhé. Dưới đây, Testcenter sẽ cùng bạn khám phá chi tiết hơn về vị trí nhân viên thu mua, những câu hỏi phỏng vấn hay cũng như gợi ý về phần mềm tạo bài test nhân viên thu mua tối ưu cho nhà quản lý. Cùng tìm hiểu ngay nhé!'
                   ])
                    @include('components.hidden_div_exam',[
                           'img'=> asset('image/resources/324x235/batchsale-3701777_1920-324x235.jpeg'),
                           'title' => 'Giới thiệu phần mềm thông minh tạo bài test nhân viên thủ kho￼',
                           'button' => 'Mẫu đề online',
                           'description' =>  'Bạn đang chuẩn bị phỏng vấn ứng viên và cảm thấy bối bối, không biết bài test nhân viên thủ kho như thế nào. Nhưng đừng quá lo lắng, trong bài viết dưới đây, Testcenter sẽ chia sẻ với bạn những thông tin hữu ích để có thể thực hiện phỏng vấn vị trí nhân viên kho một cách tốt nhất.'
                   ])
                    @include('components.hidden_div_exam',[
                           'img'=> asset('image/resources/324x235/paying-1438142_1920-324x235.jpeg'),
                           'title' => 'Giới thiệu phần mềm thông minh tạo bài test nhân viên thu mua',
                           'button' => 'Mẫu đề online',
                           'description' =>  'Bạn đang chuẩn bị phỏng vấn ứng viên và cảm thấy bối bối, không biết bài test nhân viên thủ kho như thế nào. Nhưng đừng quá lo lắng, trong bài viết dưới đây, Testcenter sẽ chia sẻ với bạn những thông tin hữu ích để có thể thực hiện phỏng vấn vị trí nhân viên kho một cách tốt nhất.'
                   ])
                    <div class="load-more">
                        <a type="button" id="viewMoreBtnExam">Xem thêm</a>
                    </div>
                </div>
                <div class="td-right-blog td-pb-span4">
                    <div class="news-content card-list">
                        <div class="title-titles">
                            <div class="title-titles">
                                <h2 class="title-textTitle"><span>Tài liệu</span></h2>
                            </div>
                        </div>
                        @include('components.hidden_div',[
                        'img' => asset('image/resources/280/bai-test-nhan-vien-ban-hang-testcenter-280x280.jpg'),
                        'title' => 'Download 6 biểu mẫu nhân sự Excel miễn phí 2023',
                        'button' => 'Tài liệu',
                        'month' => 'june',
                        'day' => '29',
                        'year' => '2024'
                        ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/equity-theory-la-gi-testcenter-1-280x280.jpg'),
                            'title' => 'Top 5 mẫu thư từ chối ứng viên bằng tiếng Anh cho nhà tuyển...',
                            'button' => 'Tài liệu',
                            'month' => 'june',
                        'day' => '30',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu',
                            'month' => 'june',
                        'day' => '24',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/tuyen-mass-la-gi-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu',
                            'month' => 'june',
                        'day' => '23',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu','month' => 'june',
                        'day' => '22',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/kpi-cho-content-marketing-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu',
                            'month' => 'june',
                        'day' => '25',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu',
                            'month' => 'june',
                        'day' => '20',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/reference-check-la-gi-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu','month' => 'june',
                        'day' => '21',
                        'year' => '2024'
                            ])
                        @include('components.hidden_div',[
                            'img' => asset('image/resources/280/tuyen-mass-la-gi-testcenter-280x280.jpg'),
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'Tài liệu','month' => 'june',
                        'day' => '22',
                        'year' => '2024'
                            ])
                    </div>
                    <div class="load-more">
                        <a type="button" id="viewMoreBtn">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let viewMoreBtn = document.getElementById("viewMoreBtnNews");
            let cards = document.querySelectorAll(".card-news-list .hidden-news-div");
            let cardsToShow = 4; // Số lượng card muốn hiển thị ban đầu

            // Hiển thị số lượng card ban đầu
            for (let i = 0; i < cardsToShow; i++) {
                if (cards[i]) cards[i].classList.add('show');
            }

            viewMoreBtn.addEventListener("click", function () {
                let hiddenCards = document.querySelectorAll(".card-news-list .hidden-news-div:not(.show)");

                for (let i = 0; i < cardsToShow; i++) {
                    if (hiddenCards[i]) hiddenCards[i].classList.add('show');
                }

                // Ẩn nút "Xem thêm" nếu tất cả card đã được hiển thị
                if (hiddenCards.length <= cardsToShow) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let viewMoreBtn = document.getElementById("viewMoreBtn");
            let cards = document.querySelectorAll(".card-list .hidden-div");
            let cardsToShow = 4; // Số lượng card muốn hiển thị ban đầu

            // Hiển thị số lượng card ban đầu
            for (let i = 0; i < cardsToShow; i++) {
                if (cards[i]) cards[i].classList.add('show');
            }

            viewMoreBtn.addEventListener("click", function () {
                let hiddenCards = document.querySelectorAll(".card-list .hidden-div:not(.show)");

                for (let i = 0; i < cardsToShow; i++) {
                    if (hiddenCards[i]) hiddenCards[i].classList.add('show');
                }

                // Ẩn nút "Xem thêm" nếu tất cả card đã được hiển thị
                if (hiddenCards.length <= cardsToShow) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let viewMoreBtn = document.getElementById("viewMoreBtnExam");
            let cards = document.querySelectorAll(".card-list-exam .hidden-div-exam");
            let cardsToShow = 4; // Số lượng card muốn hiển thị ban đầu

            // Hiển thị số lượng card ban đầu
            for (let i = 0; i < cardsToShow; i++) {
                if (cards[i]) cards[i].classList.add('show');
            }

            viewMoreBtn.addEventListener("click", function () {
                let hiddenCards = document.querySelectorAll(".card-list-exam .hidden-div-exam:not(.show)");

                for (let i = 0; i < cardsToShow; i++) {
                    if (hiddenCards[i]) hiddenCards[i].classList.add('show');
                }

                // Ẩn nút "Xem thêm" nếu tất cả card đã được hiển thị
                if (hiddenCards.length <= cardsToShow) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        });
    </script>
    <div class="picture2 mt-5 mb-5 td-pb-row tdc-row">
        <img src="{{asset('image/resources/Thumbnail-Testcenter-30.6-01-1.png')}}" alt="" class="img-fluid">
    </div>
    <div class="news td-pb-row tdc-row">
        <div class="title-titles">
            <div class="td-pb-span12">
                <div class="title-titles ">
                    <h2 class="title-textTitle "><span>Bài viết mới nhất</span></h2>
                </div>
            </div>
        </div>
        <div class="tdc-news-row mb-0">
            @include('components.blog_item', [
            'img' => asset('image/resources/an-toan-thong-tin-696x464.png'),
            'name' => 'Tài liệu',
            'title' => 'KRI là gì và những ứng dụng của KRI trong quản trị doanh nghiệp',
            'desc' => 'Chỉ số đo lường kết quả trọng yếu (KRI - Key Result Indicator) là một chỉ số quan trọng. Cùng tìm hiểu ngay KRI là gì nhé!'
        ])
            @include('components.blog_item', [
                'img' => asset('image/resources/chien-luoc-nhan-su-696x464.jpg'),
                'name' => 'Tài liệu',
                'title' => '“Bỏ túi” các tiêu chí đánh giá nhân viên kinh doanh hiệu quả nhất hiện nay ',
                'desc' => 'Đánh giá nhân viên kinh doanh luôn rất được các doanh nghiệp chú trọng, bởi không chỉ đây là vị trí tạo ra doanh thu trực tiếp cho doanh nghiệp mà còn là vị trí rất khó xây dựng các tiêu chí đánh giá một cách hiệu quả. Hiểu được những khó khăn này, bài viết dưới đây, Testcenter sẽ chia sẻ với bạn những tiêu chí đánh giá nhân viên kinh doanh hiệu quả nhất hiện nay.'
            ])
            @include('components.blog_item', [
                'img' => asset('image/resources/mau-danh-gia-thu-viec-1-696x464.jpeg'),
                'name' => 'Tài liệu',
                'title' => 'Năng lực làm việc là gì? Cách đánh giá năng lực làm việc của nhân viên',
                'desc' => 'Bên cạnh một thái độ cầu tiến, một nhân cách tốt thì năng lực làm việc chính là thế mạnh cạnh tranh của từng nhân viên. Năng lực làm việc tốt sẽ là tiền đề giúp nhân viên có thể hoàn thành tốt các công việc được giao, đóng góp tích cực cho doanh nghiệp. Bài viết dưới đây chúng ta sẽ cùng nhau tìm hiểu kỹ hơn về năng lực làm việc là gì, cách đánh giá năng lực làm việc của nhân viên, các nền tảng đánh giá năng lực làm việc của nhân viên hiệu quả.      '
            ])
            @include('components.blog_item', [
                'img' => asset('image/resources/de-test-tuyen-dung-696x464.png'),
                'name' => 'Tài liệu',
                'title' => '3 mẫu bài test tuyển dụng được doanh nghiệp tin dùng nhất',
                'desc' => 'Sử dụng mẫu bài test tuyển dụng đang trở nên phổ biến trong hầu hết doanh nghiệp, đặc biệt là trong tuyển dụng nhân...'
            ])
        </div>
    </div>
@endsection

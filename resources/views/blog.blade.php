@extends('layout.resources')
@section('main')
    <div class="container">
        <div id="exampleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner slide">
                <div class="carousel-item h-100 active">
                    <div class="slide-img"><img
                            src="{{asset('image/resources/equity-theory-la-gi-testcenter-1.jpg')}}"
                            alt="Image 1"
                            class="d-block mx-auto"></div>
                    <div class="title">
                        <div class="link-button">
                            <a href="{{route('news')}}" type="submit">Tin tức</a>
                        </div>
                        <a href="{{route('blog_true')}}">Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị
                            cần biết</a>
                    </div>
                </div>
                @include('components.carousel-item',[
                    'img' => asset('image/resources/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter.jpg'),
                    'link' => route('news'),
                    'title' => 'tin tức',
                    'link_title' => route('blog_true'),
                    'description' => 'Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị
                            cần biết'
                ])
                @include('components.carousel-item',[
                    'img' => asset('image/resources/tuyen-mass-la-gi-testcenter.jpg'),
                    'link' => route('news'),
                    'title' => 'tin tức',
                    'link_title' => route('blog_true'),
                    'description' => 'tuyển mass là gì'
                ])
                @include('components.carousel-item',[
                    'img' => asset('image/resources/equity-theory-la-gi-testcenter-1.jpg'),
                    'link' => route('news'),
                    'title' => 'tin tức',
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
    <div class="card-main container">
        @include('components.blog_item', [
            'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
            'name' => 'Tài liệu',
            'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
            'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
        ])
        @include('components.blog_item', [
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
               'title' => 'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
               'desc' => 'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...'
           ])
        @include('components.blog_item',[
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
                'title' =>'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
                'desc' =>'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...',
            ])
    </div>
    <div class="picture1 container pt-5 pb-5">
        <img src="{{asset('image/resources/panter.png')}}" alt="">
    </div>
    <div class="blog-container container">
        <div class=" mt-5 news">
            <div class="tdc-row">
                <div class="td-left-blog">
                    <div class="title-titles">
                        <h2 class="title-textTitle"><span>Bài viết mới nhất</span></h2>
                    </div>
                    @include('components.new_resources',[
                        'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                        'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                        'button' => 'tin tức',
                        'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                    ])
                    @include('components.new_resources',[
                         'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                         'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                         'button' => 'tin tức',
                         'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                     ])
                    @include('components.new_resources',[
                        'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                        'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                        'button' => 'tin tức',
                        'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                    ])
                    @include('components.new_resources',[
                        'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                        'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                        'button' => 'tin tức',
                        'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                    ])
                    @include('components.new_resources',[
                        'img' => asset('image/resources/micromanage-la-gi-testcenter-324x235.jpg'),
                        'title' => 'Micromanagement là gì? Dấu hiệu của Micromanagement',
                        'button' => 'tin tức',
                        'description' => 'Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...'
                    ])
                </div>
                <div class="td-right-blog">
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
                        @for($i=0;$i<10;$i++)
                            @include('components.card-news-list',[
                            'title' => '5 nhóm chỉ số nhất định phải có trong KPI cho Content Marketing',
                            'button' => 'tài liệu'
                        ])
                        @endfor
                    </div>
                    <div class="load-more">
                        <a type="button" id="viewMoreBtnNews">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mt-5 news">
            <div class="tdc-row">
                <div class="td-left-blog card-list-exam">
                    <div class="title-titles">
                        <div class="title-titles">
                            <h2 class="title-textTitle"><span>Mẫu đề</span></h2>
                        </div>
                    </div>
                    @for($i=0;$i<=10;$i++)
                        @include('components.hidden_div_exam',[
                            'title' => 'Đề test kỹ năng tin học văn phòng toàn diện cho nhà quản lý',
                            'button' => 'Tin tức',
                            'description' => 'Ngày nay khi cuộc cách mạng công nghệ khoa học kỹ thuật bùng nổ, máy tính và internet là phương tiện không thể thiếu, giúp con người khai thác thông tin nhanh, hiệu quả...'
                       ])
                    @endfor
                    <div class="load-more">
                        <a type="button" id="viewMoreBtnExam">Xem thêm</a>
                    </div>
                </div>
                <div class="td-right-blog">
                    <div class="news-content card-list">
                        <div class="title-titles">
                            <div class="title-titles">
                                <h2 class="title-textTitle"><span>Tài liệu</span></h2>
                            </div>
                        </div>
                        @for($i=0;$i<=10;$i++)
                            @include('components.hidden_div',[
                            'title' => 'Mẫu bài test cho nhân viên chăm sóc khách hàng mới nhất',
                            'button' => 'tài liệu'
                            ])
                        @endfor
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
    <div class="picture1 container mt-5 mb-5">
        <img src="{{asset('image/resources/panter.png')}}" alt="">
    </div>
    <div class="news container-lg">
        <div class="title-titles">
            <div class="title-titles">
                <h2 class="title-textTitle"><span>Bài viết mới nhất</span></h2>
            </div>
        </div>
        <div class="card-main">
                @include('components.blog_item', [
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
                'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
                'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
            ])
            @include('components.blog_item', [
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
                'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
                'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
            ])
            @include('components.blog_item', [
                'img' => asset('image/resources/nang-luc-nghe-nghiep-324x160.jpeg'),
                'name' => 'Tài liệu',
                'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
                'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
            ])
        </div>
    </div>
@endsection

@extends('layout.resources')
@section('main')
    <div class="container">
        <div id="exampleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner slide h-100">
                <div class="carousel-item h-100 active">
                    <div class="slide-img"><img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1.jpg"
                            alt="Image 1"
                            class="d-block mx-auto"></div>
                    <div class="title">
                        <div class="link-button">
                            <a href="/blog/tin-tuc/" type="submit">Tin tức</a>
                        </div>
                        <a href="/blog/micromanagement-la-gi/">Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị
                            cần biết</a>
                    </div>
                </div>
                @for($i=0;$i<4;$i++)
                    <div class="carousel-item h-100">
                        <div class="slide-img"><img
                                src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter.jpg"
                                alt="Image 1"
                                class="d-block mx-auto"></div>
                        <div class="title">
                            <div class="link-button">
                                <a href="/blog/tin-tuc/" type="submit">Tin tức</a>
                            </div>
                            <a href="/blog/micromanagement-la-gi/">Dấu hiệu nhận biết ứng viên không trung thực nhà quản
                                trị cần biết</a>
                        </div>
                    </div>
                @endfor
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
        <div class="item-details">
            @include('components.blog_item', [
                'img' =>'https://www.testcenter.vn/blog/wp-content/uploads/2021/12/batchrecruitment-concept_23-2148615177-324x160.jpeg',
                'name' => 'Tài liệu',
                'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
                'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
            ])
        </div>
        <div class="item-details">
            @include('components.blog_item', [
                    'img' =>'https://lh3.googleusercontent.com/lQzpueKHpYlGTJiO_z-UdSZd8I6woA9EO-aMSDjnWF0emlIR5dlfKW4UrG5s56c6VaOfI7WXSnETe9Peh-mcbUwgM0sj17PtStHTufjq4aHV5emUMEsSmgRpxvdpu9QD19gPVol_',
                    'name' => 'Tài liệu',
                   'title' => 'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
                   'desc' => 'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...'
               ])
        </div>
        <div class="item-details">
            @include('components.blog_item',[
                    'img' =>'https://lh5.googleusercontent.com/YYNhx09h6mWMoyOy9L8i6ZrRCer0Lmi2uSWHWeXC29XQEu3IvEoEvthx7gDbynSaAe8xMmUKccekDHnVvxG_5plQsL_WKPRVFwa2SC8G3cukT5VwhYiX7yjSi3OFLxOtl5HBAhYO',
                    'name' => 'Tài liệu',
                    'title' =>'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
                    'desc' =>'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...',
                ])
        </div>
    </div>
    <div class="picture1 container pt-5 pb-5">
        <img src="{{asset('image/product/logo2.png')}}" alt="">
    </div>
    <div class="container mt-5 news">
        <div class="tdc-row">
            <div class="td-left-blog">
                <div class="title-titles">
                    <a href="/blog/nhan-su" class="title-textTitle">Nhân sự</a>
                    <div class="underline"></div>
                </div>
                <div class="row g-0 td-content overflow-hidden mb-5 h-md-250 position-relative">
                    <div class="img-wrapper">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/micromanage-la-gi-testcenter-324x235.jpg"
                            class="img-fluid" alt="Micromanagement image">

                    </div>
                    <div class="item-detail">
                        <div class="title-mb2">
                            <a href="{{route('blogMicromanagement')}}">Micromanagement là gì? Dấu hiệu của
                                Micromanagement</a>
                        </div>
                        <div class="button-link">
                            <a href="/blog/tin-tuc/" target="_blank" type="button" class="text-white">Tin
                                tức</a>
                        </div>
                        <div class="description-mb2">
                            <p class="mb-2">
                                Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này
                                đúng
                                thời điểm, tránh gây nên tác động xấu tới doanh nghiệp của mình. Vậy, thực hư...
                            </p>
                        </div>
                        <div class="watch-more">
                            <a href="{{route('blogMicromanagement')}}" type="button" class="text-white">Xem
                                thêm</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 td-content overflow-hidden flex-md-row mb-5 h-md-250 position-relative">
                    <div class="img-wrapper">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg"
                            class="img-fluid"
                            alt="Equity Theory image">
                    </div>
                    <div class="item-detail">
                        <div class="title-mb2">
                            <a href="{{route('blogEquity')}}">Equity Theory là gì? Cách quản trị doanh
                                nghiệp hiệu quả...</a>
                        </div>
                        <div class="button-link">
                            <a href="/blog/tin-tuc/" target="_blank" href="{{route('blogEquity')}}" class=" text-white "
                            >Tin tức</a>
                        </div>
                        <div class="description-mb2">
                            <p class="mb-2">
                                Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý.
                                Nhưng
                                với sự...
                            </p>
                        </div>
                        <div class="watch-more">
                            <a type="button" class="text-white ">Xem
                                thêm</a>
                        </div>
                    </div>
                </div>
                <div
                    class="row g-0 td-content overflow-hidden flex-md-row mb-5 h-md-100 position-relative">
                    <div class="img-wrapper">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-324x235.jpg"
                            class="img-fluid"
                            alt="Equity Theory image">
                    </div>
                    <div class="item-detail">
                        <div class="title-mb2">
                            <a href="{{route('blogEquity')}}">Equity Theory là gì? Cách quản trị doanh
                                nghiệp hiệu quả...</a>
                        </div>
                        <div class="button-link">
                            <a href="/blog/tin-tuc/" target="_blank" type="button" class="text-white">Tin
                                tức</a>
                        </div>
                        <div class="description-mb2">
                            <p class="mb-2">
                                Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý.
                                Nhưng
                                với sự...
                            </p>
                        </div>
                        <div class="watch-more">
                            <a type="button" class="text-white ">Xem
                                thêm</a>
                        </div>
                    </div>
                </div>
                <div class="row g-0 td-content overflow-hidden flex-md-row mb-4 h-md-100 position-relative">
                    <div class="img-wrapper">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/tuyen-mass-la-gi-testcenter-324x235.jpg"
                            class="img-fluid"
                            alt="Equity Theory image">
                    </div>
                    <div class="item-detail">
                        <div class="title-mb2">
                            <a href="{{route('blogLean')}}">Tuyển Mass là gì? Nguyên tắc vàng để tuyển mass
                                hiệu quả...</a>
                        </div>
                        <div class="button-link">
                            <a href="/blog/tin-tuc/" target="_blank" type="button" class="text-white">Tin
                                tức</a>
                        </div>
                        <div class="description-mb2">
                            <p class="mb-2">
                                Nắm rõ quy trình tuyển Mass có thể góp phần giúp doanh nghiệp gia tăng lượng ứng
                                viên và
                                tối
                                ưu tỷ lệ giữ chân nhân sự lâu dài. Trong chuyên mục tin tức...
                            </p>
                        </div>
                        <div class="watch-more">
                            <a type="button" class="text-white">Xem
                                thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="td-right-blog">
                <div class="card-image">
                    <a href="https://example.com">
                        <img src="https://www.testcenter.vn/blog/wp-content/uploads/2021/06/15.6-01-2.png"
                             alt="Image">
                    </a>
                </div>
                <div class="form-register mb-5">
                    <div class="card-body">
                        <div class="title-titles">
                            <div class="title-textTitle">Đăng ký nhận bảng tin</div>
                            <div class="underline"></div>
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
                        <a href="/blog/mau-de-test/" class="title-textTitle">Mẫu đề</a>
                        <div class="underline"></div>
                    </div>
                    @for($i=0;$i<=10;$i++)
                        <div class="hidden-news-div">
                            <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative h-100">
                                <div class="img-wrapper">
                                    <img
                                        src="https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-280x280.jpg"
                                        alt="Micromanagement image">
                                </div>
                                <div class="item-small-detail">
                                    <div class="title-small">
                                        <a href="{{route('blogEquity')}}">Reference check là gì? 4 điểm
                                            cần lưu ý khi kiểm tra tham
                                            chiếu</a>
                                    </div>
                                    <div class="button-link">
                                        <a href="/blog/tai-lieu/"
                                           class=" text-white "
                                        >Tài liệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="load-more">
                    <a type="button" id="viewMoreBtnNews">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 news">
        <div class="tdc-row">
            <div class="td-left-blog card-list-exam">
                <div class="title-titles">
                    <a href="/blog/mau-de-test/" class="title-textTitle">Mẫu đề</a>
                    <div class="underline"></div>
                </div>
                @for($i=0;$i<=10;$i++)
                    <div class="hidden-div-exam">
                        <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                            <div class="img-wrapper">
                                <img
                                    src="https://www.testcenter.vn/blog/wp-content/uploads/2023/05/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg"
                                    alt="Micromanagement image">
                            </div>
                            <div class="item-detail">
                                <div class="title-mb2">
                                    <a href="{{route('blogEquity')}}">IQ và EQ cái nào quan
                                        trọng hơn? Chọn yếu tố gì trong tuyển...</a>
                                </div>
                                <div class="button-link">
                                    <a target="_blank" href="/blog/tin-tuc/"
                                       class="text-white ">Tin tức</a>
                                </div>
                                <div class="description-mb2">
                                    <p>
                                        IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển dụng
                                        nhân
                                        sự.
                                        Tuy
                                        vậy, rất nhiều nhà tuyển dụng vẫn phân vân không biết IQ và EQ cái...
                                    </p>
                                </div>
                                <div class="watch-more">
                                    <a type="button" class="text-white"
                                    >Xem
                                        thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="load-more">
                    <a type="button" id="viewMoreBtnExam">Xem thêm</a>
                </div>
            </div>
            <div class="td-right-blog">
                <div class="news-content card-list">
                    <div class="title-titles">
                        <a href="/blog/tai-lieu/" class="title-textTitle">Tài liệu</a>
                        <div class="underline"></div>
                    </div>
                    @for($i=0;$i<=10;$i++)
                        <div class="hidden-div">
                            <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative h-100">
                                <div class="img-wrapper">
                                    <img
                                        src="https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-280x280.jpg"
                                        alt="Micromanagement image">
                                </div>
                                <div class="item-small-detail">
                                    <div class="title-small">
                                        <a href="{{route('blogEquity')}}">Reference check là gì? 4 điểm
                                            cần lưu ý khi kiểm tra tham
                                            chiếu</a>
                                    </div>
                                    <div class="button-link">
                                        <a href="{{route('blogEquity')}}"
                                           class=" text-white "
                                        >Tài liệu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="load-more">
                    <a type="button" id="viewMoreBtn">Xem thêm</a>
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
    <div class="picture1">
        <img src="{{asset('image/product/product2.png')}}" alt="">
    </div>
    <div class="news container-lg">
        <div class="title-titles">
            <a class="title-textTitle">Bài viết mới nhất</a>
            <div class="underline"></div>
        </div>
        <div class="card-main">
            @for($i=0;$i<=3;$i++)
                <div class="card-body">
                    <img href="/blog/lean-la-gi/" src="{{asset('image/card/1.png')}}" alt="page">
                    <a href="/blog/tin-tuc/" type="button" class="link">Tin tức</a>
                    <a href="/blog/lean-la-gi/" class="card-title">Theo dõi tiến độ công việc bằng Excel có lợi ích gì?</a>
                    <p class="card-text">Hẳn bạn đã biết theo dõi tiến độ công việc bằng Excel là việc ghi lại
                        toàn
                        bộ quá
                        trình thực hiện công việc...</p>
                </div>
            @endfor
        </div>
    </div>
@endsection

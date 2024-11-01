<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite('resources/js/resource.js')
    <link rel="stylesheet" href="{{asset('css/resource.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="header-mobi">
    <div class="mobi-telephone">
        <div class="telephone-hidden">
            <div class="hamburger" onclick="openOverlay()">
                <i class="fa-solid fa-bars"></i>
            </div>
            <!-- Nội dung của overlay -->
            <div class="overlay" id="overlay">
                <div class="header-overlay">
                    <div class="link-inform">
                        <a  type="button"><i class="fa-brands fa-facebook"></i></a>
                        <a  type="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a  type="button"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                    <span class="close-btn" onclick="closeOverlay()"><i class="fa-solid fa-x"></i>
                    </span>
                </div>
                <form class="menu-form">
                    <a class="nav-link" href="{{route('index')}}">Trang chủ</a>
                    <a class="nav-link" href="{{route('peoples')}}">Nhân sự</a>
                    <a class="nav-link" href="{{route('exam')}}">Mẫu đề thi online</a>
                    <a class="nav-link" href="{{route('document')}}">Tài liệu</a>
                    <a class="nav-link" href="{{route('news')}}">Tin tức</a>
                </form>
            </div>
        </div>
        <div class="logo-header-hidden">
            <img class="td-retina-data td-retina-version"
                 data-retina="https://www.testcenter.vn/blog/wp-content/uploads/2020/11/logo-header-3-1.png"
                 src="https://www.testcenter.vn/blog/wp-content/uploads/2020/11/logo-header-3-1.png"
                 alt="logo testcenter" width="auto" height="54">
        </div>
        <div class="search-hidden">
            <div class="search-button" onclick="openOverlaySearch()"><i class="fa-solid fa-magnifying-glass"></i></div>
            <!-- Overlay content -->
            <div class="overlay-search" id="overlaySearch">
                <form class="tdc-title">
                    <span>TÌM KIẾM</span><br>
                    <input class="input-search" type="text">
                </form>
                <span class="search-close-btn" onclick="closeOverlaySearch()"><i class="fa-solid fa-x"></i></span>
            </div>
        </div>
    </div>
</div>
<nav class="container navbar navbar-expand-lg navbar-resources td-pb-row">
    <div class=" collapse navbar-collapse main" id="navbarSupportedContent">
        <div class="form-logo">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item me-3">
                    <a class="navbar-brand container" aria-current="page" href="{{route('blog')}}">
                        <img class="logo-img"
                             src="{{asset('image/resources/logo-e1617684193993.png')}}"
                             alt="Trang chủ" style="height:34px;width:120px">
                    </a>
                </li>
            </ul>
        </div>
        <div class="form-menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('index')}}"><span class="highlight">Trang chủ</span></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('peoples')}}">Nhân sự</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('exam')}}">Mẫu đề Test Online</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('document')}}">Tài liệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news')}}">Tin tức</a>
                </li>
                <li>
                    <form class="search-container">
                    <span class="search-icon" onclick="toggleSearch()"><i
                            class="fa-solid fa-magnifying-glass"></i></span>
                        <div class="search-box" id="searchBox">
                            <input type="text" class="search-input" id="searchInput" placeholder="Tìm kiếm">
                            <button class="search-button" id="searchButton" onclick="performSearch()">Tìm Kiếm</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <script>
            function toggleSearch() {
                const searchBox = document.getElementById('searchBox');
                const isHidden = searchBox.style.display === 'none' || searchBox.style.display === '';

                if (isHidden) {
                    searchBox.style.display = 'block';
                    setTimeout(() => {
                        searchBox.classList.add('show');
                    });
                } else {
                    searchBox.classList.remove('show');
                    setTimeout(() => {
                        searchBox.style.display = 'none';
                    });
                }
            }

            function performSearch() {
                const query = document.getElementById('searchInput').value;
                alert('Searching for: ' + query);
            }
        </script>
    </div>
</nav>
<script>
    // Mở overlay và ngăn cuộn trang
    function openOverlay() {
        document.querySelector('.overlay').style.display = 'block';
        document.body.classList.add('no-scroll');
    }

    // Đóng overlay và cho phép cuộn trang
    function closeOverlay() {
        document.querySelector('.overlay').style.display = 'none';
        document.body.classList.remove('no-scroll');
    }

    function openOverlaySearch() {
        document.querySelector('.overlay-search').style.display = 'block';
        document.body.classList.add('no-scroll');
    }

    // Đóng overlay tìm kiếm và cho phép cuộn trang
    function closeOverlaySearch() {
        document.querySelector('.overlay-search').style.display = 'none';
        document.body.classList.remove('no-scroll');
    }

</script>
<div class="resources-main tdc-row td-pb-row ">
        @yield('main')
</div>
<div class="footer-resources container ">
    <div class="logo">
        <img src="{{asset('image/logo/logo2.png')}}" alt="Logo">
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
        <p>Liên hệ chúng tôi: <a href="" class="highlight">soncd@testcenter.vn</a></p>
    </div>
    <div class="watch-us">
        <h5><b>Theo dõi chúng tôi</b></h5>
        <div class="button-footer">
            <a class="button" type="button"><i class="fa-brands fa-facebook"></i></a>
            <a class="button" type="button"><i class="fa-solid fa-circle-info"></i></a>
            <a class="button" type="button"><i class="fa-solid fa-envelope"></i></a>
        </div>
    </div>
</div>
<button id="scrollToTopBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></button>
<script>
    // Hiển thị nút khi cuộn xuống quá nửa trang
    window.onscroll = function () {
        var btn = document.getElementById("scrollToTopBtn");
        var halfPageHeight = document.documentElement.scrollHeight / 9; // Tính nửa chiều cao của trang
        if (document.body.scrollTop > halfPageHeight || document.documentElement.scrollTop > halfPageHeight) {
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    };

    // Hàm cuộn trang lên đầu
    function scrollToTop() {
        document.body.scrollTop = 0; // Cho Safari
        document.documentElement.scrollTop = 0; // Cho Chrome, Firefox, IE và Opera
    }
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</html>

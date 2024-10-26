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
<nav class="container navbar navbar-expand-lg navbar-resources">
    <div class=" collapse navbar-collapse main" id="navbarSupportedContent">
        <div class="form-logo">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item me-3">
                    <a class="navbar-brand container" aria-current="page" href="/blog">
                        <img class="logo-img"
                             src="https://www.testcenter.vn/blog/wp-content/uploads/2021/04/logo-e1617684193993.png"
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
<div class="resources-main">
    <div class="p-4">
        @yield('main')
    </div>
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

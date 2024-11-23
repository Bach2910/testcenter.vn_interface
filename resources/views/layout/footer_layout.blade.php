<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ngân hàng đề - Testcenter</title>
    <link rel="stylesheet" href="{{asset('css/footer_layout.css')}}">
    @vite('resources/js/footer_pages.js')
</head>
<body>
<div class="ladi-wraper">
    @yield('main')
    <div id="SECTION321" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-overlay"></div>
        <div class="ladi-container">
            <div id="BOX322" class='ladi-element'>
                <div class='ladi-box'></div>
            </div>
            <div id="GROUP323" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="LIST_PARAGRAPH324" class='ladi-element'>
                        <div class='ladi-list-paragraph'>
                            <ul>
                                @include('components.endow_page',[
                                    'endow' => 'Không giới hạn',
                                    'description' => 'số lượng đề được tạo trên hệ thống'
                                ])
                                @include('components.endow_page',[
                                    'endow' => 'Tặng 20 lượt test',
                                    'description' => 'trong vòng 12 tháng kể từ ngày kích hoạt tài khoản'
                                ])
                                @include('components.endow_page',[
                                    'endow' => 'Tặng 3 bộ đề mẫu',
                                    'description' => 'được thiết kế riêng bởi đội ngũ chuyên gia trong lĩnh vực nhân sự'
                                ])
                                <li><span style="font-weight: bold;">Tư vấn 1:1</span><span
                                        style="color: rgb(0, 55, 202); font-weight: bold;"> </span>về giải pháp riêng,
                                    tối ưu cho vấn đề hiện tại của từng doanh nghiệp
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="GROUP325" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="HEADLINE326" class='ladi-element'><h3 class='ladi-headline'><span
                                        style="color: rgb(5, 31, 77);">Ưu đãi</span> <span
                                        style="color: rgb(5, 31, 77);">khi tạo tài khoản Testcenter.vn</span> <span
                                        style="color: rgb(5, 31, 77);">ngay hôm nay</span></h3></div>
                            <div id="LINE327" class='ladi-element'>
                                <div class='ladi-line'>
                                    <div class="ladi-line-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('register')}}" target="_blank"
               id="BUTTON331" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT331" class='ladi-element'><p class='ladi-headline'>Tạo tài khoản
                            ngay<br></p></div>
                </div>
            </a>
            <div id="IMAGE355" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION20" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP122" class='ladi-element'>
                <div class='ladi-group'><a href="{{route('index')}}" target="_blank" id="HEADLINE115"
                                           class='ladi-element'><h3 class='ladi-headline'>Hơn <span
                                style="color: rgb(44, 75, 159);">100 doanh nghiệp</span> đã lựa chọn <span
                                style="color: rgb(44, 75, 159);">TestCenter.vn</span></h3></a>
                    <div id="PARAGRAPH121" class='ladi-element'><p class='ladi-paragraph'>để nâng cao chất lượng tuyển
                            dụng và đào tạo nhân sự</p></div>
                </div>
            </div>
            <a index="{{route('register')}}" target="_blank"
               id="BUTTON123" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT123" class='ladi-element'><p class='ladi-headline '>Đăng ký
                            ngay</p></div>
                </div>
            </a>
            <div id="@yield('groupFooter')" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="@yield('image1')" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="@yield('image2')" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="@yield('image3')" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="@yield('image4')" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="@yield('image5')" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GROUP349" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE350" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="IMAGE351" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="IMAGE352" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="IMAGE353" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="IMAGE354" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION340" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-overlay"></div>
        <div class="ladi-container">
            <div id="IMAGE341" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="HEADLINE342" class='ladi-element'><h4 class='ladi-headline'>Ngân hàng 300+ đề test online giúp đánh
                    giá năng lực nhân sự hiệu quả</h4></div>
            <div id="GROUP343" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="SHAPE344" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(255, 255, 255, 1)">
                                <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE345" class='ladi-element'><p class='ladi-headline'>Địa chỉ: Tầng 3, Tòa nhà
                            Goldseason, 47 Nguyễn Tuân, Thanh Xuân, Hà Nội<br></p></div>
                </div>
            </div>
            <div id="GROUP346" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="SHAPE347" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1408 1896.0833" class=""
                                 fill="rgba(255, 255, 255, 1)">
                                <path
                                    d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path>
                            </svg>
                        </div>
                    </div>
                    <a href="tel:0967778018" id="HEADLINE348" class='ladi-element'><p class='ladi-headline'>Hotline tư
                            vấn 24/7: 0967 778 018<br></p></a></div>
            </div>
        </div>
    </div>
    <div id="SECTION338" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-overlay"></div>
        <div class="ladi-container">
            <div id="HEADLINE339" class='ladi-element'><h1 class='ladi-headline'>©2021 Bản quyền thuộc về Testcenter.vn&nbsp;</h1>
            </div>
        </div>
    </div>
    <div id="SECTION_POPUP" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container"></div>
    </div>
</div>
<div id="backdrop-popup" class="backdrop-popup"></div>
<div id="backdrop-dropbox" class="backdrop-dropbox"></div>
<div id="lightbox-screen" class="lightbox-screen"></div>
<script src="https://w.ladicdn.com/v2/source/html5shiv.min.js?v=1648005215692"></script>
<script src="https://w.ladicdn.com/v2/source/respond.min.js?v=1648005215692"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular&display=swap" rel="stylesheet"
      type="text/css">
<link href="https://w.ladicdn.com/v2/source/ladipage.min.css?v=1648005215692" rel="stylesheet" type="text/css">
<script src="https://w.ladicdn.com/v2/source/ladipage.vi.min.js?v=1648005215692" type="text/javascript"></script>
</body>
</html>

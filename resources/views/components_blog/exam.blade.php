@extends('layout.resources')
@section('main')
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tin tức</a>
        </div>
        <div class="dropdown-container">
            <div class="dropdown">
                <button class="dropdown-button">
                    MỚI NHẤT
                    <span class="arrow">▼</span>
                </button>
                <div class="dropdown-menu">
                    <a href="#">Mới nhất</a>
                    <a href="#">Tin tiêu biểu</a>
                    <a href="#">Phổ biến nhất</a>
                    <a href="#">Xem nhiều theo tuần</a>
                    <a href="#">Bảng Điểm Đánh Giá</a>
                    <a href="#">Ngẫu nhiên</a>
                </div>
            </div>
        </div>
        <h1 class="td-page-title">Mẫu đề Test Online</h1>
        <div class="description">
            <p>Testcenter cung cấp hệ thống và mẫu đề test online giúp doanh nghiệp và ứng viên đánh giá tính cách, tư duy, khả năng tính toán thông qua bài test IQ, EQ, MBTI, DISC và đề thi TOEIC,… </p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($exams as $exam)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $exam['url'] }}" rel="bookmark" class="td-image-wrap" title="{{ $exam['title'] }}">
                                        <img class="entry-thumb animation" src="{{ $exam['image_url'] }}" alt="{{ $exam['title'] }}" width="324" height="235" />
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $exam['url'] }}" rel="bookmark">{{ $exam['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/mau-de-test/" type="button" class="td-post-category">Mẫu đề Test</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $exam['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $exam['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{$exams->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

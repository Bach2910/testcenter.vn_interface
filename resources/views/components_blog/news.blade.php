@extends('layout.resources')
@section('main')
    <div class="people-header-title td-container">
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
        <div class="td-category-title-holder">
            <h1 class="td-page-title">Tin tức</h1>
            <div class="description">
                <p>Testcenter.vn – Nơi cập nhật những tin tức, xu hướng mới nhất về mô hình vận hành, cách thức quản trị
                    và thông tin về các hoạt động của doanh nghiệp thành công trong và ngoài nước.</p>
            </div>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($news as $new)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $new['url'] }}" rel="bookmark" class="td-image-wrap"
                                       title="{{ $new['title'] }}">
                                        <img class="entry-thumb animation" src="{{ $new['image_url'] }}"
                                             alt="{{ $new['title'] }}" width="324" height="235"/>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $new['url'] }}" rel="bookmark">{{ $new['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/tin-tuc/" type="button" class="td-post-category">Tin tức</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $new['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $new['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{$news->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

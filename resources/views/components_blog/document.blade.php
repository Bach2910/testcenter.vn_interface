@extends('layout.resources')

@section('main')
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tài liệu</a>
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
        <h1 class="td-page-title">Tài liệu</h1>
        <div class="description">
            <p>Testcenter đưa đến nguồn tài nguyên dồi dào liên quan đến mô hình quản trị doanh nghiệp, công cụ tạo bài test online, tài liệu hướng dẫn và cách thức đưa các bài kiểm tra vào quy trình vận hành doanh nghiệp hiệu quả. </p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($articles as $article)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $article['url'] }}" rel="bookmark" class="td-image-wrap" title="{{ $article['title'] }}">
                                        <img class="entry-thumb animation" src="{{ $article['image_url'] }}" alt="{{ $article['title'] }}" width="324" height="235" />
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $article['url'] }}" rel="bookmark">{{ $article['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/tai-lieu/" type="button" class="td-post-category">Tài liệu</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $article['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $article['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{ $articles->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

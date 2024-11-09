@extends('layout.resources')
@section('main')
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>TÌM KIẾM</a>
        </div>
        <div class="input-group mb-3" style="max-width: 500px;">
            <input type="text" class="form-control" placeholder="" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-dark" type="button" id="button-addon2">TÌM KIẾM</button>
            </div>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($paginatedData as $items)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $items['url'] }}" rel="bookmark" class="td-image-wrap"
                                       title="{{ $items['title'] }}">
                                        <img class="entry-thumb animation" src="{{ $items['image_url'] }}"
                                             alt="{{ $items['title'] }}" width="324" height="235"/>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $items['url'] }}" rel="bookmark">{{ $items['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="{{route('peoples')}}" type="button" class="td-post-category">Nhân sự</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $items['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $items['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{$paginatedData->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


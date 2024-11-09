<div class="hidden-div-exam">
    <div class="row g-0 tb-row-8 td-pb-row mb-5 position-relative">
        <div class="dad">
            <div class="img-wrapper">
                <a href="{{route('blog_equity')}}">
                    <img
                        src="{{$img}}"
                        alt="Micromanagement image" class="animation">
                </a>
            </div>
            <div class="item-detail">
                <div class="title-mb2">
                    <a href="{{route('blog_equity')}}">{{$title}}</a>
                </div>
                <div class="button-link">
                    <a target="_blank" href="{{route('news')}}"
                       class="text-white ">{{$button}}</a>
                </div>
                <div class="description-mb2">
                    <p>
                        {{$description}}
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
</div>

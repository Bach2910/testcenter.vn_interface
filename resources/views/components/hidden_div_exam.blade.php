<div class="hidden-div-exam">
    <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
        <div class="img-wrapper">
            <img
                src="{{asset('image/resources/pexels-ron-lach-8681900-324x235.jpg')}}"
                alt="Micromanagement image">
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

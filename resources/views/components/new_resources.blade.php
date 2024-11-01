<div class="row g-0 td-pb-row td-mb-5 tb-row-8  position-relative">
    <div class="dad">
        <div class="img-wrapper">
            <img
                src="{{$img}}"
                class="img-fluid" alt="Micromanagement image">
        </div>
        <div class="item-detail">
            <div class="title-mb2">
                <a href="{{route('blog_micromanagement')}}">{{$title}}</a>
            </div>
            <div class="button-link">
                <a href="{{route('blog_micromanagement')}}" target="_blank" type="button"
                   class="text-white">{{$button}}</a>
            </div>
            <div class="description-mb2">
                <p class="mb-2">
                    {{$description}}
                </p>
            </div>
            <div class="watch-more">
                <a href="{{route('blog_micromanagement')}}" type="button" class="text-white">Xem
                    thêm</a>
            </div>
        </div>
    </div>
</div>

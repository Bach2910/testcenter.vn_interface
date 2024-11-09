<div class="hidden-div">
    <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative h-100">
        <div class="img-wrapper">
            <a href="{{route('blog_equity')}}">
                <img
                    src="{{$img}}"
                    alt="Micromanagement image" class="animation">
            </a>
        </div>
        <div class="item-small-detail">
            <div class="title-small">
                <a href="{{route('blog_equity')}}">{{$title}}</a>
            </div>
            <div class="more">
                <div class="button-link">
                    <a href="{{route('blog_equity')}}"
                       class=" text-white "
                    >{{$button}}</a>
                </div>
                <div class="datetime">
                    {{$month}} {{$day}}, {{$year}}
                </div>
            </div>
        </div>
    </div>
</div>

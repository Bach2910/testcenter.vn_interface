<div class="item-details td-pb-span2">
    <div class="card-body">
        <div class="img-info-bottom">
            <a href="{{route('blog_lean')}}">
                <img class="animation" src="{{$img}}" alt="page">
            </a>
            <a href="{{route('document')}}" type="button" class="link">{{$name}}</a>
        </div>
        <div class="tdc-info-botton">
            <h3 class="card-title td-module-title">
                <a href="{{route('blog_lean')}}">{{ $title }}</a>
            </h3>
            <div class="card-text">{{ $desc }}</div>
        </div>
    </div>
</div>

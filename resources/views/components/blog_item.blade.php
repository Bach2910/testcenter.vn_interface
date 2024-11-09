<div class="item-details">
    <div class="card-body">
        <a href="{{route('blog_lean')}}">
            <img class="animation" src="{{$img}}" alt="page">
        </a>
        <a href="{{route('document')}}" type="button" class="link">{{$name}}</a>
        <a href="{{route('blog_lean')}}" class="card-title">{{ $title }}</a>
        <p class="card-text">{{ $desc }}</p>
    </div>
</div>

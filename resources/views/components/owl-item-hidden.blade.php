<div class="owl-item mt-3">
    <div class="card card-item">
        <a target="_blank"
           href="{{$link}}">
            <img class="card-img-top"
                 src="{{$img}}"
                 alt="{{$descriptionIMG}}">
        </a>
        <div class="card-body">
            <div class="title-post">
                <h3 class="card-title">
                    <a target="_blank" href="{{$linkTitle}}">{{$title}}</a>
                </h3>
            </div>
            <div class="short-post">
                {{$description}}
            </div>
            <div class="more text-center mt-3">
                <div class="button-more">
                    <a target="_blank" style="color: #fff"
                       href="{{$linkButton}}"
                       class="btn btn-primary border-0 font-weight-normal">
                        Đọc thêm
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

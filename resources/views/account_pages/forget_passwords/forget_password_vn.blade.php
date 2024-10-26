@extends('layout.account')
@section('title','Quên mật khẩu')
@section('country')
    <div class="custom-select" style="width:120px">
        <div class="selected-option" id="selected-text">
            <img src="https://app.testcenter.vn/images/lang/uk_flag.png" alt="ENG" class="option-img">
            <span>ENG</span>
            <span class="arrow">&#9662;</span>
        </div>
        <div class="option-list" style="display: none;">
            <div class="option" data-value="option1">
                <img src="https://app.testcenter.vn/images/lang/uk_flag.png" alt="ENG" class="option-img">
                <span>ENG</span>
            </div>
            <div class="option" data-value="option2">
                <img src="https://app.testcenter.vn/images/lang/vietnam_flag.jpeg" alt="VIE" class="option-img">
                <span>VIE</span>
            </div>
        </div>
    </div>
    <script src="{{asset('js/translate-vn-en/forgot-password.js')}}">
    </script>
@endsection
@section('form')
    <div class="note-pass w-100 text-left">Nhập email mà bạn đã sử dụng để đăng kí tài khoản, hệ thống sẽ gửi lại thông tin để cập nhật mật khẩu.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control"  id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">Xác nhận</button>
    <div class="note">
        <p>Bạn đã nhớ lại <a href="{{route('login_vn')}}"><b>Đăng nhập</b></a></p>
    </div>
@endsection

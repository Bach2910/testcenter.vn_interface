@extends('layout.account')
@section('title','Forget password')
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
    <div class="note-pass w-100 text-left">Enter the email used to register your account, the system will send information to reset the password.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">confirm</button>
    <div class="note">
        <p>Did you remember the password? <a href="{{route('login')}}"><b>Login</b></a></p>
    </div>
@endsection


@extends('layout.account')
@section('title','Register')
@section('country')
    <div class="custom-select">
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
    <script src="{{asset('js/translate-vn-en/register.js')}}">
    </script>
@endsection
@section('form')
    <div class="name">
       <span class="form-icon">
                    <i class="bi bi-person"></i>
                </span>
        <input type="text" class="form-control" id="fullName" placeholder="Full name" required>
    </div>
    <div class="company">
        <span class="form-icon">
                     <i class="bi bi-building"></i>
                </span>
        <input type="text" class="form-control"  id="company" placeholder="Company Name">
    </div>
    <div class="phone">
        <span class="form-icon">
                   <i class="bi bi-telephone"></i>
                </span>
        <input type="text" id="phone" class="form-control"  placeholder="Phone Number">
    </div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control"  id="email" placeholder="Email">
    </div>
    <div class="password-container">
        <span class="form-icon">
                     <i class="bi bi-lock"></i>
                </span>
        <input type="password" class="form-control"  id="password" placeholder="Password">
        <i id="togglePassword" class="fas fa-eye eye-icon"></i>
    </div>
    <div class="password-again-container">
        <span class="form-icon">
                     <i class="bi bi-lock"></i>
                </span>
        <input type="password" class="form-control"  id="password" placeholder="Confirm Password">
        <i id="togglePassword" class="fas fa-eye eye-icon"></i>
    </div>
    <button type="button" class="btn btn-primary">Register</button>
    <div class="note">
        <p>Already have an account? <a href="{{route('Login')}}">Login</a></p>
    </div>
@endsection


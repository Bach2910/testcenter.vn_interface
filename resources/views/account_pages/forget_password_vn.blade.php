@extends('layout.account')
@section('title','Quên mật khẩu')
@section('country')
    <div class="custom-select" style="width:120px">
        <div class="selected-option" id="selected-text">
            <img src="{{asset('image/country/uk_flag.png')}}" alt="ENG" class="option-img">
            <span>ENG</span>
            <span class="arrow">&#9662;</span>
        </div>
        <div class="option-list" style="display: none;">
            <div class="option" data-value="option1">
                <img src="{{asset('image/country/uk_flag.png')}}" alt="ENG" class="option-img">
                <span>ENG</span>
            </div>
            <div class="option" data-value="option2">
                <img src="{{asset('image/country/vietnam_flag.jpeg')}}" alt="VIE" class="option-img">
                <span>VIE</span>
            </div>
        </div>
    </div>
    <script src="{{asset('js/translate-vn-en/forgot-password.js')}}">
    </script>
@endsection
@section('form')
    <div class="note-pass w-100 text-left">Nhập email mà bạn đã sử dụng để đăng kí tài khoản, hệ thống sẽ gửi lại thông
        tin để cập nhật mật khẩu.
    </div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div data-sitekey="6LcPcj4gAAAAANx3PcPgkvA4ZE0Fk8sKlwH8kVdF" data-size="normal" data-theme="light"
         data-badge="bottomright" data-tabindex="0" data-callback="recaptchaSuccessCallback"
         data-expired-callback="recaptchaExpiredCallback" data-error-callback="recaptchaErrorCallback"
         class="g-recaptcha">
        <div style="width: 304px; height: 78px;">
            <div>
                <iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-i1kspycse71w"
                        frameborder="0" scrolling="no"
                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                        src="https://www.recaptcha.net/recaptcha/api2/anchor?ar=1&amp;k=6LcPcj4gAAAAANx3PcPgkvA4ZE0Fk8sKlwH8kVdF&amp;co=aHR0cHM6Ly9hcHAudGVzdGNlbnRlci52bjo0NDM.&amp;hl=vi&amp;v=xds0rzGrktR88uEZ2JUvdgOY&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=w5ioyq77063f"></iframe>
            </div>
            <textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response"
                      style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
        </div>
        <iframe style="display: none;"></iframe>
    </div>
    <div class="login-container">
        <button class="topCv-login-button">Xác nhận</button>
        <div class="register-link">
            Bạn đã nhớ lại mật khẩu? <a href="{{route('login')}}">Đăng nhập</a>
        </div>
    </div>
@endsection

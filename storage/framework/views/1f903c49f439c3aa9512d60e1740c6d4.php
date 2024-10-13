<?php $__env->startSection('title','Đăng Ký'); ?>
<?php $__env->startSection('country'); ?>
    <select id="options-sign" name="options" onchange="navigateToUrl()">
        <option value="option1">ENG</option>
        <option value="option2">VIE</option>
    </select>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('form'); ?>
    <div class="name">
       <span class="form-icon">
                    <i class="bi bi-person"></i>
                </span>
        <input type="text" class="form-control" id="fullName" placeholder="Họ và tên" required>
    </div>
    <div class="company">
        <span class="form-icon">
                     <i class="bi bi-building"></i>
                </span>
        <input type="text" class="form-control"  id="company" placeholder="Tên công ty">
    </div>
    <div class="phone">
        <span class="form-icon">
                   <i class="bi bi-telephone"></i>
                </span>
        <input type="text" id="phone" class="form-control"  placeholder="Số điện thoại">
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
        <input type="password" class="form-control"  id="password" placeholder="Mật khẩu">
        <i id="togglePassword" class="fas fa-eye eye-icon"></i>
    </div>
    <div class="password-again-container">
        <span class="form-icon">
                     <i class="bi bi-lock"></i>
                </span>
        <input type="password" class="form-control"  id="password" placeholder="Xác nhận mật khẩu">
        <i id="togglePassword" class="fas fa-eye eye-icon"></i>
    </div>
    <button type="button" class="btn btn-primary">Đăng ký</button>
    <div class="note">
        <p>Đã có tài khoản? <a href="<?php echo e(route('LoginVN')); ?>">Đăng nhập</a></p>
    </div>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(asset('js/translate-vn-en/register.js')); ?>"></script>

<?php echo $__env->make('layout.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/signupVN.blade.php ENDPATH**/ ?>
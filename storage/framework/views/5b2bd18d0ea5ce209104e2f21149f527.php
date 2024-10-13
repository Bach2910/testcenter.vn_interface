<?php $__env->startSection('title','Quên mật khẩu'); ?>
<?php $__env->startSection('country'); ?>
    <select id="options-forgot" name="options" onchange="navigateToUrl()">
        <option value="option1">ENG</option>
        <option value="option2">VIE</option>
    </select>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('form'); ?>
    <div class="note-pass w-100 text-left">Nhập email mà bạn đã sử dụng để đăng kí tài khoản, hệ thống sẽ gửi lại thông tin để cập nhật mật khẩu.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control"  id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">Xác nhận</button>
    <div class="note">
        <p>Bạn đã nhớ lại <a href="<?php echo e(route('LoginVN')); ?>"><b>Đăng nhập</b></a></p>
    </div>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(asset('js/translate-vn-en/forgot-password.js')); ?>">
</script>

<?php echo $__env->make('layout.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/forgot-passwordVN.blade.php ENDPATH**/ ?>
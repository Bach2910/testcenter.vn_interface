<?php $__env->startSection('title','Forget password'); ?>
<?php $__env->startSection('country'); ?>
        <select id="options-forgot" name="options" onchange="navigateToUrl()">
            <option value="option1">ENG</option>
            <option value="option2">VIE</option>
        </select>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('form'); ?>
    <div class="note-pass w-100 text-left">Enter the email used to register your account, the system will send information to reset the password.</div>
    <div class="email">
        <span class="form-icon">
                     <i class="bi bi-envelope"></i>
                </span>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
    <button type="button" class="btn btn-primary">confirm</button>
    <div class="note">
        <p>Did you remember the password? <a href="<?php echo e(route('Login')); ?>"><b>Login</b></a></p>
    </div>
<?php $__env->stopSection(); ?>
<script src="<?php echo e(asset('js/translate-vn-en/forgot-password.js')); ?>">

</script>

<?php echo $__env->make('layout.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/forgot-password.blade.php ENDPATH**/ ?>
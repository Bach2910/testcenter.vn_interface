<?php $__env->startSection('title','Register'); ?>
<?php $__env->startSection('form'); ?>
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
        <p>Already have an account? <a href="#">Login</a></p>
    </div>
    <script>
        function navigateToUrl() {
            var selectElement = document.getElementById("options");
            var selectedValue = selectElement.value;

            if (selectedValue === "vie") {
                window.location.href = "<?php echo e(route('SignIn')); ?>";
            } else if (selectedValue === "eng") {
                window.location.href = "<?php echo e(route('SignInVN')); ?>";
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/signup.blade.php ENDPATH**/ ?>

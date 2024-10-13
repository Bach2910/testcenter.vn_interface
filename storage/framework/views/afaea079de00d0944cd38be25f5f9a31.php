<?php $__env->startSection('main'); ?>
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Nhân sự</a>
        </div>
        <div class="button-selection">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%">Mới nhất</a>
        </div>
        <h1>Nhân sự</h1>
        <div class="description">
            <p>Nắm bắt tâm lý nhân viên, thấu hiểu thị trường lao động và cập nhật những xu hướng quản trị nhân sự mới sẽ mở ra cho doanh nghiệp “cánh cửa” chào đón nhân tài. </p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <?php $__currentLoopData = $peoples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $people): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="<?php echo e($people['url']); ?>" rel="bookmark" class="td-image-wrap"
                                       title="<?php echo e($people['title']); ?>">
                                        <img class="entry-thumb" src="<?php echo e($people['image_url']); ?>"
                                             alt="<?php echo e($people['title']); ?>" width="324" height="235"/>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="<?php echo e($people['url']); ?>" rel="bookmark"><?php echo e($people['title']); ?></a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/nhan-su/" type="button" class="td-post-category">Nhân sự</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        <?php echo e($people['excerpt']); ?>

                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="<?php echo e($people['url']); ?>">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="pagination-wrapper">
                        <?php echo e($peoples->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/components_blog/people.blade.php ENDPATH**/ ?>
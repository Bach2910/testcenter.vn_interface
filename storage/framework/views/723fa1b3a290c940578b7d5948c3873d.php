<?php $__env->startSection('main'); ?>
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tài liệu</a>
        </div>
        <div class="button-selection">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%">Mới nhất</a>
        </div>
        <h1>Tài liệu</h1>
        <div class="description">
            <p>Testcenter đưa đến nguồn tài nguyên dồi dào liên quan đến mô hình quản trị doanh nghiệp, công cụ tạo bài test online, tài liệu hướng dẫn và cách thức đưa các bài kiểm tra vào quy trình vận hành doanh nghiệp hiệu quả. </p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="<?php echo e($article['url']); ?>" rel="bookmark" class="td-image-wrap" title="<?php echo e($article['title']); ?>">
                                        <img class="entry-thumb" src="<?php echo e($article['image_url']); ?>" alt="<?php echo e($article['title']); ?>" width="324" height="235" />
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="<?php echo e($article['url']); ?>" rel="bookmark"><?php echo e($article['title']); ?></a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/tai-lieu/" type="button" class="td-post-category">Tài liệu</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        <?php echo e($article['excerpt']); ?>

                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="<?php echo e($article['url']); ?>">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="pagination-wrapper">
                        <?php echo e($articles->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\interface\resources\views/components_blog/document.blade.php ENDPATH**/ ?>
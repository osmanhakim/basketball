
<?php $__env->startSection('title', settings()->website_title . ' | ' . __('words.show_testimonial')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo e(__('words.testimonials')); ?></h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('testimonials.index')); ?>" class="text-muted"><?php echo e(__('words.show_testimonials')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted"><?php echo e(__('words.show_testimonial')); ?></span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo e(__('words.show_testimonial')); ?></h3>
            </div>
             <?php if(count(config('translatable.locales')) !== 1): ?>
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a class="nav-link  <?php if($key == 0): ?> active <?php endif; ?>" data-toggle="tab"
                                   href="<?php echo e('#' . $locale); ?>"><?php echo e(__('words.locale-' . $locale)); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show <?php if($key == 0): ?> active <?php endif; ?>" id="<?php echo e($locale); ?>"
                         role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.title')); ?>

                                            - <?php echo e(__('words.locale-' . $locale)); ?>:</h5>
                                    </div>
                                    <p class="m-0"><?php echo e($testimonial->translate($locale)->title); ?></p>
                                </div>
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.job_title')); ?>

                                            - <?php echo e(__('words.locale-' . $locale)); ?>:</h5>
                                    </div>
                                    <p class="m-0"><?php echo e($testimonial->translate($locale)->job_title); ?></p>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.description')); ?>

                                            - <?php echo e(__('words.locale-' . $locale)); ?>:</h5>
                                    </div>
                                    <?php echo $testimonial->translate($locale)->description; ?>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.created_at')); ?>:</h5>
                            </div>
                            <p class="m-0"><?php echo e(formatDate($testimonial->created_at)); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.updated_at')); ?>:</h5>
                            </div>
                            <p class="m-0">
                                <?php echo e(formatDate($testimonial->created_at) == formatDate($testimonial->updated_at) ? '--' : formatDate($testimonial->updated_at)); ?>

                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark"><?php echo e(__('words.activity')); ?>:</h5>
                            </div>
                            <p class="m-0"><span
                                    class="badge rounded-pill text-white <?php echo e($testimonial->status == 1 ? 'bg-success' : 'bg-danger'); ?>"><?php echo e($testimonial->getActive()); ?></span>
                            </p>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-8">
                        <a href="<?php echo e($testimonial->image); ?>"
                           data-toggle="lightbox" data-title="<?php echo e($testimonial->title); ?>"
                           data-gallery="gallery">
                            <img src="<?php echo e($testimonial->image); ?>" class="img-fluid mb-2 image-galley"
                                 onerror="this.src='<?php echo e(asset('uploads/default_image.png')); ?>'" alt="testimonial image"/>
                        </a>
                    </div>
                </div>

            </div>

            <?php if (app('laratrust')->isAbleTo('update-testimonials')) : ?>
            <div class="card-footer">
                <div class="row">
                    <div class="col-4">
                        <a href="<?php echo e(route('testimonials.edit', $testimonial->id)); ?>"
                           class="btn btn-block btn-outline-info">
                            <?php echo e(__('words.edit')); ?>

                        </a>
                    </div>
                </div>
            </div>
            <?php endif; // app('laratrust')->permission ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/testimonials/show.blade.php ENDPATH**/ ?>
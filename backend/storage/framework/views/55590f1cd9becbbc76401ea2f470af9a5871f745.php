
<?php $__env->startSection('title', settings()->website_title . ' | ' . __('words.edit_page')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo e(__('words.pages')); ?></h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('pages.index')); ?>" class="text-muted"><?php echo e(__('words.show_pages')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted"><?php echo e(__('words.edit_page')); ?></span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('form_action', route('pages.update', $page->id)); ?>
<?php $__env->startSection('form_type', 'POST'); ?>

<?php $__env->startSection('form_content'); ?>
    <?php echo method_field('put'); ?>
    <input type="hidden" name="id" value="<?php echo e($page->id); ?>">
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo e(__('words.edit_page')); ?></h3>
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
        <div class="card-body">
            <div class="tab-content">
                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show <?php if($key == 0): ?> active <?php endif; ?>"
                         id="<?php echo e($locale); ?>" role="tabpanel">
                        <?php if($page->has_title == true): ?>
                        <div class="col form-group">
                            <label><?php echo e(__('words.title')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger">
                                    * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="<?php echo e($locale . '[title]'); ?>"
                                       placeholder="<?php echo e(__('words.title')); ?>"
                                       class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                       value="<?php echo e(old($locale . '.title', $page->translate($locale)->title)); ?>">
                                <?php $__errorArgs = [$locale . '[title]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if($page->has_sub_title == true): ?>
                            <div class="col form-group">
                                <label><?php echo e(__('words.sub_title')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                        class="text-danger"> * </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                    </div>
                                    <input type="text" name="<?php echo e($locale . '[sub_title]'); ?>"
                                           placeholder="<?php echo e(__('words.sub_title')); ?>"
                                           class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.sub_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                           value="<?php echo e(old($locale . '.sub_title', $page->translate($locale)->sub_title)); ?>">
                                    <?php $__errorArgs = [$locale . '[sub_title]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($page->has_description == true): ?>
                            <div class="col form-group">
                                <label><?php echo e(__('words.description')); ?>(<?php echo e(__('words.locale-' . $locale)); ?>)<span
                                        class="text-danger">*</span></label>
                                <textarea
                                    class="form-control ckeditor <?php $__errorArgs = [$locale . '.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> "
                                    type="text"
                                    name="<?php echo e($locale . '[description]'); ?>"
                                    rows="4"><?php echo e(old($locale . '.description', $page->translate($locale)->description)); ?> </textarea>
                                <?php $__errorArgs = [$locale . '[description]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <?php if($page->has_link == true): ?>
                    <div class="col form-group">
                        <label><?php echo e(__('words.link')); ?><span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-edit"></i></span>
                            </div>
                            <input type="text" name="<?php echo e('link'); ?>" placeholder="<?php echo e(__('words.link')); ?>"
                                   class="form-control  pl-5 min-h-40px <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   value="<?php echo e(old('link', $page->link)); ?>">
                            <?php $__errorArgs = ['[link]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($page->has_video == true): ?>
                    <div class="col form-group">
                        <label><?php echo e(__('words.video')); ?><span class="text-danger"></span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-edit"></i></span>
                            </div>
                            <input type="text" name="<?php echo e('video'); ?>" placeholder="<?php echo e(__('words.video')); ?>"
                                   class="form-control  pl-5 min-h-40px <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                   value="<?php echo e(old('video', $page->video)); ?>">
                            <?php $__errorArgs = ['[video]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <?php if($page->has_image == true): ?>
                <div class="form-group row">
                    <?php echo $__env->make('admin.components.image', [
                        'label' => __('words.image'),
                        'value' => old('image', $page->image),
                        'name' => 'image',
                        'id' => 'kt_image_3',
                        'required' => false,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endif; ?>
        </div>

    </div>


    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    <?php echo e(__('words.update')); ?>

                </button>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.create-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/pages/edit.blade.php ENDPATH**/ ?>
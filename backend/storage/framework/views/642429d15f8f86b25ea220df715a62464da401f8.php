
<?php $__env->startSection('title', settings()->website_title . ' | ' . __('words.settings')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo e(__('words.settings')); ?></h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted"><?php echo e(__('words.settings')); ?></span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form_action', route('settings.update', $setting->id)); ?>
<?php $__env->startSection('form_type', 'POST'); ?>

<?php $__env->startSection('form_content'); ?>
    <?php echo method_field('put'); ?>
    <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo e(__('words.edit_setting')); ?></h3>
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
                    <div class="tab-pane fade show <?php if($key == 0): ?> active <?php endif; ?>" id="<?php echo e($locale); ?>"
                        role="tabpanel">
                        <div class="col form-group">
                            <label><?php echo e(__('words.website_title')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="<?php echo e($locale . '[website_title]'); ?>"
                                    placeholder="<?php echo e(__('words.website_title')); ?>"
                                    class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.website_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old($locale . '.website_title', $setting->translate($locale)->website_title)); ?>">
                                <?php $__errorArgs = [$locale . '[website_title]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.meta_keywords')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="<?php echo e($locale . '[meta_keywords]'); ?>"
                                    placeholder="<?php echo e(__('words.meta_keywords')); ?>"
                                    class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.meta_keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old($locale . '.meta_keywords', $setting->translate($locale)->meta_keywords)); ?>">
                                <?php $__errorArgs = [$locale . '[meta_keywords]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.meta_title')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="<?php echo e($locale . '[meta_title]'); ?>"
                                    placeholder="<?php echo e(__('words.meta_title')); ?>"
                                    class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.meta_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old($locale . '.meta_title', $setting->translate($locale)->meta_title)); ?>">
                                <?php $__errorArgs = [$locale . '[meta_title]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.meta_description')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger">*</span></label>
                            <input class="form-control <?php $__errorArgs = [$locale . '.meta_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                                   name="<?php echo e($locale . '[meta_description]'); ?>" value="<?php echo e(old($locale . '.meta_description', $setting->translate($locale)->meta_description)); ?>" />
                            <?php $__errorArgs = [$locale . '[meta_description]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.copyrights')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="<?php echo e($locale . '[copyrights]'); ?>"
                                    placeholder="<?php echo e(__('words.copyrights')); ?>"
                                    class="form-control  pl-5 min-h-40px <?php $__errorArgs = [$locale . '.copyrights'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(old($locale . '.copyrights', $setting->translate($locale)->copyrights)); ?>">
                                <?php $__errorArgs = [$locale . '[copyrights]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.address')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control <?php $__errorArgs = [$locale . '.address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                                name="<?php echo e($locale . '[address]'); ?>" rows="4"><?php echo e(old($locale . '.address', $setting->translate($locale)->address)); ?> </textarea>
                            <?php $__errorArgs = [$locale . '[address]'];
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.footer_description')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control ckeditor <?php $__errorArgs = [$locale . '.footer_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                                name="<?php echo e($locale . '[footer_description]'); ?>" rows="4"><?php echo e(old($locale . '.footer_description', $setting->translate($locale)->footer_description)); ?> </textarea>
                            <?php $__errorArgs = [$locale . '[footer_description]'];
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="card card-custom">
        <div class="card-body">

            <div class="form-group row">
                <div class="col form-group">
                    <label><?php echo e(__('words.map')); ?><span
                            class="text-danger">*</span></label>
                    <input class="form-control <?php $__errorArgs = ['map'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                              name="<?php echo e('map'); ?>" value="<?php echo e(old('map', $setting->map)); ?>" />
                    <?php $__errorArgs = ['map'];
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

                <div class="col form-group">
                    <label><?php echo e(__('words.contact_email')); ?><span
                            class="text-danger">*</span></label>
                    <input class="form-control <?php $__errorArgs = ['contact_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="email"
                           name="<?php echo e('contact_email'); ?>" value="<?php echo e(old('contact_email', $setting->contact_email)); ?>"/>
                    <?php $__errorArgs = ['contact_email'];
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

                <div class="col form-group">
                    <label><?php echo e(__('words.newsletter_email')); ?><span
                            class="text-danger">*</span></label>
                    <input class="form-control <?php $__errorArgs = ['newsletter_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="email"
                           name="<?php echo e('newsletter_email'); ?>" value="<?php echo e(old('newsletter_email', $setting->newsletter_email)); ?>"/>
                    <?php $__errorArgs = ['newsletter_email'];
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
            <div class="form-group row">
                <?php echo $__env->make('admin.components.image', [
                    'label' => __('words.logo'),
                    'value' => $setting->logo,
                    'name' => 'logo',
                    'id' => 'kt_image_1',
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.image', [
                   'label' => __('words.white_logo'),
                   'value' => $setting->white_logo,
                   'name' => 'white_logo',
                   'id' => 'kt_image_2',
                   'required' => false,
               ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.image', [
                   'label' => __('words.favicon'),
                   'value' => $setting->favicon,
                   'name' => 'favicon',
                   'id' => 'kt_image_3',
                   'required' => false,
               ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.image', [
                    'label' => __('words.contact_img'),
                    'value' => $setting->contact_img,
                    'name' => 'contact_img',
                    'id' => 'kt_image_4',
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.image', [
                    'label' => __('words.footer_img'),
                    'value' => $setting->footer_img,
                    'name' => 'footer_img',
                    'id' => 'kt_image_5',
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.image', [
                    'label' => __('words.breadcrumb'),
                    'value' => $setting->breadcrumb,
                    'name' => 'breadcrumb',
                    'id' => 'kt_image_6',
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

    </div>

    <?php if (app('laratrust')->isAbleTo('update-settings')) : ?>
        <div class="card-footer">
            <div class="row">
                <div class="col-4">
                    <button type="submit" class="btn btn-block btn-outline-success">
                        <?php echo e(__('words.update')); ?>

                    </button>
                </div>
            </div>
        </div>
    <?php endif; // app('laratrust')->permission ?>

<?php $__env->stopSection(); ?>


















<?php echo $__env->make('admin.components.create-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/setting/index.blade.php ENDPATH**/ ?>
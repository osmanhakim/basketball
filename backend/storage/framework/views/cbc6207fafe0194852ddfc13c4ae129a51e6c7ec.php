
<?php $__env->startSection('title', settings()->website_title . ' | ' . __('words.edit_product')); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5"><?php echo e(__('words.products')); ?></h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('admin.home')); ?>" class="text-muted"><?php echo e(__('words.home')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('products.index')); ?>" class="text-muted"><?php echo e(__('words.show_products')); ?></a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted"><?php echo e(__('words.edit_product')); ?></span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('form_action', route('products.update', $product->id)); ?>
<?php $__env->startSection('form_type', 'POST'); ?>

<?php $__env->startSection('form_content'); ?>
    <?php echo method_field('put'); ?>
    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo e(__('words.edit_product')); ?></h3>
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
                        <div class="col form-group">
                            <label><?php echo e(__('words.title')); ?> - <?php echo e(__('words.locale-' . $locale)); ?><span class="text-danger">
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
                                    value="<?php echo e(old($locale . '.title', $product->translate($locale)->title)); ?>">
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

                        <div class="col form-group">
                            <label><?php echo e(__('words.description')); ?>(<?php echo e(__('words.locale-' . $locale)); ?>)<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control ckeditor <?php $__errorArgs = [$locale . '.description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " type="text"
                                name="<?php echo e($locale . '[description]'); ?>" rows="4"><?php echo e(old($locale . '.description', $product->translate($locale)->description)); ?> </textarea>
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
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="card card-custom">
        <div class="card-body">
            <div class="form-group row">
                <?php echo $__env->make('admin.components.image', [
                    'label' => __('words.image'),
                    'value' => old('image', $product->image),
                    'name' => 'image',
                    'id' => 'kt_image_3',
                    'accept' => 'image/*',
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('admin.components.files', [
                    'label' => __('words.files'),
                    'name' => 'files[]',
                    'multi' => 'multiple',
                    'accept' =>
                        'application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf',
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php if($files->isNotEmpty()): ?>
                <div class="row">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary">
                                    <div class="card-header bg-secondary py-1 m-0">
                                        <h4 class="card-title"><?php echo e(__('words.files')); ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-3">
                                                    <div class="rounded border m-1">
                                                        <div>

                                                            <a href="<?php echo e($file->path); ?>" target="_blank" download>
                                                                <img class="index_image"
                                                                    src="<?php echo e(asset('uploads/pdf.png')); ?>" alt="file">
                                                            </a>

                                                        </div>
                                                        <div class="form-check form-check-inline mx-2">
                                                            <input
                                                                class="form-check-input checkImage <?php $__errorArgs = ['checkImage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                type="checkbox" id="image-<?php echo e($file->id); ?>">
                                                            <label class="form-check-label"
                                                                for="image-<?php echo e($file->id); ?>"><?php echo e(__('words.delete')); ?></label>

                                                            <?php $__errorArgs = ['checkImage'];
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
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div id="deleted_images"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <br>
            <br>
            <div class="form-group row">
                <div class="form-group col-6">
                    <label for="exampleSelectd"><?php echo e(__('words.category')); ?></label>
                    <select class="form-control" id="exampleSelectd" name="category_id">
                        <option value=""><?php echo e(__('words.choose')); ?></option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                <?php echo e(old('category_id', $product->category_id) == $category->id ? 'selected' : ''); ?>>
                                <?php echo e($category->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['category_id'];
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

                <?php echo $__env->make('admin.components.switch', [
                    'label' => __('words.status'),
                    'name' => 'status',
                    'val' => old('status', $product->status),
                    'required' => false,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

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

<?php $__env->startSection('scripts'); ?>
    <script>
        function getDeletedImages() {
            $('#deleted_images').empty();

            $('input[type="checkbox"].checkImage:checked').each(function() {
                $('#deleted_images').append('<input type="hidden" name="deleted_files[]" value="' + $(this).attr(
                    "id").replace('image-', '') + '">');

            });
        }

        $(".checkImage").change(function() {
            getDeletedImages();
            if (this.checked) {
                $(this).parent().find("img").addClass("delete");
            } else {
                $(this).parent().find("img").removeClass("delete");
            }

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.create-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\BasketBall\backend\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>

   
<?php $__env->startSection('content'); ?>
<div class="mainSection-title">
    <div class="row">
        <div class="col-12">
            <div
              class="d-flex justify-content-between align-items-center flex-wrap gr-15"
            >
                <div class="d-flex flex-column">
                    <h4><?php echo e(get_phrase('System Settings')); ?></h4>
                    <ul class="d-flex align-items-center eBreadcrumb-2">
                        <li><a href="#"><?php echo e(get_phrase('Home')); ?></a></li>
                        <li><a href="#"><?php echo e(get_phrase('Settings')); ?></a></li>
                        <li><a href="#"><?php echo e(get_phrase('System Settings')); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-7">
        <div class="eSection-wrap">
            <div class="eMain">
                <div class="row">
                    <div class="col-md-11 pb-3">
                        <div class="eForm-layouts">
                            <p class="column-title"><?php echo e(get_phrase('SYSTEM SETTINGS')); ?></p>
                            <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="<?php echo e(route('superadmin.system.update')); ?>">
                                <?php echo csrf_field(); ?> 
                                <div class="fpb-7">
                                    <label for="system_name" class="eForm-label"><?php echo e(get_phrase('System Name')); ?></label>
                                    
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('system_name')); ?>" id="system_name" name = "system_name" required>
                                    
                                </div>
                                <div class="fpb-7">
                                    <label for="system_title" class="eForm-label"><?php echo e(get_phrase('System Title')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('system_title')); ?>" id="system_title" name = "system_title" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="navbar_title" class="eForm-label"><?php echo e(get_phrase('Navbar Title')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('navbar_title')); ?>" id="navbar_title" name = "navbar_title" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="system_email" class="eForm-label"><?php echo e(get_phrase('System Email')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('system_email')); ?>" id="system_email" name = "system_email" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="phone" class="eForm-label"><?php echo e(get_phrase('Phone')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('phone')); ?>" id="phone" name = "phone" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="fax" class="eForm-label"><?php echo e(get_phrase('Fax')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('fax')); ?>" id="fax" name = "fax" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="language" class="eForm-label"><?php echo e(get_phrase('System Language')); ?></label>
                                    <select class="form-select eForm-select eChoice-multiple-with-remove" id="language" name="language" required>
                                        <?php $languages = get_all_language(); ?>
                                        <?php foreach ($languages as $language): ?>
                                        <option value="<?php echo e($language->name); ?>" <?php echo e(get_settings('language') == $language->name ?  'selected':''); ?>><?php echo e(ucfirst($language->name)); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="fpb-7">
                                    <label for="address" class="eForm-label"><?php echo e(get_phrase('Address')); ?></label>
                                    <textarea class="form-control eForm-control" id="address" name = "address" rows="5" required><?php echo e(get_settings('address')); ?></textarea>
                                </div>
                                <div class="fpb-7">
                                    <label for="frontend_view" class="eForm-label"><?php echo e(get_phrase('Frontend View')); ?></label>
                                    <select name="frontend_view" id="frontend_view" class="form-select eForm-select eChoice-multiple-with-remove"  required>
                                        <option value="0" <?php echo e(get_settings('frontend_view') == '0' ? 'selected':''); ?> ><?php echo e(get_phrase('No')); ?></option>
                                        <option value="1" <?php echo e(get_settings('frontend_view') == '1' ? 'selected':''); ?> ><?php echo e(get_phrase('Yes')); ?></option>
                                    </select>
                                </div>
                                <div class="fpb-7">
                                    <label for="name" class="eForm-label"><?php echo e(get_phrase('Timezone')); ?></label>
                                    <select class="form-select eForm-select eChoice-multiple-with-remove" id="timezone" name="timezone" required>
                                        <?php $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL); ?>
                                        <?php foreach ($tzlist as $tz): ?>
                                        <option value="<?php echo e($tz); ?>" <?php echo e(get_settings('timezone') == $tz ?  'selected':''); ?>><?php echo e($tz); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="fpb-7">
                                    <label for="footer_text" class="eForm-label"><?php echo e(get_phrase('Footer Text')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('footer_text')); ?>" id="footer_text" name = "footer_text" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="footer_link" class="eForm-label"><?php echo e(get_phrase('Footer Link')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('footer_link')); ?>" id="footer_link" name = "footer_link" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="footer_link" class="eForm-label"><?php echo e(get_phrase('Help Link')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('help_link')); ?>" id="help_link" name = "help_link" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="youtube_api_key" class="eForm-label"><?php echo e(get_phrase('Youtube Api Key')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('youtube_api_key')); ?>" id="youtube_api_key" name = "youtube_api_key" required>
                                </div>
                                <div class="fpb-7">
                                    <label for="vimeo_api_key" class="eForm-label"><?php echo e(get_phrase('Vimeo Api Key')); ?></label>
                                    <input type="text" class="form-control eForm-control" value="<?php echo e(get_settings('vimeo_api_key')); ?>" id="vimeo_api_key" name = "vimeo_api_key" required>
                                </div>
                                 <div class="fpb-7 pt-2">
                                    <button type="submit" class="btn-form"><?php echo e(get_phrase('Submit')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="eSection-wrap">
            <div class="eMain">
                <div class="row">
                    <div class="col-md-12 pb-3">
                        <p class="column-title"><?php echo e(get_phrase('PRODUCT UPDATE')); ?></p>
                        <div class="eForm-file">
                            <form action="<?php echo e(route('superadmin.product.update')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="formFileSm" class="eForm-label"><?php echo e(get_phrase('File')); ?></label>
                                    <input class="form-control eForm-control-file" id="formFileSm" type="file" name="file">
                                </div>
                                <button type="submit" class="btn-form float-end"><?php echo e(get_phrase('Update')); ?></button>
                            </form>
                        </div>
                    </div>
                    <span class="eBadge ebg-info mb-1 p-2"><?php echo 'Maximum upload size'; ?>: <?php echo ini_get('upload_max_filesize'); ?></span>
                    <span class="eBadge ebg-info mb-1 p-2"><?php echo 'Post max size'; ?>: <?php echo ini_get('post_max_size'); ?></span>
                    <span class="eBadge ebg-danger mb-1 p-2"><?php echo '"post_max_size" '.get_phrase("Has to be bigger than").' "upload_max_filesize"'; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="eSection-wrap">
        <div class="eMain">
            <div class="row">
                <div class="col-md-12 pb-3">
                    <p class="column-title"><?php echo e(get_phrase('SYSTEM LOGO')); ?></p>
                    <div class="eForm-file">
                        <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="<?php echo e(route('superadmin.logo.update')); ?>">
                            <?php echo csrf_field(); ?> 
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <label class="col-form-label" for="example-fileinput"><?php echo e(get_phrase('Dark logo')); ?></label>
                                    <div class="eCard d-block text-center bg-light">
                                        <img src="<?php echo e(asset('assets/uploads/logo/'.get_settings('dark_logo'))); ?>" class="mx-4 my-5" width="200px"
                                            alt="...">
                                        <div class="eCard-body">
                                            <input class="form-control eForm-control-file" id="formFileSm" type="file" name="dark_logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="col-form-label" for="example-fileinput"><?php echo e(get_phrase('Light logo')); ?></label>
                                    <div class="eCard d-block text-center bg-secondary">
                                        <img src="<?php echo e(asset('assets/uploads/logo/'.get_settings('light_logo'))); ?>" class="mx-4 my-5" width="200px"
                                            alt="...">
                                        <div class="eCard-body">
                                        <input class="form-control eForm-control-file" id="formFileSm" type="file" name="light_logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="col-form-label" for="example-fileinput"><?php echo e(get_phrase('Favicon')); ?></label>
                                    <div class="eCard d-block text-center bg-light">
                                        <img src="<?php echo e(asset('assets/uploads/logo/'.get_settings('favicon'))); ?>" class="mx-4 my-5" width="53px" height="60px"
                                            alt="...">
                                        <div class="eCard-body">
                                        <input class="form-control eForm-control-file" id="formFileSm" type="file" name="favicon">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <label class="col-form-label" for="example-fileinput"><?php echo e(get_phrase('Nav Bar Logo')); ?></label>
                                    <div class="eCard d-block text-center bg-secondary">
                                        <img src="<?php echo e(asset('assets/uploads/logo/'.get_settings('white_logo'))); ?>" class="mx-4 my-5" width="53px" height="60px"
                                            alt="...">
                                        <div class="eCard-body">
                                        <input class="form-control eForm-control-file" id="formFileSm" type="file" name="white_logo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-form"><?php echo e(get_phrase('Update Logo')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('superadmin.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/foxtjfzg/public_html/academits.com/resources/views/superadmin/settings/system_settings.blade.php ENDPATH**/ ?>
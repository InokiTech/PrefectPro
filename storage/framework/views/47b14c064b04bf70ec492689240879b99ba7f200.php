<div class="row">
  <div class="col-12">
      <div class="school_name">
          <h2 class="text-center"><?php echo e(DB::table('schools')->where('id', $data_id)->value('title')); ?></h2>
      </div>
  </div>
</div>
<div class="mainSection-title">
  <div class="row">
    <div class="col-12">
      <div class="eSection-wrap pb-2">
        <div class="table-responsive">
          <table class="table eTable eTable-2">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"><?php echo e(get_phrase('Name')); ?></th>
                <th scope="col"><?php echo e(get_phrase('Email')); ?></th>
                <th scope="col"><?php echo e(get_phrase('User Info')); ?></th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                    $info = json_decode($admin->user_information);
                    $user_image = $info->photo;
                    if(!empty($info->photo)){
                        $user_image = 'uploads/user-images/'.$info->photo;
                    }else{
                        $user_image = 'uploads/user-images/thumbnail.png';
                    }
      
                ?>
                  <tr>
                    <th scope="row">
                      <p class="row-number"><?php echo e($key+1); ?></p>
                    </th>
                    <td>
                      <div
                        class="dAdmin_profile d-flex align-items-center min-w-200px"
                      >
                        <div class="dAdmin_profile_img">
                          <img
                            class="img-fluid"
                            width="50"
                            height="50"
                            src="<?php echo e(asset('assets')); ?>/<?php echo e($user_image); ?>"
                          />
                        </div>
                        <div class="dAdmin_profile_name">
                          <h4><?php echo e($admin->name); ?></h4>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-250px">
                        <p><?php echo e($admin->email); ?></p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-250px">
                        <p><span><?php echo e(get_phrase('Phone')); ?>:</span> <?php echo e($info->phone); ?></p>
                        <p>
                          <span><?php echo e(get_phrase('Address')); ?>:</span> <?php echo e($info->address); ?>

                        </p>
                      </div>
                    </td>
                    
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          </div>
        </div> 
      </div>
    </div>
  </div>
  
</div>


<?php /**PATH /home/foxtjfzg/public_html/academits.com/resources/views/superadmin/school/admin_list.blade.php ENDPATH**/ ?>
<style>
    .profile_img{
        display: flex;
        justify-content: center;
    }
    .student_simg{
        display: flex;
        justify-content: center;
    }
    .name_title h4{
        font-size: 14px;
        font-weight: 500;
    }
    .text{
        border-top: 1px solid #817e7e21;
        
    } 
    .text h4{
        border-bottom: 1px solid #817e7e21;
        padding-bottom: 7px;
        padding-top: 5px;
        font-size: 14px;
        font-weight: 400;
    }
    .text h4:last-child{
        border-bottom: none;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="school_name">
            <h2 class="text-center"><?php echo e(DB::table('schools')->where('id', auth()->user()->school_id)->value('title')); ?></h2>
        </div>
    </div>
</div>

<section class="studnt_profile">
    <div class="container"> 
      <div class="row">
        <div class="col-lg-4">
          <div class="profile_img">
              <div class="test_div">
                  <div class="student_simg">
                      <img src="<?php echo e($user_details['photo']); ?>" class="rounded-circle div-sc-five">
                  </div>
                  <div class="name_title mt-3 text-center">
                      <h4><?php echo e(get_phrase('Name')); ?> : <?php echo e($user_details['name']); ?></h4>
                      <h4><?php echo e(get_phrase('Email')); ?> : <?php echo e(null_checker($user_details['email'])); ?></h4>
                      
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-8">
          <div class="text name_title">
              <h4><?php echo e(get_phrase('Name')); ?> : <?php echo e($user_details['name']); ?></h4>
              <h4><?php echo e(get_phrase('Gender')); ?> : <?php echo e(null_checker($user_details['gender'])); ?></h4>
              <h4><?php echo e(get_phrase('Address')); ?> : <?php echo e(null_checker($user_details['address'])); ?></h4>
              <h4><?php echo e(get_phrase('Blood')); ?> : <?php echo e(null_checker(strtoupper($user_details['blood_group']))); ?></h4>
              <h4><?php echo e(get_phrase('Contact')); ?> : <?php echo e(null_checker($user_details['phone'])); ?></h4>
          </div>
      </div>
      </div>
    </div>
</section>
<?php /**PATH /home/foxtjfzg/public_html/academits.com/resources/views/admin/teacher/teacher_profile.blade.php ENDPATH**/ ?>
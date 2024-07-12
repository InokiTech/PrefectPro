  <!-- REGISTRATION modal -->
  <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl">
          <div class="modal-content p-2" style="border-radius: 20px;">
              <!-- Modal Header  -->
              <div class="modal-header modal-head">
                  <h4 class="modal-title">Registration Form</h4>
                  <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
              </div>

              <!-- Modal body -->
              <div class="popup">
                  <div class="row">
                      <form method="POST" enctype="multipart/form-data" class="modal-body  ajaxForm"
                          action="<?php echo e(route('school.create')); ?>">
                          <?php echo csrf_field(); ?>
                          <div class="register-left">
                              <h6><?php echo e(get_phrase('SCHOOL INFO')); ?></h6>
                              <div class="mb-1 mt-3">
                                  <label for="school_name" class="form-label"><?php echo e(get_phrase('School Name')); ?></label>
                                  <input type="text" class="form-control" id="school_name" name="school_name"
                                      required />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="school_address"
                                      class="form-label"><?php echo e(get_phrase('School Address')); ?></label>
                                  <input type="text" class="form-control" id="school_address" name="school_address"
                                      required />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="school_email" class="form-label"><?php echo e(get_phrase('School Email')); ?></label>
                                  <input type="email" class="form-control" id="school_email" name="school_email"
                                      required />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="school_phone" class="form-label"><?php echo e(get_phrase('School Phone')); ?></label>
                                  <input type="text" class="form-control" id="school_phone" name="school_phone"
                                      required />
                              </div>
                              <div class="mt-3">
                                  <label for="school_info" class="form-label"><?php echo e(get_phrase('School info')); ?></label>
                                  <textarea class="form-control school-info" id="school_info" name="school_info" required></textarea>
                              </div>

                          </div>
                          <div class="register-right">
                              <h6 class="admin-info"><?php echo e(get_phrase('ADMIN INFO')); ?></h6>

                              <div class="mb-1 mt-3">
                                  <label for="admin_name" class="form-label"><?php echo e(get_phrase('Admin Name')); ?></label>
                                  <input type="text" class="form-control" id="admin_name" name="admin_name"
                                      required />
                              </div>

                              <div class="input-group mb-1 mt-2 flex-column">
                                  <label for="inputGroupSelect04"
                                      class="form-label mb-1 mt-1"><?php echo e(get_phrase('Gender')); ?></label>
                                  <select class="form-select w-auto" id="gender" name="gender" required>
                                      <option selected><?php echo e(get_phrase('Select a gender')); ?></option>
                                      <option value="Male"><?php echo e(get_phrase('Male')); ?></option>
                                      <option value="Female"><?php echo e(get_phrase('Female')); ?></option>
                                  </select>
                              </div>
                              <div class="input-group mb-1 mt-2 flex-column">
                                  <label for="blood_group"
                                      class="form-label mb-1 mt-1"><?php echo e(get_phrase('Blood group')); ?></label>
                                  <select class="form-select w-auto" id="blood_group" name="blood_group" required>
                                      <option value=""><?php echo e(get_phrase('Select a blood group')); ?></option>
                                      <option value="a+"><?php echo e(get_phrase('A+')); ?></option>
                                      <option value="a-"><?php echo e(get_phrase('A-')); ?></option>
                                      <option value="b+"><?php echo e(get_phrase('B+')); ?></option>
                                      <option value="b-"><?php echo e(get_phrase('B-')); ?></option>
                                      <option value="ab+"><?php echo e(get_phrase('AB+')); ?></option>
                                      <option value="ab-"><?php echo e(get_phrase('AB-')); ?></option>
                                      <option value="o+"><?php echo e(get_phrase('O+')); ?></option>
                                      <option value="o-"><?php echo e(get_phrase('O-')); ?></option>
                                  </select>
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="admin_address"
                                      class="form-label"><?php echo e(get_phrase('Admin Address')); ?></label>
                                  <input type="text" class="form-control" id="admin_address" name="admin_address"
                                      required />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="admin_phone"
                                      class="form-label"><?php echo e(get_phrase('Admin Phone Number')); ?></label>
                                  <input type="text" class="form-control" id="admin_phone" name="admin_phone"
                                      required />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="photo" class="form-label"><?php echo e(get_phrase('Photo')); ?></label>
                                  <input class="form-control" type="file" accept="image/*" id="photo"
                                      name="photo" />
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="admin_email" class="form-label"><?php echo e(get_phrase('Admin Email')); ?></label>
                                  <input id="admin_email" name="admin_email" type="email" class="form-control"
                                      required>
                              </div>
                              <div class="mb-1 mt-2">
                                  <label for="admin_password"
                                      class="form-label"><?php echo e(get_phrase('Admin Password')); ?></label>
                                  <input type="password" id="admin_password" class="form-control mb-3"
                                      name="admin_password" required />
                              </div>
                              <button type="submit" class="btn btn-primary mt-5 " style="float: right">
                                  Submit
                              </button>
                          </div>
                      </form>
                  </div>
              </div>

              <!-- Modal footer -->
              <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div> -->
          </div>
      </div>
  </div>
<?php /**PATH /home/foxtjfzg/public_html/academits.com/resources/views/frontend/include_modal.blade.php ENDPATH**/ ?>
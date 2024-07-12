<div class="tab-pane fade" id="v-pills-paystack" role="tabpanel" aria-labelledby="v-pills-paystack-tab" tabindex="0">


    <form action="<?php echo e(route('admin.subscription.paystack.pay', $selected_package['id'])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Pay Now
                </button>
            </div>
        </div>
    </form>


</div><?php /**PATH /home/swiftypo/public_html/resources/views/admin/subscription/paystack.blade.php ENDPATH**/ ?>
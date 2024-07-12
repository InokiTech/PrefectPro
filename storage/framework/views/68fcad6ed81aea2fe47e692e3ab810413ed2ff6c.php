<!-- Jquery Js -->
<script src="<?php echo e(asset('frontend/assets/js/jquery-3.6.1.min.js')); ?>"></script>
<!-- Bootstarp Js -->
<!-- <script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script> -->
<!-- Main Js -->


<script src="<?php echo e(asset('frontend/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/js/owl-carousel.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/js/animation.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/js/imagesloaded.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/js/popup.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/assets/js/js/custom.js')); ?>"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo e(asset('frontend/assets/js/pricelist.js')); ?>"></script>


<!--Toaster Script-->
<script src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>

<script>
    // Get all ul elements with the class "visibility"
    var ulElements = document.querySelectorAll('.visibility');

    // Loop through each ul element
    ulElements.forEach(function(ulElement) {
        // Get the first li child element of the ul
        var firstLi = ulElement.querySelector('li');

        // Remove the 'is-hidden' class from the first li element
        firstLi.classList.remove('is-hidden');

        // Add the 'is-visible' class to the first li element
        firstLi.classList.add('is-visible');
    });
</script>


<script>

    "use strict";

    <?php if(Session::has('message')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("<?php echo e(session('message')); ?>");
    <?php endif; ?>

    <?php if(Session::has('error')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("<?php echo e(session('error')); ?>");
    <?php endif; ?>

    <?php if(Session::has('info')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.info("<?php echo e(session('info')); ?>");
    <?php endif; ?>

    <?php if(Session::has('warning')): ?>
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.warning("<?php echo e(session('warning')); ?>");
    <?php endif; ?>
</script>
<?php /**PATH /home/swiftypo/public_html/resources/views/frontend/include_buttom.blade.php ENDPATH**/ ?>
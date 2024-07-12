<form method="POST" class="d-block ajaxForm" action="<?php echo e(route('teacher.show_syllabus_modal_post')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-row">


        <div class="fpb-7">
            <label for="title" class="eForm-label"><?php echo e(get_phrase('Tittle')); ?></label>
            <input type="text" class="form-control eForm-control" id="title" name = "title" placeholder="Provide title" required>
        </div>
        <div class="fpb-7">
            <label for="class_id_on_create" class="eForm-label"><?php echo e(get_phrase('Class')); ?></label>
            <select class="form-select eForm-select eChoice-multiple-with-remove" id="class_id_on_create" name="class_id" onchange="classWiseSectionOnCreate(this.value)" required>
                <option value=""><?php echo e(get_phrase('Select a class')); ?></option>

                <?php foreach($classes as $class): ?>
                    <option value="<?php echo e($class['id']); ?>"><?php echo e($class['name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="fpb-7">
            <label for="section_id_on_create" class="eForm-label"><?php echo e(get_phrase('Section')); ?></label>
            <select class="form-select eForm-select eChoice-multiple-with-remove" id="section_id_on_create" name="section_id" required>
                <option value=""><?php echo e(get_phrase('Select a section')); ?></option>
            </select>
        </div>

        <div class="fpb-7">
            <label for="subject_id_on_create" class="eForm-label"><?php echo e(get_phrase('Subject')); ?></label>
            <select class="form-select eForm-select eChoice-multiple-with-remove" id="subject_id_on_create" name="subject_id" requied>
                <option><?php echo e(get_phrase('Select a subject')); ?></option>
            </select>
        </div>
        <div class="fpb-7">
            <label for="syllabus_file" class="eForm-label"><?php echo e(get_phrase('Upload syllabus')); ?></label>
            <div class="custom-file-upload">
                <input type="file" class="form-control eForm-control-file" id="syllabus_file" name = "syllabus_file" required>
            </div>
        </div>
        <div class="fpb-7 pt-2">
            <button class="btn-form" type="submit"><?php echo e(get_phrase('Create syllabus')); ?></button>
        </div>
    </div>
</form>

<script type="text/javascript">

    "use strict";

    // Jquery form validation initialization
    $(".ajaxForm").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, showAllSyllabuses);
    });

    $('document').ready(function(){

    });


    function classWiseSectionOnCreate(classId) {


    $.ajax({

        url: '<?php echo e(route('teacher.class_wise_section_for_syllabus')); ?>',
        data: {classId : classId},
        success: function(response){
            $('#section_id_on_create').html(response);
            classWiseSubjectOnCreate(classId);
    }
    });


    }

    function classWiseSubjectOnCreate(classId) {
       var id=classId;
        var url = "<?php echo e(route('class_wise_subject', ":id")); ?>";
            url = url.replace(':id', id);
        $.ajax({
            url: url,
            success: function(response){
                $('#subject_id_on_create').html(response);
            }
        });
    }

    $(document).ready(function () {
        $(".eChoice-multiple-with-remove").select2();
    });

</script>
<?php /**PATH /home/foxtjfzg/public_html/academits.com/resources/views/teacher/syllabus/create.blade.php ENDPATH**/ ?>
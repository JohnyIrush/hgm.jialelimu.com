<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <style type="text/css">
        @media print
        {
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
    </style>
    
    <div class="content-wrapper">  
        <!-- Main content -->
        <div class="row"> 
            <?php $this->load->view('student/Studentinfo/details_view'); ?>
         </div>
    </div>
    <script type="text/javascript">
    
       /*
        function getSectionByClass(class_id, section_id) {
            if (class_id != "" && section_id != "") {
                $('#section_id').html("");
                var base_url = '<?php echo base_url() ?>';
                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                $.ajax({
                    type: "GET",
                    url: base_url + "sections/getByClass",
                    data: {'class_id': class_id},
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (i, obj)
                        {
                            var sel = "";
                            if (section_id == obj.section_id) {
                                sel = "selected";
                            }
                            div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                        });
                        $('#section_id').append(div_data);
                    }
                });
            }
        }
        $(document).ready(function () {
            var class_id = $('#class_id').val();
            var section_id = '<?php echo set_value('section_id') ?>';
            getSectionByClass(class_id, section_id);
            $(document).on('change', '#class_id', function (e) {
                $('#section_id').html("");
                var class_id = $(this).val();
                var base_url = '<?php echo base_url() ?>';
                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                $.ajax({
                    type: "GET",
                    url: base_url + "sections/getByClass",
                    data: {'class_id': class_id},
                    dataType: "json",
                    success: function (data) {
                        $.each(data, function (i, obj)
                        {
                            div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                        });
                        $('#section_id').append(div_data);
                    }
                });
            });
        }); */
    </script>
</body>
</html>

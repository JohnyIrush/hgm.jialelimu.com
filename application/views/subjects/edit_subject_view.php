
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



    

    <div class="row"> 

      <div class="content-wrapper container">

      <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><i class="fa fa-pencil"></i></li>
                                    <li>Edit Subjects</li>
                                </ul>
                                <h4>Edit Subjects</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row" style="background:url('images/back.png');">
                           <div class="col-md-3">
                           </div>

                            <!--edit school-->
                            <div class="col-md-6">

                             <?php
                                 
                                 foreach ($subjects as $subject) {

                                    echo

                                '<form action="/subjects/updatesubject/' . $subject->id . '" id="" method="post">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Edit Subject</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">
                                            <div id="addstdcomm" style="text-align:center;"></div>

                                            <div class="form-group row">                                               
                                            <label class="col-sm-3 control-label">Category</label>
                                            <div class="col-sm-9">
                                                <select name="category" id="" class="form-control">
                                                    <option  selected="">Select Category</option>'; ?>
                                                    <?php
                                                   
                                                    $options = '';

                                                    foreach ($subjectcategories as $category) {

                                                        $options .= '<option value="' . $category->id . '">' . $category->category . '</option>';

                                                    }

                                                    echo $options; 

                                                      echo
                                                '</select>
                                              </div>
                                            </div><!-- form-group --> 

                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label">Subject Name <span class="asterisk">*</span></label>
                                                <div class="col-sm-9">


                                                    <input type="text" name="subject" class="form-control" id="subjectname" " value="' . $subject->subject . '">
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group row">
                                            <label class="col-sm-3 control-label">Code <span class="asterisk">*</span></label>
                                            <div class="col-sm-9">
                                                <input name="code" value="' . $subject->code . '" class="form-control" id="subjectdescription">
                                            </div>
                                        </div><!-- form-group -->
                                                                                      
                                            <div class="form-group row">
                                                <label class="col-sm-3 control-label">Description <span class="asterisk">*</span></label>
                                                <div class="col-sm-9">
                                                    <input  name="description" value="' . $subject->description . '" class="form-control" id="subjectdescription" >
                                                </div>
                                            </div><!-- form-group -->
                                            

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    
                                    <div class="panel-footer">
                                      <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">                                            
                                            <button class="btn btn-primary mr5" id="btnaddexam">Edit Subject</button>
                                        </div>
                                      </div>
                                    </div><!-- panel-footer -->  
                                </div></form>';
                                                }
                                        
                                                ?>
                                <!-- panel -->
                                
                                
                            </div><!-- col-md-6 -->


                        </div><!--row -->
      
    
                    </div><!-- contentpanel -->
                    
                </div>

                                            </div>

</body>



</html>









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
                                <i class="fa fa-area-chart"></i>
                            </div>
                            <div class="media-body">
                               <p></p>
                                <h4>Compile End Term Exam Results</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        <div class="row" style="background:url('images/back.png');">
                           <div class="col-md-3">
                           </div>

                            <!--edit school-->
                            <div class="col-md-6">
                                <form action="/exams/compileendtermexamresults" method="post">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns" style="display: none;">
                                            <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Generate Exam Report</h4>
                                    </div><!-- panel-heading -->
                                    <div class="panel-body">
                                        <div class="row">
                                                    
<div class="form-group row">

<label class="col-sm-3 control-label">Term</label>

  <div class="col-sm-9">
    <select name="termid" class="form-control">

    <?php

      $termoptions = '';

      foreach ($terms as $term) {

        $termoptions .= '<option value="'. $term->id .' ">'.$term->term . ' ' . $term->year .'</option>';

      }

        echo $termoptions;

     ?>

   </select>
  </div>
</div><!-- form-group -->

<div class="form-group row">
<label class="col-sm-3 control-label">Class</label>
<div class="col-sm-9">
  <select name="classid" class="form-control">

  <?php

     $classoptions = '';

    foreach ($classes as $class) {

      $classoptions .=  '<option value="'. $class->classesID .'">'. $class->classes .'</option>';

    }

      echo $classoptions; 

   ?>

  </select>
</div>
</div><!--form-group -->  





                                            

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    
                                    <div class="panel-footer">
                                      <div class="row">
                                      <div id="addmrkscomm" style="text-align:center"></div>
                                        <div class="col-sm-9 col-sm-offset-3">
                                         
                                            <button class="btn btn-primary mr5" id="btnaddmarks">Load Report</button>
                                            <button type="reset" class="btn btn-dark">Clear</button>
                                        </div>
                                      </div>
                                    </div><!-- panel-footer -->  
                                </div></form><!-- panel -->
                                
                                
                            </div><!-- col-md-6 -->


                        </div><!--row -->
      
                    </div><!-- contentpanel -->
                    
                </div>
 </div>
</div>

</body>

</html>


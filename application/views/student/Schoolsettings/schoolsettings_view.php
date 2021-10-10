

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

          <section class="panel">

          <div class="pageheader">

             <div class="media">
             
                 <div class="pageicon pull-left">
             
                     <i class="fa fa-mortar-board"></i>
             
                 </div>
             
                 <div class="media-body">
             
             
                     <h4>School Settings</h4>
             
                 </div>
             
             </div><!-- media -->
             
            
             </div><!-- pageheader -->
          
          </section>         


        

        <div class="contentpanel">

            

            <div class="row" style="background:url('images/back.png');">

               <div class="col-md-3">

               </div>



                <!--edit school-->

                <div class="col-md-6">

                    

                    <div class="panel panel-default">

                    <form action="/school/updateschoolsettings" method="post">

                        <div class="panel-heading">


                            <h4 class="panel-title">School Settings</h4>

                        </div><!-- panel-heading -->

                        <div class="panel-body">

                            <div class="row">
                                
                              <?php 
                                foreach ($data as $value) {
                                    echo 
                               '<div class="form-group row">

                                        <label class="col-sm-3 control-label">School Name: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                        <input type="hidden" value="'. $value->id .'" name="id">

                                            <input type="text" name="name" value="' . $value->name . '" class="form-control" id="name" placeholder="e.g. ELIMUSYNCH HIGH SCHOOL" maxlength="50">

                                        </div>

                                    </div><!-- form-group -->



                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">School Address: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->address . '" name="address" class="form-control" id="address" placeholder="e.g. P.O BOX 1234 KWALE" maxlength="50">

                                        </div>

                                    </div><!-- form-group -->



                                    <!--streams will be loaded here-->

                                  

                                        

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">School Phone: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->phone . '" name="phone" class="form-control" id="phone" placeholder="e.g. +254700000000" maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">Water Mark: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->Watermark . '" name="watermark" class="form-control" id="watermark" placeholder="elimusynch" maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">Link: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="'. $value->link . '" name="link" class="form-control" id="phone"  maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">SMS Id: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->Smsid . '" name="ssmsid" class="form-control" id="phone"  maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">API KEY: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->Apikey . '" name="Apikey" class="form-control" id="phone"  maxlength="50">

                                        </div>

                                    </div><!-- form-group -->

                                    <div class="form-group row">

                                        <label class="col-sm-3 control-label">Username: <span class="asterisk">*</span></label>

                                        <div class="col-sm-9">

                                            <input type="text" value="' . $value->username . '" name="username" class="form-control" id="phone"  maxlength="50">

                                        </div>

                                    </div>'; } ?>
                                    
                                    <!-- form-group -->

                            </div><!-- row -->

                        </div><!-- panel-body -->

                        <div class="panel-footer">

                          <div class="row">

                            <div class="col-sm-9 col-sm-offset-3">

                                <div id="commedt123"></div>

                                <input role="button" type="submit" value="Edit Record" class="btn btn-primary mr5" id="btnaddadmno">

                            </div>

                          </div>

                        </div><!-- panel-footer -->  

                        </form>

                    </div><!-- panel -->

                    

                    

                </div><!-- col-md-6 -->





            </div><!--row -->

                 </div><!-- contentpanel -->

        

    </div>

      </div>

    </div>

</body>

</html>


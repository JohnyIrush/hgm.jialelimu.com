

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

        

        <div class="contentpanel content-wrapper">

            

            <div class="row" >

               <div class="col-md-3">

               </div>




                <!--edit school-->

                <div class="col-md-6 panel">

                    <form id="" method="post" action="/parents/createparent" enctype="multipart/form-data">

                    <div class="panel-heading">

                            <h4 class="panel-title">Add Student's Parent</h4>

                        </div><!-- panel-heading -->

                        <div class="panel-body">

                            <div class="row">


                            <div id="myresult">
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-9"> 
                                        <input type="text" name="name" class="form-control" id="lname" placeholder="e.g. Joseph" maxlength="50"> 
                                    </div>
                                </div><!-- form-group row -->
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Id/Passport No <span class="asterisk">*</span></label>
                                    <div class="col-sm-9"> <input type="text" name="idpassno" class="form-control" id="idpassno" placeholder="e.g. Kuria" maxlength="50"> </div></div><!-- form-group row -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Email <span class="asterisk">*</span></label>
                                        <div class="col-sm-9"> 
                                            <input type="email" name="email" class="form-control" id="email" placeholder="e.g. admin@gmail.com" maxlength="50"> </div></div><!-- form-group row -->
                                        <label class="col-sm-3 control-label">Gender <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <div class="rdio rdio-primary">
                                                <input type="radio" id="male" value="1" name="gender" checked=""><label for="male">Male</label></div><!-- rdio --><div class="rdio rdio-primary"><input type="radio" id="female" value="2" name="gender"><label for="female">Female</label></div><!-- rdio --><label id="genderError" class="error"></label></div><div class="form-group row"><label class="col-sm-3 control-label">Phone Number <span class="asterisk">*</span></label><div class="col-sm-9"><input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="e.g +07xxxxxxxx" maxlength="15"></div></div><!-- form-group row --> <div class="form-group row" id="thcntcs"><label class="col-sm-3 control-label" id="contcslabel">Phyisical Address <span class="asterisk">*</span></label><div class="col-sm-9"><textarea rows="5" class="form-control" name="address" id="address" placeholder="e.g. Easy Life Apartments, Airport North road, Embakasi - Nairobi, Kenya" maxlength="300"></textarea> <div id="cntcomm"></div></div></div><!-- form-group row -->
                                        <div class="form-group"> 
                                            <label class="col-sm-3 control-label">Occupation <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="occupation" class="form-control" id="occupation" placeholder="e.g Farmer" maxlength="50"></div></div>
                                        <div class="form-group row"> 
                                            <label class="col-sm-3 control-label">Avatar <span class="asterisk">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" name="photo" class="form-control" id="file" maxlength="50">
                                        </div>
                                    </div><!-- form-group row --></div>



                            </div><!-- row -->

                        </div><!-- panel-body -->

                       

                        <div class="panel-footer">

                        <div id="addstfcomm" style="text-align:center"></div>

                          <div class="row">

                            <div class="col-sm-9 col-sm-offset-3">                                            

                                <button class="btn btn-primary mr5" name="btnaddparent">Save Record</button>

                                <button class="btn btn-primary mr5" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">New Parent</button>

                                 <button type="reset" class="btn btn-dark">Clear</button>

                            </div>

                          </div>

                        </div><!-- panel-footer -->  

                         

                    </div></form><!-- panel -->

                                                        

                </div><!-- col-md-6 -->


                <div class="col-md-3"></div>



            </div><!--row --> 

        </div><!-- contentpanel -->

        

     </div>

</body>

</html>


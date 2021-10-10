
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

      <div class="content-wrapper">
                  <div class="mainpanel">
            <!-- pageheader -->
            
            <div class="contentpanel">
                
                <div class="row" style="background:url('images/back.png');">
                   <div class="col-md-3">
                   </div>

                    <!--edit school-->
                    <div class="col-md-6">
                        <form id="">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-btns">
                                    <a href="form-validation.html" class="panel-minimize tooltips" data-toggle="tooltip" title="" data-original-title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                    <a href="form-validation.html" class="panel-close tooltips" data-toggle="tooltip" title="" data-original-title="Close Panel"><i class="fa fa-times"></i></a>
                                </div><!-- panel-btns -->
                                <h4 class="panel-title">Set Grades</h4>
                            </div><!-- panel-heading -->
                            <div class="panel-body">
                                <div class="row">                                            
                                        <div class="form-group">                                                
                                        <label class="col-sm-3 control-label">Class</label>
                                        <div class="col-sm-9">
                                            <div class="select2-container width100p" id="s2id_fruits"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">All Classes</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen1_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="fruits" onchange="showUser('clas')" data-placeholder="Choose One" class="width100p select2-offscreen" required="" tabindex="-1" title="">
                                                <option value="0">All Classes</option>
                                                <option value="1">Form One </option><option value="2">Form Two</option><option value="3">Form Three</option><option value="4">Form Four</option>                                                    </select>
                                          </div>
                                        </div><!-- form-group -->

                                        <div class="form-group">                                                
                                        <label class="col-sm-3 control-label">Subject</label>
                                        <div class="col-sm-9">
                                            <select id="subjects" onchange="showUser('sub')" data-placeholder="Choose One" class="width100p form-control" required="">
                                                <option value="0">All Subjects</option>
                                                <option value="1">Mathematics</option><option value="2">Physics</option><option value="3">Biology</option><option value="4">Chemistry</option><option value="5">History </option><option value="6">Cre</option><option value="7">English</option><option value="8">Kiswahili</option><option value="9">Business Studies</option><option value="10">Agriculture</option><option value="11">Geography</option>                                                    </select>
                                          </div>
                                        </div><hr><!-- form-group -->




                                         <div id="showrecord">
                                         <div class="form-group">
                                                                <label class="col-sm-3 control-label">A<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="1-min" value="80" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">A<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="1-max" maxlength="3" value="100">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">A-<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="2-min" value="75" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">A-<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="2-max" maxlength="3" value="79">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B+<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="3-min" value="70" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B+<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="3-max" maxlength="3" value="74">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="4-min" value="65" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="4-max" maxlength="3" value="69">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B-<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="5-min" value="60" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">B-<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="5-max" maxlength="3" value="64">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C+<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="6-min" value="55" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C+<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="6-max" maxlength="3" value="59">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="7-min" value="50" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="7-max" maxlength="3" value="54">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C-<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="8-min" value="45" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">C-<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="8-max" maxlength="3" value="49">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D+<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="9-min" value="40" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D+<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="9-max" maxlength="3" value="44">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="10-min" value="35" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="10-max" maxlength="3" value="39">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D-<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="11-min" value="30" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">D-<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="11-max" maxlength="3" value="34">
                                                                </div>
                                                            </div><hr><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">E<br>(minimum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="12-min" value="0" maxlength="3">
                                                                </div>
                                                            </div><!-- form-group --><div class="form-group">
                                                                <label class="col-sm-3 control-label">E<br>(maximum marks) </label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" name="primarysch" class="form-control grademarks" id="12-max" maxlength="3" value="29">
                                                                </div>
                                                            </div><hr><!-- form-group -->	
                          </div>

                                            
                                        

                                    

                                </div><!-- row -->
                            </div><!-- panel-body -->
                            
                            <div class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div id="setgradescomm"></div>
                                    <button class="btn btn-primary mr5" id="btnsetgrades">Set Grades</button>
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

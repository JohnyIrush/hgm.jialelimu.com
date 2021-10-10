
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link href="<?php echo base_url(); ?>backend/dist/css/styles.css" rel="stylesheet">
     
          <style>
         .text-white{
             color: white !important;
         }
     </style>
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
                <div class="pageicon pull-left sec-bg-color">
                    <i class="fa fa-edit fa-2x text-white"></i>
                </div>
                <div class="media-body">
                    <h4>Deactivate Student</h4>
                    
                </div>
            </div><!-- media -->
        </div><!-- pageheader -->
      </section>
        
        <div class="contentpanel">
            
            <div class="row" style="background:url('images/back.png');background-repeat:repeat-y;">
               <div class="col-md-3">
               </div>

                <!--edit school-->
                <div class="col-md-12">
                     <div class="clearfix">
                    <div class="btn-group">
                     <a href="javascript:goAct()" class="btn btn-primary">
                        Deactivate   <i class="fa fa-plus"></i>
                    </a>
                       
                    </div>
                 
                </div>
               
                
                <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="display table table-bordered table-striped dataTable" id="dynamic-table" aria-describedby="dynamic-table_info">
        <thead>
        <tr role="row"><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Select: activate to sort column ascending" style="width: 62px;">Select</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Reg No: activate to sort column ascending" style="width: 72px;">Reg No</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Avatar: activate to sort column ascending" style="width: 71px;">Avatar</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 315px;">Full Name</th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-sort="descending" aria-label="DOB: activate to sort column ascending" style="width: 87px;">DOB</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 88px;">Class</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Stream: activate to sort column ascending" style="width: 70px;">Stream</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 73px;">Gender</th></tr>
        </thead>
        
        <tfoot>
        <tr><th rowspan="1" colspan="1">Select</th><th rowspan="1" colspan="1">Reg No</th><th rowspan="1" colspan="1">Avatar</th><th rowspan="1" colspan="1">Full Name</th><th rowspan="1" colspan="1">DOB</th><th rowspan="1" colspan="1">Class</th><th rowspan="1" colspan="1">Stream</th><th rowspan="1" colspan="1">Gender</th></tr>
        </tfoot>
        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="628">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">718</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">IRENE IRENE NJOKI</td>
          <td class="  sorting_1">NGANGA</td>
            <td class=" ">Form One </td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="677">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">767</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">STEPHEN NDUNGU NJENGA</td>
          <td class="  sorting_1">2021-08-13</td>
            <td class=" ">Form One </td>
            <td class=" ">PEACE</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="513">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">602</td>
             <td class=" ">    <img src="images/profile/513.jpg" width="60px">   </td>
            <td class=" ">MARK STEPHEN KAMAU</td>
          <td class="  sorting_1">2009-08-21</td>
            <td class=" ">Form Two</td>
            <td class=" ">PEACE</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="665">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">755</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">PAULINE WANGUI WAMBUI</td>
          <td class="  sorting_1">2008-04-19</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="629">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">719</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">EVALYNE NYAMBURA MACHARIA</td>
          <td class="  sorting_1">2008-01-30</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="619">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">709</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">AUSTIN KAIRU CHEGE</td>
          <td class="  sorting_1">2007-09-04</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="643">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">733</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">ALEX NGANGA KIRUNDO</td>
          <td class="  sorting_1">2007-07-23</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="683">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">773</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">FELISTA MUTHONI NDUATI</td>
          <td class="  sorting_1">2007-06-26</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr><tr class="gradeX odd">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="655">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">745</td>
             <td class=" ">    <img src="images/profile/gender/1.jpg" width="60px">   </td>
            <td class=" ">ETHAN MUHORO KINYUA</td>
          <td class="  sorting_1">2007-05-10</td>
            <td class=" ">Form One </td>
            <td class=" ">UNITY</td>
           <td class=" ">MALE</td>
          
        
           
            
           
        </tr><tr class="gradeX even">
        <td class=" "><div class="minimal-green single-row">
                                    <div class="checkbox ">
                                        <input type="checkbox" name="638">
                                        
                                    </div>
                                </div> </td>
            <td class=" ">728</td>
             <td class=" ">    <img src="images/profile/gender/2.jpg" width="60px">   </td>
            <td class=" ">ABIGAEL NJOKI NYAMBURA</td>
          <td class="  sorting_1">2007-04-01</td>
            <td class=" ">Form One </td>
            <td class=" ">PEACE</td>
           <td class=" ">FEMALE</td>
          
        
           
            
           
        </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="dynamic-table_info">Showing 1 to 10 of 311 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination">
            
              <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
            </nav>
        </div></div></div></div>
        </form>
        
                   
                        
                    </div><!-- panel -->
                    
                    
                    
                </div><!-- col-md-6 -->


            </div><!--row -->   
        </div>
      </div>
    </div>
</body>
</html>

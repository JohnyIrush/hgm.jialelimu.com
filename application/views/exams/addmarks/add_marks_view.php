
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

        /*start Student profile*/

         body{
             margin-top:20px;
             color: #1a202c;
             text-align: left;
             background-color: #e2e8f0;    
         }
         .main-body {
             padding: 15px;
         }
         .card {
             box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
         }
         
         .card {
             position: relative;
             display: flex;
             flex-direction: column;
             min-width: 0;
             word-wrap: break-word;
             background-color: #fff;
             background-clip: border-box;
             border: 0 solid rgba(0,0,0,.125);
             border-radius: .25rem;
         }
         
         .card-body {
             flex: 1 1 auto;
             min-height: 1px;
             padding: 1rem;
         }
         
         .gutters-sm {
             margin-right: -8px;
             margin-left: -8px;
         }
         
         .gutters-sm>.col, .gutters-sm>[class*=col-] {
             padding-right: 8px;
             padding-left: 8px;
         }
         .mb-3, .my-3 {
             margin-bottom: 1rem!important;
         }
         
         .bg-gray-300 {
             background-color: #e2e8f0;
         }
         .h-100 {
             height: 100%!important;
         }
         .shadow-none {
             box-shadow: none!important;
         }

         /*end Student profile*/

         /*Marks entry forms*/
         .card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
}
         /*Marks entry forms*/
    </style>
    
<div class="row"> <!--open-->
  <div class="content-wrapper container"><!--open-->
    <div class="main-body"><!--open-->
    
          <!-- Breadcrumb -->

           echo
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Add ' . $studentdetails['name'] .  '  Marks</a></li>
            </ol>
          </nav>

          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm"><!--open-->


            <div class="col-md-4 mb-3">

              <div class="card">

                <div class="card-body">

                  <div class="d-flex flex-column align-items-center text-center">

                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">

                    <div class="mt-3">
                      <h4>/' . $studentdetails['name'] .  '</h4>
                      <p class="text-secondary mb-1">' . $studentdetails['Classid'] .  '</p>
                      <p class="text-muted font-size-sm">' . $studentdetails['streamid'] .  '</p>
                      <a role="button" heref="/student/showstudentinfo/' . $studentdetails['id'] .  '" class="btn btn-primary"></a>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>


                  </div>
                </div>
              </div>

              <div class="card mt-3">
                <ul class="list-group list-group-flush">

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Allocated Subjects</h6>
                  </li>

                

                  /* foreach ($variable as $allocatedsubjects) {

                     $subjects .= '<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"><h6 class="mb-0">' . $allocatedsubject->name . '</h6></li>';

                     echo $subjects; 
                  }

                 */

                </ul>
              </div>
            </div>


            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Admission Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /*.   $studentdetails[AdmNo]   .*/  
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /* $studentdetails[Gender] */
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /* $studentdetails[Classid] */ 
                    </div>
                  </div>

                  <hr>
                </div>
              </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-60">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Exam Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /* $exam[name] */
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Exam Mode</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /* $exammode[mode] */ 
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Term</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    /*$term[name] */ 
                    </div>
                  </div>

                  <hr>

                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
          
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7  col-lg-10 col-md-9 col-11 text-center">
            <h3>Enter Marks</h3>
            <div class="card">
                <form class="form-card" >
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">kiswahili<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">English<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">Mathematics<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">Chemistry<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">Biology<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Update Marks</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7  col-lg-10 col-md-9 col-11 text-center">
            <h3>Enter Marks</h3>
            <div class="card">
                <form class="form-card" >
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">kis 1<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">kis 2<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">kis 3<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">Chem 1<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">Chem 2<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                          <label class="form-control-label">Chem 3<span class="text-danger"> *</span></label> 
                          <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> 
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-success">Update Marks</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>-->
        </div><!--close-->
    </div><!--close-->
  </div><!--close-->
</div> <!--close-->
</body>
<script>

function validate(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");
v5 = document.getElementById("job");
v6 = document.getElementById("ans");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;
flag5 = true;
flag6 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}
if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}
if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}
if(val>=5 || val==0) {
if(v5.value == "") {
v5.style.borderColor = "red";
flag5 = false;
}
else {
v5.style.borderColor = "green";
flag5 = true;
}
}
if(val>=6 || val==0) {
if(v6.value == "") {
v6.style.borderColor = "red";
flag6 = false;
}
else {
v6.style.borderColor = "green";
flag6 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

return flag;
}
</script>
</html>


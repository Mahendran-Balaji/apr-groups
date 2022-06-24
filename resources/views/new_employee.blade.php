
<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Webzeee Payslip | APR Group of companies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta content="Webzeee" name="author" />
        <!-- App favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/webzeee/favicon.png">

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        @include('layouts/header')
        
        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts/leftsidebar')
        <!-- Left Sidebar End -->
     

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">New Employee</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employee Records</a></li>
                                            <li class="breadcrumb-item active">New Employee</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
<form action="{{ route('add_new_employee') }}" method="post">
    @csrf
                          <!-- start - personal information -->
                          <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Step 1 : Personal Information</h4>
                                        <p class="card-title-desc">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="card-body p-4">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">First Name</label>
                                                        <input class="form-control" type="text" value="{{ old('first_name') }}" name="first_name" id="example-text-input">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Personal Email ID</label>
                                                        <input class="form-control" type="email" value="{{ old('personal_email_id') }}" name="personal_email_id" id="example-email-input">
                                                    </div>
                                                  
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Date of Birth</label>
                                                        
                                                        
                                                        <input class="form-control" type="text" value="{{ old('dob') }}" name="dob" id="datepicker-dob">
                                                    
                                                    </div>
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Marital Status</label>
                                                        <select class="form-select" name="maritalstatus">
                                                            <option value="">Select</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Unmarried">Unmarried</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">PAN Number</label>
                                                        <input class="form-control" type="text" value="{{ old('pan_number') }}" name="pan_number" id="example-text-input">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Permanent Address</label>
                                                        <input class="form-control" type="text" value="{{ old('permanent_address') }}" name="permanent_address" id="example-text-input">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Last Name</label>
                                                        <input class="form-control" type="text" value="{{ old('last_name') }}" name="last_name" id="example-text-input">
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Personal Contact Number</label>
                                                        <input class="form-control" type="text" value="{{ old('personal_contact_number') }}" name="personal_contact_number" id="example-date-input">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Gender</label>
                                                        <select class="form-select" name="gender">
                                                            <option value="">Select</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Aadhaar Number</label>
                                                        <input class="form-control" type="text" value="{{ old('aadhaar_number') }}" name="aadhaar_number" id="example-text-input">
                                                    </div>

                                                    
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Present Address</label>
                                                        <input class="form-control" type="text" value="{{ old('persent_address') }}" name="persent_address" id="example-text-input">
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                      
  <!-- end - Personal information -->
                      




                          <!-- start - official information -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Step 2 : Official Information</h4>
                                        <p class="card-title-desc">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                   

                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Official Email ID</label>
                                                        <input class="form-control" type="email" value="{{ old('official_email_id') }}" name="official_email_id" id="example-email-input">
                                                    </div>
                                                  
                                                   
                                                  
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Current Salary</label>
                                                        <input class="form-control" type="text" value="{{ old('current_salary') }}" name="current_salary" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Reporting Head</label>
                                                        <input class="form-control" type="text" value="{{ old('reporting_head') }}" name="reporting_head" id="example-text-input">
                                                    </div>

                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Joining Date</label>
                                                        <input class="form-control" type="text" name="doj" id="datepicker-doj">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Designation</label>
                                                        <select class="form-select" name="designation">
                                                            <option>Select</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                      
  <!-- end - official information -->
                      

                          <!-- start - Salary Account information -->
                          <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Step 3 : Salary Account Information</h4>
                                        <p class="card-title-desc">
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                   

                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Account Holder Name</label>
                                                        <input class="form-control" type="text" value="{{ old('account_holder_name') }}" name="account_holder_name" id="example-email-input">
                                                    </div>
                                                  
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Account Number</label>
                                                        <input class="form-control" type="text" value="{{ old('account_number') }}" name="account_number" id="example-email-input">
                                                    </div>
                                                  
                                                    
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mt-3 mt-lg-0">
                                                  
                                                    <div class="mb-3">
                                                    <label for="example-url-input" class="form-label">Bank Name</label>
                                                        <input class="form-control" type="text" value="{{ old('bank_name') }}" name="bank_name" id="example-email-input">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">IFSC Code</label>
                                                        <input class="form-control" type="text" value="{{ old('ifsc_code') }}" name="ifsc_code" id="example-text-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">&nbsp;</div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                            <div class="col-md-4">&nbsp;</div>
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                      
  <!-- end - official information -->
</form>
                       

                      
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        @include('layouts/rightsidebar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker-doj" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat:"yy-mm-dd"
    });

    $( "#datepicker-dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat:"yy-mm-dd"
    });
  } );
  </script>
    </body>
</html>

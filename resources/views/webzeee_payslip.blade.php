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
        <script>
        function forprint(){
            if (!window.print){
            return
            }
window.print()
}
</script>
<style>
    .ui-draggable, .ui-droppable {
	background-position: top;
}
    @media print {
    input, textarea, select {
        border: 0 !important;
        border-style: none !important;
    }
    textarea {
    resize: none;
}
  
    
      select
    {
        width: 171px;
        font-size: 100%;
    outline: none;
    vertical-align: middle;
   /* font-family: "Times New Roman", Times, serif;*/
        
        -webkit-appearance: button;
  -webkit-border-radius: 2px;
  
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none;
  
  background-position: center right;
  background-repeat: no-repeat;
  border: 0px solid #AAA;
  
  
  margin: 0;
  overflow: hidden;
  padding-top: 2px;
  padding-bottom: 2px;
  
  white-space: nowrap;
        
        
        
    }
    
}




#location {
  font-size: 100%;
  outline: none;
  width: 200px;
  height: 30px;
  display: table-cell; 
  vertical-align: middle;
  border: 1px solid #ccc;
  font-weight: 600;
  color:#495057;
 /*  font-family: "Times New Roman", Times, serif;*/
}
#location1
{
	height: 50px;
}
@media print {
    @page { margin: 0; }
  }
box.input[type="text"] {
    width: 100px;
}
    input[type="date"] {
    width: 171px;
    font-size: 100%;
    outline: none;
    vertical-align: middle;
    /*font-family: "Times New Roman", Times, serif;*/
}
    select
    {
        width: 171px;
        font-size: 100%;
    outline: none;
    vertical-align: middle;
    /*font-family: "Times New Roman", Times, serif;*/
     
        	appearance: none;
        
    }
    
h2
{
	color:#C03;
	font-size:18px; 
		/*font-family:"Courier New", Courier, monospace;*/
}
p
{
	/*font-family:"Courier New", Courier, monospace;*/
	font-size:15px;
	color:#066;
	text-align:justify;
}
a
{
	text-decoration:none;
	font-size:20px; 
}
 
.containerbg {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  margin-top: 50px;
  width: 800px;
  height: 950px;
  background-image: url('images/webzeee/Webzeee-01.jpg');
  background-repeat: no-repeat;
    background-size: contain;
}
.wp
{
	 word-spacing: 118px;
}

    </style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  



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
                                    <h4 class="mb-sm-0 font-size-18">Webzeee Payslip</h4>

                                 

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Payslip Start-->
                <div class="containerbg table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                <table>
                
                <tr>
                    
                    <td style="padding-left: 310px;padding-top: 135px;">
                    <h4>PAYSLIP FOR THE MONTH OF <input type="text" id="location" placeholder="Month & Year" style="width: 150px; border: 0px solid;margin-bottom: 5px"/></h4>
                    </td>
                    
                    
                </tr>
            </table>
                        
                        <table>
                            <tr>
                                <td style="padding-left: 275px;">
                                    <table  style="border: 1px solid;">
                                        <tr>
                    <td style="padding-left: 12px;">
                    Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" onkeyup="this.value=this.value.replace(/[^A-Z 0-9]/g,'');"/>
                    </td>
                </tr>
                                        
                                        <tr>
                    <td style="padding-left: 12px;">
                    Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" onkeyup="this.value=this.value.replace(/[^a-z A-Z.]/g,'');"/>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding-left: 13px;">
                    Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <select>
                        <option selected="true" disabled="disabled">Select Designation</option> 
                        <option value="Chief Executive Officer">Chief Executive Officer</option>
                        <option value="Chief Financial Officer">Chief Financial Officer</option>
                        <option value="Junior Web Designer">Junior Web Designer</option>
                        <option value="Senior Web Designer">Senior Web Designer</option>
                        <option value="Senior Image Editor">Senior Image Editor</option>
                        <option value="Front End Developer">Front End Developer</option>
                        <option value="Junior Web Developer">Junior Web Developer</option>
                        <option value="Senior Web Developer">Senior Web Developer</option>
                        <option value="SEO Analyst">SEO Analyst</option>
                        <option value="Senior Graphic Designer">Senior Graphic Designer</option>
                        <option value="System Administrator">System Administrator</option>
                        <option value="Creative Content Writer">Creative Content Writer</option>
                        <option value="Senior Finance Executive">Senior Finance Executive</option>
                        <option value="House Keeping">House Keeping</option>
        
                    </select>
                    </td>
                </tr>
                     
                <tr>
                    <td style="padding-left:10px;">
                    Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" id="datepicker"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 13px;">
                    PAN No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" id="panno" onkeyup="this.value=this.value.replace(/[^A-Za-z0-9]/g,''); this.value = this.value.toUpperCase();"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 13px;">
                    Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" onkeyup="this.value=this.value.replace(/[^a-z A-Z]/g,'');"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 14px;">
                    Bank Account No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
                    </td>
                    
                </tr>
        
                          
                                            
        
                                                                    
                                        
                                    </table>
                                    <table  style="border: 1px solid;">
                                        <tr>
                        
                    <td>
                    <strong> &nbsp;&nbsp; Total Working Days</strong> &nbsp;<input type="text" style="text-align: center; width: 63px;" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'');"/>
                    
                    </td>
                    <td>
                    <strong>Effective Working Days</strong> &nbsp;<input type="text" style="text-align: center; width: 64px;" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'');"/>
                    </td>
                    </tr>
                                    </table>
                                       
                                    
                                    
                                </td>
                            </tr>
                            
                            
                        </table>
                        
                       
                        
                        
                        
        
            
            
            
            
            
            
            <br>
            <br>
        <table>


                        
                

	
	
	
	
	
	
	<br>
	<br>
<table>
<tr>
	<td style="padding-left: 200px;">
		<table style="border: 1px solid;">
		<tr style="text-align: center">
			<td style="padding-left: 116px;">
			<strong>EARNINGS</strong>
			</td>
			<td style="padding-left: 170px;">
			<strong>DEDUCTIONS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
			</td>
			</tr>
		

	<table  style="border: 1px solid; border-width: 1;">
		<tr>
			<td style="padding-left: 12px;">
			BASIC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="basicpay" value="0" readonly style="width: 60px; text-align: right" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			PF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="pf" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			
			
		</tr>
				<tr>
			<td style="padding-left: 10px;">
			HRA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" style="width: 60px;text-align: right" value="0" id="hra" readonly onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
			</td>
			<td style="padding-left: 8px;">
			PROF TAX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="0" id="ptax" style="width: 60px;text-align: right" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
		
				<tr>
			<td style="padding-left: 12px;">
			DA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" id="da" value="0" readonly onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" />
			</td>
			<td style="padding-left: 8px;">
			INCOME TAX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="0" style="width: 60px;text-align:right" id="incometax" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 11px;">
			MEDICAL ALLOWANCE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="0" style="width: 60px;text-align: right" id="medical" readonly onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			LOP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="lop" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 12px;">
			CONVEYANCE ALLOWANCE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="0" style="width: 60px;text-align: right" id="convey"  readonly />
			</td>
			<td style="padding-left: 8px;">
			SALARY ADVANCE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="salaryadv" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
		<tr>
			<td style="padding-left: 13px;">
			MISC.ALLOWANCE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="music" readonly onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			OTHERS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="otherexp" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
			<tr>
			<td style="padding-left: 13px;">
			BONUS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="bonus" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			
			</td>
		</tr>
		<tr  style="border: 1px solid;">
			<td style="padding-left: 15px;">
			<b>Total Earnings &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;<input type="text" id="tearn" value="0" style="width: 60px;text-align: right" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			<b>Total Deductions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;<input type="text" value="0" style="width: 60px;text-align: right" id="tdeduct" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			
			
		</tr>
	</table>
<br>
<table>
		<tr>
			<td style="padding-left: 0px; font-weight:700">
				NET PAY (Rs.)&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  value="0" id="netpay" readonly style="width: 344px;  border: 0px solid; text-align: right; font-weight:700" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
		</tr>
	</table>
		

	<table>
		<tr>
			<td style="padding-left: 0px; font-weight:700">
				In Words (Rs.):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  id="netpaywords" placeholder="Net Payment in words" style="width: 350px; border: 0px solid; text-align: right; font-weight:700" readonly/>
				
			</td>
		</tr>
	</table>
			

	<br>
	<br>
	<br>
	<br>
	<br><br><br>
	<table>
		<tr>
			<td style="padding-left: 120px; font-weight: 700; font-size:15px">
				* This is a system generated payslip and does not require signature
			</td>
		</tr>
	</table>
</div>
                <!-- Payslip End -->























               
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        @include('layouts/rightsidebar')
        <!-- /Right-bar -->
        <div class="rightbar-overlay"></div>
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/pace-js/pace.min.js"></script>
        <script src="assets/js/app.js"></script>
       
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script> <script src="assets/js/calculation.js"></script>
    </body>


</html>

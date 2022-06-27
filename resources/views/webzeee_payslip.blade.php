<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Webzeee Payslip | APR Group of companies</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow">
        <meta content="Webzeee" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />
        <script>
        
        $('#printpage').click(function(){
            window.print();
        });

        function afterPrintFunction()
        {
            $('.btnhide').show();       
        }


        function forprint(){
            $('.btnhide').hide();        
            window.print();
            
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
.btnhide
    {
        display:show;
    }
@media print {
    @page { margin: 0; }
    .btnhide
    {
        display:none;
    }
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

    <body onafterprint="afterPrintFunction()">

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
        <form>  
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Webzeee Payslip</h4>
                                </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="btn-group" style="float:right">
                                    <button type="button" onclick="forprint()" class="btn btn-outline-info btnhide" style="float:right">Print Payslip</button>
                                    <button type="reset" class="btn btn-outline-danger btnhide" style="float:right">Reset Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        

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
                    
                    <select id="empid" name="empid">
                        <option selected="true" disabled="disabled">Select Employee ID</option> 
                        <?php
                            foreach ($employee_id as $empid) {
                        ?>
                            <option value="{{ $empid->employee_id }}">{{ $empid->employee_id }}</option>
                        <?php } ?>
        
                    </select>
                    </td>
                </tr>
                                        
                                        <tr>
                    <td style="padding-left: 12px;">
                    Employee Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_name"/>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding-left: 13px;">
                    Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_designation"/>
                    </td>
                </tr>
                     
                <tr>
                    <td style="padding-left:10px;">
                    Date of Joining &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_doj"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 13px;">
                    PAN No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_panno"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 13px;">
                    Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_bank_name"/>
                    </td>
                </tr>
                                        
                <tr>
                    <td style="padding-left: 14px;">
                    Bank Account No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                    <input type="text" readonly id="emp_bank_account_number"/>
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
            <input type="hidden" value="" id="currentsalary" readonly>
			OD/OT/BONUS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 60px;text-align: right" value="0" id="bonus" required onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
			</td>
			<td style="padding-left: 8px;">
			
			</td>
		</tr>
		<tr  style="border: 1px solid;">
			<td style="padding-left: 15px;">
			<b>Total Earnings &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;<input type="text" id="tearn" value="0" style="width: 60px;text-align: right" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" readonly/>
			</td>
			<td style="padding-left: 8px;">
			<b>Total Deductions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;
            <input type="text" value="0" style="width: 60px;text-align: right" id="tdeduct" readonly onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"/>
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























                            </form>
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
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.btnhide').show();
    var tearn = 0;
    var basicpay = 0;
    var hra = 0;
    var da = 0;
    var medical = 0;    
    var convey = 0; 
    var music = 0;
    var pf=0;
    var ptax=0;
    var incometax=0;
    var lop=0;
    var salaryadv = 0;
    var otherexp=0;
   var bonus=0;
 
    var totalearn = (basicpay+hra+da+medical+convey+music+bonus);
    var totalded = (pf+ptax+incometax+lop+salaryadv+otherexp);
    $('#tearn').val(totalearn);
    $('#tdeduct').val(totalded);
  
    $('#bonus').on('change',function(){
        // Calculate Total Earnings
        var actualsalary = parseInt( $('#currentsalary').val());
        var getBonusValue = $("#bonus").val();
        var totearn = (Number(getBonusValue)+Number(actualsalary));
        $('#tearn').val(totearn);

        //Calauclate Netpay
        var totalded = parseInt($('#tdeduct').val());
        var netpay_after_calc_bonus = parseInt(totearn) - parseInt(totalded);
        $('#netpay').val(netpay_after_calc_bonus);

        // Convert Numbers into the string
        var convertnumbers = convertNumberToWords(netpay_after_calc_bonus);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
     }); 

    $('#pf').on('change',function(){
      
      if(this.value == '' || this.value == null )
      {
        alert('PF value is not empty');
        $('#pf').val('0');
      }
      else
      {
         // Get Initial Value
        var pf = parseInt($(this).val());
        var ptax = parseInt($('#ptax').val());
        var incometax =  parseInt($('#incometax').val());
        var lop =  parseInt($('#lop').val());
        var salaryadv =  parseInt($('#salaryadv').val());
        var otherexp =  parseInt($('#otherexp').val());
        
        // Total Dedecution
        var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
        $('#tdeduct').val(totalded);

        // Get Total Earnings
        var totearn = parseInt($('#tearn').val());
    
        // Calculate Netpay
        var netpay = parseInt(totearn)-parseInt(totalded);
        $('#netpay').val(parseInt(netpay));
        
        // Convert Number to String
        var convertnumbers = convertNumberToWords(netpay);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
      }
   });
  
  
  $('#ptax').on('change',function(){
    
    if(this.value == '' || this.value == null )
      {
        alert('PROF TAX value is not empty');
        $('#ptax').val('0');
      }
      else
      {
        // Get Initial Value
        var pf = parseInt($('#pf').val());
        var ptax = parseInt($(this).val());
        var incometax =  parseInt($('#incometax').val());
        var lop =  parseInt($('#lop').val());
        var salaryadv =  parseInt($('#salaryadv').val());
        var otherexp =  parseInt($('#otherexp').val());
        
        // Total Dedecution
        var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
        $('#tdeduct').val(totalded);

        // Get Total Earnings
        var totearn = parseInt($('#tearn').val());
    
        // Calculate Netpay
        var netpay = parseInt(totearn)-parseInt(totalded);
        $('#netpay').val(parseInt(netpay));
        
        // Convert Number to String
        var convertnumbers = convertNumberToWords(netpay);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
      }
   });
  
  
   $('#incometax').on('change',function(){

    if(this.value == '' || this.value == null )
      {
        alert('INCOME TAX value is not empty');
        $('#incometax').val('0');
      }
      else
      {
        // Get Initial Value
        var pf = parseInt($('#pf').val());
        var ptax = parseInt($('#ptax').val());
        var incometax =  parseInt($(this).val());
        var lop =  parseInt($('#lop').val());
        var salaryadv =  parseInt($('#salaryadv').val());
        var otherexp =  parseInt($('#otherexp').val());
        
        // Total Dedecution
        var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
        $('#tdeduct').val(totalded);

        // Get Total Earnings
        var totearn = parseInt($('#tearn').val());
    
        // Calculate Netpay
        var netpay = parseInt(totearn)-parseInt(totalded);
        $('#netpay').val(parseInt(netpay));
        
        // Convert Number to String
        var convertnumbers = convertNumberToWords(netpay);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
      }
   });



  
   $('#lop').on('change',function(){

    if(this.value == '' || this.value == null )
      {
        alert('LOP value is not empty');
        $('#lop').val('0');
      }
      else
      {
        // Get Initial Value
        var pf = parseInt($('#pf').val());
        var ptax = parseInt($('#ptax').val());
        var incometax = parseInt($('#incometax').val());
        var lop =  parseInt($(this).val());
        var salaryadv =  parseInt($('#salaryadv').val());
        var otherexp =  parseInt($('#otherexp').val());
        
        // Total Dedecution
        var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
        $('#tdeduct').val(totalded);

        // Get Total Earnings
        var totearn = parseInt($('#tearn').val());
    
        // Calculate Netpay
        var netpay = parseInt(totearn)-parseInt(totalded);
        $('#netpay').val(parseInt(netpay));
        
        // Convert Number to String
        var convertnumbers = convertNumberToWords(netpay);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
      }
   });   
  

  $('#salaryadv').on('change',function(){

    if(this.value == '' || this.value == null )
      {
        alert('SALARY ADVANCE value is not empty');
        $('#salaryadv').val('0');
      }
      else
      {
            // Get Initial Value
            var pf = parseInt($('#pf').val());
            var ptax = parseInt($('#ptax').val());
            var incometax = parseInt($('#incometax').val());
            var lop =   parseInt($('#lop').val());
            var salaryadv =  parseInt($(this).val());
            var otherexp =  parseInt($('#otherexp').val());
            
            // Total Dedecution
            var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
            $('#tdeduct').val(totalded);

            // Get Total Earnings
            var totearn = parseInt($('#tearn').val());
        
            // Calculate Netpay
            var netpay = parseInt(totearn)-parseInt(totalded);
            $('#netpay').val(parseInt(netpay));
            
            // Convert Number to String
            var convertnumbers = convertNumberToWords(netpay);
            var withrupees = convertnumbers;
            $('#netpaywords').val(withrupees+'Only');
      }
   });   
  
  $('#otherexp').on('change',function(){
    if(this.value == '' || this.value == null )
      {
        alert('OTHERS Expences value is not empty');
        $('#otherexp').val('0');
      }
      else
      {
        // Get Initial Value
        var pf = parseInt($('#pf').val());
        var ptax = parseInt($('#ptax').val());
        var incometax = parseInt($('#incometax').val());
        var lop =   parseInt($('#lop').val());
        var salaryadv =  parseInt($('#salaryadv').val());
        var otherexp =  parseInt($(this).val());
        
        // Total Dedecution
        var totalded = parseInt(pf)+parseInt(ptax)+parseInt(incometax)+parseInt(lop)+parseInt(salaryadv)+parseInt(otherexp);
        $('#tdeduct').val(totalded);

        // Get Total Earnings
        var totearn = parseInt($('#tearn').val());
    
        // Calculate Netpay
        var netpay = parseInt(totearn)-parseInt(totalded);
        $('#netpay').val(parseInt(netpay));
        
        // Convert Number to String
        var convertnumbers = convertNumberToWords(netpay);
        var withrupees = convertnumbers;
        $('#netpaywords').val(withrupees+'Only');
      }
   });   
  
  


   
  function convertNumberToWords(amount) {
var words = new Array();
words[0] = '';
words[1] = 'One';
words[2] = 'Two';
words[3] = 'Three';
words[4] = 'Four';
words[5] = 'Five';
words[6] = 'Six';
words[7] = 'Seven';
words[8] = 'Eight';
words[9] = 'Nine';
words[10] = 'Ten';
words[11] = 'Eleven';
words[12] = 'Twelve';
words[13] = 'Thirteen';
words[14] = 'Fourteen';
words[15] = 'Fifteen';
words[16] = 'Sixteen';
words[17] = 'Seventeen';
words[18] = 'Eighteen';
words[19] = 'Nineteen';
words[20] = 'Twenty';
words[30] = 'Thirty';
words[40] = 'Forty';
words[50] = 'Fifty';
words[60] = 'Sixty';
words[70] = 'Seventy';
words[80] = 'Eighty';
words[90] = 'Ninety';
amount = amount.toString();
var atemp = amount.split(".");
var number = atemp[0].split(",").join("");
var n_length = number.length;
var words_string = "";
if (n_length <= 9) {
  var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
  var received_n_array = new Array();
  for (var i = 0; i < n_length; i++) {
      received_n_array[i] = number.substr(i, 1);
  }
  for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
      n_array[i] = received_n_array[j];
  }
  for (var i = 0, j = 1; i < 9; i++, j++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          if (n_array[i] == 1) {
              n_array[j] = 10 + parseInt(n_array[j]);
              n_array[i] = 0;
          }
      }
  }
  value = "";
  for (var i = 0; i < 9; i++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          value = n_array[i] * 10;
      } else {
          value = n_array[i];
      }
      if (value != 0) {
          words_string += words[value] + " ";
      }
      if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Crores ";
      }
      if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Lakhs ";
      }
      if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Thousand ";
      }
      if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
          words_string += "Hundred and ";
      } else if (i == 6 && value != 0) {
          words_string += "Hundred ";
      }
  }
  words_string = words_string.split("  ").join(" ");
}
return words_string;
}
});

  </script>
  <script>
        $(document).ready(function(){
        $("#empid").on('change', function(e) 
        {
            e.preventDefault();
            var employeeID = this.value;
            
            $.getJSON('get-details-for-payslip/'+employeeID, function(data) {
                $.each(data, function(i, field)
                {
                    $("#emp_name").val(field.Full_name);
                    $("#emp_designation").val(field.designation);
                    $("#emp_panno").val(field.pan_number);
                    $("#emp_doj").val(field.joining_date);
                    $("#emp_bank_name").val(field.account_bank_name);
                    $("#emp_bank_account_number").val(field.account_bank_number);
                    $('#tearn').val(field.current_salary);
                    $('#currentsalary').val(field.current_salary);
                    var tearn = parseInt(field.current_salary);

                    
                    var basicpay = (tearn*40)/100;
                    var hra = (tearn*20)/100;
                    var da = (tearn*23)/100;
                    var medical = (tearn*10)/100;    
                    var convey = (tearn*6)/100; 
                    var music = (tearn*1)/100;
                    var bonus = $('#bonus').val();
                    var totearn = Number(bonus)+Number(tearn);
                    $('#basicpay') .val(basicpay);
                    $('#hra') .val(hra);
                    $('#da') .val(da);
                    $('#medical') .val(medical);
                    $('#convey') .val(convey);
                    $('#music') .val(music);
                    $('#bonus').val(0);
                    $('#netpay').val(totearn);
                    var convertnumbers = convertNumberToWords(totearn);
                    var withrupees = convertnumbers;
                    $('#netpaywords').val(withrupees+'Only');

                });
            });
        });
   
  function convertNumberToWords(amount) {
var words = new Array();
words[0] = '';
words[1] = 'One';
words[2] = 'Two';
words[3] = 'Three';
words[4] = 'Four';
words[5] = 'Five';
words[6] = 'Six';
words[7] = 'Seven';
words[8] = 'Eight';
words[9] = 'Nine';
words[10] = 'Ten';
words[11] = 'Eleven';
words[12] = 'Twelve';
words[13] = 'Thirteen';
words[14] = 'Fourteen';
words[15] = 'Fifteen';
words[16] = 'Sixteen';
words[17] = 'Seventeen';
words[18] = 'Eighteen';
words[19] = 'Nineteen';
words[20] = 'Twenty';
words[30] = 'Thirty';
words[40] = 'Forty';
words[50] = 'Fifty';
words[60] = 'Sixty';
words[70] = 'Seventy';
words[80] = 'Eighty';
words[90] = 'Ninety';
amount = amount.toString();
var atemp = amount.split(".");
var number = atemp[0].split(",").join("");
var n_length = number.length;
var words_string = "";
if (n_length <= 9) {
  var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
  var received_n_array = new Array();
  for (var i = 0; i < n_length; i++) {
      received_n_array[i] = number.substr(i, 1);
  }
  for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
      n_array[i] = received_n_array[j];
  }
  for (var i = 0, j = 1; i < 9; i++, j++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          if (n_array[i] == 1) {
              n_array[j] = 10 + parseInt(n_array[j]);
              n_array[i] = 0;
          }
      }
  }
  value = "";
  for (var i = 0; i < 9; i++) {
      if (i == 0 || i == 2 || i == 4 || i == 7) {
          value = n_array[i] * 10;
      } else {
          value = n_array[i];
      }
      if (value != 0) {
          words_string += words[value] + " ";
      }
      if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Crores ";
      }
      if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Lakhs ";
      }
      if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
          words_string += "Thousand ";
      }
      if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
          words_string += "Hundred and ";
      } else if (i == 6 && value != 0) {
          words_string += "Hundred ";
      }
  }
  words_string = words_string.split("  ").join(" ");
}
return words_string;
}
});

   
        </script>
      

       
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
    </script>
   
    </body>
</html>

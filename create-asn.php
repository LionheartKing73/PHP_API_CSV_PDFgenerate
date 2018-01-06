<? include 'includes/head.php'; 
   include 'includes/nav.php';
?>
        <section id="content">
          <section class="vbox">
            <header class="header b-b b-light hidden-print" style="background-color: #fff">
	            	<h4 style="float:left;">New Shipping Advise - <? echo $_GET['id'];?></h4>
              
            <button href="#" class="btn btn-sm btn-info pull-right" onClick="checkASN();">Send</button>
            </header>
            <div style="background-color:#fff;">
            <section class="scrollable wrapper" style="background-color: #f7f7f7;">
			<div style="width:1000px;margin:0 auto;">
           	<button href="#" class="btn btn-sm" style="margin-bottom: 20px;" onClick=" backASN();">Back</button><label> </label>
           	<button href="#" class="btn btn-sm" style="margin-bottom: 20px;" onClick=" saveASN();">Save</button>
           	
           	</div>
            <div class="pdfform" style="width:1000px;margin:0 auto;">
	             
            <table class="table table-striped b-t b-l m-b-none">
			<!-- START OF ASN TABLE -->
			<table class="table table-striped b-t b-l m-b-none">
				<tr><th style="text-align: center;"><h4>Packing List</h4></th></tr>
			</table>
			<!-- FROM AND TO -->
			<table class="table table-striped b-t b-l m-b-none">
				<tr><td colspan="8">From:</td><td colspan="8">To:</td></tr>
					<tr><td colspan="8">
						<!-- FROM -->
						<h4 class="from"> </h4>
						
                       	</td>
					   	<!-- TO -->  
					   	<td colspan="8"><h4 class="to">HMS PRODUCTIONS LLC</h4></td>
                	</tr>
                      <!-- Header Info -->
                     <tr><td colspan="3" class="customerNameTitle">Customer Name</td>
                     
                     <td colspan="2">Ship Mode</td>
                     <td colspan="3">Destination</td>
                     <td colspan="4" class="etaTitle">ETA Warehouse Date</td>
                     <td colspan="2">X-FTY Date</td>
                     <td colspan="2" class="hoTitle">HandOver Date</td>
                    </tr>
					
					<tr>
						<td colspan="3"><div class="customerName"></div>
						<a href="#" class="btn btn-sm btn-default importerBtn" style="margin:10px 0px;font-size:10px;">Add Importer</a>
						<textarea class="form-control importer" style="display:none;margin:10px 0px;"></textarea>
						</td>
                     <td colspan="2" class="shipMode"></td>
                     <td colspan="3" class="destination"></td>
                     <td colspan="4"> <input class="input-sm form-control eta   datepicker-input parsley-validated" data-type="dateIso" type="text" placeholder="MM-DD-YYYY"></td>
                     <td colspan="2"><input class="input-sm form-control xfty  datepicker-input parsley-validated" data-type="dateIso" type="text" placeholder="MM-DD-YYYY"></td>
                     <td colspan="2"><input class="input-sm form-control handover  datepicker-input parsley-validated" data-type="dateIso" type="text" placeholder="MM-DD-YYYY"></td>
                    </tr>
                     
                    <tr>
	                <td colspan="2">Division Code</td>
                    <td>Invoice #</td>
                    <td colspan="2">HMS PO #</td>
                    <td colspan="3">Style #</td>
                    <td colspan="3">Container #/ Airway Bill</td>
                    <td colspan="3">Dimension</td>
                    <td>N.W</td>
                    <td>G.W</td>
                    </tr>
 
					<tr>
	                <td colspan="2" class="division"></td>
                    <td><input class="input-sm form-control invoice" type="text" placeholder="Enter Invoice Number"></td>
                    <td colspan="2" class="hmsPO"></td>
                    <td colspan="3" class="styleNumber"></td>
                    <td colspan="3"><input class="input-sm form-control containerNumber" type="text" placeholder="Enter Container Number"></td>
                    <td colspan="3"><input class="input-sm form-control dimensions" type="text" placeholder="Enter Dimensions"></td>
                    <td><input class="input-sm form-control nw" type="text" placeholder="Enter Net Weight"></td>
                    <td><input class="input-sm form-control gw" type="text" placeholder="Enter Gross Weight"></td>
                    </tr>
            </table>
 
			<table class="table table-striped b-t b-l m-b-none">
				<tr><th style="text-align: center;">Size Range</th></tr>
 			</table>
 	 
 			<table class="table table-striped b-t b-light b-l b-b">
 			<tr >
	 			<td style="width:80px;">CTN No.</td>
 			<td style="width:60px;"># of CTNs</td>
 			<td>Color #</td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle0"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle1"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle2"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle3"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle4"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle5"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle6"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle7"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle8"></td>
 			<td style="text-align: center;width: 70px;" class="sizeTitle9"></td>
 			<td style="width: 70px;">Packs</td>
 			
 			<td style="text-align: right;width:150px;">Cust PO #</td>
 			<td style="text-align: right;width:38px;"></td>
 			</tr>
 			
 			
 			<tr class="items">
	 			<td colspan="16" style="text-align: center;font-weight: bold;">Summary</td>
	 		</tr>

	 		<tr >
		 		<td colspan="5">Color</td>
		 		<td style="text-align: center;" class="size0"></td>
		 		<td style="text-align: center;" class="size1"></td>
		 		<td style="text-align: center;" class="size2"></td>
		 		<td style="text-align: center;" class="size3"></td>
		 		<td style="text-align: center;" class="size4"></td>
		 		<td style="text-align: center;" class="size5"></td>
		 		<td style="text-align: center;" class="size6"></td>
		 		<td style="text-align: center;" class="size7"></td>
		 		<td style="text-align: center;" class="size8"></td>
		 		<td style="text-align: center;" class="size9"></td>
		 	
		 		<td colspan="7" style="text-align: right;">Total</td>
		 	</tr>
		 	
		 	<tr class="summary" >
			 	<tr>
			 	<td colspan="16"></td>
		 		</tr>
		 		<tr style="background:#eff;">
		 		<td colspan="15">GRAND TOTAL</td>
		 	
		 		<td colspan="1" style="text-align: right;" class="grandTotal"></td>
		 		</tr>
		 	</tr>
		 	
		 	
		 	<tr>
			 	<td colspan="16"></td>
		 	</tr>
		 	
		 	<tr class="notes">
			 	
			 	<td colspan="20">
				 	<b>Remarks</b>
				 	<textarea class="form-control remarks"></textarea>
			 	</td>
		 
		 	</tr>
		 	<input type="hidden" class="TotalOrderQuantity"/>
 


</table> 
            </table>

            </div>

           
            </section>
            </div>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script> 
 <script type="text/javascript" src="https://cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"> </script>
  <script type="text/javascript" src="https://cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js">
    </script>
  <script src="js/4Dapi.js?=<? echo time();?>"></script> 
    <!-- Datepicker-->
  <script src="js/datepicker/bootstrap-datepicker.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  
  <script src="js/app.plugin.js"></script>



    
    

  <script type="text/javascript">
 ///header  	 ASN Save
  	var ID;
	var FromName;
	var ToName;
	var CustomerName;
	var ShipMode;
	var Destination;
	var XFTYDate;
	var HandoverDate;
	var Division;
	var InvoiceNumber;
	var HMSPONumber_RelationalKey;
	var StyleNumber;
	var Container;
	var Dimention;
	var NW;
	var GW;


		var CTNNo;
		var NumberofCTNs;
		var Color;
		var Size1Label;
		var Size2Label;
		var Size3Label;
		var Size4Label;
		var Size5Label;
		var Size6Label;
		var S0ize7Label;
		var Size8Label;
		var Size9Label;
		var Size10Label;
		var Size1Qty;
		var Size2Qty;
		var Size3Qty;
		var Size4Qty;
		var Size5Qty;
		var Size6Qty;
		var Size7Qty;
		var Size8Qty;
		var Size9Qty;
		var Size10Qty;
		var Packs;
		var CustomerPO;
var time_saveItems ;
var save_asn;
var save_asnitems=[];

var csv_header="ID,FromName,ToName,CustomerName,ShipMode,Destination,XFTYDate,HandoverDate,Division,InvoiceNumber,HMSPONumber_RelationalKey,StyleNumber,Container,Dimention,NW,GW,"+ "PO#,sCTNNo,NumberofCTNs,Color,Size1Label,Size2Label,Size3Label,Size4Label,Size5Label,Size6Label,Size7Label,Size8Label,Size9Label,Size10Label,Size1Qty,Size2Qty,Size3Qty,Size4Qty,Size5Qty,Size6Qty,Size7Qty,Size8Qty,Size9Qty,Size10Qty,Packs,CustomerPO"+ '\r\n';

var csv_contents="";

  	function saveASN(){
		ID=$(".hmsPO").text();
		FromName= $(".from").text();
		ToName= $(".to").text();
		CustomerName= $(".customerName").text();
		ShipMode= $(".shipMode").text();
		Destination= $(".destination").text(); 
		XFTYDate= $(".xfty").val();
		HandoverDate= $(".handover").val();
		Division= $(".division").text();var dd=Division.replace("'","`"); Division=dd;
		InvoiceNumber= $(".invoice").val();
		HMSPONumber_RelationalKey= $(".hmsPO").text();
		StyleNumber= $(".styleNumber").text();
		Container= $(".containerNumber").val();
		Dimention= $(".dimensions").val();
		NW= $(".nw").val();
		GW= $(".gw").val();
		save_asn={
			ID:ID,
			FromName:FromName,
			ToName:ToName,
			CustomerName:CustomerName,
			ShipMode:ShipMode,
			Destination:Destination,
			XFTYDate:XFTYDate,
			HandoverDate:HandoverDate,
			Division:Division,
			InvoiceNumber:InvoiceNumber,
			HMSPONumber_RelationalKey:HMSPONumber_RelationalKey,
			StyleNumber:StyleNumber,
			Container:Container,
			Dimention:Dimention,
			NW:NW,
			GW:GW
		};
		csv_contents=ID+","+FromName+","+ToName+","+CustomerName+","+ShipMode+","+Destination+","+XFTYDate+","+HandoverDate+","+Division+","+InvoiceNumber+","+HMSPONumber_RelationalKey+","+StyleNumber+","+Container+","+Dimention+","+NW+","+GW;

		console.log(save_asn);
		$.post( "functional_api/save_asn.php",save_asn).done(function( data ) {
			
			 
			if(data.indexOf("already created")>-1){
				if (confirm(data) == true) {
 					$.post( "functional_api/update_asn.php",save_asn).done(function( data ) {
 						alert(data);
 					});		   
 				   
				} else {
    				
				}

			}
			else
			{
				alert(data);
			}

	      });

 /// footer ASN Items save to db
 		//  ID	
 		  time_saveItems = setTimeout(save_asnitemstoDB, 500);
}
function save_asnitemstoDB(){
	var q=0;
		$.each($(".item"), function(i,e){
			var  asn_item=$(e).children(); console.log(asn_item);
			
				var inpt_data=$(asn_item[0]).children();
			CTNNo=$(inpt_data).val();

				var inpt_data=$(asn_item[1]).children();
			NumberofCTNs=$(inpt_data).val();
				 
			Color=$(asn_item[2]).text();
			
				var inpt_data=$(asn_item[3]).children();
			Size1Label=$(inpt_data).val();

				var inpt_data=$(asn_item[4]).children();
			Size2Label=$(inpt_data).val();

				var inpt_data=$(asn_item[5]).children();
			Size3Label=$(inpt_data).val();

				var inpt_data=$(asn_item[6]).children();
			Size4Label=$(inpt_data).val();

				var inpt_data=$(asn_item[7]).children();
			Size5Label=$(inpt_data).val();

				var inpt_data=$(asn_item[8]).children();
			Size6Label=$(inpt_data).val();

				var inpt_data=$(asn_item[9]).children();
			Size7Label=$(inpt_data).val();

				var inpt_data=$(asn_item[10]).children();
			Size8Label=$(inpt_data).val();

				var inpt_data=$(asn_item[11]).children();
			Size9Label=$(inpt_data).val();

				var inpt_data=$(asn_item[12]).children();
			Size10Label=$(inpt_data).val();

				var inpt_data=$(asn_item[13]).children();
			Packs=$(inpt_data).val();
				var inpt_data=$(asn_item[14]).children();

			CustomerPO=$(inpt_data).val();

			if (Size1Label==null) Size1Label="";
			if (Size2Label==null) Size2Label="";
			if (Size3Label==null) Size3Label="";
			if (Size4Label==null) Size4Label="";
			if (Size5Label==null) Size5Label="";
			if (Size6Label==null) Size6Label="";
			if (Size7Label==null) Size7Label="";
			if (Size8Label==null) Size8Label="";
			if (Size9Label==null) Size9Label="";
			if (Size10Label==null) Size10Label="";
			if (Packs==null) Packs="";
			if (CustomerPO==null) CustomerPO="";

			Size1Qty=parseInt(Size1Label)*parseInt(Packs);
		    Size2Qty=parseInt(Size2Label)*parseInt(Packs);
		    Size3Qty=parseInt(Size3Label)*parseInt(Packs);
			Size4Qty=parseInt(Size4Label)*parseInt(Packs);
			Size5Qty=parseInt(Size5Label)*parseInt(Packs);
			Size6Qty=parseInt(Size6Label)*parseInt(Packs);
			Size7Qty=parseInt(Size7Label)*parseInt(Packs);
			Size8Qty=parseInt(Size8Label)*parseInt(Packs);
			Size9Qty=parseInt(Size9Label)*parseInt(Packs);
			Size10Qty=parseInt(Size10Label)*parseInt(Packs);

			if (!Size1Qty) Size1Qty="";
			if (!Size2Qty) Size2Qty="";
			if (!Size3Qty) Size3Qty="";
			if (!Size4Qty) Size4Qty="";
			if (!Size5Qty) Size5Qty="";
			if (!Size6Qty) Size6Qty="";
			if (!Size7Qty) Size7Qty="";
			if (!Size8Qty) Size8Qty="";
			if (!Size9Qty) Size9Qty="";
			if (!Size10Qty) Size10Qty="";
			var save_asnitem={
			ID:ID,
			CTNNo:CTNNo,
			NumberofCTNs:NumberofCTNs,
			Color:Color,
			Size1Label:Size1Label,
			Size2Label:Size2Label,
			Size3Label:Size3Label,
			Size4Label:Size4Label,
			Size5Label:Size5Label,
			Size6Label:Size6Label,
			Size7Label:Size7Label,
			Size8Label:Size8Label,
			Size9Label:Size9Label,
			Size10Label:Size10Label,
			Size1Qty:Size1Qty,
			Size2Qty:Size2Qty,
			Size3Qty:Size3Qty,
			Size4Qty:Size4Qty,
			Size5Qty:Size5Qty,
			Size6Qty:Size6Qty,
			Size7Qty:Size7Qty,
			Size8Qty:Size8Qty,
			Size9Qty:Size9Qty,
			Size10Qty:Size10Qty,
			Packs:Packs,
			CustomerPO:CustomerPO
		};
		save_asnitems.push(save_asnitem);
		 q++;
		if (q==1){csv_contents+=','+ID+','+CTNNo+','+NumberofCTNs+','+Color+','+Size1Label+','+Size2Label+','+Size3Label+','+Size4Label+','+Size5Label+','+Size6Label+','+Size7Label+','+Size8Label+','+Size9Label+','+Size10Label+','+Size1Qty+','+Size2Qty+','+Size3Qty+','+Size4Qty+','+Size5Qty+','+Size6Qty+','+Size7Qty+','+Size8Qty+','+Size9Qty+','+Size10Qty+','+Packs+','+CustomerPO+'\r\n';
		}
		else{
			csv_contents+=',,,,,,,,,,,,,,,,'+ID+','+CTNNo+','+NumberofCTNs+','+Color+','+Size1Label+','+Size2Label+','+Size3Label+','+Size4Label+','+Size5Label+','+Size6Label+','+Size7Label+','+Size8Label+','+Size9Label+','+Size10Label+','+Size1Qty+','+Size2Qty+','+Size3Qty+','+Size4Qty+','+Size5Qty+','+Size6Qty+','+Size7Qty+','+Size8Qty+','+Size9Qty+','+Size10Qty+','+Packs+','+CustomerPO+'\r\n';

		}

		
		$.post( "functional_api/save_asnitem.php",save_asnitem).done(function( data ) { 
	      });
		// if (q>=3){
		// 	alert("ASN Items saved to DB");
		// 	window.location.replace("asn-module.php");
		// }

		});
clearTimeout(time_saveItems);
}

function backASN(){
	window.location.replace("asn-module.php");       
}

  </script>
  <script type="text/javascript">
  
 function checkASN(){
if  (csv_contents==""){ alert("Please save ASN datas clicking 'Save' button before generate to PDF and CSV.");return;}
if (save_asn=null || save_asnitems==null) {
		alert("Please save asn datas to database clicking 'Save' button.");
		return;
}

 	$('body').scrollTop(0);
    createPDF();
/// to CSV file.
	var csv_asn=csv_header+csv_contents;
	var to_csv={
		id:ID,
		csv_data:csv_asn
	}
	$.post( "functional_api/create_csv.php",to_csv).done(function( data ) { 
	      });
		
			// var link = document.createElement("a");
   //          var blob = new Blob([csv_asn], { type: 'text/csv;charset=utf-8;' });
   //          var url = URL.createObjectURL(blob);
   //          link.setAttribute("href", url);
   //          link.setAttribute("download", ID+".csv");
   //          link.style.visibility = 'hidden';
   //          document.body.appendChild(link);
   //          link.click();
   //          document.body.removeChild(link);
         
    alert("Generated to PDF and CSV files"); 
    //window.location.replace("asn-module.php");       
 }
var  form = $('.pdfform');
var cache_width = form.width();
var cache_height = form.height();
var a4 = [595.28,841.89]; 


 function createPDF() {
 	
  getCanvas().then(function(canvas) {
   var
    img = canvas.toDataURL("image/png"),
    doc = new jsPDF({
     unit: 'px',
     format: 'a4'
    });
   doc.addImage(img, 'JPEG', 20, 20);
   doc.save(ID+'.pdf');
   form.width(cache_width);
  });
 }
 function getCanvas() {
  form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
  return html2canvas(form, {
   imageTimeout: 2000,
   removeContainer: true
  });
 }
  </script>
  <style>
	  
	 
	.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 2px;
    line-height: 1.42857143;
    vertical-align: middle;
    border-top: 1px solid #ddd;
    border-right: 1px solid #eeefff;
    text-transform: uppercase;
    font-weight: bold;
}
h4{
	font-weight: bold;
}
.form-control{
	color: #000ef5 !important;
	}
	</style>
</body>
</html>
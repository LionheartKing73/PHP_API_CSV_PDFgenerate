$( document ).ready(function() {

	/// get 4D data from get param which houses the PO number
	// be sure to validate user against factory for PO, if they don't match reject

	var po = getParameterByName('id');
	getPOHeader(po).always(function() { //is returned as deffered object
    
	$.getJSON(itemUrl, { get_param: 'value' }, function(data) {
      json_obj2 = data;
      var sizes = $.trim(json_obj[0].BrkdnCutRatio);
	  var valSize=sizes.split('-');
	  var n = 0;
	  $.each( json_obj2, function(key,value) {
		 i= key;
		  $('.items').before('<tr class="item '+json_obj2[key].CPNumber+'" rowColor="'+json_obj2[key].CPNumber+'" rowNumber="'+i+'"><td><input class="input-sm form-control '+json_obj2[key].CPNumber+'row'+i+'ctnno  ctnno" type="text" ></td><td><input class="input-sm form-control '+json_obj2[key].CPNumber+'row'+i+'noofctn noofctn" type="text" disabled></td><td>'+json_obj2[key].CPNumber+'</td><td><input class="input-sm form-control '+json_obj2[key].CPNumber+'row'+i+'size0 size0" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size1 size1" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size2 size2" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size3 size3" type="text" placeholder=""></td><td><input class="input-sm '+json_obj2[key].CPNumber+' form-control '+json_obj2[key].CPNumber+'row'+i+'size4 size4" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size5 size5" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size6 size6" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size7 size7" type="text" placeholder=""></td><td><input class="input-sm  form-control '+json_obj2[key].CPNumber+'row'+i+'size8 size8" type="text" placeholder=""></td><td><input class="input-sm   form-control '+json_obj2[key].CPNumber+'row'+i+'size9 size9" type="text" placeholder=""></td><td><input class="input-sm   form-control '+json_obj2[key].CPNumber+'row'+i+'prepack prepack" type="text" placeholder=""></td><td style="text-align: right;"><input type="text" class="input-sm   form-control row'+i+'customerPO" ></td><td style="text-align:right;"><a href="#" class="btn btn-sm btn-default addRow" ><i class="fa fa-plus"></i> </a></td></tr>');
		    n++;
 			
 			$('.summary').before('<tr><td colspan="3" class="colorName '+json_obj2[key].CPNumber+'">'+json_obj2[key].CPNumber+'</td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize0 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize1 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize2 '+json_obj2[key].CPNumber+'qty "></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize3 '+json_obj2[key].CPNumber+'qty "></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize4 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize5 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize6 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize7 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize8 '+json_obj2[key].CPNumber+'qty"></td><td style="text-align: center;" class="'+json_obj2[key].CPNumber+'sumSize9 '+json_obj2[key].CPNumber+'qty"></td><td colspan="7" style="text-align:right;" class="'+json_obj2[key].CPNumber+'sumTotal colorTotal"></td></tr>');
 		 	
	  });
	  /// make sure the right amount of text boxes are available 
	  	var n = 0;
	  	var numItems = $('.item').length;
 			
	 	$('.item').each(function(key,value){
		 	var i = valSize.length;
		 	for(i;i<10;i++){		
			 $('.size'+i).remove();
			}
		 });
		 //get all the quantities and the totals 
		 $('.form-control').focusout(function(){
		 	compileQtys();
		 	
		 });

		
		
		
	 $(document).on('click','.addRow', function(e){
		e.preventDefault();
	
		rowColor = $(this).parent().parent().attr("rowcolor");
		n=0;
		var rowNumber= $(this).parent().parent().attr("rownumber");
		var lastColorRow = 0;
			
		$(this).parent().parent().after('<tr class="item '+rowColor+'" rowcolor="'+rowColor+'" rowNumber="'+n+'"><td><input class="input-sm form-control '+rowColor+'row'+n+'ctnno ctnno" type="text"></td><td><input class="input-sm form-control '+rowColor+'row'+n+'noofctn noofctn" type="text" disabled></td><td>'+rowColor+'</td><td><input class="input-sm form-control '+rowColor+'row'+n+'size0 size0" type="text" placeholder=""></td><td><input class="input-sm  form-control '+rowColor+'row'+n+'size1 size1" type="text" placeholder=""></td><td><input class="input-sm  form-control '+rowColor+'row'+n+'size2 size2" type="text" placeholder=""></td><td><input class="input-sm  form-control '+rowColor+'row'+n+'size3 size3" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size4 size4" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size5 size5" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size6 size6" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size7 size7" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size8 size8" type="text" placeholder=""></td><td><input class="input-sm '+rowColor+' form-control '+rowColor+'row'+n+'size9 size9" type="text" placeholder=""></td><td><input class="input-sm   form-control '+rowColor+'row'+n+'prepack prepack" type="text" placeholder=""></td><td style="text-align: right;"><input type="text" class="input-sm   form-control row'+n+'customerPO" ></td><td style="text-align:right;"><a href="#" class="btn btn-sm btn-default removeRow" ><i class="fa fa-minus"></i> </a><a href="#" class="btn btn-sm btn-default addRow" ><i class="fa fa-plus"></i></a></td></tr>');
	
				
		var n = 0;
	  	var numItems = $('.item').length;
 			
	 	$('.item').each(function(key,value){
		 	var i = valSize.length;
		 	for(i;i<10;i++){		
			 $('.size'+i).remove();
			}
		 });
		 //get all the quantities and the totals 
		 
		 compileQtys();
		
	});
	
	
	$(document).on('click','.removeRow', function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
		 //get all the quantities and the totals 
		 compileQtys();
	});
	$('.importerBtn').click(function(e){
		$(this).hide();
		$('.importer').show();
	});
	
		//// end of document addRow click
		   console.log('Page Loaded Complete'); //runs when ajax completed
    });
		
     
});
/// end of document ready
	

	
/// Function to get URL parameters 
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

});

function getPOHeader(po){
	url = "http://100.38.175.66:8081/4DACTION/WebService_GetPO?"+po
	itemUrl = "http://100.38.175.66:8081/4DACTION/WebService_GetItems?"+po
	var TotalOrderQuantity = 0;
	
	return $.getJSON(url, { get_param: 'value' }, function(data) {
   
      json_obj = data;
      $('.from').html(json_obj[0].Factory);
      $('.customerName').html(json_obj[0].Customer);
	  $('.TotalOrderQuantity').val(json_obj[0].TotalOrderQuantity);
      
    
      if(json_obj[0].ShipAir==true){
      $('.shipMode').html("AIR");   
      $('.handover').remove(); 
      $('.hoTitle').empty();
      }else{
	      $('.shipMode').html("SEA");   
	        $('.shipMode').html("SEA");   
       $('.eta').remove(); 
	   $('.etaTitle').empty();
    
      }
      
      
      if(json_obj[0].ShipLDP==true){
      //$('.shipMode').html("LDP");  
     // $('.handover').remove(); 
      //$('.hoTitle').empty();
      }
      if(json_obj[0].ShipFOB==true){
      //$('.shipMode').html("FOB");  
       //$('.eta').remove();  
       //$('.etaTitle').empty();
        $('.customerNameTitle').empty().html("CONSIGNEE");
      }
      
      
        
      $('.destination').html(json_obj[0].ShipInfo);
      $('.division').html(json_obj[0].OrderDivision);
      $('.hmsPO').html(json_obj[0].OrderNum);
      $('.styleNumber').html(json_obj[0].StyleNumber);
     
      
      var sizes = $.trim(json_obj[0].BrkdnCutRatio);
	  var valSize=sizes.split('-');
	  for(var i=0;i<valSize.length;i++){
	  	$('.sizeTitle'+i).html(valSize[i]);
	  }
	});
}
// function checkASN(){
	
	// if(Math.abs($('.TotalOrderQuantity').val())==Math.abs($('.grandTotal').html())){
	// 		 	//$('.remarks').val('Complete');
	// 		 	}else{
	// 			 	if (confirm('This shipment is short, is it complete?')) {
	// 			 	// Save it!
	// 				} else {
	// 				// Do nothing!
	// 				}
			 	
	// 	 	}
//}

function compileQtys(){
/// after anything is off focus
	

		
		//empty row quantities
		//empty column quantities 
		var allQty = [];
		var sizeTotal = [];
		var pack =[];
		var cartons = [];
		var totalCartons = [];
		var sizeSum = [];
		var lastColor = 0;
		$('.item').each(function(n){
			var qty= [];
					var rowColor = $(this).attr('rowColor');
					totalCartons[n] = $(this).find('.ctnno').val();
					if (totalCartons[n].indexOf('-') > -1){
						var tmp_arr = totalCartons[n].split(/[*-]/);
						totalCartons[n]=Math.abs((tmp_arr[0]-tmp_arr[1]))+1;
					}
					if(totalCartons[n].length>0){
						totalCartons[n] = 1;
					}
					
					$(this).find('.noofctn').val((totalCartons[n]));
					
					
					var i = 0;
					var sizes = $.trim(json_obj[0].BrkdnCutRatio);
					var valSize=sizes.split('-');
					for(i;i<valSize.length;i++){
					
					if($(this).find('.size'+i).val()==""){
						
						qty[i] = 0;
					}else{
						qty[i] = $(this).find('.size'+i).val() * $(this).find('.prepack').val() * $(this).find('.noofctn').val();
						
					}
					
					
					}
					var totalRows = 0;
					$('.item').each(function(key){
					totalRows = key+1;
					});
					
					
				
					
					if(typeof allQty[rowColor] == 'undefined'){
					allQty[rowColor] = qty;
				
					} else {
						
						if(rowColor==lastColor){
						var x = 0;
						for(x;x<allQty[rowColor].length;x++){
							
						allQty[rowColor][x] += qty[x];
						
						
					
						
						}
						
						
						}
					}
				 
				    
			lastColor = rowColor;
		});
		
		
		for (i in allQty){
			//console.log(i);
			var color = i;
		
			for (key in allQty[i]){
       			//console.log( key + ": " + allQty[i][key]);
       			$("."+color+"sumSize"+key).html(allQty[i][key]);
    		}
		}
		
		var grandTotal = 0;
		$('.colorTotal').each(function(key){
			grandTotal += Math.abs($(this).html());
			$('.grandTotal').html(grandTotal);
		});
			
		
		
	
				 
	
	//get size totals by color
	
	$.each( json_obj2, function(a,b) {
		var total = 0;
		var sizes = $.trim(json_obj[0].BrkdnCutRatio);
		var valSize=sizes.split('-');
		$('.'+json_obj2[a].CPNumber+'qty').each(function(key,value){
			if(key<valSize.length){
				total += parseFloat($(this).html());
			}
			$('.'+json_obj2[a].CPNumber+'sumTotal').html(total);
		});
	});
	
	
}

<?php header('Access-Control-Allow-Origin: http://localhost/nfc_data/views/t_print.php'); ?>

<title></title>
 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../css/sb-admin-2.min.css?v=1001" rel="stylesheet">
<link href="../css/cv_style.css" rel="stylesheet">
<div style="margin:20px;padding:50px;background-color:#fdfdfd;width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: left;">
	<div style="" class="col-sm-12">
		<input type="text" name="device_ip" id="device_ip" placeholder="ip ของ DTS Writer" class="form-control col-sm-6">
	</div>
	<div class="col-sm-12" id="print_view"></div>
	<!-- <div class="col-sm-4 form-group">
		<div class="form-check"><center>
			<input type="checkbox" checked class="form-check-input" id="chk_nfc">
			<label class="form-check-label" for="chk_nfc">เขียน Tag NFC</label>
		</div>
	</div> -->
	<div class="col-sm-4"><center>
		<button id="btn_save" onclick="add()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-print"></i> พิมพ์</button>
		<button id="btn_save" onclick="send_to_ncf()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-print"></i> พิมพ์ TAG NFC</button>

	</div>
	<div id="loading"></div>
</div>
<script src="../js/cv_js.js?v=1014"></script>
<script src="../js/jquery-3.4.1.js"></script>
<script src="../js/popper.min.js"></script>
<script type="text/javascript">
	$("title").text(title());	
	// console.log(sessionStorage.getItem("print_page"));
	// $("#print_view").html(get_print_txt());
	$("#print_view").html(sessionStorage.getItem("print_page"));
	var link_patient_detail="../call_controller/p_terms_of_use.php";
	var link_esp="http://";
	
		$('#btn_nfc').attr('disabled','disabled');
	    $('#device_ip').change(function(){
	        if($(this).val != ''){
	            $('#btn_nfc').removeAttr('disabled');
	        }
	    });


	function add(){
		$("#msg").html("");

			let f_data=new FormData();
			let data = $("#print_stage").serializeArray();
			$.each(data,(key,val)=>{
				f_data.append(val.name,val.value);
			});
			f_data.append("print_stage",true);
			event.preventDefault();
			$.ajax({
				type: "POST",
	 			url: link_patient_detail,
	 			data: f_data,
				contentType: false,
				processData: false,
			}).done((res)=> {
				let data=JSON.parse(res);
				if(data.status){
					cv_print('print_view');

				}else{
					$("#msg").html("<div style='color:#bd4646'>"+data.msg+"</div>");
				}	 				
	 		});
	 		if($("#chk_nfc").is(':checked')){
				send_to_ncf()
			}
	}
	function send_to_ncf(){ 
		var form = new FormData();
		let data = $("#print_nfc").serializeArray();
		$.each(data,(key,val)=>{
			form.append(val.name,val.value);
		});
		$("#loading").html("กำลังส่ง...");
		link_esp+=$("#device_ip").val();
		var settings = {
		  "async": true,
		  "crossDomain": true,
		  "url": link_esp,
		  "method": "POST",
		  "processData": false,
		  "contentType": false,
		  "mimeType": "multipart/form-data",
		  "data": form,

		}

		$.ajax(settings).done(function (res) {
		  console.log(res);
		  $("#loading").html("เสร็จสิ้น!!");
		  location.reload();
		});
	}
	function print_nfc(){
			let f_data=new FormData();
			let data = $("#print_nfc").serializeArray();
			$.each(data,(key,val)=>{
				f_data.append(val.name,val.value);
			});
			f_data.append("print_tag_nfc",true);
			event.preventDefault();
			$.ajax({
				type: "POST",
	 			url: link_esp,
	 			data: f_data,
				contentType: false,
				processData: false,
			}).done((res)=> {
				let data=JSON.parse(res);
				if(data.status){
					// cv_print('print_view');
					console.log(data);
				}else{
					$("#msg").html("<div style='color:#bd4646'>"+data.msg+"</div>");
				}	 				
	 		});
	}	
</script>
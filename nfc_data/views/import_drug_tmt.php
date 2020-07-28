<div id="loading" class="spinner_border text-primary" style="display:none"></div>
<div class="container" id="content_box">
	<div  class="card col-sm-12 col-md-12 ">
		<div  class="card-body">
			<div class="media">
			    <div class="media-left">
			      <span style="font-size: 70px">1</span>
			    </div>
			    <div class="media-body">
			      <h4 class="media-heading">ดาวน์โหลดไฟล์ </h4>
			      <p>บัญชีข้อมูลรายการยาและรหัสยามาตรฐานของไทย (Thai Medicines Terminology - TMT) จาก  สำนักพัฒนามาตรฐานระบบข้อมูลสุขภาพไทย</p>
			    </div>
			</div>
			<center>
			<div class="col-md-12 mb-12">
					<a href="http://this.or.th/tmt_download.php" target="_blank" class="btn btn-secondary">ไปยังเว็บไซต์</a>
			</div>
		</div>
		<hr>
		<div  class="card-body">
			<div class="media">
			    <div class="media-left">
			      <span style="font-size: 70px">2</span>
			    </div>
			    <div class="media-body">
			      <h4 class="media-heading">เลือกไฟล์ 	TMTRFXXXXXXXX_FULL.xls</h4>
			      <p>แตกไฟล์ TMTRFXXXXXXXX.zip แล้วเลือกไฟล์ GPtoGPU20200518.xls</p>
			    </div>
			</div>
			<center>
			<form id="frm_p_product" enctype="multipart/form-data">
				<div class="col-md-12 mb-12">
					<button type="button" class="btn btn-secondary" onclick="upload('#tmt_upload')" style="width:60%">เลือกไฟล์ TMTRFXXXXXXXX_FULL.xls</button>
					<input class="form-control" type="file" id="tmt_upload" name="tmt_upload" class="" style="display: none" onchange="sh_file_name(this,'file_name')" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel"><br>
					<label id="file_name"></label>
				</div>
				<div class="col-md-12 mb-12" style="margin:10px">
					<button type="button" id="upload_tmt" class="btn btn-secondary" onclick="func_upload_tmt()" disabled>นำเข้าข้อมูล</button>
				</div>
				<div class="col-md-12 mb-12" style="margin:10px;" >
					
					<div id="load_pass" style="display: none;color:#28a745"><i class="fas fa-check-circle fa-3x"></i></div>
					<div id="load_fail" style="display: none;color:#c31223"><i class="fas fa-times-circle fa-3x"></i></i></div>
				</div>
			</form>
		</div>
		<div id="msg"></div>
	</div>
</div>
<script type="text/javascript">
	function sh_file_name(file,target){
		var fileName = file.files[0].name;
		let spl=fileName.split(".");
		let val_chk=0;
		// console.log(spl[0]);
		if(spl[1]!="xls"){val_chk++;}
		if(spl[0][0]!="T"){val_chk++;}
		if(spl[0][1]!="M"){val_chk++;}
		if(spl[0][2]!="T"){val_chk++;}
		if(spl[0][3]!="R"){val_chk++;}
		if(spl[0][4]!="F"){val_chk++;}
		$("#file_name").text(fileName);

		if(val_chk===0){
			$("#upload_tmt").prop("disabled",false);
			$("#upload_tmt").toggleClass('btn-success');
		}
	}
	function func_upload_tmt(){
		if($("#tmt_upload").val()!=""){
			let f_data=new FormData();
			let files = $("#tmt_upload")[0].files[0]; 
			f_data.append("upload_tmt",true);
			f_data.append("tmt_upload",files);
			event.preventDefault();
			$("#loading").show();
			$.ajax({
				type: "POST",
	 			url: link,
	 			data: f_data,
				contentType: false,
				processData: false,
			}).done((res)=> {
				let data=JSON.parse(res);
				if(!data.status){
					$("#msg").html("<div style='color:#bd4646'>"+data.msg+"</div>");
					$("#load_fail").show();
				}else{
					$("#load_pass").show();
				}
				$("#loading").hide();			
	 		});

		}
	}
</script>

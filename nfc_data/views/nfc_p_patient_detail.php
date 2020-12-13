<div id="loading" class="spinner_border text-primary" style="display:none"></div>
<!-- Content Column -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
    			<h1 class="h3 mb-0 text-gray-800">ข้อมูลผู้ป่วย</h1>
    			<!-- <div class="col-sm-12">
					<form class="form-inline" id="frm_search_patient">
				    <div class="input-group">
				      <div class="input-group-prepend">
				        <span class="input-group-text"><i class="fas fa-search"></i></span>
				      </div>
				      <input id="txt_search" type="text" class="form-control" placeholder="ค้นหาจากชื่อผู้ป่วย..">
				      <button type="button" onclick="func_search()" class="btn btn-light">ค้นหา</button>
				    </div>
				  </form>
				</div> -->
    
</div>

<div class="row">
    <div class="col-lg-12 mb-4">
    			<div class="card shadow mb-4">
					<form id="frm_p_patient_sh" enctype="multipart/form-data">
						<div class="modal-body">
							<!-- <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_height"></label>
							    <div class="input-group">
							        <div align="center">
							        	<center><img id="sh_img" class="rounded" width="50%">
							        </div>
							    </div>
						    </div> -->
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_id">รหัสประชาชน</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-tags"></i></span>
							        </div>
							        <input readonly type="text" class="form-control" id="p_id_sh" name="p_id_sh" oninvalid="this.setCustomValidity('รหัสประชาชน')"required oninput="this.setCustomValidity('')" placeholder="รหัสประชาชน">
							    </div>
						    </div>
							<div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_name">ชื่อ-นามสกุล</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-tags"></i></span>
							        </div>
							        <input readonly type="text" class="form-control" id="p_name" name="p_name" oninvalid="this.setCustomValidity('ชื่อ')"required oninput="this.setCustomValidity('')" placeholder="ชื่อ">
							        <input readonly type="text" class="form-control" id="p_lname" name="p_lname" oninvalid="this.setCustomValidity('นามสกุล')"required oninput="this.setCustomValidity('')" placeholder="นามสกุล">
							    </div>
						    </div>
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_age">อายุ</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-tag"></i></span>
							        </div>
							        <input readonly type="number" class="form-control" id="p_age" name="p_age" oninvalid="this.setCustomValidity('อายุ')" required oninput="this.setCustomValidity('')" placeholder="อายุ">
							    </div>
						    </div>
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_age">หมู่เลือด</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-tint"></i></i></span>
							        </div>
							        <div style="margin-left:10px;">

							        	<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_blood_a" name="p_blood" class="custom-control-input" value="A" checked>
										  <label class="custom-control-label" for="p_blood_a">A</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_blood_b" name="p_blood" class="custom-control-input" value="B">
										  <label class="custom-control-label" for="p_blood_b">B</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_blood_o" name="p_blood" class="custom-control-input" value="O">
										  <label class="custom-control-label" for="p_blood_o">O</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_blood_ab" name="p_blood" class="custom-control-input" value="AB">
										  <label class="custom-control-label" for="p_blood_ab">AB</label>
										</div>
									</div>
							    </div>
							
						    </div>
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_gender">เพศ</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-venus-mars"></i></i></span>
							        </div>
							        <div style="margin-left:10px;">
							        	<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_gender_m" name="p_gender" class="custom-control-input" value="M" checked>
										  <label class="custom-control-label" for="p_gender_m">ชาย</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="p_gender_w" name="p_gender" class="custom-control-input" value="W">
										  <label class="custom-control-label" for="p_gender_w">หญิง</label>
										</div>

										
									</div>
							    </div>
							
						    </div>
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_weight">น้ำหนัก</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-weight"></i></span>
							        </div>
							        <input readonly type="text" class="form-control" id="p_weight" name="p_weight" oninvalid="this.setCustomValidity('น้ำหนัก')"required oninput="this.setCustomValidity('')" placeholder="น้ำหนัก">
							    </div>
						    </div>
						    <div class="col-md-12 mb-12">
						      <label class="cv_keep-left" for="p_height">ส่วนสูง</label>
							    <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" ><i class="fas fa-align-justify"></i></span>
							        </div>
							        <input readonly type="text" class="form-control" id="p_height" name="p_height" oninvalid="this.setCustomValidity('ส่วนสูง')"required oninput="this.setCustomValidity('')" placeholder="ส่วนสูง">
							    </div>
						    </div>
						</div>
						</form>
				</div>



        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between mb-2">
                <h6 class="m-0 font-weight-bold text-primary">ข้อมูลยาผู้ป่วย</h6>
                <a class="d-sm-inline-block btn btn-sm btn btn-secondary shadow-sm" onclick="open_add()" data-toggle="modal" data-target="#modal_p_terms_of_use"><i class="fas fa-plus-square fa-md text-white"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อยา</th>
                            </tr>
                        </thead>
                        <tbody id="p_drug">
                          
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


	 <!-- The Modal -->
	<div class="modal fade" id="modal_p_terms_of_use" >
		<div class="modal-dialog modal-lg" >
			<div class="modal-content">
	        <!-- Modal Header -->
				<div class="modal-header" id="head_stage">
					<h4 class="modal-title">ข้อมูลยาผู้ป่วย</h4>
					<button type="button" onclick="clear_input()" class="close" data-dismiss="modal">&times;</button>
				</div>
	        <!-- Modal body -->

				<div class="modal-body">
				    <div class="col-sm-12 col-md-12 mb-12">
				    	<div class="card-body">
							<form class="form-inline" id="frm_search_drug">
							    <div class="input-group">
							      <div class="input-group-prepend">
							        <span class="input-group-text"><i class="fas fa-search"></i></span>
							      </div>
							      <input id="txt_search" type="text" class="form-control" placeholder="ค้นหาชื่อหรือรหัสยา..">
							      <button type="button" onclick="func_search()" class="btn btn-light">ค้นหา</button>
							    </div>
							</form>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 mb-12">
						<div class="card-body">
			                <div class="table-responsive">
			                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
			                        <thead>
			                            <tr>
			                                <th>ชื่อยา</th>
			                                <th>เพิ่ม</th>
			                            </tr>
			                        </thead>
			                        <tbody id="p_drug_content">
			                          
			                        </tbody>
			                    </table>
			                </div>
			            </div>
			        </div>
				    <div id="frm"></div>
				    <div id="msg"></div>
				</div>
			
	        <!-- Modal footer -->
				<div class="modal-footer" id="modal_p_terms_of_use_foot">	
					<div id="mng"></div>
				</div>

			</div>
		</div>
	</div>


 		<!-- The Modal -->
	<div class="modal fade" id="modal_p_terms_of_use_2" >
		<div class="modal-dialog modal-lg" >
			<div class="modal-content">
	        <!-- Modal Header -->
				<div class="modal-header" id="head_stage">
					<h4 class="modal-title">ข้อมูลยาผู้ป่วย</h4>
					<button type="button" onclick="clear_input()" class="close" data-dismiss="modal">&times;</button>
				</div>
	        <!-- Modal body -->
	        	<form id="frm_p_terms_of_use_2" enctype="multipart/form-data">
	        		<input type="hidden" name="t_id" id="t_id" >
					<div class="modal-body">
						<div class="col-md-12 mb-12" id="drug_data">
						</div>
					    <div class="col-md-12 mb-12">
	                    	<label class="cv_keep-left" for="d_use">มื้ออาหาร</label>
	                    	<div class="input-group">
	                            <div class="input-group-prepend">
	                            <span class="input-group-text" ><i class="fas fa-calendar-day"></i></span>
	                            </div>
	                            <div style="margin-left:10px;">
	                                <div class="form-check form-check-inline" id="p_use_box">
	                                	
	                                	<input class="form-check-input" type="radio" name="t_food" id="t_food" value="1"><label class="form-check-label">ก่อนอาหาร</label>
	                           		</div>
	                           		<div class="form-check form-check-inline" id="p_use_box">
	                                	
	                                	<input class="form-check-input" type="radio" name="t_food" id="t_food" value="2"><label class="form-check-label">หลังอาหาร</label>
	                           		</div>
	                           		<div class="form-check form-check-inline" id="p_use_box">
	                                	
	                                	<input class="form-check-input" type="radio" name="t_food" id="t_food" value="0"><label class="form-check-label">ไม่ระบุ</label>
	                           		</div>
	                           	</div>
	                        </div>
	                    </div>
	                    <div class="col-md-12 mb-12">
	                    	<label class="cv_keep-left" for="d_use">ช่วงเวลา</label>
	                        <div class="input-group">
	                            <div class="input-group-prepend">
	                            	<span class="input-group-text" ><i class="fas fa-clock"></i></span>
	                            </div>
	                            <div style="margin-left:10px;" class="col-md-8 mb-8">
	                                <div class="form-check form-check-inline" id="p_use_box">
	                                	
	                                	<input class="form-check-input" type="checkbox" name="t_morning" id="t_morning" value="1"><label class="form-check-label">เช้า</label>
	                           		</div>
	                           		<div class="form-check form-check-inline" id="p_use_box">
										<input class="form-check-input" type="checkbox" name="t_midday" id="t_midday" value="1"><label class="form-check-label">กลางวัน</label>
									</div>
									<div class="form-check form-check-inline" id="p_use_box">
										<input class="form-check-input" type="checkbox" name="t_evening" id="t_evening" value="1"><label class="form-check-label">เย็น</label>
									</div>
									<div class="form-check form-check-inline" id="p_use_box">
										<input class="form-check-input" type="checkbox" name="t_befor_bed" id="t_befor_bed" value="1"><label class="form-check-label">ก่อนนอน</label>
									</div>
									<div class="form-check form-check-inline" id="p_use_box">
										<input class="form-check-input" type="checkbox" name="t_when_symptoms" id="t_when_symptoms" value="1"><label class="form-check-label">เมื่อมีอาการ</label>
									</div>
									<div class="form-check form-check-inline" id="p_use_box">
										<input class="form-check-input" type="checkbox" name="t_frequency_chk" id="t_frequency_chk" value="1"><label class="form-check-label">ทุกๆ </label>
										<input type="number" class="form-control" id="t_frequency" name="t_frequency" oninvalid="this.setCustomValidity('ระบุช่วงเวลาที่ต้องการ...')" required oninput="this.setCustomValidity('')" placeholder="ระบุช่วงเวลาที่ต้องการ...">
										 ชั่วโมง
									</div>
	                            </div>
	                        </div>
	                        
	                    </div>

	                    <div class="col-md-12 mb-12">
	                    	<label class="cv_keep-left" for="t_dose">ขนาดการใช้ยา</label>
	                        <div class="input-group">
	                            <div class="input-group-prepend">
	                            <span class="input-group-text" ><i class="fas fa-tags"></i></span>
	                            </div>
	                            <input type="text" class="form-control" id="t_dose" name="t_dose" oninvalid="this.setCustomValidity('ขนาดการใช้ยา')"required oninput="this.setCustomValidity('')" placeholder="ขนาดการใช้ยา">

	                            <select class="form-control" id="t_dose_unit" name="t_dose_unit">
							      <option value="เม็ด">เม็ด</option>
							      <option value="ช้อนชา">ช้อนชา</option>
							      <option value="ช้อนโต๊ะ">ช้อนโต๊ะ</option>
							    </select>
	                        </div>
	                    </div>
	                    <div class="col-md-12 mb-12">
	                   		<div id="drug_expire"></div>
	                   	</div>
	                </div>

					<div id="frm"></div>
					<div id="msg"></div>
					
				</form>
	        <!-- Modal footer -->
					<div class="modal-footer" id="modal_p_terms_of_use_foot_2">	
						<button id="btn_save" onclick="add()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-save fa-1x"></i> บันทึก</button>
					</div>
				</div>
			</div>
		</div>
	</div>


<div style="margin-top:10px;">
	<ul class="pagination justify-content-center" id="pagination">
  	</ul>
</div>


<script type="text/javascript">
	var data;
	var tmp_page;
	var tmp_filter;

	var drug_id;
	var patient_id;
	var link_patient_detail="./call_controller/p_terms_of_use.php";
	var global_link="./call_controller/";
	// -------------------------- onload ---------------------------//
	// let link="http://localhost/nfc_data/call_controller/api.php";
	open_add();
	load_p_patient('',1);
	// $("#modal_p_terms_of_use").modal();
	$("title").text(title());
	load_p_patient_and_drug();
	load_dose_unit();
	// ------------------------- function -------------------------//
	// ----------------- frm_mode ------------------
	// 1 add();
	// 2 update();
	//
	// ---------------------------------------------
	$("#t_frequency_chk").change(function() {
	    if(this.checked) {
	    	$("#t_frequency").prop('disabled', false);
	    }
	});
	$(document).on('keypress',function(e) {
	    if(e.which == 13) {
	        if($("#frm_mode").val()==2){
	    		update();
	    	}else if($("#frm_mode").val()==1){
	    		add();
	    	}
	    }
	});
	function func_search(){
		clear_input();
		load_p_drug($("#txt_search").val(),tmp_page);
	}
	$("#frm_search_drug").submit(function( event ) {
		// console.log("frm_search_drug");
	  func_search();
	  event.preventDefault();
	});
	function open_add(){
		clear_input();
		let txt=`<button id="btn_save" onclick="add()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-save fa-1x"></i> บันทึก</button>`;
		let button=`<button id="btn_save" onclick="add()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-save fa-1x"></i> บันทึก</button>`;
		$("#drug_data").html('');
		$("#drug_expire").html('');
		$("#mng").html(txt);
		$("#modal_p_terms_of_use_foot_2").html(button);
	}

	function clear_input(){

		$("#t_food").prop('checked', false);
		$("#t_morning").prop('checked', false);
		$("#t_midday").prop('checked', false);
		$("#t_evening").prop('checked', false);
		$("#t_befor_bed").prop('checked', false);
		$("#t_when_symptoms").prop('checked', false);
		$("#t_frequency_chk").prop('checked', false);
		$("#t_frequency").prop('disabled', true);
		$("#t_frequency").val('');
		$("#t_dose").val('');
		$("#t_dose_unit").val('');
		$("#modal_p_terms_of_use_foot_2").html();

		
		// $("#frm_p_patient").removeClass("was-validated");
	}
	function add_drug(d_id,d_name){
		$("#modal_p_terms_of_use").modal('toggle');
		$("#modal_p_terms_of_use_2").modal('toggle');
		drug_id=d_id;
		load_dose_unit();
		patient_id=<?=$_GET['sh_patient_detail']?>;
	}	
	function add(){
		$("#msg").html("");

			let f_data=new FormData();
			let data = $("#frm_p_terms_of_use_2").serializeArray();
			$.each(data,(key,val)=>{
				f_data.append(val.name,val.value);
			});
			f_data.append("p_id",patient_id);
			f_data.append("d_id",drug_id);
			f_data.append("p_terms_of_use",true);
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
					// $("#modal_p_terms_of_use").modal('toggle');
					$("#modal_p_terms_of_use_2").modal('toggle');
					load_p_patient_and_drug();
					load_p_patient();
					clear_input();
				}else{
					$("#msg").html("<div style='color:#bd4646'>"+data.msg+"</div>");
				}	 				
	 		});
	}	
	function load_p_drug(filter,page){
			let txt;
			tmp_filter=filter;
			$("#loading").show();
			$.ajax({
				type:"POST",
				url:link,
				data:{
					"load_p_drug":true,
					"filter":filter,
					"page":page
				}
			}).done((res)=>{
				var data=JSON.parse(res);
				if(!data.msg){
					$.each(data,(i, item)=>{
						let css=`style="background-color:#98afc9;color:#fff"`;
						let row=(page==1?parseInt(i)+1:(parseInt(i)+1)+(page-1)*10);
						let limit_word="";
						for(i=0;i<20;i++){
							if(i>=item.d_name.length){break;}
							limit_word+=item.d_name[i];
							if(i==19){limit_word+="...";}
						}
							
						
						txt+=`<tr ${css}>
					        <td>${item.d_id} ${limit_word} </td>
					        <td><button style="color:#fff" type="button" onclick="add_drug('${item.d_id}','${item.d_name}')" class="btn">
					        	<i class="fas fa-plus-square fa-2x"></i>
				        	</button>`;
					});
				}else{
					txt=`<tr><td colspan='3'>no data</td></tr>`;
				}
				$("#loading").hide();
				$("#p_drug_content").html(txt);
				// set_pagination(filter,page);
			});
	}

	function del(){
			$("#msg").html("");
			$.ajax({
				type:"POST",
				url:link_patient_detail,
				data:{
					"t_id":$("#t_id").val(),
					"del_p_terms_of_use":true
				}
			}).done((res)=>{
				let data=JSON.parse(res);
				if(data.status){
					$("#modal_p_terms_of_use_2").modal('toggle');
					load_p_patient_and_drug();
					load_p_patient();
					clear_input();
				}else{
					$("#msg").html("<div class='col-sm-12' style='color:#bd4646;text-align:center'>"+data.msg+"</div>");
				}

			});
	}
	function load_p_patient_and_drug(filter){
			let dat_param="<?php echo $_GET['sh_patient_detail']?>";
			let txt;
			let row=0;
			filter=dat_param
			tmp_filter=filter;
			$("#loading").show();
			$.ajax({
				type:"POST",
				url:link_patient_detail,
				data:{
					"load_p_patient_and_drug":true,
					"filter":filter,
				}
			}).done((res)=>{
				var data=JSON.parse(res);
				if(!data.msg){
					// console.log(data);
					$.each(data,(i, item)=>{
						row++;
						let limit_word="";
						for(i=0;i<20;i++){
							if(i>=item.d_name.length){break;}
							limit_word+=item.d_name[i];
							if(i==19){limit_word+="...";}
						}
						let css=(item.t_print_stage==0?`style="background-color:#a75454;color:#fff;cursor: pointer;"`:`style="background-color:#7ec282;;color:#fff;cursor: pointer;"`);
						
						txt+=`<tr ${css} onclick="sh_data('${item.t_id}','2')">
							<td>${row}</td>
					        <td>${limit_word} </td>`;
					});
				}else{
					txt=`<tr><td colspan='3'>no data</td></tr>`;
				}
				$("#p_drug").html(txt);
				$("#loading").hide();
			});
	}
	function cv_print_page(p_name,d_des,d_name,d_info,txt_food,text_drug,drug_expire,t_dose,t_dose_unit,t_id,p_id){
		$("#modal_p_terms_of_use_2").modal('toggle');
		let export_date=chk_date(`<?php echo date("Y-m-d");?>`);
		let nfc_data="";
		if(d_des!=""){nfc_data+=`<input type="hidden" name="d_des" id="d_des" value="${d_des}">`;}
		if(d_info!=""){nfc_data+=`<input type="hidden" name="d_info" id="d_info" value="${d_info}">`;}
		if(txt_food!="" && txt_food!="ไม่ระบุ"){nfc_data+=`<input type="hidden" name="txt_food" id="txt_food" value="ช่วงใช้ยา ${txt_food}">`;}
		if(text_drug!=""){nfc_data+=`<input type="hidden" name="text_drug" id="text_drug" value="เวลาการใช้ยา ${text_drug}">`;}
		if(t_dose!=""){nfc_data+=`<input type="hidden" name="t_dose" id="t_dose" value="ใช้ยา ครั้งละ ${t_dose} ${t_dose_unit}">`;}
		if(drug_expire!=""){nfc_data+=`<input type="hidden" name="drug_expire" id="drug_expire" value="วันหมดอายุ ${drug_expire}">`;}
		var print_page=`
			<div style="width:50%;font-size:12px;font-weight: static;" id="print_label">
			<form id="print_stage" enctype="multipart/form-data">
				<input type="hidden" name="t_id" value="${t_id}">
			</form>
			<form id="print_nfc" enctype="multipart/form-data" >
				<input type="hidden" name="p_name" id="p_name" value="${p_name}">
				${nfc_data}				
			</form>
						<div class="col-md-12 mb-12" style="margin-top:0px" style="margin-top:-5px" id="drug_data">
							<div class="form-group row">
							<label for="" class="col-sm-4 col-form-label">ชื่อ</label>
							    <div class="col-sm-8" style="margin-top:6px">
							    	${p_name} ${p_id}
							    </div>
							</div>
						</div>
						<div class="col-md-12 mb-12" style="margin-top:-20px" id="drug_data">
							<div class="form-group row">
							    <label for="" class="col-sm-4 col-form-label">คำอธิบายการใช้ยา</label>
							    <div class="col-sm-8" style="margin-top:6px">
							      	${d_des}
							    </div>
							</div>
						</div>
						<div class="col-md-12 mb-12" style="margin-top:-20px" id="drug_data">
							<div class="form-group row">
							    <label for="" class="col-sm-4 col-form-label">สรรพคุณ</label>
							    <div class="col-sm-8" style="margin-top:6px">
							      	${d_info}
							    </div>
							</div>
						</div>
					    <div class="col-md-12 mb-12" style="margin-top:-20px">
						    <div class="form-group row">
							    <label for="" class="col-sm-4 col-form-label">มื้ออาหาร </label>
							    <div class="col-sm-8" style="margin-top:6px">
							    	${txt_food}
							    </div>
							</div>
	                    </div>
	                    <div class="col-md-12 mb-12" style="margin-top:-20px">
						    <div class="form-group row">
							    <label for="" class="col-sm-4 col-form-label">ช่วงเวลาการใช้ยา</label>
							    <div class="col-sm-8" style="margin-top:6px">
							    	 ${text_drug}
							    </div>
							</div>
	                    </div>
	                    <div class="col-md-12 mb-12" style="margin-top:-20px">
	                    	
							    <div class="form-group row">
								    <label for="" class="col-sm-4 col-form-label">ขนาดการใช้ยา</label>
								    <div class="col-sm-8" style="margin-top:6px">
								    	 ครั้งละ ${t_dose} ${t_dose_unit} 
								    </div>
								</div>
		                   
	                    </div>
	                    <div class="col-md-12 mb-12" style="margin-top:0px" style="margin-top:-5px" id="drug_data">
							<div class="form-group row">
							    <label for="" class="col-sm-4 col-form-label">ยา</label>
							    <div class="col-sm-8" style="margin-top:6px">
							    	${d_name}
							    </div>
							</div>
						</div>
						<div class="col-md-12 mb-12" style="margin-top:-20px">
	                    	
							    <div class="form-group row">
								    <label for="" class="col-sm-4 col-form-label">วันจ่ายยา</label>
								    <div class="col-sm-8" style="margin-top:6px">
								    	 ${export_date}  
								    </div>
								</div>
		                    
	                    </div>
	                    <div class="col-md-12 mb-12" style="margin-top:-20px">
	                    	
							    <div class="form-group row">
								    <label for="" class="col-sm-4 col-form-label">วันหมดอายุ</label>
								    <div class="col-sm-8" style="margin-top:6px">
								    	 ${drug_expire}  
								    </div>
								</div>
		                    
	                    </div>
	        </div>
	        
	        

		`;
		// set_print_txt(print_page);
		sessionStorage.setItem("print_page", print_page);
		// console.log(get_print_txt());
		var print_view = window.open("./views/t_print.php");

	}
	function sh_data(t_id,mode){
		clear_input();
		load_dose_unit();
		let text_drug="";
		let txt_food;
		let filter=t_id;
		let drug_name;
		let drug_expire;

		let button="";

		
			$.ajax({
				type:"POST",
				url:link_patient_detail,
				data:{
					"select_drug_detail":true,
					"filter":filter
				}
			}).done((res)=>{
				var data=JSON.parse(res);
				
				if(!data.msg){
					// console.log(data);

					$.each(data,(i, item)=>{

						if(item.t_food==1){
							txt_food="ก่อนอาหาร";
						}else if(item.t_food==2){
							txt_food="หลังอาหาร";
						}else{
							txt_food="ไม่ระบุ";
						}
						let d_des=(item.d_description!=null?item.d_description:"");
						let d_in=(item.d_info!=null?item.d_info:"");
						drug_name=`	<h3>${item.d_name}</h3><p>
									<span>${d_des}</span><br>
									<span>${d_in}</span><br>
									<hr>
						`;

						drug_expire=`<hr><span>วันหมดอายุ ${chk_date(item.d_expire)}</span>`;
						if(item.t_when_symptoms==1){
							text_drug+=" เมื่อมีอาการ "
							$("#t_when_symptoms").prop('checked', true);
						}
						if(item.t_morning==1){
							text_drug+=" เช้า "
							$("#t_morning").prop('checked', true);}
						if(item.t_midday==1){
							text_drug+=" กลางวัน "
							$("#t_midday").prop('checked', true);}
						if(item.t_evening==1){
							text_drug+=" เย็น "
							$("#t_evening").prop('checked', true);}
						if(item.t_befor_bed==1){
							text_drug+=" ก่อนนอน "
							$("#t_befor_bed").prop('checked', true);}
						if(item.t_frequency!=0){
							$("#t_frequency_chk").prop('checked', true);
							$("#t_frequency").prop('disabled', false);
							$("#t_frequency").val(item.t_frequency);
							text_drug+=` ทุกๆ  ${item.t_frequency} ชั่วโมง`;
						}
						$("input[name=t_food][value="+item.t_food+"]").prop('checked', true);

						$("#t_dose").val(item.t_dose);
						let str_select="#t_dose_unit option[value="+item.t_dose_unit+"]";

						// console.log(str_select);

						$(str_select).attr('selected','selected');
						$("#t_id").val(item.t_id);
						if(mode==2){
							button=`
							<button id="btn_del" onclick="del()" type="button" class="btn btn-danger" data-dismiss=""><i class="fas fa-trash-alt fa-1x"></i> ลบ</button>
							<button id="btn_print" onclick="cv_print_page('${item.p_name} ${item.p_lname}','${d_des}','${item.d_name}','${d_in}','${txt_food}','${text_drug}','${chk_date(item.d_expire)}','${item.t_dose}','${item.du_name}','${item.t_id}','${item.p_id}')" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-print fa-1x"></i> พิมพ์</button>`;
						}else{
							button=`<button id="btn_save" onclick="add()" type="button" class="btn btn-success" data-dismiss=""><i class="fas fa-save fa-1x"></i> บันทึก</button>`;
						}
						
					});
				}
				// console.log(text_drug);
				
				$("#drug_data").html(drug_name);
				$("#drug_expire").html(drug_expire);
				$("#modal_p_terms_of_use_foot_2").html(button);
				$("#modal_p_terms_of_use_2").modal('toggle');
			});
	}
	function load_p_patient(filter,page){
			let dat_param="<?php echo $_GET['sh_patient_detail']?>";
			let txt;
			filter=dat_param
			tmp_filter=filter;
			$("#loading").show();
			$.ajax({
				type:"POST",
				url:link,
				data:{
					"load_p_patient_detail":true,
					"filter":filter,
					"page":page
				}
			}).done((res)=>{
				var data=JSON.parse(res);
				if(!data.msg){
					// console.log(data);
					$.each(data,(i, item)=>{
						let css=`style="background-color:#98afc9;color:#fff"`;
						let row=(page==1?parseInt(i)+1:(parseInt(i)+1)+(page-1)*10);
						$("#p_id_sh").val(item.p_id);
						$("#p_name").val(item.p_name);
						$("#p_lname").val(item.p_lname);
						$("#p_weight").val(item.p_weight);
						$("#p_height").val(item.p_height);
						$("#p_age").val(item.p_age);
						
						$("#p_blood").val(item.p_blood);

						if(item.p_gender=="M"){
							$("#p_gender_m").prop('checked', true);
							$("#p_gender_w").prop('disabled', true);
						}
						else{
							$("#p_gender_w").prop('checked', true);
							$("#p_gender_m").prop('disabled', true);
						}

						if(item.p_blood=="A"){
							$("#p_blood_a").prop('checked', true);
							$("#p_blood_b").prop('disabled', true);
							$("#p_blood_o").prop('disabled', true);
							$("#p_blood_ab").prop('disabled', true);
						}
						else if(item.p_blood=="B"){
							$("#p_blood_b").prop('checked', true);
							$("#p_blood_a").prop('disabled', true);
							$("#p_blood_o").prop('disabled', true);
							$("#p_blood_ab").prop('disabled', true);
						}
						else if(item.p_blood=="O"){
							$("#p_blood_o").prop('checked', true);
							$("#p_blood_b").prop('disabled', true);
							$("#p_blood_a").prop('disabled', true);
							$("#p_blood_ab").prop('disabled', true);
						}
						else if(item.p_blood=="AB"){
							$("#p_blood_ab").prop('checked', true);
							$("#p_blood_b").prop('disabled', true);
							$("#p_blood_o").prop('disabled', true);
							$("#p_blood_a").prop('disabled', true);
						}
					});
				}else{
					txt=`<tr><td colspan='3'>no data</td></tr>`;
				}

				$("#loading").hide();
				$("#p_patient_content").html(txt);
				// set_pagination(filter,page);
			});
	}
	function load_dose_unit(){
		let txt="";
			$("#loading").show();
			$.ajax({
				type:"POST",
				url:global_link+"dose_unit.php",
				data:{
					"load_dose_unit":true,
				}
			}).done((res)=>{
				var data=JSON.parse(res);
				if(!data.msg){
					// console.log(data);
					$.each(data,(i, item)=>{
						txt+=`<option value="${item.t_dose_unit}">${item.du_name }</option>`
					});
				}else{
					txt=`<tr><td colspan='3'>no data</td></tr>`;
				}

				$("#loading").hide();
				$("#t_dose_unit ").html(txt);
				// set_pagination(filter,page);
			});
	}

</script>


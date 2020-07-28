<div id="mySidenav" class="sidenav" style="">
<!-- 	<form class="form-inline">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
	      </div>
	      <input type="text" class="form-control" placeholder="ค้นหา" aria-label="Username" aria-describedby="basic-addon1">
	    </div>
	</form> -->
	<!-- <hr style="background-color: #fff"/> -->
		<div id="user">
		</div>
	  	<div id="default_menu_box">
		</div>
	  	<div id="mng_menu_box">
		</div>
</div>
<nav style="background-color: #49647e" class="navbar navbar-expand-md bg-cyan navbar-dark fixed-top">

	<button class="cv_ico-toggle" type="button" onclick="openNav()" >
		<i style="color:#fff" class="fas fa-align-justify"></i>
  	</button>
	<a class="navbar-brand" href="?"><i class="fas fa-pills"></i> Drug Tag Set</a>
	<ul class="navbar-nav mr-auto">

	</ul>
	
	<!-- <div id="log"><a style="font-size:14px" class="navbar-brand" href="?login"><i class="fas fa-sign-in-alt"></i> login</a></div> -->
  	
</nav>
<script>
let stg=0;
var link="http://localhost/nfc_data/call_controller/api.php";
load_menu();

function openNav() {
    stg++;
    if(stg%2==1){
    	document.getElementById("mySidenav").style.width = "250px";
    }else{
    	document.getElementById("mySidenav").style.width = "0";
    }
  
}
$("#logout").click(()=>{
	sessionStorage.removeItem("id");
	sessionStorage.removeItem("name");
	sessionStorage.removeItem("lname");
	sessionStorage.removeItem("u_status");
	window.location.href=weblink;
});
function load_menu(){
	let user=`<a href="#"><i class="fas fa-user"></i> ${sessionStorage.getItem("name")+" "+sessionStorage.getItem("lname")}</a>
	<hr style="background-color: #fff"/>`;
	let logout=`<a style="font-size:14px" class="navbar-brand" href="#" id="logout"><i class="fas fa-sign-out-alt"></i> logout</a>`;
	let default_menu=`<i/>`;
	// $.ajax({
	// 	type:"POST",
	// 	data:"load_p_type",
	// 	url:link
	// }).done((res)=>{
	// 	let data=JSON.parse(res);
	// 	$.each(data,(i, item)=>{
		default_menu+=`<a href="?nfc_p_drug"><i class="fas fa-store-alt"></i> ข้อมูลยา</a>`;
		default_menu+=`<a href="?nfc_p_patient"><i class="fas fa-user-injured"></i> ข้อมูลผู้ป่วย</a>`;
		default_menu+=`<a href="?import_drug_tmt"><i class="fas fa-file-upload"></i> นำเข้าข้อมูลยา</a>`;
		default_menu+=`<hr><a href="?nfc_p_staff"><i class="fas fa-users"></i> ข้อมูลเจ้าหน้าที่</a>`;
		// });
		
		$("#default_menu_box").html(default_menu);
		
	// });
	// let txt=`<i/>`;
	// if(sessionStorage.getItem("u_status")=="admin"){
	// 	txt+=`	<hr style="background-color: #fff"/>
	// 			<a href="?p_product"><i class="fab fa-product-hunt"></i> จัดการสินค้า</a>
	// 			<a href="?store_type"><i class="fas fa-folder"></i> จัดการประเภทร้านค้า</a>
	// 			<a href="?p_store"><i class="fas fa-store"></i> จัดการร้านค้า</a>
	// 			<a href="?p_type"><i class="fas fa-folder"></i> จัดการประเภทสินค้า</a>
	// 			<a href="?p_users"><i class="fas fa-users"></i> จัดการผู้คน</a>
	// 		`;
	
	
	// }else if(sessionStorage.getItem("u_status")=="2"){
	// 	txt+=`	<hr style="background-color: #fff"/>
	// 			<a href="?p_product"><i class="fab fa-product-hunt"></i> จัดการสินค้า</a>	
	// 		`;
	// }
	// $("#mng_menu_box").html(txt);
	// if(sessionStorage.getItem("u_status")=="admin" || sessionStorage.getItem("u_status")=="1" || sessionStorage.getItem("u_status")=="2"){
	// 	$("#log").html(logout);
	// 	$("#user").html(user);
	// }
	
}

</script>
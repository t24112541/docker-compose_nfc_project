<?php
session_start();
ob_start();
// $_SESSION['u_id']=1010101;
// session_destroy();
	require_once("../db/controller.php");
	if(getenv('DEV')=="production"){
        $db=new controller(getenv('MYSQL_HOST'),getenv('MYSQL_USER'),getenv('MYSQL_ROOT_PASSWORD'),getenv('MYSQL_DATABASE'));
    }else{
        $db=new controller("localhost","root","","nfc_dts");
    }
	$perpage=10;

	if(isset($_POST['load_dose_unit'])){
		if(isset($_POST['page'])){
			$page=$_POST['page'];
		}else{
			$page=1;
		} 
		$start=($page-1)*$perpage;
		if(isset($_POST['filter']) && $_POST['filter']!=""){
			$option="where t_dose_unit = '{$_POST['filter']}' || du_name like '%{$_POST['filter']}%'";
		}else{
			$option="limit {$start},{$perpage}";
		}

		echo $db->select("dose_unit","*",$option);
	}else if(isset($_POST['p_terms_of_use'])){
			// echo "ok";
			$fields="";
			$data="";

			$fields_convert="";
			$data_convert="";
			foreach ($_POST as $key => $value) {
				if($key!="p_terms_of_use" && $value!="" && $key!="t_frequency_chk"){
					$fields.="$key,";
					$data.="\"{$value}\",";
					// echo $key." ".$value."<br>";
				}
			}
			for($i=0;$i<strlen($fields)-1;$i++){
				$fields_convert.= $fields[$i];
			}
			for($i=0;$i<strlen($data)-1;$i++){
				$data_convert.= $data[$i];
			}
			// echo $fields_convert."<br>";
			// echo $data_convert;
			echo $db->insert("p_terms_of_use",$fields_convert,$data_convert);

	}else if(isset($_POST['dose_unit_add'])){
			// echo "ok";
			$fields="";
			$data="";

			$fields_convert="";
			$data_convert="";
			foreach ($_POST as $key => $value) {
				if($key!="dose_unit_add" && $value!="" && $key!="t_frequency_chk"){
					$fields.="$key,";
					$data.="\"{$value}\",";
					// echo $key." ".$value."<br>";
				}
			}
			for($i=0;$i<strlen($fields)-1;$i++){
				$fields_convert.= $fields[$i];
			}
			for($i=0;$i<strlen($data)-1;$i++){
				$data_convert.= $data[$i];
			}
			echo $db->insert("dose_unit",$fields_convert,$data_convert);

	}
	else if(isset($_POST['dose_unit_del'])){
		echo $db->delete("dose_unit","t_dose_unit='{$_POST['t_dose_unit']}'");
		
	}else if(isset($_POST['dose_unit_update'])){
		echo $db->update("dose_unit","du_name='{$_POST['du_name']}'","t_dose_unit ='{$_POST['t_dose_unit']}'");
	}else if(isset($_POST['set_pagination_dose_unit'])){
		if(isset($_POST['filter']) && $_POST['filter']!=""){
			$where="where t_dose_unit = '{$_POST['filter']}' || du_name like '%{$_POST['filter']}%' ";
		}else{
			$where="where 1 ";
		}

		
		// $db->count_rows("p_drug","*",$where);

		$total_page=ceil($db->count_rows("dose_unit","*",$where)/$perpage);
		echo json_encode($total_page);
	}

	

?>
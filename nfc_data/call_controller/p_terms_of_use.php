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

	if(isset($_POST['load_p_patient_and_drug'])){
		if(isset($_POST['page'])){
			$page=$_POST['page'];
		}else{
			$page=1;
		} 
		$start=($page-1)*$perpage;
		if(isset($_POST['filter']) && $_POST['filter']!=""){
			$option="where p_terms_of_use.p_id = p_patient.p_id && p_patient.p_id = '{$_POST['filter']}' && p_drug.d_id = p_terms_of_use.d_id";
		}else{
			$option="where p_terms_of_use.p_id = p_patient.p_id && p_patient.p_id = '{$_POST['filter']}' && p_drug.d_id = p_terms_of_use.d_id limit {$start},{$perpage}";
		}

		echo $db->select("p_patient,p_terms_of_use,p_drug","*",$option);
	}else if(isset($_POST['select_drug_detail'])){
		if(isset($_POST['page'])){
			$page=$_POST['page'];
		}else{
			$page=1;
		} 
		$start=($page-1)*$perpage;
		if(isset($_POST['filter']) && $_POST['filter']!=""){
			$option="where p_terms_of_use.p_id = p_patient.p_id && p_terms_of_use.t_id = '{$_POST['filter']}' && p_drug.d_id = p_terms_of_use.d_id";
		}else{
			$option="where p_terms_of_use.p_id = p_patient.p_id && p_patient.p_id = '{$_POST['filter']}' && p_drug.d_id = p_terms_of_use.d_id limit {$start},{$perpage}";
		}

		echo $db->select("p_patient,p_terms_of_use,p_drug","*",$option);
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

	}else if(isset($_POST['del_p_terms_of_use'])){
		echo $db->delete("p_terms_of_use","t_id='{$_POST['t_id']}'");
		
	}

	

?>
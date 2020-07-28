<?php 
ob_start();
class controller{
	private $conn;
	function __construct($host,$user,$pass,$db){
		// error_reporting(0);
		$con;
		$con=new mysqli($host,$user,$pass,$db);
		if(!$con){echo "connect error: ".$con->connect_error;}
		else{$con->set_charset("utf8");$this->conn=$con;date_default_timezone_set("Asia/Bangkok");}

	}
	function chk_session(){
		if(isset($_SESSION['u_id'])){
			$res=[
				"status"=>1,
			];
		}else{
			$res=[
				"status"=>0,
				"msg"=>"not login",
			];
		}
		return json_encode($res);
	}
	function chk_connect(){
		if($this->conn->connect_error){
			$res=[
				"status"=>0,
				"msg"=>"connect error: ".$this->conn->connect_error,
			];
		}else{
			$res=[
				"status"=>1
			];
		}
		return json_encode($res);
	}
	function login($user,$pass){

			$que=$this->conn->query("select * from p_staff where s_uname='{$user}' && s_passwd='{$pass}'");
			if($que->num_rows==1){
				$sh=$que->fetch_assoc();

				$res=[
					"status"=>1,
					"auth"=>1,
					"nfc_usr"=>$sh['s_id'],

				];
				
			}else{
				$res=[
					"status"=>0,
					"msg"=>"ไม่พบ username password ดังกล่าว"
				];
			}		
		return json_encode($res);
	}
	function regist($data){
		$field="";$i=0;$val="";

		foreach ($data as $key => $value) {
			$field.=$key;
			if($key=="u_password"){
				$val.="'".$this->re_encode($value)."'";
			}else{
				$val.="'".$value."'";
			}
			if($i!=count($data)-1){$field.=",";$val.=",";}
			$i++;
		}

		return $this->insert("p_staff",$field,$val);
	}
	function insert($table,$field,$val){
		$que=$this->conn->query("insert into $table ({$field}) values ({$val})");
		if(!$que){
			$res=[
				"msg"=>"error : ".$this->conn->error,
				"status"=>0
			];
		}else{
			$res=[
				"msg"=>"success",
				"status"=>1,
				"last_id"=>$this->conn->insert_id
			];
		}return json_encode($res);

	}
	function update($table,$val,$where){
		// echo "update $table set $val where $where";

		$que=$this->conn->query("update $table set $val where $where");
		if(!$que){
			$res=[
				"msg"=>"error : ".$this->conn->error,
				"status"=>0
			];
		}else{
			$res=[
				"msg"=>"success",
				"status"=>1
			];
		}return json_encode($res);

	}
	function delete($table,$where){
		$que=$this->conn->query("delete from $table where $where");
		if(!$que){
			$res=[
				"msg"=>"error : ".$this->conn->error,
				"status"=>0
			];
		}else{
			$res=[
				"msg"=>"success",
				"status"=>1
			];
		}return json_encode($res);

	}
	function select($table,$select,$where){
		$data=[];
		// echo "select $select from $table $where";
		$que=$this->conn->query("select $select from $table $where");
		if($que->num_rows!=0){
			foreach ($que as $key => $value) {
				$data[$key]=$value;
			}
		}else{
			$data['msg']="null";
		}
		
		return json_encode($data);
	}
	function count_rows($table,$select,$where){
		$que=$this->conn->query("select $select from $table $where");
		return $que->num_rows;
	}
	function re_encode($pass){
		$val=md5($pass);
		$sub=4;
		$txt=[];
		$count=0;
		$encode="";
		$submd5=(strlen($val)/$sub);

		for($i=0;$i<strlen($val);$i++){
			if($i%$submd5==0){$count++;}
			$txt[$count].=($val[$i]);
		}
		foreach ($txt as $key => $value) {
			// echo $key." ".md5($value)."<br>";
			$encode.=md5($value);
		}
		return $encode;
	}
	function get_arr($data){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}
	// $db=new controller("localhost","root","","project_php");
	// echo $db->rand_token();
?>
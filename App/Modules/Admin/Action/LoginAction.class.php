<?php
	Class LoginAction extends Action {
		Public function index() {
			$this->display();
		}
		Public function logHandler() {
			if(!IS_POST) halt("页面不存在！");
			$db=M("login");
			if($data=$db->where(array("username"=>$_POST['username']))->find()){
				if($data['password']==$_POST['p']){
					$this->success("登陆成功!",U(GROUP_NAME."/Index/index"));
					session("uid",$data["id"]);
					session("user",$data["username"]);
					session("loginip",$data['loginip']);
					session("logintime",$data['logintime']);
					$newData=array(
						"id"=>$data['id']
						,"loginip"=>get_client_ip()
						,"logintime"=>time()
					);
					$dat=$db->save($newData) or die("存入数据失败");
					
				}else{
					$this->error("密码不正确!");
				}
			}else{
				$this->error("用户不存在!");
			}
		}
		
		Public function regHandler() {
			if(!IS_POST) halt("页面不存在！");
			$db=M("login");
			if(!$db->where(array("username"=>$_POST['user']))->find()){
				
			}
		}
		Public function verify(){
			import("Class.Image",APP_PATH);
		}
	}
?>
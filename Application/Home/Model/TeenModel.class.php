<?php
namespace Home\Model;
use Think\Model;
class TeenModel extends Model {

	protected $_validate = array(

		//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		
		array ('name',	'require',	'请输入：用户名', 1,''),
		array ('pwd',	'require',	'请输入密码'	,1,''),
		array ('pwd',	'6,12',	'密码长度需在6-20个字符',	1,	'length'),
		array ('phone',	'is_numeric',	'电话需要数字', 1, 'function'),
		array ('phone',	'13',	'电话长度需要13位',	1,	'length'),
		array ('email',	'6,20',	'邮箱长度需要6-20位长度', 1	,'length'),


);
		/*array ('phone',	'11',			'手机号必需为11位数字', 2,	'length'),

		array ('qq',	'is_numeric',	'QQ号码必需为纯数字', 	2,	'function'),
		array ('qq',	'5,12',			'QQ号必需为5-12位数字', 2,	'length'),

		array ('postcode','is_numeric',	'邮码必需为纯数字',	 	2,	'function'),
		array ('postcode',	'6',		'邮码必需为6位数字', 	2,	'length'),


		array ('id',	'require',	'请输入：用户名 / 邮箱 / 手机号',	1,	'',	'log'),
		array ('pw',	'require',	'请输入：密码',						1,	'',	'log'),
		array ('pw',	'6,20',		'密码长度需在6-20个字符',	1,	'length',	'log'),


		array ('title',	'require',	'请输入：用户名',			1,	'',			'reg'),
		array ('title',	'2,100',	'用户名长度需在2-10个字符',	1,	'length',	'reg'),
		array ('pw',	'require',	'请输入：密码',				1,	'',			'reg'),
		array ('pw',	'6,20',		'密码长度需在6-20个字符',	1,	'length',	'reg'),
		array ('pw2',	'require',	'请输入：确认密码',			1,	'',			'reg'),
		array ('pw2',	'pw',		'确认密码不正确',			1,	'confirm',	'reg'),
		array ('title',	'',			'用户名已存在',				1,	'unique',	'reg'),


		array ('title',	'require',	'请输入：用户名',			1,	'',			'add'),
		array ('pw',	'require',	'请输入：密码',				1,	'',			'add'),
		array ('pw',	'6,20',		'密码长度需在6-20个字符',	1,	'length',	'add'),
		array ('title',	'',			'用户名已存在',				1,	'unique',	'add'),


		array ('title',	'require',	'请输入：用户名',			1,	'',			'change_u_title'),
		array ('title',	'2,10',		'用户名长度需在2-10个字符',	1,	'length',	'change_u_title'),
		array ('title',	'',			'用户名已存在',				1,	'unique',	'change_u_title'),

		array ('nickname',	'require',	'请输入：昵称',				1,	'',			'change_u_nickname'),
		array ('nickname',	'2,10',		'昵称长度需在2-10个字符',	1,	'length',	'change_u_nickname'),

		array ('email',	'require',	'请输入：邮箱',				1,	'',	'change_email_send'),
		array ('email',	'email',	'邮箱格式不正确',			1,	'',	'change_email_send'),


		array ('id',	'require',	'缺少id',					1,	'',	'change_email_save'),
		array ('key',	'require',	'缺少key',					1,	'',	'change_email_save'),
		array ('key',	'16',		'key必需为16位',	1,	'length',	'change_email_save'),
		array ('email',	'require',	'缺少email',				1,	'',	'change_email_save'),
		array ('email',	'email',	'邮箱格式不正确',			1,	'',	'change_email_save'),

		// array ('email',	'',			'Email已被注册',	1,	'unique',	'change_email'),


		array ('pw0',	'require',	'请输入：原密码',			1,	'',			'change_pw'),
		array ('pw',	'require',	'请输入：新密码',			1,	'',			'change_pw'),
		array ('pw',	'6,20',		'密码长度需在6-20个字符',	1,	'length',	'change_pw'),
		array ('pw2',	'require',	'请输入：确认密码',			1,	'',			'change_pw'),
		array ('pw2',	'pw',		'确认密码不正确',			1,	'confirm',	'change_pw'),
	);
	
	protected $_auto = array(
		
		array ('add_time',	'time',		self::MODEL_INSERT,	'function'),
		array ('log_time',	'time',		self::MODEL_INSERT,	'function'),

		//默认值
		array ('country',	'country',	self::MODEL_BOTH,	'callback'),
		array ('province',	'province',	self::MODEL_BOTH,	'callback'),
		array ('city',		'city',		self::MODEL_BOTH,	'callback'),

		//保护
		array ('pw',		NULL,	self::MODEL_UPDATE	),
		// array ('cando',		NULL,	self::MODEL_BOTH	),
	);

	function country(){
		if($_POST['country'] == '国家'){
			return '';
		}else{
			return $_POST['country'];
		}
	}
	function province(){
		if($_POST['province'] == '省份'){
			return '';
		}else{
			return $_POST['province'];
		}
	}
	function city(){
		if($_POST['city'] == '城市'){
			return '';
		}else{
			return $_POST['city'];
		}
	}
	function area(){
		if($_POST['area'] == '区域'){
			return '';
		}else{
			return $_POST['area'];
		}
	}*/
/*	function ok(){
		$key = I('id') . I('pw');
		return $key = substr(md5($key), 8, 16);
	}
	function ip(){
		$this->_ip = json_decode(file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=' . $_SERVER['REMOTE_ADDR']), 1);
		return $_SERVER['REMOTE_ADDR'];
	}
	function ipr(){
		return $this->_ip['data']['region'];
	}
	function ipc(){
		return $this->_ip['data']['city'];
	}
	function ipa(){
		return $this->_ip['data']['county'];
	}*/
	//激活
/*	protected $_active = '';

	function search('title|email|phone'){

		$o = M('u');

		$o->where("enable = 1 AND ( title = '$id' OR email = '$id' OR phone = '$id')");
		$o->find();

		$r = $o->select();
		dump($r);
	}*/
}
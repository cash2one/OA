<?php

/**
* 行政处罚(罚款)
*
* @author 自动生成的实体类
* @copyright (c) 2015, 星密码集团
* @version 1.0
*/

namespace Models;

$GLOBALS['/Models/A_Penalty.php'] = 1;

use Models\Base\Model;

class A_Penalty extends Model{

	public static $field_id;
	public static $field_userid;
	public static $field_username;
	public static $field_dept1_id;
	public static $field_dept2_id;
	public static $field_money;
	public static $field_reason;
	public static $field_addtime;
	public static $field_status;
	public static $field_penaltyType;
	public static $MODEL_SCHEMA;

	static function init_schema() {
		self::$field_id = Model::define_primary_key('id', 'int', 0, true);
		self::$field_userid = Model::define_field('userid', 'int', 0);
		self::$field_username = Model::define_field('username', 'string', NULL);
		self::$field_dept1_id = Model::define_field('dept1_id', 'int', 0);
		self::$field_dept2_id = Model::define_field('dept2_id', 'int', 0);
		self::$field_money = Model::define_field('money', 'float', 0.00);
		self::$field_reason = Model::define_field('reason', 'string', NULL);
		self::$field_addtime = Model::define_field('addtime', 'datetime', NULL);
		self::$field_status = Model::define_field('status', 'int', 0);
		self::$field_penaltyType = Model::define_field('penaltyType', 'int', 0);
		self::$MODEL_SCHEMA = Model::build_schema('A_Penalty', array(
			self::$field_id,
			self::$field_userid,
			self::$field_username,
			self::$field_dept1_id,
			self::$field_dept2_id,
			self::$field_money,
			self::$field_reason,
			self::$field_addtime,
			self::$field_status,
			self::$field_penaltyType
		));
	}


	public function get_id() {
		return $this->get_field_value(self::$field_id);
	}

	public function set_id($id) {
		$this->set_field_value(self::$field_id, $id);
	}

	public function get_userid() {
		return $this->get_field_value(self::$field_userid);
	}

	public function set_userid($userid) {
		$this->set_field_value(self::$field_userid, $userid);
	}

	public function get_username() {
		return $this->get_field_value(self::$field_username);
	}

	public function set_username($username) {
		$this->set_field_value(self::$field_username, $username);
	}

	public function get_dept1_id() {
		return $this->get_field_value(self::$field_dept1_id);
	}

	public function set_dept1_id($dept1_id) {
		$this->set_field_value(self::$field_dept1_id, $dept1_id);
	}

	public function get_dept2_id() {
		return $this->get_field_value(self::$field_dept2_id);
	}

	public function set_dept2_id($dept2_id) {
		$this->set_field_value(self::$field_dept2_id, $dept2_id);
	}

	public function get_money() {
		return $this->get_field_value(self::$field_money);
	}

	public function set_money($money) {
		$this->set_field_value(self::$field_money, $money);
	}

	public function get_reason() {
		return $this->get_field_value(self::$field_reason);
	}

	public function set_reason($reason) {
		$this->set_field_value(self::$field_reason, $reason);
	}

	public function get_addtime() {
		return $this->get_field_value(self::$field_addtime);
	}

	public function set_addtime($addtime) {
		$this->set_field_value(self::$field_addtime, $addtime);
	}

	public function get_status() {
		return $this->get_field_value(self::$field_status);
	}

	public function set_status($status) {
		$this->set_field_value(self::$field_status, $status);
	}

	public function get_penaltyType() {
		return $this->get_field_value(self::$field_penaltyType);
	}

	public function set_penaltyType($penaltyType) {
		$this->set_field_value(self::$field_penaltyType, $penaltyType);
	}

	public function to_array(array $options = array(), callable $func = NULL) {
		$arr = parent::to_array($options, $func);
		//unset($arr[self::$field_id['name']]);
		//unset($arr[self::$field_userid['name']]);
		//unset($arr[self::$field_username['name']]);
		//unset($arr[self::$field_dept1_id['name']]);
		//unset($arr[self::$field_dept2_id['name']]);
		//unset($arr[self::$field_money['name']]);
		//unset($arr[self::$field_reason['name']]);
		//unset($arr[self::$field_addtime['name']]);
		//unset($arr[self::$field_status['name']]);
		//unset($arr[self::$field_penaltyType['name']]);
		return $arr;
	}

}

A_Penalty::init_schema();

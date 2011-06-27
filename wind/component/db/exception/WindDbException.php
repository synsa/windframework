<?php
Wind::import("WIND:core.exception.WindException");
/**
 * @author Qiong Wu <papa0924@gmail.com>
 * @version $Id$
 * @package 
 */
class WindDbException extends WindException {

	/**
	 * 连接相关的异常
	 * @var unknown_type
	 */
	const DB_CONN_EMPTY = 200;

	const DB_CONN_FORMAT = 201;

	const DB_CONN_NOT_EXIST = 202;

	const DB_CONN_EXIST = 203;

	const DB_CONNECT_NOT_EXIST = 204;
	
	/**
	 * 查讯 相关的异常
	 * @var unknown_type
	 */
	const DB_QUERY_EMPTY = 210;

	const DB_QUERY_LINK_EMPTY = 211;

	const DB_QUERY_FIELD_EMPTY = 212;

	const DB_QUERY_FIELD_EXIST = 213;

	const DB_QUERY_FIELD_FORMAT = 214;

	const DB_QUERY_INSERT_DATA = 215;

	const DB_QUERY_UPDATE_DATA = 216;

	const DB_QUERY_CONDTTION_FORMAT = 217;

	const DB_QUERY_GROUP_MATCH = 218;

	const DB_QUERY_LOGIC_MATCH = 219;

	const DB_QUERY_FETCH_ERROR = 220;

	const DB_QUERY_TRAN_BEGIN = 221;

	const DB_QUERY_COMPARESS_ERROR = 222;

	const DB_QUERY_COMPARESS_EXIST = 223;

	const DB_QUERY_WHERE_ERROR = 224;

	const DB_QUERY_JOIN_TYPE_ERROR = 225;

	/**
	 * 字段异常
	 * @var unknown_type
	 */
	const DB_TABLE_EMPTY = 240;

	const DB_EMPTY = 241;

	const DB_DRIVER_NOT_EXIST = 242;

	const DB_DRIVER_EXIST = 243;

	const DB_BUILDER_NOT_EXIST = 250;

	const DB_BUILDER_EXIST = 251;

	const DB_DRIVER_BUILDER_NOT_MATCH = 252;

	const DB_ADAPTER_NOT_EXIST = 260;

	const DB_ADAPTER_EXIST = 261;

	/**
	 * 重定义异常类型
	 * 
	 * @see WindException::messageMapper()
	 * @param int $code 异常号
	 * @return string   最终输出异常信息的原型
	 */
	protected function messageMapper($code) {
		$messages = array(self::DB_CONN_EMPTY => 'Database configuration is empty. \'$message\' ', 
			self::DB_CONN_FORMAT => 'Database configuration format is incorrect. \'$message\' ', 
			self::DB_CONN_NOT_EXIST => '\'$message\' The identify of the database connection does not exist. ', 
			self::DB_CONN_EXIST => '\'$message\' The identify of the database connection is aleady exist.', 
			self::DB_CONNECT_NOT_EXIST => '\'$message\' The database connection does not exist.', 
			self::DB_QUERY_EMPTY => 'Query is empty. \'$message\'', 
			self::DB_QUERY_LINK_EMPTY => '\'$message\' Query link is not a validate resource.', 
			self::DB_QUERY_FIELD_EMPTY => '\'$message\' Query field is empty.', 
			self::DB_QUERY_FIELD_EXIST => '\'$message\' Query field is not exist.', 
			self::DB_QUERY_FIELD_FORMAT => 'Inside the field in the query not formatted correctly. \'$message\'', 
			self::DB_QUERY_INSERT_DATA => 'The new data is empty. \'$message\'', 
			self::DB_QUERY_UPDATE_DATA => 'The Updated data is empty. \'$message\'', 
			self::DB_QUERY_CONDTTION_FORMAT => 'The conditions of query are not right. \'$message\'', 
			self::DB_QUERY_GROUP_MATCH => '\'$message\' Query group does not match.', 
			self::DB_QUERY_LOGIC_MATCH => '\'$message\' Query logic does not match.', 
			self::DB_QUERY_FETCH_ERROR => 'The wrong way to obtain the result set. \'$message\'', 
			self::DB_QUERY_TRAN_BEGIN => 'Transaction has not started. \'$message\'', 
			self::DB_QUERY_COMPARESS_ERROR => 'Query comparison is incorrect conversion or assembly. \'$message\'', 
			self::DB_QUERY_COMPARESS_EXIST => 'Comparison does not exist query. \'$message\'', 
			self::DB_QUERY_WHERE_ERROR => 'Query where is Error. \'$message\'', 
			self::DB_QUERY_JOIN_TYPE_ERROR => 'The database is wrong type of join query. \'$message\'', 
			self::DB_TABLE_EMPTY => 'Table is empty. \'$message\'', 
			self::DB_EMPTY => 'Database is empty. \'$message\'', 
			self::DB_DRIVER_NOT_EXIST => 'The database driver does not exist. \'$message\'', 
			self::DB_DRIVER_EXIST => 'The database driver is aleady exist. \'$message\'', 
			self::DB_BUILDER_NOT_EXIST => 'The database builder does not exist. \'$message\'', 
			self::DB_BUILDER_EXIST => 'The database builder is aleady exist. \'$message\'', 
			self::DB_ADAPTER_NOT_EXIST => 'The database adapter does not exist. \'$message\'', 
			self::DB_ADAPTER_EXIST => 'The database adapter is aleady exist. \'$message\'', 
			self::DB_DRIVER_BUILDER_NOT_MATCH => '\'$message\' The database driver does not match with the builder. ');
		return isset($messages[$code]) ? $messages[$code] : '$message';
	}
}
?>
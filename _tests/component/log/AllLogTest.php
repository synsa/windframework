<?php
/**
 * @author xiaoxia xu <x_824@sina.com> 2011-1-13
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */

require_once ('component/log/WindDebugTest.php');
require_once ('component/log/WindLoggerTest.php');

class AllLogTest {
	public static function main() {
		PHPUnit_TextUI_TestRunner::run(self::suite());
	}
	
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('WindFramework AllLogTest');
		$suite->addTestSuite('WindDebugTest');
		$suite->addTestSuite('WindLoggerTest');
		return $suite;
	}
}
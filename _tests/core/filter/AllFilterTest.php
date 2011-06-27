<?php
/**
 * @author xiaoxia xu <x_824@sina.com> 2011-1-28
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */

require_once ('core/filter/WindFilterChainTest.php');

class AllFilterTest {
	public static function main() {
		PHPUnit_TestUI_TestRunner::run(self::suite());
	}
	
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('WindFramework AllFilterTest');
		$suite->addTestSuite('WIndFilterChainTest');
		return $suite;
	}
}
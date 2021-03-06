<?php

/**
 *
 * @see http://code.google.com/p/php-console
 * @author Barbushin Sergey http://linkedin.com/in/barbushin
 * @version 1.0
 *
 * @desc Integrates YII with Google Chrome extension PHP Console
 *
 * You need to install Google Chrome extension:
 * https://chrome.google.com/extensions/detail/nfhmhhlpfleoednkpnnnkolmclajemef
 *
 */
class PhpConsoleYiiExtension extends CLogRoute {

	/**
	 * @var bool enable errors handling
	 */
	public $handleErrors = true;

	/**
	 * @var bool enable exceptions handling
	 */
	public $handleExceptions = true;

	/**
	 * @var string base path to strip in errors source paths
	 */
	public $basePathToStrip;

	public $handleSql = true;
	
	public $ipFilters=array('127.0.0.1','::1');

	/**
	 * Initializes the route.
	 * This method is invoked after the route is created by the route manager.
	 */
	public function init() {
		// required for correct PhpConsoleExtension work
		if($this->allowIp(Yii::app()->request->userHostAddress)){
		
			YiiBase::app()->getErrorHandler()->discardOutput = false;
			YiiBase::getLogger()->autoFlush = 1;
	
			// init PHP Console
			require_once(dirname(__FILE__) . '/PhpConsole/PhpConsole.php');
			PhpConsole::$callOldErrorHandler = false;
			PhpConsole::$callOldExceptionsHandler = false;
			
			PhpConsole::start($this->handleErrors, $this->handleExceptions, $this->basePathToStrip);
		}
	}
	
	
	
	protected function allowIp($ip)
    {
        foreach ($this->ipFilters as $filter)
        {
            $filter = trim($filter);
            // normal or incomplete IPv4
            if (preg_match('/^[\d\.]*\*?$/', $filter)) {
                $filter = rtrim($filter, '*');
                if (strncmp($ip, $filter, strlen($filter)) === 0)
                {
                    return true;
                }
            }
            // CIDR
            else if (preg_match('/^([\d\.]+)\/(\d+)$/', $filter, $match))
            {
                if (self::matchIpMask($ip, $match[1], $match[2]))
                {
                    return true;
                }
            }
            // IPv6
            else if ($ip === $filter)
            {
                return true;
            }
        }
        return false;
    }

	/**
	 * Processes log messages and sends them to specific destination.	 *
	 * @param array list of messages.	Each array elements represents one message
	 * with the following structure:
	 * array(
	 *	 [0] => message (string)
	 *	 [1] => level (string)
	 *	 [2] => category (string)
	 *	 [3] => timestamp (float, obtained by microtime(true));
	 */
	protected function processLogs($logs) {
		foreach($logs as $log) {
			if(is_scalar($log[0])) {
				if($log[1] == 'info') {
					PhpConsole::debug($log[0], $log[2]);
				}
				elseif($log[1] == 'warning' || $log[1] == 'error') {
					PhpConsole::debug($log[0], 'error,' . $log[2]);
				}
				elseif($this->handleSql && $log[1] == 'trace' && $log[2] == 'system.db.CDbCommand') {
					
						/*echo '<pre>';
						echo str_replace("Querying SQL:","",$log[0]);
						echo '</pre>';*/
					
				}
			}
		}
		return true;
	}

	/**
	 * Retrieves filtered log messages from logger for further processing.
	 * @param CLogger $logger logger instance
	 * @param boolean $processLogs whether to process the logs after they are collected from the logger
	 */
	public function collectLogs($logger, $processLogs = false) {
		parent::collectLogs($logger, true);
		$this->logs = array();
	}
}
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of participantServer
 *
 * @author Gurutharshan Nadarajah <gurutharshan@gmail.com>
 */

require_once("./core/class.Participant.php");
require_once("./core/class.TransactionManager.php");

$tm = TransactionManager::getInstance();
echo $tm->test();
echo "\n";
echo $tm->test();
echo "\n";
echo $tm->test();
echo "\n";
echo $tm->test();
?>

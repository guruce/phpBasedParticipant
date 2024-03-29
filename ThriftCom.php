<?php

namespace MyNamespace;

/**
 * Include path
 */
$THRIFT_ROOT = 'php/lib';

/**
 * Init Autloader
 */
require_once $THRIFT_ROOT . '/Thrift/ClassLoader/ThriftClassLoader.php';

$loader = new ThriftClassLoader();
$loader->registerNamespace('Thrift', $THRIFT_ROOT);
$loader->registerDefinition('Thrift', $THRIFT_ROOT . '/packages');
$loader->register();

use Thrift\Transport\TPhpStream;
use Thrift\Protocol\TBinaryProtocol;

/**
 * Example of how to build a Thrift server in Apache/PHP
 */

class ServiceHandler implements ServiceIf {
  // Implement your interface and methods here
    
  public function prepare() {
      return \ServiceResponse::prepared;
  }

  public function commit() {
        //to-do commit on participant
        return \ServiceResponse::commited;
  }
  
  public function rollback() {
      return \ServiceResponse::aborted;
  }
    
}

header('Content-Type: application/x-thrift');

$handler = new ServiceHandler();
$processor = new ServiceProcessor($handler);

// Use the TPhpStream transport to read/write directly from HTTP
$transport = new TPhpStream(TPhpStream::MODE_R | TPhpStream::MODE_W);
$protocol = new TBinaryProtocol($transport);

$transport->open();
$processor->process($protocol, $protocol);
$transport->close();

?>
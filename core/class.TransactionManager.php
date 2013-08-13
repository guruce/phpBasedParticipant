<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TransactionManager
 *
 * @author Gurutharshan Nadarajah <gurutharshan@gmail.com>
 */
$global['approot'] = "./";
require_once($global['approot']."class.Transaction.php"); 

class TransactionManager {
    
    private $transactionMap;
    private $currentTransaction;

    /**
     * Call this method to get singleton object.
     *
     * @return UserFactory
     */
    public static function getInstance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new TransactionManager();
        }
        return $inst;
    }

    /**
     * Private constructor so nobody else can instance it.
     *
     */
    private function __construct() {
        $this->transactionMap = array();
    }
    
    /**
     * 
     * @param type $transactionId
     * @return Transaction
     */
    public function getTransaction($transactionId) {
        if(!isset($this->transactionMap[$transactionId]))
            return NULL;
        else 
            return $this->transactionMap[$transactionId];
    }
    
    /**
     * 
     * @param Transaction $transaction
     */
    public function putTransaction(Transaction $transaction) {
        $this->transactionMap[$transaction->getId()] = $transaction;
    }
    
    /**
     * 
     * @param Transaction $transaction
     */
    public function setCurrentTransaction(Transaction $transaction) {
        //TO-Do may have to check current transaction status prior to reset with new one.
        $this->currentTransaction = $transaction;
    }
    
    /**
     * commit current transaction
     */
    public function commit() {
        
    }
    
    /**
     * rollback current transaction
     */
    public function rollback() {
        
    }
    
}

?>

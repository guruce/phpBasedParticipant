<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction
 *
 * @author Gurutharshan Nadarajah <gurutharshan@gmail.com>
 */
class Transaction {
    
    private $id;

    /**
     * 
     * @param type $transactionId
     */
    public function __construct($transactionId) {
        $this->id = $transactionId;
    }

    /**
     * 
     * @return String transactionId
     */
    public function getId() {
        return $this->id;
    }
    
    public function commit() {
        
    }
    
    public function rollback() {
        
    }
    
}

?>

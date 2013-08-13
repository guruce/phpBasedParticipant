<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Participant
 *
 * @author Gurutharshan Nadarajah <gurutharshan@gmail.com>
 */
class Participant {
    
    /**
     * remote call from client through SOAP/REST protocol.
     * 
     * @param type $transactionId
     */
    public function put($transactionId) {
        /* 
         * TO-DO registration call
         * if success do op with out commit.
        */
        $transaction = new Transaction($transactionId);
        $tm = TransactionManager::getInstance();
        $tm->putTransaction($transaction);
        
        //TO-DO return to client with registration status.
    }
    
    /**
     * prepare call from WS-Coordinator in the first phase of 2pc.
     * @param type $transactionId
     */
    public function prepare($transactionId) {
        $tm = TransactionManager::getInstance();
        $transaction = $tm->getTransaction($transactionId);
        $tm->setCurrentTransaction($transaction);
        // TO-DO return success/fail.. 
    }
       
    /**
     * commit transaction call from WS-coordinator second phase of 2pc.
     * @param type $transactionId
     */
    public function commit($transactionId) {
        $tm = TransactionManager::getInstance();
        $tm->commit();
//        $transaction = $tm->getTransaction($transactionId);
//        $transaction->commit();
        
        //TO-DO return to client
    }
    
    /**
     * rollback transaction call from WS-coordinator second phase of 2pc.
     * @param type $transactionId
     */
    public function rollback($transactionId) {
        $tm = TransactionManager::getInstance();
        $tm->rollback();
//        $transaction = $tm->getTransaction($transactionId);
//        $transaction->rollback();
        
        //TO-DO return to client
    }
    
}

?>

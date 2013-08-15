<?php
//namespace ;

/**
 * Autogenerated by Thrift Compiler (0.9.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Exception\TApplicationException;


final class ServiceResponse {
  const prepared = 0;
  const aborted = 1;
  const readOnly = 2;
  const commited = 3;
  static public $__names = array(
    0 => 'prepared',
    1 => 'aborted',
    2 => 'readOnly',
    3 => 'commited',
  );
}

class EndPointReference {
  static $_TSPEC;

  public $address = null;
  public $privateInstance = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'address',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'privateInstance',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['address'])) {
        $this->address = $vals['address'];
      }
      if (isset($vals['privateInstance'])) {
        $this->privateInstance = $vals['privateInstance'];
      }
    }
  }

  public function getName() {
    return 'EndPointReference';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->address);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->privateInstance);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('EndPointReference');
    if ($this->address !== null) {
      $xfer += $output->writeFieldBegin('address', TType::STRING, 1);
      $xfer += $output->writeString($this->address);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->privateInstance !== null) {
      $xfer += $output->writeFieldBegin('privateInstance', TType::I32, 2);
      $xfer += $output->writeI32($this->privateInstance);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CoordinationContext {
  static $_TSPEC;

  public $identifier = null;
  public $coordination_type = null;
  public $registrationEPR = null;
  public $expires = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'identifier',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'coordination_type',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'registrationEPR',
          'type' => TType::STRUCT,
          'class' => '\EndPointReference',
          ),
        4 => array(
          'var' => 'expires',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['identifier'])) {
        $this->identifier = $vals['identifier'];
      }
      if (isset($vals['coordination_type'])) {
        $this->coordination_type = $vals['coordination_type'];
      }
      if (isset($vals['registrationEPR'])) {
        $this->registrationEPR = $vals['registrationEPR'];
      }
      if (isset($vals['expires'])) {
        $this->expires = $vals['expires'];
      }
    }
  }

  public function getName() {
    return 'CoordinationContext';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->identifier);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->coordination_type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRUCT) {
            $this->registrationEPR = new \EndPointReference();
            $xfer += $this->registrationEPR->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->expires);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('CoordinationContext');
    if ($this->identifier !== null) {
      $xfer += $output->writeFieldBegin('identifier', TType::STRING, 1);
      $xfer += $output->writeString($this->identifier);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->coordination_type !== null) {
      $xfer += $output->writeFieldBegin('coordination_type', TType::STRING, 2);
      $xfer += $output->writeString($this->coordination_type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->registrationEPR !== null) {
      if (!is_object($this->registrationEPR)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('registrationEPR', TType::STRUCT, 3);
      $xfer += $this->registrationEPR->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->expires !== null) {
      $xfer += $output->writeFieldBegin('expires', TType::I32, 4);
      $xfer += $output->writeI32($this->expires);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class InvalidState extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;
  public $detail = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'detail',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
      if (isset($vals['detail'])) {
        $this->detail = $vals['detail'];
      }
    }
  }

  public function getName() {
    return 'InvalidState';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->detail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InvalidState');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->detail !== null) {
      $xfer += $output->writeFieldBegin('detail', TType::STRING, 4);
      $xfer += $output->writeString($this->detail);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class InvalidProtocol extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
    }
  }

  public function getName() {
    return 'InvalidProtocol';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InvalidProtocol');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class InvalidParameters extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
    }
  }

  public function getName() {
    return 'InvalidParameters';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InvalidParameters');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CannotRegisterParticipant extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;
  public $detail = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'detail',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
      if (isset($vals['detail'])) {
        $this->detail = $vals['detail'];
      }
    }
  }

  public function getName() {
    return 'CannotRegisterParticipant';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->detail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('CannotRegisterParticipant');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->detail !== null) {
      $xfer += $output->writeFieldBegin('detail', TType::STRING, 4);
      $xfer += $output->writeString($this->detail);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class InconsistenceInternalState extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;
  public $detail = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'detail',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
      if (isset($vals['detail'])) {
        $this->detail = $vals['detail'];
      }
    }
  }

  public function getName() {
    return 'InconsistenceInternalState';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->detail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('InconsistenceInternalState');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->detail !== null) {
      $xfer += $output->writeFieldBegin('detail', TType::STRING, 4);
      $xfer += $output->writeString($this->detail);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class UnknownTransaction extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;
  public $detail = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'detail',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
      if (isset($vals['detail'])) {
        $this->detail = $vals['detail'];
      }
    }
  }

  public function getName() {
    return 'UnknownTransaction';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->detail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('UnknownTransaction');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->detail !== null) {
      $xfer += $output->writeFieldBegin('detail', TType::STRING, 4);
      $xfer += $output->writeString($this->detail);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class CannotCreatContext extends TException {
  static $_TSPEC;

  public $code = null;
  public $subcode = null;
  public $reason = null;
  public $detail = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'code',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'subcode',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'reason',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'detail',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['code'])) {
        $this->code = $vals['code'];
      }
      if (isset($vals['subcode'])) {
        $this->subcode = $vals['subcode'];
      }
      if (isset($vals['reason'])) {
        $this->reason = $vals['reason'];
      }
      if (isset($vals['detail'])) {
        $this->detail = $vals['detail'];
      }
    }
  }

  public function getName() {
    return 'CannotCreatContext';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->code);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subcode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->reason);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->detail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('CannotCreatContext');
    if ($this->code !== null) {
      $xfer += $output->writeFieldBegin('code', TType::STRING, 1);
      $xfer += $output->writeString($this->code);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subcode !== null) {
      $xfer += $output->writeFieldBegin('subcode', TType::STRING, 2);
      $xfer += $output->writeString($this->subcode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->reason !== null) {
      $xfer += $output->writeFieldBegin('reason', TType::STRING, 3);
      $xfer += $output->writeString($this->reason);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->detail !== null) {
      $xfer += $output->writeFieldBegin('detail', TType::STRING, 4);
      $xfer += $output->writeString($this->detail);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}



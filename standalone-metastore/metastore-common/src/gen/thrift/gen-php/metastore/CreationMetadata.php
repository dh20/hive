<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class CreationMetadata
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'catName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'dbName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'tblName',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'tablesUsed',
            'isRequired' => true,
            'type' => TType::SET,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        5 => array(
            'var' => 'validTxnList',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'materializationTime',
            'isRequired' => false,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $catName = null;
    /**
     * @var string
     */
    public $dbName = null;
    /**
     * @var string
     */
    public $tblName = null;
    /**
     * @var string[]
     */
    public $tablesUsed = null;
    /**
     * @var string
     */
    public $validTxnList = null;
    /**
     * @var int
     */
    public $materializationTime = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['catName'])) {
                $this->catName = $vals['catName'];
            }
            if (isset($vals['dbName'])) {
                $this->dbName = $vals['dbName'];
            }
            if (isset($vals['tblName'])) {
                $this->tblName = $vals['tblName'];
            }
            if (isset($vals['tablesUsed'])) {
                $this->tablesUsed = $vals['tablesUsed'];
            }
            if (isset($vals['validTxnList'])) {
                $this->validTxnList = $vals['validTxnList'];
            }
            if (isset($vals['materializationTime'])) {
                $this->materializationTime = $vals['materializationTime'];
            }
        }
    }

    public function getName()
    {
        return 'CreationMetadata';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->catName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tblName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::SET) {
                        $this->tablesUsed = array();
                        $_size182 = 0;
                        $_etype185 = 0;
                        $xfer += $input->readSetBegin($_etype185, $_size182);
                        for ($_i186 = 0; $_i186 < $_size182; ++$_i186) {
                            $elem187 = null;
                            $xfer += $input->readString($elem187);
                            $this->tablesUsed[$elem187] = true;
                        }
                        $xfer += $input->readSetEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->validTxnList);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->materializationTime);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('CreationMetadata');
        if ($this->catName !== null) {
            $xfer += $output->writeFieldBegin('catName', TType::STRING, 1);
            $xfer += $output->writeString($this->catName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dbName !== null) {
            $xfer += $output->writeFieldBegin('dbName', TType::STRING, 2);
            $xfer += $output->writeString($this->dbName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tblName !== null) {
            $xfer += $output->writeFieldBegin('tblName', TType::STRING, 3);
            $xfer += $output->writeString($this->tblName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tablesUsed !== null) {
            if (!is_array($this->tablesUsed)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tablesUsed', TType::SET, 4);
            $output->writeSetBegin(TType::STRING, count($this->tablesUsed));
            foreach ($this->tablesUsed as $iter188 => $iter189) {
                $xfer += $output->writeString($iter188);
            }
            $output->writeSetEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->validTxnList !== null) {
            $xfer += $output->writeFieldBegin('validTxnList', TType::STRING, 5);
            $xfer += $output->writeString($this->validTxnList);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->materializationTime !== null) {
            $xfer += $output->writeFieldBegin('materializationTime', TType::I64, 6);
            $xfer += $output->writeI64($this->materializationTime);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

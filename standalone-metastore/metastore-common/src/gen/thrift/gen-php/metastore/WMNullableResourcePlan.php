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

class WMNullableResourcePlan
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'status',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        4 => array(
            'var' => 'queryParallelism',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        5 => array(
            'var' => 'isSetQueryParallelism',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        6 => array(
            'var' => 'defaultPoolPath',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'isSetDefaultPoolPath',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        8 => array(
            'var' => 'ns',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $name = null;
    /**
     * @var int
     */
    public $status = null;
    /**
     * @var int
     */
    public $queryParallelism = null;
    /**
     * @var bool
     */
    public $isSetQueryParallelism = null;
    /**
     * @var string
     */
    public $defaultPoolPath = null;
    /**
     * @var bool
     */
    public $isSetDefaultPoolPath = null;
    /**
     * @var string
     */
    public $ns = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
            if (isset($vals['queryParallelism'])) {
                $this->queryParallelism = $vals['queryParallelism'];
            }
            if (isset($vals['isSetQueryParallelism'])) {
                $this->isSetQueryParallelism = $vals['isSetQueryParallelism'];
            }
            if (isset($vals['defaultPoolPath'])) {
                $this->defaultPoolPath = $vals['defaultPoolPath'];
            }
            if (isset($vals['isSetDefaultPoolPath'])) {
                $this->isSetDefaultPoolPath = $vals['isSetDefaultPoolPath'];
            }
            if (isset($vals['ns'])) {
                $this->ns = $vals['ns'];
            }
        }
    }

    public function getName()
    {
        return 'WMNullableResourcePlan';
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
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->status);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->queryParallelism);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->isSetQueryParallelism);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->defaultPoolPath);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->isSetDefaultPoolPath);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ns);
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
        $xfer += $output->writeStructBegin('WMNullableResourcePlan');
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->status !== null) {
            $xfer += $output->writeFieldBegin('status', TType::I32, 2);
            $xfer += $output->writeI32($this->status);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->queryParallelism !== null) {
            $xfer += $output->writeFieldBegin('queryParallelism', TType::I32, 4);
            $xfer += $output->writeI32($this->queryParallelism);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->isSetQueryParallelism !== null) {
            $xfer += $output->writeFieldBegin('isSetQueryParallelism', TType::BOOL, 5);
            $xfer += $output->writeBool($this->isSetQueryParallelism);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->defaultPoolPath !== null) {
            $xfer += $output->writeFieldBegin('defaultPoolPath', TType::STRING, 6);
            $xfer += $output->writeString($this->defaultPoolPath);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->isSetDefaultPoolPath !== null) {
            $xfer += $output->writeFieldBegin('isSetDefaultPoolPath', TType::BOOL, 7);
            $xfer += $output->writeBool($this->isSetDefaultPoolPath);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ns !== null) {
            $xfer += $output->writeFieldBegin('ns', TType::STRING, 8);
            $xfer += $output->writeString($this->ns);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

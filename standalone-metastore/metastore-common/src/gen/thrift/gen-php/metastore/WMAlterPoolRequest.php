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

class WMAlterPoolRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'pool',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\metastore\WMNullablePool',
        ),
        2 => array(
            'var' => 'poolPath',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var \metastore\WMNullablePool
     */
    public $pool = null;
    /**
     * @var string
     */
    public $poolPath = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['pool'])) {
                $this->pool = $vals['pool'];
            }
            if (isset($vals['poolPath'])) {
                $this->poolPath = $vals['poolPath'];
            }
        }
    }

    public function getName()
    {
        return 'WMAlterPoolRequest';
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
                    if ($ftype == TType::STRUCT) {
                        $this->pool = new \metastore\WMNullablePool();
                        $xfer += $this->pool->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->poolPath);
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
        $xfer += $output->writeStructBegin('WMAlterPoolRequest');
        if ($this->pool !== null) {
            if (!is_object($this->pool)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('pool', TType::STRUCT, 1);
            $xfer += $this->pool->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->poolPath !== null) {
            $xfer += $output->writeFieldBegin('poolPath', TType::STRING, 2);
            $xfer += $output->writeString($this->poolPath);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

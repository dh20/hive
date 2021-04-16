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

class WMValidateResourcePlanResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'errors',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        2 => array(
            'var' => 'warnings',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
    );

    /**
     * @var string[]
     */
    public $errors = null;
    /**
     * @var string[]
     */
    public $warnings = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['errors'])) {
                $this->errors = $vals['errors'];
            }
            if (isset($vals['warnings'])) {
                $this->warnings = $vals['warnings'];
            }
        }
    }

    public function getName()
    {
        return 'WMValidateResourcePlanResponse';
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
                    if ($ftype == TType::LST) {
                        $this->errors = array();
                        $_size996 = 0;
                        $_etype999 = 0;
                        $xfer += $input->readListBegin($_etype999, $_size996);
                        for ($_i1000 = 0; $_i1000 < $_size996; ++$_i1000) {
                            $elem1001 = null;
                            $xfer += $input->readString($elem1001);
                            $this->errors []= $elem1001;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->warnings = array();
                        $_size1002 = 0;
                        $_etype1005 = 0;
                        $xfer += $input->readListBegin($_etype1005, $_size1002);
                        for ($_i1006 = 0; $_i1006 < $_size1002; ++$_i1006) {
                            $elem1007 = null;
                            $xfer += $input->readString($elem1007);
                            $this->warnings []= $elem1007;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('WMValidateResourcePlanResponse');
        if ($this->errors !== null) {
            if (!is_array($this->errors)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('errors', TType::LST, 1);
            $output->writeListBegin(TType::STRING, count($this->errors));
            foreach ($this->errors as $iter1008) {
                $xfer += $output->writeString($iter1008);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->warnings !== null) {
            if (!is_array($this->warnings)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('warnings', TType::LST, 2);
            $output->writeListBegin(TType::STRING, count($this->warnings));
            foreach ($this->warnings as $iter1009) {
                $xfer += $output->writeString($iter1009);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

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

class ShowLocksResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'locks',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\ShowLocksResponseElement',
                ),
        ),
    );

    /**
     * @var \metastore\ShowLocksResponseElement[]
     */
    public $locks = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['locks'])) {
                $this->locks = $vals['locks'];
            }
        }
    }

    public function getName()
    {
        return 'ShowLocksResponse';
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
                        $this->locks = array();
                        $_size650 = 0;
                        $_etype653 = 0;
                        $xfer += $input->readListBegin($_etype653, $_size650);
                        for ($_i654 = 0; $_i654 < $_size650; ++$_i654) {
                            $elem655 = null;
                            $elem655 = new \metastore\ShowLocksResponseElement();
                            $xfer += $elem655->read($input);
                            $this->locks []= $elem655;
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
        $xfer += $output->writeStructBegin('ShowLocksResponse');
        if ($this->locks !== null) {
            if (!is_array($this->locks)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('locks', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->locks));
            foreach ($this->locks as $iter656) {
                $xfer += $iter656->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

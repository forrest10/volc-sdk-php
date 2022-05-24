<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodDomainCertificateInfo</code>
 */
class VodDomainCertificateInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *证书ID
     *
     * Generated from protobuf field <code>string CertificateId = 1;</code>
     */
    protected $CertificateId = '';
    /**
     *证书名
     *
     * Generated from protobuf field <code>string CertificateName = 2;</code>
     */
    protected $CertificateName = '';
    /**
     *证书内容
     *
     * Generated from protobuf field <code>string CertificatePub = 3;</code>
     */
    protected $CertificatePub = '';
    /**
     *私钥
     *
     * Generated from protobuf field <code>string CertificatePri = 4;</code>
     */
    protected $CertificatePri = '';
    /**
     * Http开启状态
     *
     * Generated from protobuf field <code>string HttpsStatus = 5;</code>
     */
    protected $HttpsStatus = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $CertificateId
     *          证书ID
     *     @type string $CertificateName
     *          证书名
     *     @type string $CertificatePub
     *          证书内容
     *     @type string $CertificatePri
     *          私钥
     *     @type string $HttpsStatus
     *           Http开启状态
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     *证书ID
     *
     * Generated from protobuf field <code>string CertificateId = 1;</code>
     * @return string
     */
    public function getCertificateId()
    {
        return $this->CertificateId;
    }

    /**
     *证书ID
     *
     * Generated from protobuf field <code>string CertificateId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CertificateId = $var;

        return $this;
    }

    /**
     *证书名
     *
     * Generated from protobuf field <code>string CertificateName = 2;</code>
     * @return string
     */
    public function getCertificateName()
    {
        return $this->CertificateName;
    }

    /**
     *证书名
     *
     * Generated from protobuf field <code>string CertificateName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->CertificateName = $var;

        return $this;
    }

    /**
     *证书内容
     *
     * Generated from protobuf field <code>string CertificatePub = 3;</code>
     * @return string
     */
    public function getCertificatePub()
    {
        return $this->CertificatePub;
    }

    /**
     *证书内容
     *
     * Generated from protobuf field <code>string CertificatePub = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificatePub($var)
    {
        GPBUtil::checkString($var, True);
        $this->CertificatePub = $var;

        return $this;
    }

    /**
     *私钥
     *
     * Generated from protobuf field <code>string CertificatePri = 4;</code>
     * @return string
     */
    public function getCertificatePri()
    {
        return $this->CertificatePri;
    }

    /**
     *私钥
     *
     * Generated from protobuf field <code>string CertificatePri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificatePri($var)
    {
        GPBUtil::checkString($var, True);
        $this->CertificatePri = $var;

        return $this;
    }

    /**
     * Http开启状态
     *
     * Generated from protobuf field <code>string HttpsStatus = 5;</code>
     * @return string
     */
    public function getHttpsStatus()
    {
        return $this->HttpsStatus;
    }

    /**
     * Http开启状态
     *
     * Generated from protobuf field <code>string HttpsStatus = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpsStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->HttpsStatus = $var;

        return $this;
    }

}

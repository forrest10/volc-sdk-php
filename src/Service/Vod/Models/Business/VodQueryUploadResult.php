<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodQueryUploadResult</code>
 */
class VodQueryUploadResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodURLSet MediaInfoList = 1;</code>
     */
    private $MediaInfoList;
    /**
     * Generated from protobuf field <code>repeated string NotExistJobIds = 2;</code>
     */
    private $NotExistJobIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodURLSet[]|\Google\Protobuf\Internal\RepeatedField $MediaInfoList
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotExistJobIds
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodURLSet MediaInfoList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMediaInfoList()
    {
        return $this->MediaInfoList;
    }

    /**
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodURLSet MediaInfoList = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodURLSet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMediaInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodURLSet::class);
        $this->MediaInfoList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string NotExistJobIds = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotExistJobIds()
    {
        return $this->NotExistJobIds;
    }

    /**
     * Generated from protobuf field <code>repeated string NotExistJobIds = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotExistJobIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NotExistJobIds = $arr;

        return $this;
    }

}


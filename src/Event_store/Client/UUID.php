<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shared.proto

namespace Event_store\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.UUID</code>
 */
class UUID extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Event_store\Client\UUID\Structured $structured
     *     @type string $string
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID.Structured structured = 1;</code>
     * @return \Event_store\Client\UUID\Structured|null
     */
    public function getStructured()
    {
        return $this->readOneof(1);
    }

    public function hasStructured()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID.Structured structured = 1;</code>
     * @param \Event_store\Client\UUID\Structured $var
     * @return $this
     */
    public function setStructured($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\UUID\Structured::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string string = 2;</code>
     * @return string
     */
    public function getString()
    {
        return $this->readOneof(2);
    }

    public function hasString()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string string = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setString($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}


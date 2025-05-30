<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: persistent.proto

namespace Event_store\Client\Persistent_subscriptions\UpdateReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.UpdateReq.AllOptions</code>
 */
class AllOptions extends \Google\Protobuf\Internal\Message
{
    protected $all_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Event_store\Client\Persistent_subscriptions\UpdateReq\Position $position
     *     @type \Event_store\Client\PBEmpty $start
     *     @type \Event_store\Client\PBEmpty $end
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Position position = 1;</code>
     * @return \Event_store\Client\Persistent_subscriptions\UpdateReq\Position|null
     */
    public function getPosition()
    {
        return $this->readOneof(1);
    }

    public function hasPosition()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Position position = 1;</code>
     * @param \Event_store\Client\Persistent_subscriptions\UpdateReq\Position $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\Persistent_subscriptions\UpdateReq\Position::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty start = 2;</code>
     * @return \Event_store\Client\PBEmpty|null
     */
    public function getStart()
    {
        return $this->readOneof(2);
    }

    public function hasStart()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty start = 2;</code>
     * @param \Event_store\Client\PBEmpty $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\PBEmpty::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty end = 3;</code>
     * @return \Event_store\Client\PBEmpty|null
     */
    public function getEnd()
    {
        return $this->readOneof(3);
    }

    public function hasEnd()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty end = 3;</code>
     * @param \Event_store\Client\PBEmpty $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\PBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAllOption()
    {
        return $this->whichOneof("all_option");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AllOptions::class, \Event_store\Client\Persistent_subscriptions\UpdateReq_AllOptions::class);


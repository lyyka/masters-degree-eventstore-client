<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: persistent.proto

namespace Event_store\Client\Persistent_subscriptions\ReadResp\ReadEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.ReadResp.ReadEvent.RecordedEvent</code>
 */
class RecordedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 2;</code>
     */
    protected $stream_identifier = null;
    /**
     * Generated from protobuf field <code>uint64 stream_revision = 3;</code>
     */
    protected $stream_revision = 0;
    /**
     * Generated from protobuf field <code>uint64 prepare_position = 4;</code>
     */
    protected $prepare_position = 0;
    /**
     * Generated from protobuf field <code>uint64 commit_position = 5;</code>
     */
    protected $commit_position = 0;
    /**
     * Generated from protobuf field <code>map<string, string> metadata = 6;</code>
     */
    private $metadata;
    /**
     * Generated from protobuf field <code>bytes custom_metadata = 7;</code>
     */
    protected $custom_metadata = '';
    /**
     * Generated from protobuf field <code>bytes data = 8;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Event_store\Client\UUID $id
     *     @type \Event_store\Client\StreamIdentifier $stream_identifier
     *     @type int|string $stream_revision
     *     @type int|string $prepare_position
     *     @type int|string $commit_position
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *     @type string $custom_metadata
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     * @return \Event_store\Client\UUID|null
     */
    public function getId()
    {
        return $this->id;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     * @param \Event_store\Client\UUID $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\UUID::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 2;</code>
     * @return \Event_store\Client\StreamIdentifier|null
     */
    public function getStreamIdentifier()
    {
        return $this->stream_identifier;
    }

    public function hasStreamIdentifier()
    {
        return isset($this->stream_identifier);
    }

    public function clearStreamIdentifier()
    {
        unset($this->stream_identifier);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 2;</code>
     * @param \Event_store\Client\StreamIdentifier $var
     * @return $this
     */
    public function setStreamIdentifier($var)
    {
        GPBUtil::checkMessage($var, \Event_store\Client\StreamIdentifier::class);
        $this->stream_identifier = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 stream_revision = 3;</code>
     * @return int|string
     */
    public function getStreamRevision()
    {
        return $this->stream_revision;
    }

    /**
     * Generated from protobuf field <code>uint64 stream_revision = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStreamRevision($var)
    {
        GPBUtil::checkUint64($var);
        $this->stream_revision = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 prepare_position = 4;</code>
     * @return int|string
     */
    public function getPreparePosition()
    {
        return $this->prepare_position;
    }

    /**
     * Generated from protobuf field <code>uint64 prepare_position = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPreparePosition($var)
    {
        GPBUtil::checkUint64($var);
        $this->prepare_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 commit_position = 5;</code>
     * @return int|string
     */
    public function getCommitPosition()
    {
        return $this->commit_position;
    }

    /**
     * Generated from protobuf field <code>uint64 commit_position = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitPosition($var)
    {
        GPBUtil::checkUint64($var);
        $this->commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes custom_metadata = 7;</code>
     * @return string
     */
    public function getCustomMetadata()
    {
        return $this->custom_metadata;
    }

    /**
     * Generated from protobuf field <code>bytes custom_metadata = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomMetadata($var)
    {
        GPBUtil::checkString($var, False);
        $this->custom_metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 8;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecordedEvent::class, \Event_store\Client\Persistent_subscriptions\ReadResp_ReadEvent_RecordedEvent::class);


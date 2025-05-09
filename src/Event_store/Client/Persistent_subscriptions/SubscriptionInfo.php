<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: persistent.proto

namespace Event_store\Client\Persistent_subscriptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.SubscriptionInfo</code>
 */
class SubscriptionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_source = 1;</code>
     */
    protected $event_source = '';
    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     */
    protected $group_name = '';
    /**
     * Generated from protobuf field <code>string status = 3;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo.ConnectionInfo connections = 4;</code>
     */
    private $connections;
    /**
     * Generated from protobuf field <code>int32 average_per_second = 5;</code>
     */
    protected $average_per_second = 0;
    /**
     * Generated from protobuf field <code>int64 total_items = 6;</code>
     */
    protected $total_items = 0;
    /**
     * Generated from protobuf field <code>int64 count_since_last_measurement = 7;</code>
     */
    protected $count_since_last_measurement = 0;
    /**
     * Generated from protobuf field <code>string last_checkpointed_event_position = 8;</code>
     */
    protected $last_checkpointed_event_position = '';
    /**
     * Generated from protobuf field <code>string last_known_event_position = 9;</code>
     */
    protected $last_known_event_position = '';
    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 10;</code>
     */
    protected $resolve_link_tos = false;
    /**
     * Generated from protobuf field <code>string start_from = 11;</code>
     */
    protected $start_from = '';
    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 12;</code>
     */
    protected $message_timeout_milliseconds = 0;
    /**
     * Generated from protobuf field <code>bool extra_statistics = 13;</code>
     */
    protected $extra_statistics = false;
    /**
     * Generated from protobuf field <code>int32 max_retry_count = 14;</code>
     */
    protected $max_retry_count = 0;
    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 15;</code>
     */
    protected $live_buffer_size = 0;
    /**
     * Generated from protobuf field <code>int32 buffer_size = 16;</code>
     */
    protected $buffer_size = 0;
    /**
     * Generated from protobuf field <code>int32 read_batch_size = 17;</code>
     */
    protected $read_batch_size = 0;
    /**
     * Generated from protobuf field <code>int32 check_point_after_milliseconds = 18;</code>
     */
    protected $check_point_after_milliseconds = 0;
    /**
     * Generated from protobuf field <code>int32 min_check_point_count = 19;</code>
     */
    protected $min_check_point_count = 0;
    /**
     * Generated from protobuf field <code>int32 max_check_point_count = 20;</code>
     */
    protected $max_check_point_count = 0;
    /**
     * Generated from protobuf field <code>int32 read_buffer_count = 21;</code>
     */
    protected $read_buffer_count = 0;
    /**
     * Generated from protobuf field <code>int64 live_buffer_count = 22;</code>
     */
    protected $live_buffer_count = 0;
    /**
     * Generated from protobuf field <code>int32 retry_buffer_count = 23;</code>
     */
    protected $retry_buffer_count = 0;
    /**
     * Generated from protobuf field <code>int32 total_in_flight_messages = 24;</code>
     */
    protected $total_in_flight_messages = 0;
    /**
     * Generated from protobuf field <code>int32 outstanding_messages_count = 25;</code>
     */
    protected $outstanding_messages_count = 0;
    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 26;</code>
     */
    protected $named_consumer_strategy = '';
    /**
     * Generated from protobuf field <code>int32 max_subscriber_count = 27;</code>
     */
    protected $max_subscriber_count = 0;
    /**
     * Generated from protobuf field <code>int64 parked_message_count = 28;</code>
     */
    protected $parked_message_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_source
     *     @type string $group_name
     *     @type string $status
     *     @type \Event_store\Client\Persistent_subscriptions\SubscriptionInfo\ConnectionInfo[]|\Google\Protobuf\Internal\RepeatedField $connections
     *     @type int $average_per_second
     *     @type int|string $total_items
     *     @type int|string $count_since_last_measurement
     *     @type string $last_checkpointed_event_position
     *     @type string $last_known_event_position
     *     @type bool $resolve_link_tos
     *     @type string $start_from
     *     @type int $message_timeout_milliseconds
     *     @type bool $extra_statistics
     *     @type int $max_retry_count
     *     @type int $live_buffer_size
     *     @type int $buffer_size
     *     @type int $read_batch_size
     *     @type int $check_point_after_milliseconds
     *     @type int $min_check_point_count
     *     @type int $max_check_point_count
     *     @type int $read_buffer_count
     *     @type int|string $live_buffer_count
     *     @type int $retry_buffer_count
     *     @type int $total_in_flight_messages
     *     @type int $outstanding_messages_count
     *     @type string $named_consumer_strategy
     *     @type int $max_subscriber_count
     *     @type int|string $parked_message_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event_source = 1;</code>
     * @return string
     */
    public function getEventSource()
    {
        return $this->event_source;
    }

    /**
     * Generated from protobuf field <code>string event_source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo.ConnectionInfo connections = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo.ConnectionInfo connections = 4;</code>
     * @param \Event_store\Client\Persistent_subscriptions\SubscriptionInfo\ConnectionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Event_store\Client\Persistent_subscriptions\SubscriptionInfo\ConnectionInfo::class);
        $this->connections = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 average_per_second = 5;</code>
     * @return int
     */
    public function getAveragePerSecond()
    {
        return $this->average_per_second;
    }

    /**
     * Generated from protobuf field <code>int32 average_per_second = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAveragePerSecond($var)
    {
        GPBUtil::checkInt32($var);
        $this->average_per_second = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_items = 6;</code>
     * @return int|string
     */
    public function getTotalItems()
    {
        return $this->total_items;
    }

    /**
     * Generated from protobuf field <code>int64 total_items = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_items = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 count_since_last_measurement = 7;</code>
     * @return int|string
     */
    public function getCountSinceLastMeasurement()
    {
        return $this->count_since_last_measurement;
    }

    /**
     * Generated from protobuf field <code>int64 count_since_last_measurement = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCountSinceLastMeasurement($var)
    {
        GPBUtil::checkInt64($var);
        $this->count_since_last_measurement = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_checkpointed_event_position = 8;</code>
     * @return string
     */
    public function getLastCheckpointedEventPosition()
    {
        return $this->last_checkpointed_event_position;
    }

    /**
     * Generated from protobuf field <code>string last_checkpointed_event_position = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLastCheckpointedEventPosition($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_checkpointed_event_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_known_event_position = 9;</code>
     * @return string
     */
    public function getLastKnownEventPosition()
    {
        return $this->last_known_event_position;
    }

    /**
     * Generated from protobuf field <code>string last_known_event_position = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLastKnownEventPosition($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_known_event_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 10;</code>
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->resolve_link_tos;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setResolveLinkTos($var)
    {
        GPBUtil::checkBool($var);
        $this->resolve_link_tos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string start_from = 11;</code>
     * @return string
     */
    public function getStartFrom()
    {
        return $this->start_from;
    }

    /**
     * Generated from protobuf field <code>string start_from = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setStartFrom($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 12;</code>
     * @return int
     */
    public function getMessageTimeoutMilliseconds()
    {
        return $this->message_timeout_milliseconds;
    }

    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageTimeoutMilliseconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->message_timeout_milliseconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool extra_statistics = 13;</code>
     * @return bool
     */
    public function getExtraStatistics()
    {
        return $this->extra_statistics;
    }

    /**
     * Generated from protobuf field <code>bool extra_statistics = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setExtraStatistics($var)
    {
        GPBUtil::checkBool($var);
        $this->extra_statistics = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_retry_count = 14;</code>
     * @return int
     */
    public function getMaxRetryCount()
    {
        return $this->max_retry_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_retry_count = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRetryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_retry_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 15;</code>
     * @return int
     */
    public function getLiveBufferSize()
    {
        return $this->live_buffer_size;
    }

    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLiveBufferSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->live_buffer_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 buffer_size = 16;</code>
     * @return int
     */
    public function getBufferSize()
    {
        return $this->buffer_size;
    }

    /**
     * Generated from protobuf field <code>int32 buffer_size = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setBufferSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->buffer_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 read_batch_size = 17;</code>
     * @return int
     */
    public function getReadBatchSize()
    {
        return $this->read_batch_size;
    }

    /**
     * Generated from protobuf field <code>int32 read_batch_size = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setReadBatchSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->read_batch_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 check_point_after_milliseconds = 18;</code>
     * @return int
     */
    public function getCheckPointAfterMilliseconds()
    {
        return $this->check_point_after_milliseconds;
    }

    /**
     * Generated from protobuf field <code>int32 check_point_after_milliseconds = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckPointAfterMilliseconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->check_point_after_milliseconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 min_check_point_count = 19;</code>
     * @return int
     */
    public function getMinCheckPointCount()
    {
        return $this->min_check_point_count;
    }

    /**
     * Generated from protobuf field <code>int32 min_check_point_count = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setMinCheckPointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_check_point_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_check_point_count = 20;</code>
     * @return int
     */
    public function getMaxCheckPointCount()
    {
        return $this->max_check_point_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_check_point_count = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxCheckPointCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_check_point_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 read_buffer_count = 21;</code>
     * @return int
     */
    public function getReadBufferCount()
    {
        return $this->read_buffer_count;
    }

    /**
     * Generated from protobuf field <code>int32 read_buffer_count = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setReadBufferCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->read_buffer_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 live_buffer_count = 22;</code>
     * @return int|string
     */
    public function getLiveBufferCount()
    {
        return $this->live_buffer_count;
    }

    /**
     * Generated from protobuf field <code>int64 live_buffer_count = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLiveBufferCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->live_buffer_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 retry_buffer_count = 23;</code>
     * @return int
     */
    public function getRetryBufferCount()
    {
        return $this->retry_buffer_count;
    }

    /**
     * Generated from protobuf field <code>int32 retry_buffer_count = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setRetryBufferCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->retry_buffer_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 total_in_flight_messages = 24;</code>
     * @return int
     */
    public function getTotalInFlightMessages()
    {
        return $this->total_in_flight_messages;
    }

    /**
     * Generated from protobuf field <code>int32 total_in_flight_messages = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalInFlightMessages($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_in_flight_messages = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 outstanding_messages_count = 25;</code>
     * @return int
     */
    public function getOutstandingMessagesCount()
    {
        return $this->outstanding_messages_count;
    }

    /**
     * Generated from protobuf field <code>int32 outstanding_messages_count = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setOutstandingMessagesCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->outstanding_messages_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 26;</code>
     * @return string
     */
    public function getNamedConsumerStrategy()
    {
        return $this->named_consumer_strategy;
    }

    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setNamedConsumerStrategy($var)
    {
        GPBUtil::checkString($var, True);
        $this->named_consumer_strategy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_subscriber_count = 27;</code>
     * @return int
     */
    public function getMaxSubscriberCount()
    {
        return $this->max_subscriber_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_subscriber_count = 27;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxSubscriberCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_subscriber_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 parked_message_count = 28;</code>
     * @return int|string
     */
    public function getParkedMessageCount()
    {
        return $this->parked_message_count;
    }

    /**
     * Generated from protobuf field <code>int64 parked_message_count = 28;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParkedMessageCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->parked_message_count = $var;

        return $this;
    }

}


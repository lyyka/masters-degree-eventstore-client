<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Event_store\Client\Persistent_subscriptions;

/**
 */
class PersistentSubscriptionsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\CreateReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Create(\Event_store\Client\Persistent_subscriptions\CreateReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/Create',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\CreateResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\UpdateReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Update(\Event_store\Client\Persistent_subscriptions\UpdateReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/Update',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\UpdateResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\DeleteReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Event_store\Client\Persistent_subscriptions\DeleteReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/Delete',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\DeleteResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function Read($metadata = [], $options = []) {
        return $this->_bidiRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/Read',
        ['\Event_store\Client\Persistent_subscriptions\ReadResp','decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\GetInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInfo(\Event_store\Client\Persistent_subscriptions\GetInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/GetInfo',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\GetInfoResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\ReplayParkedReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReplayParked(\Event_store\Client\Persistent_subscriptions\ReplayParkedReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/ReplayParked',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\ReplayParkedResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Persistent_subscriptions\ListReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Event_store\Client\Persistent_subscriptions\ListReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/List',
        $argument,
        ['\Event_store\Client\Persistent_subscriptions\ListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RestartSubsystem(\Event_store\Client\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.persistent_subscriptions.PersistentSubscriptions/RestartSubsystem',
        $argument,
        ['\Event_store\Client\PBEmpty', 'decode'],
        $metadata, $options);
    }

}

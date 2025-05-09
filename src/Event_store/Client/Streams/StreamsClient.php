<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Event_store\Client\Streams;

/**
 */
class StreamsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Event_store\Client\Streams\ReadReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function Read(\Event_store\Client\Streams\ReadReq $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/event_store.client.streams.Streams/Read',
        $argument,
        ['\Event_store\Client\Streams\ReadResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function Append($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/event_store.client.streams.Streams/Append',
        ['\Event_store\Client\Streams\AppendResp','decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Streams\DeleteReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Event_store\Client\Streams\DeleteReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.streams.Streams/Delete',
        $argument,
        ['\Event_store\Client\Streams\DeleteResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Event_store\Client\Streams\TombstoneReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Tombstone(\Event_store\Client\Streams\TombstoneReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/event_store.client.streams.Streams/Tombstone',
        $argument,
        ['\Event_store\Client\Streams\TombstoneResp', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function BatchAppend($metadata = [], $options = []) {
        return $this->_bidiRequest('/event_store.client.streams.Streams/BatchAppend',
        ['\Event_store\Client\Streams\BatchAppendResp','decode'],
        $metadata, $options);
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shared.proto

namespace GPBMetadata;

class Shared
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
shared.protoevent_store.client"�
UUID9

structured (2#.event_store.client.UUID.StructuredH 
string (	H K

Structured
most_significant_bits (
least_significant_bits (B
value"
Empty"-
StreamIdentifier
stream_name (J"F
AllStreamPosition
commit_position (
prepare_position ("�
WrongExpectedVersion!
current_stream_revision (H 3
current_no_stream (2.google.protobuf.EmptyH "
expected_stream_position (H.
expected_any (2.google.protobuf.EmptyH8
expected_stream_exists (2.google.protobuf.EmptyH4
expected_no_stream (2.google.protobuf.EmptyHB 
current_stream_revision_optionB!
expected_stream_position_option"
AccessDenied"P
StreamDeleted?
stream_identifier (2$.event_store.client.StreamIdentifier"	
Timeout"	
Unknown"
InvalidTransaction"2
MaximumAppendSizeExceeded
maxAppendSize ("h
MaximumAppendEventSizeExceeded
eventId (	
proposedEventSize (
maxAppendEventSize ("

BadRequest
message (	B&
$com.eventstore.dbclient.proto.sharedbproto3'
        , true);

        static::$is_initialized = true;
    }
}


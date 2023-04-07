<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto3

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time interval. The interval is considered active at time 't' if 't' is
 * greater than or equal to the start time and less than the end time.
 *
 * Generated from protobuf message <code>transit_realtime.TimeRange</code>
 */
class TimeRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Start time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval starts at minus infinity.
     * optional uint64 start = 1;
     *
     * Generated from protobuf field <code>uint64 start = 1;</code>
     */
    protected $start = 0;
    /**
     * End time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval ends at plus infinity.
     * optional uint64 end = 2;
     *
     * Generated from protobuf field <code>uint64 end = 2;</code>
     */
    protected $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start
     *           Start time, in POSIX time (i.e., number of seconds since January 1st 1970
     *           00:00:00 UTC).
     *           If missing, the interval starts at minus infinity.
     *           optional uint64 start = 1;
     *     @type int|string $end
     *           End time, in POSIX time (i.e., number of seconds since January 1st 1970
     *           00:00:00 UTC).
     *           If missing, the interval ends at plus infinity.
     *           optional uint64 end = 2;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Start time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval starts at minus infinity.
     * optional uint64 start = 1;
     *
     * Generated from protobuf field <code>uint64 start = 1;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Start time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval starts at minus infinity.
     * optional uint64 start = 1;
     *
     * Generated from protobuf field <code>uint64 start = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkUint64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * End time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval ends at plus infinity.
     * optional uint64 end = 2;
     *
     * Generated from protobuf field <code>uint64 end = 2;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * End time, in POSIX time (i.e., number of seconds since January 1st 1970
     * 00:00:00 UTC).
     * If missing, the interval ends at plus infinity.
     * optional uint64 end = 2;
     *
     * Generated from protobuf field <code>uint64 end = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkUint64($var);
        $this->end = $var;

        return $this;
    }

}

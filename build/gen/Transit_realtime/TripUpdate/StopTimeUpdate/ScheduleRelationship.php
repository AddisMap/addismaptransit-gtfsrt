<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto3

namespace Transit_realtime\TripUpdate\StopTimeUpdate;

use UnexpectedValueException;

/**
 * The relation between this StopTime and the static schedule.
 *
 * Protobuf type <code>transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship</code>
 */
class ScheduleRelationship
{
    /**
     * The vehicle is proceeding in accordance with its static schedule of
     * stops, although not necessarily according to the times of the schedule.
     * At least one of arrival and departure must be provided. If the schedule
     * for this stop contains both arrival and departure times then so must
     * this update.
     *
     * Generated from protobuf enum <code>SCHEDULED = 0;</code>
     */
    const SCHEDULED = 0;
    /**
     * The stop is skipped, i.e., the vehicle will not stop at this stop.
     * Arrival and departure are // optional.
     *
     * Generated from protobuf enum <code>SKIPPED = 1;</code>
     */
    const SKIPPED = 1;
    /**
     * No data is given for this stop. The main intention for this value is to
     * give the predictions only for part of a trip, i.e., if the last update
     * for a trip has a NO_DATA specifier, then StopTimes for the rest of the
     * stops in the trip are considered to be unspecified as well.
     * Neither arrival nor departure should be supplied.
     *
     * Generated from protobuf enum <code>NO_DATA = 2;</code>
     */
    const NO_DATA = 2;

    private static $valueToName = [
        self::SCHEDULED => 'SCHEDULED',
        self::SKIPPED => 'SKIPPED',
        self::NO_DATA => 'NO_DATA',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScheduleRelationship::class, \Transit_realtime\TripUpdate_StopTimeUpdate_ScheduleRelationship::class);


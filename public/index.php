<?php

use Transit_realtime\FeedEntity;
use Transit_realtime\FeedHeader;
use Transit_realtime\FeedMessage;
use Transit_realtime\TripDescriptor;
use Transit_realtime\TripUpdate;
use Transit_realtime\TripUpdate\StopTimeEvent;
use Transit_realtime\TripUpdate\StopTimeUpdate;

require_once '../vendor/autoload.php';

// query: filter by route list or nodes and direction ID?
// ?stopIds=[routeId=1:10521610,direction=0,1:node/7098833738][routeId=1:10521610,direction=0,1:node/7074330392]

$feed = new FeedMessage();
$header = new FeedHeader();
$header->setTimestamp(time());
$header->setIncrementality(FeedHeader\Incrementality::FULL_DATASET);
$header->setGtfsRealtimeVersion('2.0');

foreach([79] as $tripId) {
    $entity = new FeedEntity();
    $entity->setId(time());
    $update = new TripUpdate();
    $update->setTimestamp(time());
    $trip = new TripDescriptor();
    $trip->setTripId($tripId);
    $trip->setStartDate('20230407');
    $trip->setStartTime('20:00:00');
    $stopTimeUpdate = new StopTimeUpdate();
    $stopTimeUpdate->setStopId('node/7112215084');
    $stopTimeEvent = new StopTimeEvent();
    $stopTimeEvent->setTime(time() + 100);
    //$stopTimeEvent->setTime(strtotime('2023-04-07 06:15:00'));
    $stopTimeUpdate->setArrival($stopTimeEvent);

    $stopTimeUpdate2 = new StopTimeUpdate();
    $stopTimeUpdate2->setStopId('node/7112215078');
    $stopTimeEvent2 = new StopTimeEvent();
    $stopTimeEvent2->setTime(time() + 3600);
    //$stopTimeEvent->setTime(strtotime('2023-04-07 06:15:00'));
    $stopTimeUpdate2->setArrival($stopTimeEvent2);


    $update->setTrip($trip);
    $update->setStopTimeUpdate([$stopTimeUpdate, $stopTimeUpdate2]);
    $entity->setTripUpdate($update);
    $feed->setHeader($header);
    $entities[] = $entity;
}

$feed->setEntity($entities);

echo $feed->serializeToString();

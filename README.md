# *Draft* Generating a GTFS Real Time Feed using PHP 8.1

## Building

The folder build was generated like this:

* Download proto3 file: https://github.com/brians-code/gtfs-realtime-proto3/raw/master/gtfs-realtime.proto3
* `snap install protoc --classic`
* `protoc --proto_path=. --php_out=build/gen ./gtfs-realtime.proto3`

## Purpose

The idea is to generate GTFS-RT data from a feed that delivery realtime data in JSON with custom IDs.
See `fixtures/realtime-day.json`. The feed also supplies to routes (see `routes.json`)

This data needs to be mapped to our GTFS using mapping tables (t.b.d.).

## Installation

* PHP8.1 is installed
* clone repo
* `composer install`
* Point your webserver to public/index.php
* It will display some mocked GTFS-RT data which can be feed to OpenTripPlanner v2 with the following `router-config.json`

```json
{
    "updaters": [
    {
      "type" : "stop-time-updater",
      "frequencySec" : 10,
      "backwardsDelayPropagationType" : "ALWAYS",
      "url" : "http://gtfsrt.localhost/",
      "feedId" : "1"
    }
  ]
}
```

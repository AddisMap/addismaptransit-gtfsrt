# *Draft* Generating a GTFS Real Time Feed using PHP 8.1

## Building

The folder build was generated like this:

* Download proto3 file: https://github.com/brians-code/gtfs-realtime-proto3/raw/master/gtfs-realtime.proto3
* `snap install protoc --classic`
* `protoc --proto_path=. --php_out=build/gen ./gtfs-realtime.proto3`


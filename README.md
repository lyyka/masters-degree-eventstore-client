## Introduction

This repository holds the build PHP files for EventStoreDB based on EventStore `.proto` files.

## Full Tutorial

The below tutorial was followed to setup the machine with `protoc` to be able to compile the `.proto` files.

https://github.com/grpc/grpc/blob/v1.72.0/src/php/README.md

## protoc

Download `linux-aarch_64` from here: https://github.com/protocolbuffers/protobuf/releases/tag/v3.20.0

Put the download inside `/var/www` inside the container

Put the bin folder inside it into `$PATH`.

## Build proto files

Bellow command should be executed into `EventStore/src/Protos/Grpc` folder wherever you cloned the event store repo.

```shell
protoc --proto_path=. --php_out=/var/www/html/src --grpc_out=/var/www/html/src --plugin=protoc-gen-grpc=/var/www/grpc/cmake/build/grpc_php_plugin streams.proto shared.proto status.proto persistent.proto code.proto
```

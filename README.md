## Full Tutorial

https://github.com/grpc/grpc/blob/v1.72.0/src/php/README.md

## Download protoc

Download linux-aarch_64 from here: https://github.com/protocolbuffers/protobuf/releases/tag/v3.20.0

Put the bin folder inside it into `$PATH`.

## Build `grpc_php_plugin`

You need the grpc_php_plugin to generate the PHP client stub classes. This plugin works with the main protoc binary to generate classes that you can import into your project.

You can build grpc_php_plugin with cmake:

```shell
$ git clone -b RELEASE_TAG_HERE https://github.com/grpc/grpc
$ cd grpc
$ git submodule update --init
$ mkdir -p cmake/build
$ cd cmake/build
$ cmake ../..
$ make protoc grpc_php_plugin
```

The commands above will make protoc and grpc_php_plugin available in cmake/build/third_party/protobuf/protoc and cmake/build/grpc_php_plugin.

You will need this path `cmake/build/grpc_php_plugin` for build at the end.

## Install protobuf

```shell
sudo pecl install protobuf-3.20.0
```

## Build proto files

```shell
protoc --proto_path=. --php_out=/var/www/html/src --grpc_out=/var/www/html/src --plugin=protoc-gen-grpc=/var/www/grpc/cmake/build/grpc_php_plugin streams.proto shared.proto status.proto persistent.proto code.proto
```

## Event Store Docs

https://docs.kurrent.io/clients/grpc/getting-started.html

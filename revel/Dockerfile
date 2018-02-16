
FROM golang:1.9-alpine

ENV GOPATH /go

# Install dependency packages
RUN set -ex \
    && apk update \
    && apk add --no-cache ca-certificates git wget build-base gcc \
    && update-ca-certificates

RUN  mkdir -p /go/src/go-revel-rest
WORKDIR /go
# Install go libraries
RUN go get github.com/revel/revel
RUN go get github.com/revel/cmd/revel
RUN go get -u github.com/lib/pq
RUN go get -u github.com/go-gorp/gorp

CMD ["/go/bin/revel", "run", "go-revel-rest"]



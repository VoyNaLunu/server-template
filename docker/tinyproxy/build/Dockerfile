FROM alpine:3.18

LABEL "maintainer"="https://github.com/VoyNaLunu"
LABEL "version"="0.1"

WORKDIR /app/

RUN apk update \
    && \
    apk add --no-cache \
    bash \
    tinyproxy \
    && \
    rm -rf /var/cache/apk/*

COPY . .

EXPOSE 8888

ENTRYPOINT ["tinyproxy", "-d", "-c", "tinyproxy.conf"]
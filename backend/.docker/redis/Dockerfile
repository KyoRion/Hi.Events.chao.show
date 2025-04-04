FROM redis

WORKDIR /redis
COPY redis.conf /usr/local/etc/redis/redis.conf
ENV TZ=Asia/Ho_Chi_Minh

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

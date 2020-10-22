<?php


class RedisSupportedMethodsEnum
{
    /**
     * redis 扩展支持的操作方法
     *
     * Supported methods
     *
     * @var array
     */
    public static $supportedMethods = [
        'append',
        'blpop',
        'brpop',
        'brpoplpush',
        'decr',
        'decrby',
        'eval',
        'evalsha',
        'exists',
        'geoadd',
        'geodist',
        'geohash',
        'geopos',
        'get',
        'getbit',
        'getoption',
        'getrange',
        'getset',
        'hdel',
        'hexists',
        'hget',
        'hgetall',
        'hincrby',
        'hincrbyfloat',
        'hkeys',
        'hlen',
        'hmget',
        'hmset',
        'hset',
        'hsetnx',
        'hvals',
        'hscan',
        'incr',
        'incrby',
        'incrbyfloat',
        'info',
        'lget',
        'linsert',
        'lpop',
        'lpush',
        'lpushx',
        'lset',
        'mset',
        'msetnx',
        'persist',
        'pexpire',
        'pexpireat',
        'psetex',
        'pttl',
        'rpop',
        'rpush',
        'rpushx',
        'rawcommand',
        'renamenx',
        'restore',
        'rpoplpush',
        'sadd',
        'saddarray',
        'sdiff',
        'sdiffstore',
        'sinter',
        'sinterstore',
        'smembers',
        'smove',
        'spop',
        'srandmember',
        'sunion',
        'sunionstore',
        'scan',
        'script',
        'set',
        'setbit',
        'setrange',
        'setex',
        'setnx',
        'sort',
        'sscan',
        'strlen',
        'ttl',
        'type',
        'unwatch',
        'watch',
        'zadd',
        'zcard',
        'zcount',
        'zincrby',
        'zlexcount',
        'zrange',
        'zrangebylex',
        'zrangebyscore',
        'zrank',
        'zremrangebylex',
        'zrevrange',
        'zrevrangebylex',
        'zrevrangebyscore',
        'zrevrank',
        'zscore',
        'zscan',
        'del',
        'expire',
        'keys',
        'llen',
        'lindex',
        'lrange',
        'lrem',
        'ltrim',
        'mget',
        'rename',
        'scard',
        'sismember',
        'srem',
        'zrem',
        'zremrangebyrank',
        'zremrangebyscore',
        'zinterstore',
        'zunionstore',
        'hmset',
        'psubscribe',
        'multi',
        'publish',
        'pubsub',
        'punsubscribe',
        'subscribe',
        'unsubscribe',
    ];
}

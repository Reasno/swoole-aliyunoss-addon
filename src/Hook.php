<?php

namespace Oss\OssClient {
    function is_resource($resource)
    {
        if (\Swoole\Runtime::getHookFlags() & SWOOLE_HOOK_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Curl\Handler;
        }
        return \is_resource($resource);
    }
}

namespace Oss\Http {
    function is_resource($resource)
    {
        if (\Swoole\Runtime::getHookFlags() & SWOOLE_HOOK_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Curl\Handler;
        }
        return \is_resource($resource);
    }
}

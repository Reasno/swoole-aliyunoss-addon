本组件解决了阿里云官方PHP OSS SDK和Swoole CURL_HOOK的兼容问题。

安装本组件后就可以顺畅开启CURL_HOOK协程化阿里云OSS。

## 问题
开启CURL_HOOK后使用阿里云OSS会报错：

```
Oss\Core\OssException: : RequestId:
```


## 解决方案
请同时安装官方SDK和本组件。

```bash
composer require aliyuncs/oss-sdk-php
composer require reasno/swoole-aliyunoss-addon
```

如果解决了问题，请star 谢谢！

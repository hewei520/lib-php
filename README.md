# lib-php
The public library for xiniao

### 一、安装
#### 1.依赖
* composer
* thinkphp5.1

#### 2.安装方法
```
composer require xn/lib-php:{version}

说明：{version}指定的版本号
```
### 二、目录结构

```
lib-php  跟目录
├─log                  日志目录
│  └─Log.php           日志类文件
│
├─src                  src目录
│  ├─Output.php        输出类文件 
│  └─StatusCode.php    状态码与映射归类文件
│
├─composer.json         composer 定义文件
├─README.md             README 文件
```

### 三、SDK

#### 1.调用方法

```
日志静态调用方法有：info、debug、error、warning、sql、log

Log::info($message, $context)
Log::debug($message, $context)
Log::error($message, $context)
Log::warning($message, $context)
Log::sql($message, $context)
Log::log($level, $message, $context)

说明：$message日志消息 $context

```
# lib-php
The public library for xiniao

### 一、安装
#### 1.依赖
* composer
* thinkphp5.1

#### 2.安装方法
```
composer require hw/lib-php:{version}

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

### 三、使用方法

#### 1.日志调用方法

```
日志静态调用方法有：info、debug、error、warning、sql、log

\hw\log\Log::info($message, $context)
\hw\log\Log::debug($message, $context)
\hw\log\Log::error($message, $context)
\hw\log\Log::warning($message, $context)
\hw\log\Log::sql($message, $context)
\hw\log\Log::log($level, $message, $context)

说明：$message描述信息 $context内容 $level日志等级

```
#### 2.输出接口调用方法
```
输出类静态调用方法

\hw\output\Output::result($code, $data, $message)
\hw\output\Output::success($data)
\hw\output\Output::error($code, $data, $message)

说明：$code状态码 $data数据 $message状态信息
```
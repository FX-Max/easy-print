# easy-print

一个极简的打印输出数据的工具库，方便日常开发调试。

## Installing

```shell
$ composer require maxfang/easy-print
```

## Usage

```php

$str = 'hello world';
e($str);

$str = 'hello world';
ed($str);

$data = [
    'code' => '200',
    'msg' => 'success',
    'data' => [
        'id' => '369',
        'name' => 'boz',
    ]
];
p($data);

$data = [
    'code' => '200',
    'msg' => 'success',
    'data' => [
        'id' => '369',
        'name' => 'boz',
    ]
];
pd($data);

```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue](https://github.com/FX-Max/easy-print/issues).
2. Answer questions or fix bugs on the [issue](https://github.com/FX-Max/easy-print/issues).
3. Contribute new features or update the wiki.

## License

MIT
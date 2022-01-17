<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class EasyPrintTest extends TestCase
{
    public function setUp(): void
    {

    }

    public function tearDown(): void
    {

    }

    public function testP()
    {
        $data = [
            'code' => '200',
            'msg' => 'success',
            'data' => [
                'id' => '369',
                'name' => 'boz',
            ]
        ];
        p($data);
    }

    public function testD()
    {
        $data = [
            'code' => '200',
            'msg' => 'success',
            'data' => [
                'id' => '369',
                'name' => 'boz',
            ]
        ];
        d($data);
    }

    public function testE()
    {
        $str = 'hello world';
        $prefix = '[easy-print]';
        e($str, $prefix);
    }
}

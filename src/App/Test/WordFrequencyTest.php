<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 28.12.16
 * Time: 19:38
 */

namespace App\Test;

use App\WordFrequency;
use PHPUnit\Framework\TestCase;

class WordFrequencyTest extends TestCase
{
    public function testGetFrequentWord()
    {
        $wordFrequency = new WordFrequency();
        $result = $wordFrequency->getWordFrequency('I call our world Flatland, I call of.');
        
        $this->assertCount(6, $result);
        $this->assertEquals(['our' => 1, 'world' => 1, 'flatland' => 1, 'of' => 1, 'i' => 2, 'call' =>2 ], $result);
    }
}
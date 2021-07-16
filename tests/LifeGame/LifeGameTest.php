<?php
declare(strict_types=1);

namespace Tests\LifeGame;


use App\LifeGame\LifeGame;
use PHPUnit\Framework\TestCase;

class LifeGameTest extends TestCase
{

    public function test_自身が生きている状態で周りに2つの生命がいる場合、生存(): void
    {
        //準備
        $lifeGame = new LifeGame();
        $x = 1;
        $y = 1;
        //実行 & 検証
        self::assertTrue($lifeGame->isAlive($x, $y));
    }
}

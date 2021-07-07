<?php
declare(strict_types=1);

namespace Tests\BowlingGame;

use App\BowlingGame\BowlingGame;
use PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{
    public function testGutterGame(): void
    {
        $game = new BowlingGame();
        for($i = 0; $i < 20; $i++) {
            $game->roll(0);
        }
        self::assertSame(0, $game->score());
    }
}

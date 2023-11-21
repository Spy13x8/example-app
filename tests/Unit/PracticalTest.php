<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use SahilExamples\Practical; // Correct namespace import

require(__DIR__.'/../../SahilExamples/Practical.php'); // Correct path to Practical.php

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1, 3), 4);
    }
}

?>

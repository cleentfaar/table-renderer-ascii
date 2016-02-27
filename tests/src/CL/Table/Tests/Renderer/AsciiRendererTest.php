<?php

namespace CL\Table\Tests\Renderer;

use CL\Table\Renderer\AsciiRenderer;
use CL\Table\Renderer\RendererInterface;
use CL\Table\Row;
use CL\Table\Table;

class AsciiRendererTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(RendererInterface::class, new AsciiRenderer());
    }

    /**
     * @test
     */
    public function it_can_render_an_ascii_table()
    {
        $table = new Table();

        $table->addRow(new Row(['foo' => 'bar']));

        $expectedAscii = <<<PHP_EOL
| foo |
| bar |

PHP_EOL;

        $this->assertSame($expectedAscii, (new AsciiRenderer())->render($table));
    }

    /**
     * @test
     */
    public function it_can_render_an_ascii_table_without_headers()
    {
        $table = new Table();

        $table->addRow(new Row(['foo' => 'bar']));

        $expectedAscii = <<<PHP_EOL
| bar |

PHP_EOL;

        $this->assertSame($expectedAscii, (new AsciiRenderer())->render($table, false));
    }

    /**
     * @test
     */
    public function it_automatically_sizes_columns_to_the_width_of_the_biggest_value()
    {
        $table = new Table();

        $table->addRow(new Row(['Season' => 1, 'Episode' => 1, 'Title' => 'Pilot']));
        $table->addRow(new Row(['Season' => 1, 'Episode' => 2, 'Title' => 'Cat\'s in the Bag...']));
        $table->addRow(new Row(['Season' => 1, 'Episode' => 3, 'Title' => '...And the Bag\'s in the River']));

        $expectedAscii = <<<PHP_EOL
| Season | Episode | Title                         |
| 1      | 1       | Pilot                         |
| 1      | 2       | Cat's in the Bag...           |
| 1      | 3       | ...And the Bag's in the River |

PHP_EOL;

        $this->assertSame($expectedAscii, (new AsciiRenderer())->render($table));
    }
}

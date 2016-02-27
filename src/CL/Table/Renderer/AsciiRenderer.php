<?php

namespace CL\Table\Renderer;

use CL\Table\Column;
use CL\Table\Table;

class AsciiRenderer implements RendererInterface
{
    /**
     * @var string
     */
    private $buffer;

    /**
     * @var array
     */
    private $maxWidths = [];

    /**
     * @inheritdoc
     */
    public function render(Table $table, $withHeaders = true)
    {
        $this->maxWidths = [];

        if ($withHeaders) {
            $this->writeHeader($table);
        }

        $this->writeBody($table);

        return $this->buffer;
    }

    /**
     * @param string $ascii
     */
    protected function writeLine($ascii)
    {
        $this->buffer .= $ascii."\n";
    }

    /**
     * @param Table $table
     */
    private function writeHeader(Table $table)
    {
        $line = '';

        foreach ($table->getColumns() as $column) {
            if (!$line) {
                $line .= '|';
            }

            $columnWidth = $this->getMaxColumnWidth($column);
            $value = $column->getLabel();
            $suffix = '';
            $prefix = '';

            if ($value) {
                $prefix = ' ';
                $missingSpaces = $columnWidth - mb_strlen($value) + mb_strlen($prefix);
                if ($missingSpaces > 0) {
                    $suffix = str_repeat(' ', $missingSpaces);
                } else {
                    $suffix = ' ';
                }
            }

            $line .= sprintf('%s%s%s|', $prefix, $value, $suffix);
        }

        if ($line) {
            $this->writeLine($line);
        }
    }

    /**
     * @param Table $table
     */
    private function writeBody(Table $table)
    {
        foreach ($table->toArray() as $row) {
            $line = '';
            foreach ($row as $column => $value) {
                if (!$line) {
                    $line .= '|';
                }

                $columnWidth = $this->getMaxColumnWidth($table->getColumn($column));
                $suffix = '';
                $prefix = '';

                if ($value) {
                    $prefix = ' ';
                    $missingSpaces = $columnWidth - mb_strlen($value) + mb_strlen($prefix);
                    if ($missingSpaces > 0) {
                        $suffix = str_repeat(' ', $missingSpaces);
                    } else {
                        $suffix = ' ';
                    }
                }

                $line .= sprintf('%s%s%s|', $prefix, $value, $suffix);
            }

            if ($line) {
                $this->writeLine($line);
            }
        }
    }

    /**
     * @param Column $column
     */
    private function getMaxColumnWidth(Column $column)
    {
        if (!array_key_exists($column->getName(), $this->maxWidths)) {
            $maxWidth = mb_strlen($column->getLabel());

            foreach ($column->getValues() as $value) {
                $width = mb_strlen($value);

                if ($width > $maxWidth) {
                    $maxWidth = $width;
                }
            }

            $this->maxWidths[$column->getName()] = $maxWidth;
        }

        return $this->maxWidths[$column->getName()];
    }
}

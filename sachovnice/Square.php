<?php

class Square
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function equals(Square $other): bool
    {
        return $this->x === $other->getX() && $this->y === $other->getY();
    }

    public function getValidMoves(): array
    {
        $moves = [
            [-2, -1], [-1, -2], [1, -2], [2, -1], [2, 1], [1, 2], [-1, 2], [-2, 1]
        ];

        $validMoves = [];
        foreach ($moves as [$dx, $dy]) {
            $newX = $this->x + $dx;
            $newY = $this->y + $dy;
            if ($this->isValidPosition($newX, $newY)) {
                $validMoves[] = new self($newX, $newY);
            }
        }

        return $validMoves;
    }

    private function isValidPosition(int $x, int $y): bool
    {
        return $x >= 0 && $x < 8 && $y >= 0 && $y < 8;
    }

}

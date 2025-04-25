<?php

class ChessKnightPathFinder
{
    
    public function shortestHorseJourney(Square $a, Square $b): array
    {
        $queue = [[$a]];
        $visited = [];
        $visited[$this->generateKey($a)] = true;

        while (!empty($queue)) {
            $path = array_shift($queue);
            $current = end($path);

            if ($current->equals($b)) {
                return $path;
            }

            foreach ($current->getValidMoves() as $move) {
                if (!isset($visited[$this->generateKey($move)])) {
                    $visited[$this->generateKey($move)] = true;
                    $newPath = $path;
                    $newPath[] = $move;
                    $queue[] = $newPath;
                }
            }
        }

        return [];
    }

    private function generateKey(Square $policko): string
    {
        return $policko->getX() . ',' . $policko->getY();
    }

}
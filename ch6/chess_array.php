<?php
$chessboard = array(
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
    array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R'),
);
/*
$files = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');

function findPiece($input_piece, $array)
{
    foreach ($array as $row) {
        foreach ($row as $file => $piece)
            if ($piece === $input_piece) {
                return array($file, key($row));
                break;
            }
    }
}

function playChess(string $piece, string $file, int $row, $array)
{
    static $turn = 0;
    if ($turn % 2 === 0) {
        strtoupper($piece);
    }
}

print_r(findPiece('K', $chessboard));
*/
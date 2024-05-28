<?php

declare(strict_types=1);

function is_input_empty(string $search_dormer) {
    return empty($search_dormer);
}

function is_search_dormer_right_length(string $search_dormer) {
    return strlen($search_dormer) != 10;
}
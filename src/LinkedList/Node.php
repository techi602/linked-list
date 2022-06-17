<?php

namespace LinkedList;

class Node
{
    public int $value;

    public ?Node $next = null;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}

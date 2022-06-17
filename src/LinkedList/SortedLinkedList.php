<?php

namespace LinkedList;

class SortedLinkedList
{
    private ?Node $head = null;

    public function insertNode(Node $newNode): void
    {
        if ($this->head === null || $this->head->value >= $newNode->value) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $node = $this->head;

            while (
                $node->next !== null
                && $node->next->value <= $newNode->value
            ) {
                $node = $node->next;
            }

            $newNode->next = $node->next;
            $node->next = $newNode;
        }
    }

    public function getHead(): ?Node
    {
        return $this->head;
    }
}

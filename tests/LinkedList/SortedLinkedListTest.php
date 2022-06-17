<?php

namespace LinkedList;

use PHPUnit\Framework\TestCase;

class SortedLinkedListTest extends TestCase
{
    public function testSortedList()
    {
        $linkedList = new SortedLinkedList();

        $linkedList->insertNode(new Node(16));
        $linkedList->insertNode(new Node(23));
        $linkedList->insertNode(new Node(4));
        $linkedList->insertNode(new Node(42));
        $linkedList->insertNode(new Node(8));
        $linkedList->insertNode(new Node(15));

        $firstNode = $linkedList->getHead();

        $node = $firstNode;

        $this->assertNotNull($node);
        $this->assertSame(4, $node->value);

        $node = $node->next;
        $this->assertNotNull($node);
        $this->assertSame(8, $node->value);

        $node = $node->next;
        $this->assertNotNull($node);
        $this->assertSame(15, $node->value);

        $node = $node->next;
        $this->assertNotNull($node);
        $this->assertSame(16, $node->value);

        $node = $node->next;
        $this->assertNotNull($node);
        $this->assertSame(23, $node->value);

        $node = $node->next;
        $this->assertNotNull($node);
        $this->assertSame(42, $node->value);

        $this->assertSame(null, $node->next);
    }
}

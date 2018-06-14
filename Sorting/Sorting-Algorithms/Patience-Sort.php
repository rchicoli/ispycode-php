
<?php

class PilesHeap extends SplMinHeap {
   public function compare($pile1, $pile2) {
      return parent::compare($pile1->top(), $pile2->top());
   }
}

function patience_sort(&$n) {
   $piles = array();
   foreach ($n as $x) {
      $low = 0; $high = count($piles)-1;
      while ($low <= $high) {
         $mid = (int)(($low + $high) / 2);
         if ($piles[$mid]->top() >= $x)
            $high = $mid - 1;
         else
            $low = $mid + 1;
      }
      $i = $low;
      if ($i == count($piles))
         $piles[] = new SplStack();
      $piles[$i]->push($x);
   }

   $heap = new PilesHeap();
   foreach ($piles as $pile)
   $heap->insert($pile);
   for ($c = 0; $c < count($n); $c++) {
      $smallPile = $heap->extract();
      $n[$c] = $smallPile->pop();
      if (!$smallPile->isEmpty())
         $heap->insert($smallPile);
   }
   assert($heap->isEmpty());
}

$array = array(20,43,65,88,11,33,56,74);
patience_sort($array);
print_r($array);

?>



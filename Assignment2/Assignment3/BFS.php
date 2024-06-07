<?php

function bfs($graph, $startNode) {
    $Node = count($graph);
    $visited = array_fill(0, $Node, false);
    $queue = new SplQueue();
    $result = [];

    $queue->enqueue($startNode);
    $visited[$startNode] = true;

    while (!$queue->isEmpty()) {
        $curNode = $queue->dequeue();
        $result[] = $curNode;

        for ($i = 0; $i < $Node; $i++) {
            if ($graph[$curNode][$i] == 1 && !$visited[$i]) {
                $queue->enqueue($i);
                $visited[$i] = true;
            }
        }
    }

    return $result;
}

$Node = 6;

$graph = array_fill(0, $Node, array_fill(0, $Node, 0));

$edges = [
    [0, 1],
    [0, 2],
    [1, 3],
    [1, 4],
    [2, 4],
    [3, 4],
    [4, 5]
];

foreach ($edges as $edge) {
    $u = $edge[0];
    $v = $edge[1];
    $graph[$u][$v] = 1;
    $graph[$v][$u] = 1; 
}

$startNode = 0;

$Result = bfs($graph, $startNode);

for($i = 0; $i < $Node; $i++) {
    echo $Result[$i];echo " ";
}

?>

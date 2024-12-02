<?php
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int 
{
    static $count = 0;
    ++$count;

    //echo "<table>";
    echo "<tr>";
    echo '<th style="background-color:' . $color .';"></th>';

    for($c = 1; $c <= $cols; $c++) {
        echo '<th style="background-color:' . $color .';">', $c, '</th>';
    }
    echo "</tr>";

    for ($r = 1; $r <= $rows; $r++) {
        echo '<tr>';
        
        echo '<th style="background-color:' . $color .';">', $r, '</th>';
        for ($c = 1; $c <= $cols; $c++) {
            echo "<td>", $r * $c, "</td>";
        }
        echo "</tr>";
    }

    //echo "</table>";

    return $count;
    }

    function getMenu(array $menu, bool $vertical = true) {
        if ($vertical === true) {
            $menuClasses = 'menu';
        } else {
            $menuClasses = 'menu vertical';
        }

        echo "<ul class='$menuClasses'>";
        foreach ($menu as $value) {
            echo "<li><a href={$value['href']}>{$value['link']}</a></li>";
        }
        echo "</ul>";
    }
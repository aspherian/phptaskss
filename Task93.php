<?php
function generatePascalsTriangle($rows): array
{
    $triangle = array();
    for ($i = 0; $i < $rows; $i++) {
        $triangle[$i] = array();
        for ($j = 0; $j <= $i; $j++) {
            if ($j === 0 || $j === $i) {
                $triangle[$i][$j] = 1;
            } else {
                $triangle[$i][$j] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
            }
        }
    }
    return $triangle;
}

$rows = 10;

$triangle = generatePascalsTriangle($rows);
?>

<!DOCTYPE html>
<html>
<head>
    <title>XD</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php foreach ($triangle as $row): ?>
            <tr>
                <?php foreach ($row as $number): ?>
                    <td><?php echo $number; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

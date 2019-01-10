<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Population</title>
</head>
<body>
    <table>
    <tr>
    <th>State</th><th>City</th><th>Population</th>
    </tr>
    <?php
    $states = array(
        'Калифорния' => array('Лос-Анджелес' => 3792621, 'Сан-Диего' => 1307402, 'Сан-Хосе' => 945942),
        'Иллинойс' => array('Чикаго' => 2695598),
        'Техас' => array('Хьюстон' => 2100263, 'Сан-Антонио' => 1327407, 'Даллас' => 1197816),
        'Пенсильвания' => array('Филадельфия' => 1526006),
        'Аризона' => array('Феникс' => 1445632)
    );
    $total = 0;
    foreach($states as $state => $cities){
        $statepopulation = array_sum($cities);
        $total += $statepopulation;
        echo '<tr><td>'.$state.'</b></td></tr>';    
       foreach($cities as $city => $population){
           echo '<tr><td></td><td>'.$city.'</td><td>'. $population.'</td></tr>';
       }
    }    
    ?>
    </table>
    <p>Total population is <?= $total ?></p>
</body>
</html>
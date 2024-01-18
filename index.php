<h3>1.</h3>
<?php
    //1
    $arr = [];
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        $arr[$i] = $i;
        $sum += $arr[$i];
    }
    echo "Сумма от 1 до 100 = $sum<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    //echo array_sum(range(1, 100));
    //$arr = range(1,100);
?>
<h3>2.</h3>
<?php
   $elements = ['a', 'b', 'c', 'd', 'e'];
   $elements = array_map('strtoupper', $elements);
   echo "<pre>";
   print_r($elements);
   echo "</pre>";
?>
<h3>3.</h3>
<?php
    $arr = array('el', 1, 2, 3, 'p', 20.3);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "Количество элементов " . count($arr);
?>
<h3>4.</h3>
<?php
    $arr = array('el', 1, 2, 3, 'p', 20.3);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "Последний элемент " . $arr[count($arr) - 1];
?>
<h3>5.</h3>
<?php
    $arr = range(1,5);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    if (in_array(3, $arr))
	    echo "Есть элемент со значением 3";
    else echo "Нет элемента со значением 3"
?>
<h3>6.</h3>
<?php
    $arr = [1,2,3,4,5];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $sum = 0;
    for($i = 0; $i < count($arr); $i++){
        $sum += $arr[$i];
    }
    echo "Сумма элементов массива равна $sum";
?>
<h3>7.</h3>
<?php
    $arr = [1,2,3,4,5];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $mult = 1;
    for($i = 0; $i < count($arr); $i++){
        $mult *= $arr[$i];
    }
    echo "Произведение элементов массива равно $mult";
?>
<h3>8.</h3>
<?php
    $arr = [1,2,3,4,5];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $arithmetic_mean = array_sum($arr)/count($arr);
    echo "Среднее арифметическое элементов  $arithmetic_mean";
?>
<h3>9.</h3>
<?php
    $arr = range(1, 100);
    echo "Массив, заполненный числами от 1 до 100:";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>
<h3>10.</h3>
<?php
    $arr = range('a','z');
    echo "Массив, заполненный буквами от a до z:";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
?>
<h3>11.</h3>
<?php
    $string = implode('-', range(1, 9));
    echo $string . "<br>";
?>
<h3>12.</h3>
<?php
    $sum = array_sum(range(1, 100));
    echo "Сумма от 1 до 100 без цикла $sum<br>";
?>
<h3>13.</h3>
<?php
    $mult_ar = array_product(range(1,10));
    echo "Произведение от 1 до 10 без цикла $mult_ar<br>";
?>
<h3>14.</h3>
<?php
    $nums = [1, 2, 3];
    $lett = ['a', 'b', 'c'];
    $combine = array_merge($nums, $lett);

    echo 'Массив $nums:';
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    echo 'Массив $lett:';
    echo "<pre>";
    print_r($lett);
    echo "</pre>";
    echo "Объединённый массив:";
    echo "<pre>";
    print_r($combine);
    echo "</pre>";
?>
<h3>15.</h3>
<?php
    $arr = [1, 2, 3, 4, 5];
    $sl_arr = array_slice($arr, 1, 3);
    echo "<pre>";
    print_r($sl_arr);
    echo "</pre>";
?>
<h3>16.</h3>
<?php
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 1, 2);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
<h3>17.</h3>
<?php
    $array = [1, 2, 3, 4, 5];
    $new_array = array_splice($array, 1, 3);
    echo "<pre>";
    print_r($new_array);
    echo "</pre>";
?>
<h3>18.</h3>
<?php
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 3, 0, ['a', 'b', 'c']);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
<h3>19.</h3>
<?php
    $array = [1, 2, 3, 4, 5];
    array_splice($array, 1, 0, ['a', 'b']);
    array_splice($array, 6, 0, 'c');
    array_splice($array, 8, 0, 'e');
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
<h3>20.</h3>
<?php
    $arr = array('a' => 1, 'b' => 2, 'c' => 3);
    $keys = array_keys($arr);
    $values = array_values($arr);
    echo "Ключи: ";
    print_r($keys);
    echo "<br>";
    echo "Значения: ";
    print_r($values);
?>
<h3>21</h3>
<?php
    $arr1 = ['a', 'b', 'c'];
    $arr2 = [1, 2, 3];
    $combineArr = array_combine($arr1,$arr2);
    echo "Итоговый массив: ";
    print_r($combineArr);
?>
<h3>22</h3>
<?php
    $arr = array('a' => 1, 'b' => 2, 'c' => 3);
    $arr = array_flip($arr);
    echo "Изменённый массив: ";
    print_r($arr);
?>
<h3>23</h3>
<?php
    $array = range(1,5);
    $array = array_reverse($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
?>
<h3>24</h3>
<?php
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    $index = array_search('-', $arr);
    echo "Позиция первого элемента '-': $index";
?>
<h3>25</h3>
<?php
    $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    $index = array_search('-', $arr);
    array_splice($arr, $index,1);
    echo "Изменённый массив: ";
    print_r($arr);
?>
<h3>26</h3>
<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $arr[0] = '!';
    $arr[3] = '!!';
    echo "Изменённый массив: ";
    print_r($arr);
?>
<h3>27</h3>
<?php
    $arr = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');
    echo "Массив до сортировок:<br>";
    print_r($arr);
    echo "<br>Перемешиваем элементы массива в случайном порядке(shuffle)<br>";
    shuffle($arr);
    print_r($arr);
    echo "<br>По возрастанию по значению(asort)<br>";
    asort($arr);
    print_r($arr);
    echo "<br>По убыванию по значению(arsort)<br>";
    arsort($arr);
    print_r($arr);
?>
<h3>28</h3>
<?php
    $arr = array('a' => 1, 'b' => 2, 'c' => 3);
    print_r($arr);
    $randomKey = array_rand($arr);
    echo "Случайный ключ: " . $randomKey;
?>
<h3>29</h3>
<?php
    $arr = array('a' => 1, 'b' => 2, 'c' => 3);
    print_r($arr);
    $randomEl = $arr[array_rand($arr)];
    echo "Случайный элемент: " . $randomEl;
?>
<h3>30</h3>
<?php
    $arr = range(1,5);
    print_r($arr);
    shuffle($arr);
    echo "<br>Перемешанный массив: <br>";
    print_r($arr);
?>
<h3>31</h3>
<?php
    $arr = range(1,25);
    print_r($arr);
    shuffle($arr);
    echo "<br>Перемешанный  массив: <br>";
    print_r($arr);
?>
<h3>32</h3>
<?php
    $arr = range('a', 'z');
    print_r($arr);
    shuffle($arr);
    echo "<br>Буквы в случ порядке массив: <br>";
    print_r($arr);
?>
<h3>33</h3>
<?php
    $arr = range('a', 'z');
    $rand_keys = array_rand($arr, 6);
    $string = "";
    foreach ($rand_keys as $key => $el){
        $string .= $arr[$el];
    }
    print_r($string);
?>
<h3>34</h3>
<?php
    $arr = ['a', 'b', 'c', 'b', 'a'];
    $new_arr = array_unique($arr);
    print_r($new_arr);
?>
<h3>35</h3>
<?php
    $arr = [1, 2, 3, 4, 5];
    print_r($arr);
    echo "<br>" . array_shift($arr) . ',' . array_pop($arr);
?>
<h3>36</h3>
<?php
    $arr = [1, 2, 3, 4, 5];
    print_r($arr);
    array_unshift($arr, 0);
    array_push($arr, 6);
    print_r($arr);
?>
<h3>37</h3>
<?php
    $arr = range(1, 8);
    for($i = 0; $i < 4; $i++)
    {
        echo array_shift($arr);
        echo array_pop($arr);
    }
?>
<h3>38</h3>
<?php
    $arr = ['a', 'b', 'c'];
    $new_arr = array_pad($arr, 6, '-');
    print_r($new_arr);
?>
<h3>39</h3>
<?php
    $arr = array_fill(0, 10, 'x');
    print_r($arr);
?>
<h3>40</h3>
<?php
    $arr = range(1, 20);
    $new_arr = array_chunk($arr, 4);
    for($i = 1; $i <= 5; $i++){
        echo "$i) ";
        print_r($new_arr[$i-1]);
        echo "<br>";
    }
?>
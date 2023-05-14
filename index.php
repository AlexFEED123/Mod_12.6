<!DOCTYPE html>
<html lang="ru">
   <head>
         <meta charset="utf-8">
         <title>сравнения</title>  
          <link href="style.css" rel="stylesheet"> 
   </head>
     <body>
        <table align="center" border ="2">
            <caption>Таблица истиности PHP</caption>
  <tbody>
    <tr>
      <th>A</th>
      <th>B</th>
      <th>!A</th>
      <th>A||B</th>
      <th>A&&B</th>
      <th>A xor B</th>
    </tr>
    <tr>
      <td><?php $a = 0; print $a;?></td>
      <td><?php $b = 0; print $b;?></td>
      <td><?php var_export(!$a);?></td>
      <td><?php var_export($a || $b);?></td>
      <td><?php var_export($a && $b);?></td>
      <td><?php var_export($a xor $b);?></td>
    </tr>
    <tr>
      <td><?php $a = 0; var_export($a);?></td>
      <td><?php $b = 1; var_export($b);?></td>
      <td><?php var_export(!$a);?></td>
      <td><?php var_export($a || $b);?></td>
      <td><?php var_export($a && $b);?></td>
      <td><?php var_export($a xor $b);?></td>
    </tr>
    <tr>
      <td><?php $a = 1; var_export($a);?></td>
      <td><?php $b = 0; var_export($b);?></td>
      <td><?php var_export(!$a);?></td>
      <td><?php var_export($a || $b);?></td>
      <td><?php var_export($a && $b);?></td>
      <td><?php var_export($a xor $b);?></td>
    </tr>
    <tr>
      <td><?php $a = 1; var_export($a);?></td>
      <td><?php $b = 1; var_export($b);?></td>
      <td><?php var_export(!$a);?></td>
      <td><?php var_export($a || $b);?></td>
      <td><?php var_export($a && $b);?></td>
      <td><?php var_export($a xor $b);?></td>
    </tr>
  </tbody>
</table>
<hr>
 <table align="center" border ="2" id="easy">
            <caption>Таблица гибкого сравнения</caption>
  <tbody>
    <tr>
      <th></th>
      <th><?php $t = true; var_export($t);?></th>
      <th><?php $f = false; var_export($f);?></th>
      <th><?php $one = 1; var_export($one);?></th>
      <th><?php $zero = 0; var_export($zero);?></th>
      <th><?php $unOne = -1; var_export($unOne);?></th>
      <th><?php $stOne = "1"; var_export($stOne);?></th>
      <th><?php $preNull = null; var_export($preNull);?></th>
      <th><?php $stPhp = "php"; var_export($stPhp);?></th>
    </tr>
    <tr>
      <th><?php $t1 = true; var_export($t1);?></th>
      <td class="t"><?php var_export($t == $t1)?></td>
      <td><?php var_export($t1 == $f);?></td>
      <td class="t"><?php var_export($t1 == $one);?></td>
      <td><?php var_export($t1 == $zero);?></td>
      <td class="t"><?php var_export($t1 == $unOne);?></td>
      <td class="t"><?php var_export($t1 == $stOne);?></td>
      <td><?php var_export($t1 == $preNull);?></td>
      <td class="t"><?php var_export($t1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $f1 = false; var_export($f1);?></th>
      <td><?php var_export($f1 == $t);?></td>
      <td class="t"><?php var_export($f1 == $f);?></td>
      <td><?php var_export($f1 == $one);?></td>
      <td class="t"><?php var_export($f1 == $zero);?></td>
      <td><?php var_export($f1 == $unOne);?></td>
      <td><?php var_export($f1 == $stOne);?></td>
      <td class="t"><?php var_export($f1 == $preNull);?></td>
      <td><?php var_export($f1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $one1 = 1; var_export($one1);?></th>
      <td class="t"><?php var_export($one1 == $t);?></td>
      <td><?php var_export($one1 == $f);?></td>
      <td class="t"><?php var_export($one1 == $one);?></td>
      <td><?php var_export($one1 == $zero);?></td>
      <td><?php var_export($one1 == $unOne);?></td>
      <td class="t"><?php var_export($one1 == $stOne);?></td>
      <td><?php var_export($one1 == $preNull);?></td>
      <td><?php var_export($one1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $zero1 = 0; var_export($zero1);?></th>
      <td><?php var_export($zero1 == $t);?></td>
      <td class="t"><?php var_export($zero1 == $f);?></td>
      <td><?php var_export($zero1 == $one);?></td>
      <td class="t"><?php var_export($zero1 == $zero);?></td>
      <td><?php var_export($zero1 == $unOne);?></td>
      <td><?php var_export($zero1 == $stOne);?></td>
      <td class="t"><?php var_export($zero1 == $preNull);?></td>
      <td><?php var_export($zero1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $unOne1 = -1; var_export($unOne1);?></th>
      <td class="t"><?php var_export($unOne1 == $t);?></td>
      <td><?php var_export($unOne1 == $f);?></td>
      <td><?php var_export($unOne1 == $one);?></td>
      <td><?php var_export($unOne1 == $zero);?></td>
      <td class="t"><?php var_export($unOne1 == $unOne);?></td>
      <td><?php var_export($unOne1 == $stOne);?></td>
      <td><?php var_export($unOne1 == $preNull);?></td>
      <td><?php var_export($unOne1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $stOne1 = "1";  var_export($stOne1);?></th>
      <td class="t"><?php var_export($stOne1 == $t);?></td>
      <td><?php var_export($stOne1 == $f);?></td>
      <td class="t"><?php var_export($stOne1 == $one);?></td>
      <td><?php var_export($stOne1 == $zero);?></td>
      <td><?php var_export($stOne1 == $unOne);?></td>
      <td class="t"><?php var_export($stOne1 == $stOne);?></td>
      <td><?php var_export($stOne1 == $preNull);?></td>
      <td><?php var_export($stOne1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $preNull1 = null;  var_export($preNull1);?></th>
      <td><?php var_export($preNull1 == $t);?></td>
      <td class="t"><?php var_export($preNull1 == $f);?></td>
      <td><?php var_export($preNull1 == $one);?></td>
      <td class="t"><?php var_export($preNull1 == $zero);?></td>
      <td><?php var_export($preNull1 == $unOne);?></td>
      <td><?php var_export($preNull1 == $stOne);?></td>
      <td class="t"><?php var_export($preNull1 == $preNull);?></td>
      <td><?php var_export($preNull1 == $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $stPhp1 = 'php'; var_export($stPhp1);?></th>
      <td class="t"><?php var_export($stPhp1 == $t);?></td>
      <td><?php var_export($stPhp1 == $f);?></td>
      <td><?php var_export($stPhp1 == $one);?></td>
      <td class="t"><?php var_export($stPhp1 == $zero);?></td>
      <td><?php var_export($stPhp1 == $unOne);?></td>
      <td><?php var_export($stPhp1 == $stOne);?></td>
      <td><?php var_export($stPhp1 == $preNull);?></td>
      <td class="t"><?php var_export($stPhp1 == $stPhp);?></td>
    </tr>
  </tbody>
</table>

<div>
          <p>
            В  PHP при сравнении строк, содержащих числа, оператор == пытается преобразовать их в числа<br>
            При нестрогом сравнении, например, строки с числом, строка приводится к числу (int) со значением равным 0<br>
            При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение<br>
            Если сравнить bool или null с чем угодно оба операнда преобразуются в bool, FALSE < TRUE<br>
            При сравнении null или string с string NULL преобразуется в «», числовое или лексическое сравнение <br>

          </p>
       </div>

<table align="center" border ="2" id="hard">
            <caption>Таблица жёсткого сравнения</caption>
  <tbody>
    <tr>
      <th></th>
      <th><?php $t = true; var_export($t);?></th>
      <th><?php $f = false; var_export($f);?></th>
      <th><?php $one = 1; var_export($one);?></th>
      <th><?php $zero = 0; var_export($zero);?></th>
      <th><?php $unOne = -1; var_export($unOne);?></th>
      <th><?php $stOne = "1"; var_export($stOne);?></th>
      <th><?php $preNull = null; var_export($preNull);?></th>
      <th><?php $stPhp = "php"; var_export($stPhp);?></th>
    </tr>
    <tr>
      <th><?php $t1 = true; var_export($t1);?></th>
      <td class="t"><?php var_export($t === $t1)?></td>
      <td><?php var_export($t1 === $f);?></td>
      <td><?php var_export($t1 === $one);?></td>
      <td><?php var_export($t1 === $zero);?></td>
      <td><?php var_export($t1 === $unOne);?></td>
      <td><?php var_export($t1 === $stOne);?></td>
      <td><?php var_export($t1 === $preNull);?></td>
      <td><?php var_export($t1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $f1 = false; var_export($f1);?></th>
      <td><?php var_export($f1 === $t);?></td>
      <td class="t"><?php var_export($f1 === $f);?></td>
      <td><?php var_export($f1 === $one);?></td>
      <td><?php var_export($f1 === $zero);?></td>
      <td><?php var_export($f1 === $unOne);?></td>
      <td><?php var_export($f1 === $stOne);?></td>
      <td><?php var_export($f1 === $preNull);?></td>
      <td><?php var_export($f1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $one1 = 1; var_export($one1);?></th>
      <td><?php var_export($one1 === $t);?></td>
      <td><?php var_export($one1 === $f);?></td>
      <td class="t"><?php var_export($one1 === $one);?></td>
      <td><?php var_export($one1 === $zero);?></td>
      <td><?php var_export($one1 === $unOne);?></td>
      <td><?php var_export($one1 === $stOne);?></td>
      <td><?php var_export($one1 === $preNull);?></td>
      <td><?php var_export($one1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $zero1 = 0; var_export($zero1);?></th>
      <td><?php var_export($zero1 === $t);?></td>
      <td><?php var_export($zero1 === $f);?></td>
      <td><?php var_export($zero1 === $one);?></td>
      <td class="t"><?php var_export($zero1 === $zero);?></td>
      <td><?php var_export($zero1 === $unOne);?></td>
      <td><?php var_export($zero1 === $stOne);?></td>
      <td><?php var_export($zero1 === $preNull);?></td>
      <td><?php var_export($zero1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $unOne1 = -1; var_export($unOne1);?></th>
      <td><?php var_export($unOne1 === $t);?></td>
      <td><?php var_export($unOne1 === $f);?></td>
      <td><?php var_export($unOne1 === $one);?></td>
      <td><?php var_export($unOne1 === $zero);?></td>
      <td class="t"><?php var_export($unOne1 === $unOne);?></td>
      <td><?php var_export($unOne1 === $stOne);?></td>
      <td><?php var_export($unOne1 === $preNull);?></td>
      <td><?php var_export($unOne1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $stOne1 = "1";  var_export($stOne1);?></th>
      <td><?php var_export($stOne1 === $t);?></td>
      <td><?php var_export($stOne1 === $f);?></td>
      <td><?php var_export($stOne1 === $one);?></td>
      <td><?php var_export($stOne1 === $zero);?></td>
      <td><?php var_export($stOne1 === $unOne);?></td>
      <td class="t"><?php var_export($stOne1 === $stOne);?></td>
      <td><?php var_export($stOne1 === $preNull);?></td>
      <td><?php var_export($stOne1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $preNull1 = null;  var_export($preNull1);?></th>
      <td><?php var_export($preNull1 === $t);?></td>
      <td><?php var_export($preNull1 === $f);?></td>
      <td><?php var_export($preNull1 === $one);?></td>
      <td><?php var_export($preNull1 === $zero);?></td>
      <td><?php var_export($preNull1 === $unOne);?></td>
      <td><?php var_export($preNull1 === $stOne);?></td>
      <td class="t"><?php var_export($preNull1 === $preNull);?></td>
      <td><?php var_export($preNull1 === $stPhp);?></td>
    </tr>
    <tr>
      <th><?php $stPhp1 = 'php'; var_export($stPhp1);?></th>
      <td><?php var_export($stPhp1 === $t);?></td>
      <td><?php var_export($stPhp1 === $f);?></td>
      <td><?php var_export($stPhp1 === $one);?></td>
      <td><?php var_export($stPhp1 === $zero);?></td>
      <td><?php var_export($stPhp1 === $unOne);?></td>
      <td><?php var_export($stPhp1 === $stOne);?></td>
      <td><?php var_export($stPhp1 === $preNull);?></td>
      <td class="t"><?php var_export($stPhp1 === $stPhp);?></td>
    </tr>
  </tbody>
</table>
<hr>
    </body>
</html>
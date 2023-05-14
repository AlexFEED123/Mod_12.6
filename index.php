<!DOCTYPE html>
<html lang="ru">
   <head>
         <meta charset="utf-8">
         <title>MOD_12.6</title>  
   </head>
     <body>
        <?php
        $example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

$partName = [
  'surname',
  'name',
  'patronomyc',
];



function getFullnameFromParts(){
  echo "Задание-1";
  echo "<ul>";
  global $example_persons_array;
  $leight = count($example_persons_array);
  for ($i =0; $i<$leight; $i++){
  $fullName = $example_persons_array[$i]['fullname'].';';
  echo "<li>";
  print $fullName;
  echo "</li>";
  };
  echo "</ul>";
};
getFullnameFromParts();

//Я туплю или банально не знаю, но я не смог додуматься как обратиться к функции в другой функции.
// И так будет во всех последующих функциях, я буду вствлять тело нужной функции в новую функцию. (надеюсь вы разъясните мне позже :))

function getPartsFromFullname(){
  echo "Задание-2";
  echo "<ul>";
  global $example_persons_array;
  global $partName;
  $leight = count($example_persons_array);
  for ($i =0; $i<$leight; $i++){
    $string = $example_persons_array[$i]['fullname'].';';
   $arr = explode(' ',$string);
   $result = array_combine($partName,$arr);
   echo "<li>";
   var_export($result);
   echo "</li>";
  };
  echo "</ul>";
 };

 getPartsFromFullname();
 global $fullName;

 function getShortName (){
  echo "Задание-3";
  echo "<ul>";
  global $example_persons_array;
  global $partName;
  $leight = count($example_persons_array);
  for ($i =0; $i<$leight; $i++){
    $string = $example_persons_array[$i]['fullname'].';';
   $arr = explode(' ',$string);
   $result = array_combine($partName,$arr);
   $shortPerson = $result['name'].' '.mb_substr($result['surname'],0,1).'.';
   echo "<li>";
   var_export($shortPerson);
   echo "</li>";
  };
  echo "</ul>";
 };

 getShortName();

 function getGenderFromName(){
  echo "Задание-4";
  global $example_persons_array;
  global $gR;
  $gR = 0;
  $leight = count($example_persons_array);
  for ($i =0; $i<$leight; $i++){
  $fullName = $example_persons_array[$i]['fullname'].';';

  $femalSurName = mb_strpos($fullName,'вна');
  if ($femalSurName > 4 ){
    $femalSurName = -1;
  } else{
    $femalSurName = 0;
  };

  $femalName = mb_strpos($fullName,'а');
  if ($femalName >4){
    $femalName = -1;
  } else{
    $femalName = 0;
  };

  $femalFamily = mb_strpos($fullName,'ва');
  if ($femalFamily > 4 ){
    $femalFamily = -1;
  } else{
    $femalFamily = 0;
  };

  $manFamily = mb_strpos($fullName,'в');
  if ($manFamily > 4 ){
    $manFamily = 1;
  } else{
    $manFamily = 0;
  }; 

  $manName = mb_strpos($fullName,'й'||'н');
  if ($manName > 4 ){
    $manFamily = 1;
  } else{
    $manName = 0;
  };

  $manSurname = mb_strpos($fullName,'ич');
  if ($manSurname > 4 ){
    $manSurname = 1;
  } else{
    $manSurname = 0;
  };
  $personResult = $femalSurName + $femalName + $femalFamily + $manFamily + $manName + $manSurname;

  if ($personResult >=1 ){
    $gender ='Мужской пол';
  } elseif ($personResult <0){
    $gender = ' Женский пол';
  }else{
    $gender = 'Пол не определён';
  };

echo "<ul>";
echo "<li>";
var_export($gender);
echo "</li>";
echo "</ul>";

 };
 };
 getGenderFromName();

 $examplePersonsArray = [
  [
      'fullname' => 'Иванов Иван Иванович',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Степанова Наталья Степановна',
      'gender' => 'женский пол',
  ],
  [
      'fullname' => 'Пащенко Владимир Александрович',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Громов Александр Иванович',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Славин Семён Сергеевич',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Цой Владимир Антонович',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Быстрая Юлия Сергеевна',
      'gender' => 'женский пол',
  ],
  [
      'fullname' => 'Шматко Антонина Сергеевна',
      'gender' => 'женский пол',
  ],
  [
      'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
      'gender' => 'мужской пол',
  ],
  [
      'fullname' => 'Бардо Жаклин Фёдоровна',
      'gender' => 'женский пол',
  ],
  [
      'fullname' => 'Шварцнегер Арнольд Густавович',
      'gender' => 'мужской пол',
  ],
];
function getGenderDescription(){
  echo "Задание-5";
  global $examplePersonsArray;
  $maxQuantiti = count($examplePersonsArray);
   global $man;
    global $woman;
    global $non;
    $man = 0;
    $woman = 0;
    $non = 0;
  for ($i =0; $i<$maxQuantiti; $i++){
    $difinitionGender = $examplePersonsArray[$i]['gender'];
    if($difinitionGender ==='мужской пол'){
      $man++;
    }elseif($difinitionGender ==='женский пол'){
      $woman++;
    }else{
      $non++;
    };
  };
  $manPercent = round((100/$maxQuantiti)*$man);
  $womanPercent = round((100/$maxQuantiti)*$woman);
  $nonPercent = floor((100/$maxQuantiti)*$non);
  echo "<ul>";
  echo "<li>";
  echo "Гендерный состав аудитории:";
echo "</li>";
echo "<li>";
  echo "---------------------------";
echo "</li>";
echo "<li>";
  echo "Мужчины -"." ".$manPercent."%";
echo "</li>";
echo "<li>";
  echo "Женщины -"." ".$womanPercent."%";
echo "</li>";
echo "<li>";
  echo "Не удалось определить -"." ".$nonPercent."%";
echo "</li>";
echo "</ul>";
};
getGenderDescription();
?>
    </body>
</html>
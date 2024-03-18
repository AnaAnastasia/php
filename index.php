<?php

//Урок №2, типы данных

//int
$a = 25;
var_dump($a);
echo "\n";

//float, double
$c = 25.5;
var_dump($c);
echo "\n";

//bool
$isCook = true;
var_dump(true);
echo "\n";

//string
$name = 'Nastya';
var_dump($name);
echo "\n";

//array
$veg = ['cucumber', 'tomato', 'potato'];
print_r($veg);
echo "\n";

//object
$obj = new DateTime();
print_r($obj);
echo "\n";

//callable
$fun = function ($val) {
    echo $val;
};
print_r($fun);
echo "\n";

//null
$nu = null;
var_dump($nu);
echo "\n";


//Урок №3, переменные в php

//персонаж 1
$name1 = 'Dima';
$who1 = 'husband';
$age1 = 23;
$isHavePet1 = true;
$pet1 = 'Two cats';
$namePet1 = 'Cirilla and Leya';

echo $name1 . ", ";
echo $who1 . ", ";
echo $age1 . ", ";
echo $isHavePet1 . ", ";
echo $pet1 . ", ";
echo $namePet1 . "." . "\n";

//персонаж 2
$name2 = 'Harry Potter';
$who2 = 'Wizard';
$age2 = 24;
$isHavePet2 = true;
$pet2 = 'owl';
$namePet2 = 'Hedwig';

echo $name2 . ", ";
echo $who2 . ", ";
echo $age2 . ", ";
echo $isHavePet2 . ", ";
echo $pet2 . ", ";
echo $namePet2 . "." . "\n";


//персонаж 3
$name3 = 'Anna';
$who3 = 'Sister';
$age3 = 30;
$isHavePet3 = true;
$pet3 = 'Cat';
$namePet3 = 'Leo';

echo $name3 . ", ";
echo $who3 . ", ";
echo $age3 . ", ";
echo $isHavePet3 . ", ";
echo $pet3 . ", ";
echo $namePet3 . "." . "\n";


//Урок №4, массивы

$person1 = [
    'name' => 'Dima',
    'who' => 'husband',
    'age' => 23,
    'is_have_pet' => true,
    'pet' => 'cats',
    'name_pet' => 'Cirilla and Leya'
];

print_r($person1);


$person2 = [
    'name' => 'Harry',
    'who' => 'Wizard',
    'age' => 24,
    'is_have_pet' => true,
    'pet' => 'owl',
    'name_pet' => 'Hedwig'
];

print_r($person2);


$person3 = [
    'name' => 'Anna',
    'who' => 'Sister',
    'age' => 30,
    'is_have_pet' => true,
    'pet' => 'cat',
    'name_pet' => 'Leo'
];

print_r($person3);



//Урок 5, цикличный оператор
foreach ($person1 as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

foreach ($person2 as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

foreach ($person3 as $key => $item) {
    echo $key . ': ';
    echo $item . "\n";
}

//Урок 6, многомерные массивы
$persons = [
    [
        'name' => 'Dima',
        'who' => 'husband',
        'age' => 23,
        'is_have_pet' => true,
        'pet' => 'cats',
        'name_pet' => 'Cirilla and Leya'
    ],
    [
        'name' => 'Harry',
        'who' => 'Wizard',
        'age' => 24,
        'is_have_pet' => true,
        'pet' => 'owl',
        'name_pet' => 'Hedwig'
    ],
    [
        'name' => 'Anna',
        'who' => 'Sister',
        'age' => 30,
        'is_have_pet' => true,
        'pet' => 'cat',
        'name_pet' => 'Leo'
    ],
    [
        'name' => 'Katya',
        'who' => 'Friend',
        'age' => 24,
        'is_have_pet' => true,
        'pet' => 'cat',
        'name_pet' => 'Kimiko'
    ],
    [
        'name' => 'Gerald',
        'who' => 'Witcher',
        'age' => 857,
        'is_have_pet' => true,
        'pet' => 'horse',
        'name_pet' => 'Plotva'
    ]
];

foreach ($persons as $person){
    echo print_r($person['name_pet'], true);
}


//Урок 7, условный оператор
$persons = [
    [
        'name' => 'Dima',
        'who' => 'husband',
        'age' => 23,
        'is_have_pet' => true,
        'pet' => 'cats',
        'name_pet' => 'Cirilla and Leya'
    ],
    [
        'name' => 'Harry',
        'who' => 'Wizard',
        'age' => 24,
        'is_have_pet' => true,
        'pet' => 'owl',
        'name_pet' => 'Hedwig'
    ],
    [
        'name' => 'Anna',
        'who' => 'Sister',
        'age' => 30,
        'is_have_pet' => true,
        'pet' => 'cat',
        'name_pet' => 'Leo'
    ],
    [
        'name' => 'Sema',
        'who' => 'Friend',
        'age' => 24,
        'is_have_pet' => false,
       // 'pet' => 'cat',
       // 'name_pet' => 'Kimiko'
    ],
    [
        'name' => 'Gerald',
        'who' => 'Witcher',
        'age' => 857,
        'is_have_pet' => true,
        'pet' => 'horse',
        'name_pet' => 'Plotva'
    ]
];

foreach ($persons as $person_have_pet) {
    if ($person_have_pet['is_have_pet']) {
        print_r($person_have_pet ['name'] . ' имеет животное.' . "\n");
    } else {
        print_r($person_have_pet ['name'] . ' не имеет животных.' . "\n");
    }
}


//Урок 8, операторы сравнения
$name = 'Germiona';
$age = 20;
$apart = 202;
$petName = 'Misa';
$city = 'London';
$school = 'Hogvards';
$class = 7;
$isMarried = false;
$boyfriend = 'Ron';

if ($name == 'Ron') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($name == 'Germiona' && $age == 20) {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($name == 'Gran' || $age == 20) {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($school == 'Hogvards') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($city == 'Rostov-on_Don') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($isMarried == true) {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($petName == 'Misa') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($age == '20') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($age === '20') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($age == 20 && $boyfriend == 'Harry') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

if ($age == 20 && $boyfriend == 'Ron') {
    echo 'Yes' . "\n";
} else {
    echo 'No' . "\n";
}

//Урок 9, функции
function subtraction() {
    $a = 55;
    $b = 7;
    $sub = $a - $b;
    echo $sub;
    echo "\n";
}
subtraction();

function multiplication()
{
    $a = 55;
    $b = 7;
    $multiplication = $a * $b;
    echo $multiplication;
    echo "\n";
}
multiplication();

function division()
{
    $a = 55;
    $b = 7;
    $division = $a / $b;
    echo $division;
    echo "\n";
}
division();


//Урок 10, аргументы
function one($a, $b) {
    $result = $a - $b + $a;
    echo $result . "\n";
}
one(4, 5);

function two($a, $b) {
    $result = $a / $b - $a;
    echo $result . "\n";
}
two(8, 3);

function three($a) {
    $result = $a ** $a;
    echo $result . "\n";
}
three(3);

function four($a, $b) {
    $result = $a / $b - 3;
    echo $result . "\n";
}
four(8, 2);

function five($a, $b) {
    $result = $a % $b ;
    echo $result . "\n";
}
five(11, 3);

function six($a, $b) {
    $result = -$a * $b;
    echo $result . "\n";
}
six(3, 2);

function seven($a, $b) {
    $result = $a ** $b;
    echo $result . "\n";
}
seven(33, 5);

function eight($a, $b) {
    $result = $b ** $a % $a;
    echo $result . "\n";
}
eight(5, 7);

//Урок 11, возвращаемые функции

function getOne($a, $b) {
    return $a - $b + $a;
}
echo getOne(4, 5);
echo "\n";

function getTwo($a, $b) {
    return $a / $b - $a;
}
echo getTwo(8, 3);
echo "\n";

function getThree($a) {
    return $a ** $a;
}
echo getThree(3);
echo "\n";

function getFour($a, $b) {
    return $a / $b - 3;
}
echo getFour(8, 2);
echo "\n";

function getFive($a, $b): int
{
    return $a % $b;
}
echo getFive(11, 3);
echo "\n";

function getSix($a, $b) {
    return -$a * $b;
}
echo getSix(3, 2);
echo "\n";

function getSeven($a, $b) {
    return $a ** $b;
}
echo getSeven(33, 5);
echo "\n";

function getEight($a, $b): int
{
    return $b ** $a % $a;
}
echo getEight(5, 7);
echo "\n";


//Урок 12, классы
class MyHobby
{
    public $name;
    public $experience;
    public $now;

    public function sayNow()
    {
        if ($this->now == true) {
            echo 'Yes, i am working out in the ' . $this->name . ' now.' . "\n";
        }
        else {
            echo 'No, i am not working out in the ' . $this->name . ' now.' . "\n";
        }
    }
}

$gym = new MyHobby();
$gym->name = 'Gym';
$gym->experience = 5;
$gym->now = true;
$gym->sayNow();

$basket = new MyHobby();
$basket->name = 'Basketball';
$basket->experience = 12;
$basket->now = true;
$basket->sayNow();

$dance = new MyHobby();
$dance->name = 'Dance';
$dance->experience = 2;
$dance->now = false;
$dance->sayNow();

$swim = new MyHobby();
$swim->name = 'Swim';
$swim->experience = 3;
$swim->now = false;
$swim->sayNow();



//Урок 13, геттеры и сеттеры
class Cat{
    public $name = 'Leya';
    public $age = 2;
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
}

$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();

echo $cat1->name . ", " . $cat1->age . "\n";

$cat1->setName('Cirilla');
$cat1->setAge(0.7);
echo $cat1->name . ", " . $cat1->age . "\n";

$cat2->setName('Simona');
$cat2->setAge(15);
echo $cat2->name . ", " . $cat2->age . "\n";

$cat3->setName('Aiza');
$cat3->setAge(5);
echo $cat3->name . ", " . $cat3->age . "\n";

//Урок 14, конструкторы в классах

class Restaurant {
    public $breakfast;
    public $lunch;
    public $dinner;
    public $snack;
    public function __construct($breakfast, $lunch, $dinner, $snack){
        $this->breakfast = $breakfast;
        $this->lunch = $lunch;
        $this->dinner = $dinner;
        $this->snack = $snack;
        echo 'Menu of the day: ' . $this->breakfast . ' ,' . $this->lunch . ' ,' . $this->dinner . ' ,' . $this->snack . ".\n";
    }
}

$restaurant1 = new Restaurant('egg', 'soup', 'chicken', 'bread');
$restaurant2 = new Restaurant('pancakes', 'fish', 'hamburger', 'ice-cream');
$restaurant3 = new Restaurant('butter', 'pasta', 'pizza', 'chips');
$restaurant4 = new Restaurant('coffee', 'tea', 'green tea', 'water');
$restaurant5 = new Restaurant('chocolate', 'potato', 'cucumber', 'cupcake');


//Урок 15, наследование

class Person {
    public $name = 'Nastya';
    public $age = 24;
    public $job = 'Developer';
}

class Smm extends Person {
    public function work()
    {
        echo 'Smm is working';
    }
}

$smm = new Smm();
echo $smm->name . "\n";

class Doctor extends Person {
    public function work()
    {
        echo 'Doctor is working';
    }
}

$doctor = new Doctor();
echo $doctor->name . "\n";

class Teacher extends Person {
    public function work()
    {
        echo 'Teacher is working';
    }
}

$teacher = new Teacher();
echo $teacher->name . "\n";


class Nanny extends Person {
    public function work()
    {
        echo 'Nanny is working';
    }
}

$nanny = new Nanny();
echo $nanny->name . "\n";

class Unemployed extends Person {
    public function work()
    {
        echo 'Unemployed is not working';
    }
}

$unemployed = new Unemployed();
echo $unemployed->age . "\n";

class Driver extends Person {
    public function work()
    {
        echo 'Driver is working';
    }
}

$driver = new Driver();
echo $driver->age . "\n";

class Builder extends Person {
    public function work()
    {
        echo 'Builder is working';
    }
}

$builder = new Builder();
echo $builder->age . "\n";

class Developer extends Person {
    public function work()
    {
        echo 'Developer is working';
    }
}

$developer = new Developer();
echo $developer->age . "\n";

class Producer extends Person {
    public function work()
    {
        echo 'Producer is working';
    }
}

$producer = new Producer();
echo $producer->age . "\n";


class Cook extends Person {
    public function work()
    {
        echo 'Cook is working';
    }
}

$cook = new Cook();
echo $cook->age . "\n";



//Урок 16, наследование с конструктором

class Plants
{
    public $name = 'растения';
    public $age = 100;
    public $description = 'Виды растений';

    public function __construct($name, $age, $description) {
        $this->name = $name;
        $this->age = $age;
        $this->description = $description;
    }
}

class Trees extends Plants
{
    public function lol()
    {
        echo 'lol';
    }
}

$trees1 = new Trees('Дуб', 1000, 'Дуб - большое и могущественное дерево.');
echo $trees1->description . "\n";

$trees2 = new Trees('Сосна', 2000, 'Сосна - всему голова.');
echo $trees2->description . "\n";

$trees3 = new Trees('Яблоня', 100, 'С яблоней голодным не останешься.');
echo $trees3->description . "\n";

class Bushes extends Plants
{
    public function lol()
    {
        echo 'lol';
    }
}

$bushes1 = new Bushes('Малина', 5, 'Жизнь не будет сладкой, если в ей не будет малины.');
echo $bushes1->description . "\n";

$bushes2 = new Bushes('Сирень', 7, 'Прекрасный запах сирени перебивает запахи соседских кошек.');
echo $bushes2->description . "\n";

$bushes3 = new Bushes('Шиповник', 3, 'Просто добавь в чай, ничего лишнего.');
echo $bushes3->description . "\n";

class Herbs extends Plants
{
    public function lol()
    {
        echo 'lol';
    }
}

$herbs1 = new Herbs('Морковь', 2, 'Ещь морковку и зрение будет хорошим(нет).');
echo $herbs1->description . "\n";

$herbs2 = new Herbs('Ромашка', 1, 'Если собрать ромашку, то это приведет к удаче.');
echo $herbs2->description . "\n";

$herbs2 = new Herbs('Клевер', 5, 'Клевер четырехлистный заставит поверить в себя.');
echo $herbs2->description . "\n";

//Урок 17, конструктор в классах наследниках
class Persons {
    public $name;
    public $age;
    public $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }
}

class Bloger extends Persons {
    public $salary = 2000;
    public function __construct($name, $age, $job, $salary)
    {
        parent::__construct($name, $age, $job);
        $this->salary = $salary;
    }
}

$bloger1 = new Bloger('Maha', 20, 'bloger', 100);
echo $bloger1->salary;

//Урок 18, абстрактные классы
abstract class Bilding
{
    public $floors;
    public $isResidential;
    public $street;
    public function __construct($floors, $isResidential, $street)
    {
        $this->floors = $floors;
        $this->isResidential = $isResidential;
        $this->street = $street;

    }
}

class CountryHouse extends Bilding
{
    public $havePool;

    public function __construct($floors, $isResidential, $street, $havePool)
    {
        $this->havePool = $havePool;
        parent::__construct($floors, $isResidential, $street);
    }
}

$countryHouse = new CountryHouse(2, true, 'Dachnaya', true);
echo "\n" . $countryHouse->street . "\n";

class Office extends Bilding
{
    public $whatIsFloor;
    public function __construct($floors, $isResidential, $street, $whatIsFloor)
    {
        $this->whatIsFloor = $whatIsFloor;
        parent::__construct($floors, $isResidential, $street);
    }
}

$office = new Office(70, false, 'Oficnaya', 11);
echo $office->whatIsFloor . "\n";

class House extends Bilding
{
    public $haveParking;
    public function __construct($floors, $isResidential, $street, $haveParking)
    {
        $this->haveParking = $haveParking;
        parent::__construct($floors, $isResidential, $street);
    }
}

$house = new House(3, true, 'Domashnaya', true);
echo $house->isResidential . "\n";

class Farm extends Bilding
{
    public $nameCow;
    public function __construct($floors, $isResidential, $street, $nameCow)
    {
        $this->nameCow = $nameCow;
        parent::__construct($floors, $isResidential, $street);
    }
}
$farm = new Farm(1, false, 'Fermerskaya', 'Nastya');
echo $farm->nameCow . "\n";

//Урок 19, статические методы и свойства в классах
class Calculator
{
    public static function sum($a, $b)
    {
        $sum = $a + $b;
        echo $sum . "\n";
    }
    public static function sub($a, $b)
    {
        $sub = $a - $b;
        echo $sub . "\n";
    }
    public static function multi($a, $b)
    {
        $multi = $a * $b;
        echo $multi . "\n";
    }
    public static function division($a, $b)
    {
        $division = $a/$b;
        echo $division . "\n";
    }
    public static function fun1($a, $b, $c)
    {
        $fun1 = $a + $b + $c;
        echo $fun1 . "\n";
    }
    public static function fun2($a, $b, $c)
    {
        $fun2 = $a + $b * $c;
        echo $fun2 . "\n";
    }
    public static function fun3($a)
    {
        $fun3 = $a ** $a;
        echo $fun3 . "\n";
    }
    public static function fun4($a)
    {
        $fun4 = $a ** $a - $a;
        echo $fun4 . "\n";
    }
    public static function fun5($a, $b)
    {
        $fun4 = $a + $b ** $a - $b;
        echo $fun4 . "\n";
    }
}
Calculator::sum(10, 22);
Calculator::sub(17, 3);
Calculator::multi(2, 23);
Calculator::division(73, 4);
Calculator::fun1(2, 8, 66);
Calculator::fun2(2, 1, 3);
Calculator::fun3(5);
Calculator::fun4(3);
Calculator::fun5(5, 3);

//Урок 20, интерфейсы
interface Airport {
    public function cargoAirplane();
    public function passengerAirplane();
    public function helicopter();
}

class Aeroflot implements Airport {

    public function cargoAirplane()
    {
        echo 'У Аэрофлота нет грузовых самолетов.' . "\n";
    }

    public function passengerAirplane()
    {
        echo 'Самый популярный пассажирский самолет - Airbus A320-214.' . "\n";
    }

    public function helicopter()
    {
        echo 'У Аэрофлота нет в парке вертолетов.' . "\n";
    }
}

$aeroflot = new Aeroflot();
$aeroflot->cargoAirplane();
$aeroflot->passengerAirplane();
$aeroflot->helicopter();

class S7 implements Airport {

    public function cargoAirplane()
    {
        echo 'У S7 нет грузовых самолетов.' . "\n";
    }

    public function passengerAirplane()
    {
        echo 'Самый популярный пассажирский самолет - Airbus A320neo.' . "\n";
    }

    public function helicopter()
    {
        echo 'У S7 нет в парке вертолетов.' . "\n";
    }
}
$s7 = new S7();
$s7->cargoAirplane();
$s7->passengerAirplane();
$s7->helicopter();

class QatarAirwaysCargo implements Airport {

    public function cargoAirplane()
    {
        echo 'У Qatar Airways Cargo множество грузовых самолетов.' . "\n";
    }

    public function passengerAirplane()
    {
        echo 'у Qatar Airways Cargo нет пассажирских самолетов.' . "\n";
    }

    public function helicopter()
    {
        echo 'У Qatar Airways Cargo есть в парке вертолеты.' . "\n";
    }
}

$qatarAirwaysCargo = new QatarAirwaysCargo();
$qatarAirwaysCargo->cargoAirplane();
$qatarAirwaysCargo->passengerAirplane();
$qatarAirwaysCargo->helicopter();

//Урок 21, уровни доступа

//Модификатор private означает, что обращаться к переменной можно
//будет только внутри класса.


//Если же мы ставим public, мы можем изменять
//и получать переменную класса вне функций этого класса.


//protected - схожа с private, доступны только классу, внутри которых
//они находятся и наследуемым подклассам.
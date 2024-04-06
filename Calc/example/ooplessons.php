<?php


// Класс "Фрукт"
class Fruit {
    public $name;
    
    // Конструктор класса
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Метод "Показать информацию о фрукте"
    public function showInfo() {
        echo "Этот фрукт - " . $this->name . ".\n";
    }
}

// Создаем объекты
$apple = new Fruit("Яблоко");
$banana = new Fruit("Банан");

// Вызываем методы объектов
$apple->showInfo();
$banana->showInfo();



// Интерфейс "Передвижение"
interface Move {
    public function moveForward();
}

// Класс "Автомобиль"
class Car implements Move {
    public function moveForward() {
        echo "Автомобиль едет вперед.\n";
    }
}

// Класс "Велосипед"
class Bicycle implements Move {
    public function moveForward() {
        echo "Велосипед движется вперед.\n";
    }
}

// Создаем объекты
$car = new Car();
$bicycle = new Bicycle();

// Вызываем методы объектов
$car->moveForward();
$bicycle->moveForward();

// =================
// Класс "Животное"
class Animal
{
    public $name;
    public $age;
    
    // Конструктор класса
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Метод "Есть"
    public function eat()
    {
        echo $this->name . " ест.\n";
    }
}

// Создаем объекты
$dog = new Animal("Шарик", 3);
$cat = new Animal("Мурка", 2);

// Вызываем методы объектов
$dog->eat();
$cat->eat();


// интерфейсы объектов|классы

// Интерфейс "Голос"
interface Voice
{
    public function makeSound();
}

// Класс "Собака"
class Dog implements Voice
{
    public function makeSound()
    {
        echo "Гав-гав!\n";
    }
}

// Класс "Кошка"
class Cat implements Voice
{
    public function makeSound()
    {
        echo "Мяу-мяу!\n";
    }
}

// Создаем объекты
$dog = new Dog();
$cat = new Cat();

// Вызываем методы объектов
$dog->makeSound();
$cat->makeSound();


// пример с фигурами и интерфейсом "Рисование":

// Интерфейс "Рисование"
interface Drawing
{
    public function draw();
}

// Класс "Круг"
class Circle implements Drawing
{
    public function draw()
    {
        echo "Рисуем круг.\n";
    }
}

// Класс "Прямоугольник"
class Rectangle implements Drawing
{
    public function draw()
    {
        echo "Рисуем прямоугольник.\n";
    }
}

// Создаем объекты
$circle = new Circle();
$rectangle = new Rectangle();

// Вызываем методы объектов
$circle->draw();
$rectangle->draw();

// ========

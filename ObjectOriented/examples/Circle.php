<?php

namespace ObjectOriented\examples;

interface CircleInterface
{
}

class Circle implements CircleInterface
{
    public const CONST_NAME = ';asdasd';
    public static string $circleName = ';asdasd';
    
    public function __construct(
        public string $title,
        private float $size,
        private array $items,
        private bool $isMovingToLeft = true,
        private bool $isMovingToRight = false
    ) {
    }
    
    public function move(): bool
    {
        if ($this->isMovingToLeft) {
            $this->moveToLeft();
        }
        if ($this->isMovingToRight) {
            $this->moveToRight();
        }
        
        return false;
    }
    
    protected function getSize(): float
    {
        return $this->size;
    }
    
    protected function getItems(): array
    {
        return $this->items;
    }
    
    protected function moveToLeft2(): void
    {
    }
    
    private function isMovingToLeft(): bool
    {
        return $this->isMovingToLeft;
    }
    
    private function isMovingToRight(): bool
    {
        return $this->isMovingToRight;
    }
    
    private function moveToLeft(): void
    {
    }
    
    private function moveToRight(): void
    {
    }
}

$circle = new Circle('красный шарик', 3, range(1, 4), false, true);

echo '<pre>';
var_export($circle);
die;

$titleValues = [
    'Синий шарик'         => 'blue',
    'Зеленый шарик'       => 'green',
    'Золотой шарик'       => 'yellow',
    'Бриллиантовый шарик' => 'white',
];
echo '<pre>';
$i = 1;
while ($i < 5) {
    echo '<p>Номер итерации: ' . $i . '</p>';
    echo '<p>На этой итерации шарик называется: </p>';
    var_export($circle->title);
    echo '<p>На этой итерации в шарике крутятся такие элементы: </p>';
    var_export($circle->getItems());
    
    echo 'На этой итерации все шарики двигаются в направлении: </p>';
    if ($circle->isMovingToLeft()) {
        echo '<span style="color: blue"> -> Влево</span>';
    }
    
    if ($circle->isMovingToRight()) {
        echo '<span style="color: black"> -> Вправо</span>';
    }
    
    shuffle($titleValues);
    // можем поменять по ходу исполнения программы потому что свойство public
    $circle->title = $titleValues[array_rand(array_keys($titleValues))];
    echo '<p>На этой итерации наш шарик называется: </p>';
    echo '<span style="color: ' . ($titleValues[$circle->title] ?? '#000000') . ';text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;">' . ($circle->title) . '</span>';
    
    try {
        echo '<p>Попытка подменить элементы в шарике во время исполнения программы: </p>';
        $circle->items = range('a', 'g');
    } catch (\Throwable $exception) {
        echo 'Блок catch: <span style="color:red">при попытке изменить содержимое шарика (свойство items) произошла ошибка: </span>"' . $exception->getMessage() . '"<br>';
    }
    
    sleep(3);
    echo '<hr>';
    
    $i++;
}

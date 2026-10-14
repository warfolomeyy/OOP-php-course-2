<?php

class Cat
{
    private string $name;
    private string $color;

    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello()
    {
        echo 'Привет, меня зовут ' . $this->name . ', и я ' . $this->color . ' цвету!!!' . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }
}

$cat1 = new Cat('Снежок', 'белый');
$cat1->sayHello();

$cat2 = new Cat('Барсик', 'синий');
$cat2->sayHello();




<?php

namespace App\OOP\Inheritance;

class Collection
{
    protected array $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        // return array_sum(array_map(fn ($item) => $item->{$key}, $this->items));
        //or
        return array_sum(array_column($this->items, $key));
    }
}

//"is a"
class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some Video1', 100),
    new Video('Some Video2', 200),
    new Video('Some Video3', 300),
]);

var_dump($videos->length());

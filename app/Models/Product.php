<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $name;
    public $price;
    public $quantity = 0;

    function __construct($id,$name,$price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

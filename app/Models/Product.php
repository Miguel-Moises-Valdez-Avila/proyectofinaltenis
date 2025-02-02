<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'brand',
        'color',
        'size',
        'price'
        
    ];
    
    //metodos
    public function getId()
    {
        return $this->attributes['id'];
    }
 
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
 
    public function getName()
    {
        return $this->attributes['name'];
    }
 
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
 
    public function getBrand()
    {
        return $this->attributes['brand'];
    }
 
    public function setBrand($brand)
    {
        $this->attributes['brand'] = $brand;
    }
 
    public function getColor()
    {
        return $this->attributes['color'];
    }
 
    public function setColor($color)
    {
        $this->attributes['color'] = $color;
    }
 
  public function getSize()
    {
        return $this->attributes['size'];
    }
 
    public function setSize($size)
    {
        $this->attributes['size'] = $size;
    }
 
    public function getPrice()
    {
        return $this->attributes['price'];
    }
 
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
}

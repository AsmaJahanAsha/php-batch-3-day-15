<?php
namespace App\classes;
class Product
{
    protected $products;
    public function getAllProduct()
    {

        return [
            0 =>[
                'name' => "Shirt",
                'price' => '500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt One',
                'image' => 'st1.jpg'
            ],

            1 =>[
                'name' => "Shirt",
                'price'=> '450 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt Two',
                'image' => 'st3.jpg'
            ],
            2 =>[
                'name' => "Sharee",
                'price'=> '1500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Sharee One',
                'image'=> 'st4.jpg'
            ],
            3 =>[
                'name' => "Sharee",
                'price'=> '1500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Sharee Two',
                'image'=> 'st4.jpg'
            ],
            4 =>[
                'name' => "Sharee",
                'price'=> '1500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Sharee Three',
                'image'=> 'st4.jpg'
            ],
            5 =>[
                'name' => "Sharee",
                'price'=> '1500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Sharee Four',
                'image'=> 'st4.jpg'
            ],
            6 =>[
                'name' => "Shirt",
                'price'=> '450 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt four',
                'image' => 'st3.jpg'
            ],
            7 =>[
                'name' => "Shirt Two",
                'price'=> '450 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt One',
                'image' => 'st3.jpg'
            ],
            8 =>[
                'name' => "Shirt Two",
                'price'=> '450 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt One',
                'image' => 'st3.jpg'
            ],
            9 =>[
                'name' => "Sharee",
                'price'=> '1500 Tk.',
                'brand' =>'A',
                'id'=> '1',
                'description'=>'Shirt One',
                'image'=> 'st4.jpg'
            ],
        ];
    }

}
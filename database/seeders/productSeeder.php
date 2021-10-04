<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                "name" => "Oneplus Mobile",
                "price" => "100000 ",
                "category" => "Electronic",
                "gallary" => "https://www.91-img.com/pictures/144850-v2-oneplus-nord-n200-mobile-phone-large-1.jpg",
                "description" => "A mobile 4g and and 5g tecnology with high proceesor"
            ],
            [
                "name" => "samsung TV",
                "price" => "20000 ",
                "category" => "Electronic",
                "gallary" => "https://images.samsung.com/is/image/samsung/levant-uhd-tu8000-ua50tu8000uxtw-frontblack-229856395?$684_547_PNG$",
                "description" => "A tv with android tecnology with high feauture"
            ],
            [
                "name" => "Cooler",
                "price" => "5000 ",
                "category" => "Electronic",
                "gallary" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJLkFxhbqPRRblci5uZaZ0o-hOqv3xdSnuyQ&usqp=CAU",
                "description" => "A cooler with high speed and cool air long time"
            ],
            [
                "name" => "Cloth",
                "price" => "999 ",
                "category" => "Fashion",
                "gallary" => "https://cdn.shopify.com/s/files/1/0365/4021/9523/products/z5kcyulbczxfrmcrjbkq_2000x.jpg?v=1595961108",
                "description" => "Long asting cloth with more attractive colors with cheapest price"
             ]
        ]);
    }
}

<?php

namespace App\Models;

class Shop{
    public static function all(){

        $shop_info =[
                [
                    'id'        =>  'Wattpad 1',
                    'img src'   =>  'assets/img/portfolio/Book1.jpg" class="img-fluid" alt=""',
                    'details'   =>  'This is a book by the author Binibining Mia with genres of historical fiction, romance novel. It was published in 2018. The book tells the story of Carmela, a girl from 2016 who gets sent back to the year 1892 and falls in love with Juanito, a doctor-to-be and son of a powerful gobernadorcillo. The printed series which spans five volumes has since sold more than 210,000 copies, including three spinoff books and a collectors box set.',     
                    'Price'     =>  '₱ 1,545.00'
                ],
                [
                    'id'        =>  '2',
                    'flavor'    =>  'Macchiato',
                    'desc'      =>  'This is Macchiato Flavor.'
                ]
        ];
        return ($shop_info);
        
    }
}
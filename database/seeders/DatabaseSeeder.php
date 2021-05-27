<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('categories')->insert([
            'name'=>'Lakiery',
            'slug'=>'lakiery',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum beatae, labore quaerat laboriosam ducimus vero velit corporis eos nostrum optio unde illum? Iure optio ratione temporibus similique et, totam quod.'
        ]);
        
        DB::table('categories')->insert([
            'name'=>'Pielęgnacja',
            'slug'=>'pielegnacja',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum beatae, labore quaerat laboriosam ducimus vero velit corporis eos nostrum optio unde illum? Iure optio ratione temporibus similique et, totam quod.'
        ]);

        DB::table('categories')->insert([
            'name'=>'Akcesoria',
            'slug'=>'akcesoria',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum beatae, labore quaerat laboriosam ducimus vero velit corporis eos nostrum optio unde illum? Iure optio ratione temporibus similique et, totam quod.'
        ]);

        DB::table('categories')->insert([
            'name'=>'Narzędzia',
            'slug'=>'narzedia',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum beatae, labore quaerat laboriosam ducimus vero velit corporis eos nostrum optio unde illum? Iure optio ratione temporibus similique et, totam quod.'
        ]);


        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'Lakiery hybrydowe',
            'slug'=>'hybrydowe',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);

        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'Lakiery klasyczne',
            'slug'=>'klasyczne',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        
        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'System żelowy',
            'slug'=>'zelowe',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        
        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'Bazy i topy',
            'slug'=>'bazy-topy',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'Akrylożele',
            'slug'=>'akrylozele',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'1',
            'name'=>'Lakiery kauczukowe',
            'slug'=>'kauczukowe',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Linia Urea',
            'slug'=>'urea',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Linia Colostrum',
            'slug'=>'colostrum',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Linia Ozone Oil',
            'slug'=>'ozone-oil',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Linia Microsilver',
            'slug'=>'microsilver',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Linia All In',
            'slug'=>'all-in',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        
        DB::table('subcategories')->insert([
            'category_id'=>'2',
            'name'=>'Hand & Body',
            'slug'=>'hand-body',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'3',
            'name'=>'Pilniki i polerki',
            'slug'=>'pilniki-polerki',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'3',
            'name'=>'Nożyczki i cążki',
            'slug'=>'nozyczki-cazki',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'3',
            'name'=>'Płyny',
            'slug'=>'plyny',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'4',
            'name'=>'Dezynfekcja i sterylizacja',
            'slug'=>'dezynfekcja-sterylizacja',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);
        
        DB::table('subcategories')->insert([
            'category_id'=>'4',
            'name'=>'Frezy i nośniki',
            'slug'=>'frezy-nosniki',
            'description'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nihil esse commodi porro. Sed assumenda consequuntur, cum, eos minima, aliquam dolor quae optio nisi rem et? Error, suscipit laudantium. Quibusdam.'

        ]);



        DB::table('products')->insert([
            'subcategory_id'=>'1',
            'name'=>'Pure Absolute White',
            'slug'=>'pure-001',
            'brand'=>'Victoria Vynn',
            'color'=>'001 Absolute White',
            'img'=>'/img/product_1.jpg',
            'price'=>'29.90',
            'availability'=>'12',
            'description'=>'Kremowe lakiery hybrydowe Pure Creamy Hybrid - stworzone w nowoczesnej, bezpiecznej formule o wysokiej trwałości do 4 tygodni. Kolory lakierów hybrydowych Pure są kreowane w oparciu o trendy i potrzeby naszych klientek dla podkreślenia piękna ich dłoni. 100% satysfakcji już przy pierwszej nałożonej i utwardzonej warstwie',
            'code'=>'330191'
        ]);

        DB::table('products')->insert([
            'subcategory_id'=>'1',
            'name'=>'Pure Purple Scandal',
            'slug'=>'pure-057',
            'brand'=>'Victoria Vynn',
            'color'=>'057 Purple Scandal',
            'img'=>'/img/product_2.jpg',
            'price'=>'29.90',
            'availability'=>'14',
            'description'=>'Kremowe lakiery hybrydowe Pure Creamy Hybrid - stworzone w nowoczesnej, bezpiecznej formule o wysokiej trwałości do 4 tygodni. Kolory lakierów hybrydowych Pure są kreowane w oparciu o trendy i potrzeby naszych klientek dla podkreślenia piękna ich dłoni. 100% satysfakcji już przy pierwszej nałożonej i utwardzonej warstwie',
            'code'=>'330195'
        ]);

        DB::table('products')->insert([
            'subcategory_id'=>'1',
            'name'=>'Gel Polish Fairy Tale',
            'slug'=>'gel-polish-016',
            'brand'=>'Victoria Vynn',
            'color'=>'016 Fairy Tale',
            'img'=>'/img/product_3.jpg',
            'price'=>'29.90',
            'availability'=>'8',
            'description'=>'Gel Polish Color to lakiery hybrydowe, do stosowania w dwóch typach stylizacji : Easy Removal oraz SOAK OFF. Jedna paleta kolorów, dwa typy stylizacji. Bogaty wybór z ponad 250 kolorów: klasyczne emalie, perły, brokaty, pastele, neony, pół-transparentne.',
            'code'=>'330015'
        ]);

        DB::table('products')->insert([
            'subcategory_id'=>'1',
            'name'=>'Macarons Praline',
            'slug'=>'macarons-praline',
            'brand'=>'Didier Lab',
            'color'=>'Praline',
            'img'=>'/img/product_4.png',
            'price'=>'39.90',
            'availability'=>'21',
            'description'=>'Nowa słodka kolekcja lakierów hybrydowych Macarons!',
            'code'=>'332315'
        ]);
        
        DB::table('products')->insert([
            'subcategory_id'=>'2',
            'name'=>'IQ Salon Lakier Inteligentny Forever Claret',
            'slug'=>'iq-salon-forever-claret',
            'brand'=>'Victoria Vynn',
            'color'=>'Forever Claret',
            'img'=>'/img/product_5.png',
            'price'=>'15.90',
            'availability'=>'4',
            'description'=>'IQ Salon to inteligentny lakier zapewniający ekstremalną trwałość manicure aż do 10 dni.Wegańska formuła lakieru zapewnia głęboki, trwały kolor, a także odporność na ścieranie, kruszenie oraz odpryski. ',
            'code'=>'354364'
        ]);
        
        DB::table('products')->insert([
            'subcategory_id'=>'2',
            'name'=>'IQ Salon Lakier Inteligentny Beige Cream',
            'slug'=>'iq-salon-ceige-cream',
            'brand'=>'Victoria Vynn',
            'color'=>'Beige Cream',
            'img'=>'/img/product_6.png',
            'price'=>'15.90',
            'availability'=>'13',
            'description'=>'IQ Salon to inteligentny lakier zapewniający ekstremalną trwałość manicure aż do 10 dni.Wegańska formuła lakieru zapewnia głęboki, trwały kolor, a także odporność na ścieranie, kruszenie oraz odpryski. ',
            'code'=>'354434'
        ]);


    }
}

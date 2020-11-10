<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      //ADMIN USER
      DB::table('users')->insert([
          'email' => 'HomuAdmin',
          'password' => Hash::make('admin'),
      ]);

      //Background
      DB::table('backgrounds')->insert([
        'image_path' => 'default',
      ]);

      //Slider
      DB::table('sliders')->insert([
          'title' => 'Lorem ipsum dolor sit amet',
          'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi!',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);
      DB::table('sliders')->insert([
          'title' => 'Sed ut perspiciatis unde omnis',
          'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);
      DB::table('sliders')->insert([
          'title' => 'At vero eos et accusamus',
          'content' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);

      //Daily
      DB::table('dailies')->insert([
          'titleBig' => 'Lorem Ispum',
          'titleSmall' => 'Lorem ipsum dolor sit amet',
          'description' => 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
          'btntext'=> 'READ MORE',
          'btnlink' => '/about',
          'image_path' => 'default'
      ]);


      //SPECIAL DISHES
      DB::table('specials')->insert([
        'title' => 'California roll',
        'description' => '8 Τεμάχια. Ρολό με surimi (συνθετικό καβούρι), αγγούρι, αβοκάντο, λευκό σουσάμι & wasabi μαγιονέζα',
        'price' => 4.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Shrimp tempura roll',
        'description' => '8 Τεμάχια. Ρολό με γαρίδα tempura, λευκό σουσάμι & μαγιονέζα wasabi',
        'price' => 6.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Μendaki Noodles με κοτόπουλο',
        'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
        'price' => 7.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Salmon teriyaki roll',
        'description' => '8 Τεμάχια. Ρολό με σολομό, αβοκάντο, αγγούρι, teriyaki sauce & λευκό σουσάμι',
        'price' => 5.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Flying chicken special roll',
        'description' => '8 Τεμάχια. Με σπαράγγια Tempura, κοτόπουλο, φρέσκο κρεμμύδι, αβοκάντο, Tobiko κόκκινο, Tobiko μαύρο & Teriyaki sauce',
        'price' => 7.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Dynamite roll',
        'description' => '8 Τεμάχια. Με γαρίδα tempura, αβοκάντο, αγγούρι, sweet chili mayo sauce, σχοινόπρασο & μαύρο αυγοτάραχο',
        'price' => 7.5,
        'image_path' => 'default'
      ]);

      DB::table('specials')->insert([
        'title' => 'Crisp Roll maki',
        'description' => '8 Τεμάχια. Με σολομό, αβοκάντο, κόκκινο αυγοτάραχο, sauce, panko bread crumbs & τυρί κρέμα',
        'price' => 7,
        'image_path' => 'default'
      ]);

      DB::table('photokitchens')->insert([
        'image_path' => 'default'
      ]);

      DB::table('reviews')->insert([
        'image_path' => 'default'
      ]);

      //Categories
      DB::table('categories')->insert([
        'title' => 'Ορεκτικα',
        'slug' => 'orektika',
        'position' => '1',
      ]);

      DB::table('categories')->insert([
        'title' => 'Σαλατες',
        'slug' => 'salates',
        'position' => '2',
      ]);

      DB::table('categories')->insert([
        'title' => 'Sashimi',
        'slug' => 'sashimi',
        'position' => '3',
      ]);

      DB::table('categories')->insert([
        'title' => 'Inside Out Roles',
        'slug' => 'inside-out-roles',
        'position' => '4',
      ]);

      DB::table('categories')->insert([
        'title' => 'Fried Rice',
        'slug' => 'fried-rice',
        'position' => '5',
      ]);

      DB::table('categories')->insert([
        'title' => 'Maki Rolls',
        'slug' => 'maki-rolls',
        'position' => '6',
      ]);

      DB::table('categories')->insert([
        'title' => 'Wok Tossed Noodles - Mendaki Noodles',
        'slug' => 'wok-tossed-noodles-mendaki-noodles',
        'position' => '7',
      ]);

      DB::table('categories')->insert([
        'title' => 'Wok Toosed Noodles - Rice Noodles',
        'slug' => 'wok-toosed-noodles-rice-noodles',
        'position' => '8',
      ]);

      DB::table('categories')->insert([
        'title' => 'Wok Toosed Noodles - Udon Noodles',
        'slug' => 'wok-toosed-noodles-udon-noodles',
        'position' => '9',
        ]);

        DB::table('categories')->insert([
        'title' => 'New Style Rolls',
        'slug' => 'new-style-rolls',
        'position' => '10',
        ]);

        DB::table('categories')->insert([
        'title' => 'Nigiri',
        'slug' => 'nigiri',
        'position' => '11',
        ]);

        DB::table('categories')->insert([
        'title' => 'Gunkan',
        'slug' => 'gunkan',
        'position' => '12',
        ]);

        DB::table('categories')->insert([
        'title' => 'Homu Special Rolls',
        'slug' => 'homu-special-rolls',
        'position' => '13',
        ]);

        DB::table('categories')->insert([
        'title' => 'Homu Vegeterian Secrets',
        'slug' => 'homu-vegeterian-secrets',
        'position' => '14',
        ]);

        DB::table('categories')->insert([
        'title' => 'Sushi Lovers | Nigiri Mix Combo',
        'slug' => 'sushi-lovers-nigiri-mix-combo',
        'position' => '15',
        ]);

        DB::table('categories')->insert([
        'title' => 'Desserts',
        'slug' => 'desserts',
        'position' => '16',
        ]);

        DB::table('categories')->insert([
        'title' => 'Beverages',
        'slug' => 'beverages',
        'position' => '17',
        ]);

        DB::table('categories')->insert([
        'title' => 'Μπυρες | Ποτα',
        'slug' => 'mpyres-pota',
        'position' => '18',
        ]);


      //products
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Edamame',
          'description' => 'Φασολάκια σόγιας αλατισμένα',
          'price' => 3.5,
          'slug' => 'edamame',
          'position' => 1,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Edamame spicy',
          'description' => 'Πικάντικα φασολάκια σόγιας αλατισμένα',
          'price' => 3.8,
          'slug' => 'edamame-spicy',
          'position' => 2,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Steam rice',
          'description' => 'Ρύζι ατμού με λευκό σουσάμι',
          'price' => 4,
          'slug' => 'steam-rice',
          'position' => 3,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Salmon soup veloute',
          'description' => 'Σούπα βελουτέ με σολομό, καρότο, σέλινο, πατάτα, κρεμμύδι & ντομάτα',
          'price' => 6,
          'slug' => 'salmon-soup-veloute',
          'position' => 4,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Tartar salmon',
          'description' => 'Ψιλοκομμένα φιλετάκια σολομού με αβοκάντο, Tobiko, ντομάτα & σως vinaigrette',
          'price' => 6,
          'slug' => 'tartar-salmon',
          'position' => 5,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Tartar tuna',
          'description' => 'Ψιλοκομμένα φιλέτα τόνου με αβοκάντο, ντομάτα, κόκκινο αυγοτάραχο, Tobiko & vinaigrette sauce',
          'price' => 6.8,
          'slug' => 'tartar-tuna',
          'position' => 6,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Tataki Salmon',
          'description' => '6 Τεμάχια. Φιλετάκια σολομού ελαφρώς ψημένα με σουσάμι & sauce',
          'price' => 6,
          'slug' => 'tataki-salmon',
          'position' => 7,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Takaki tuna',
          'description' => '6 Τεμάχια. Φιλέτα τόνου ελαφρώς ψημένα με σουσάμι & sauce',
          'price' => 6.8,
          'slug' => 'takaki-tuna',
          'position' => 8,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Springs rolls',
          'description' => '3 Τεμάχια. Ψιλοκομμένα λαχανικά τυλιγμένα με τραγανή ζύμη με συνοδευτική sweet chili sauce',
          'price' => 4.8,
          'slug' => 'spring-rolls',
          'position' => 9,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Chizu Wonton',
          'description' => '4 Τεμάχια. Τραγανό φύλλο Wonton με τυρί κρέμα & surimi (συνθετικό καβούρι)',
          'price' => 6,
          'slug' => 'chizu-wonton',
          'position' => 10,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Tempura shrimp appetizer',
          'description' => '4 Τεμάχια. Γαρίδα tempura με συνοδευτική sweet chili sauce',
          'price' => 7,
          'slug' => 'tempura-shrimp-appetizer',
          'position' => 11,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Sweet & Sour Chicken',
          'description' => 'Παναρισμένα κομμάτια κοτόπουλο με καρότο, κρεμμύδι, ανανά, πράσινες & κόκκινες πιπεριές',
          'price' => 7.2,
          'slug' => 'sweet-sour-chicken',
          'position' => 12,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Sweet & Sour Shrimp',
          'description' => 'Παναρισμένα κομμάτια γαρίδας με καρότο, κρεμμύδι, ανανά, πράσινες & κόκκινες πιπεριές',
          'price' => 9.2,
          'slug' => 'sweet-sour-shrimp',
          'position' => 13,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce wasabi mayo',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-wasabi-mayo',
          'position' => 14,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce teriyaki',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-teriyaki',
          'position' => 15,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce spicy mayo',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-spicy-mayo',
          'position' => 16,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce black garlic mayo',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-black-garlic-mayo',
          'position' => 17,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce Spicy',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-spicy',
          'position' => 18,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce τυρί κρέμα',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-tiri-krema',
          'position' => 19,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce Sweet Chili',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-sweet-chili',
          'position' => 20,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce sriracha',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-sriracha',
          'position' => 21,
      ]);
      DB::table('products')->insert([
          'category_id' => 1,
          'title' => 'Dip sauce γλυκόξινη',
          'description' => '',
          'price' => 1,
          'slug' => 'dip-sauce-ghlikoksini',
          'position' => 22,
      ]);



    }
}

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
      DB::table('users')->insert([
          'email' => 'HomuAdmin',
          'password' => Hash::make('admin'),
      ]);

      DB::table('backgrounds')->insert([
        'image_path' => 'default',
      ]);

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





      //slider
      DB::table('sliders')->insert([
          'title' => 'WELCOME TO HOMU SUSHI BAR',
          'content' => 'Το Homu Sushi Bar ξεκίνησε με όραμα να προσφέρει υψηλής ποιότητας & γεύσης πιάτα, σε προσιτές τιμές!',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);
      DB::table('sliders')->insert([
          'title' => 'Valentine\'s Day Menu',
          'content' => '1 Πιάτα tartar tuna, 1 πιάτο tartar salmon, 1 πιάτο chizu wonton, 1 πιάτο salmon tuna hearts & 2 κρασιά ατομικά της επιλογής σας',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);
      DB::table('sliders')->insert([
          'title' => 'SALMON TERIYAKI ROLL',
          'content' => '8 Τεμάχια. Ρολό με σολομό , αβοκάντο , αγγούρι, teriyaki sauce και λευκό σουσάμι',
          'btntext' => 'Order Now',
          'btnlink' => '/',
      ]);



      //Daily
      DB::table('dailies')->insert([
          'titleBig' => 'Homu Sushi',
          'titleSmall' => 'DISCOVER OUR FOOD',
          'description' => 'Το εκπαιδευμένο μας προσωπικό κουζίνας με γνώσεις και εμπειρία πάνω στην Ασιατική κουζίνα σας εγγυάται όχι μόνο υπέροχα πιάτα αλλά και παραδοσιακές τεχνικές και γεύσεις αναμειγμένες με μοντέρνες πινελιές.',
          'btntext'=> 'READ MORE',
          'btnlink' => '/about',
          'image_path' => 'default'
      ]);

      //Daily
      DB::table('photokitchens')->insert([
          'image_path' => 'default'
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



      //SALADS
      DB::table('products')->insert([
          'category_id' => 2,
          'title' => 'Wakame',
          'description' => 'Σαλάτα από φύκια με λευκό σουσάμι',
          'price' => 5,
          'slug' => 'wakame',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 2,
          'title' => 'Cucumber',
          'description' => 'Σαλάτα με αγγούρι, λευκό σουσάμι, sauce από μέλι & μουστάρδα',
          'price' => 5,
          'slug' => 'cucumber',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 2,
          'title' => 'Crab Salad',
          'description' => 'Σαλάτα με ανάμεικτα λαχανικά, surimi (συνθετικό καβουριού) . apple ginger sauce & σουσάμι',
          'price' => 6.5,
          'slug' => 'crab-salad',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 2,
          'title' => 'Homu spicy salmon Salad',
          'description' => 'Σαλάτα με σολομό, ρύζι, καρότο, edamame, σκόρδο, κρεμμύδι, φρέσκο ginger, αγγούρι & μαύρο σουσάμι. Συνοδεύεται από sauce sriracha.',
          'price' => 7.5,
          'slug' => 'homu-spicy-salmon-salad',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 2,
          'title' => 'Homu spicy tuna Salad',
          'description' => 'Σαλάτα με τόνο, ρύζι, καρότο, edamame, σκόρδο, κρεμμύδι, φρέσκο ginger, αγγούρι & μαύρο σουσάμι. Συνοδεύεται από sauce sriracha.',
          'price' => 8.5,
          'slug' => 'homu-spicy-tuna-salad',
          'position' => 5,
      ]);


      //sashimi
      DB::table('products')->insert([
          'category_id' => 3,
          'title' => 'Salmon fillet sashimi',
          'description' => '4 Τεμάχια. Φιλέτα σολομού',
          'price' => 6.3,
          'slug' => 'salmon-fillet-sashimi',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 3,
          'title' => 'Tuna fillet sashimi',
          'description' => '4 Τεμάχια. Φιλέτα Τόνου',
          'price' => 6.8,
          'slug' => 'tuna-fillet-sashimi',
          'position' => 2,
      ]);
      DB::table('products')->insert([
          'category_id' => 3,
          'title' => 'Sea bass fillet sashimi',
          'description' => '4 Τεμάχια. Φιλέτα λαβράκι',
          'price' => 6,
          'slug' => 'sea-bass-fillet-sashimi',
          'position' => 3,
      ]);


      //Inside out rolls
      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Salmon avocado roll',
          'description' => '8 Τεμάχια. Ρολό με σολομό, αβοκάντο & τυρί κρέμα',
          'price' => 5.5,
          'slug' => 'salmon-avocado-roll',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Tuna avocado roll',
          'description' => '8 Τεμάχια. Ρολό με τόνο, αβοκάντο & τυρί κρέμα',
          'price' => 6.2,
          'slug' => 'tuna-avocado-roll',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Spicy salmon tobiko roll',
          'description' => '8 Τεμάχια. Ρολό με σολομό, αγγούρι, φρέσκο κρεμμύδι, spicy sauce & πράσινο αυγοτάραχο',
          'price' => 5.5,
          'slug' => 'spicy-salmon-tobiko-roll',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Spicy tuna tobiko roll',
          'description' => '8 Τεμάχια. Ρολό με αγγούρι, φρέσκο κρεμμύδι, spicy mayonnaise, πράσινο αυγοτάραχο & τόνο',
          'price' => 6.2,
          'slug' => 'spicy-tuna-tobiko-roll',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Spicy crab roll',
          'description' => '8 Τεμάχια. Ρολό με surimi (συνθετικό καβούρι), αγγούρι, αβοκάντο, spicy sauce & κόκκινο αυγοτάραχο',
          'price' => 5,
          'slug' => 'spicy-crab-roll',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'California roll',
          'description' => '8 Τεμάχια. Ρολό με surimi (συνθετικό καβούρι), αγγούρι, αβοκάντο, λευκό σουσάμι & wasabi μαγιονέζα',
          'price' => 4.5,
          'slug' => 'california-roll',
          'position' => 6,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Shrimp roll',
          'description' => '8 Τεμάχια. Ρολό με γαρίδα, αγγούρι, αβοκάντο, τυρί κρέμα & μαύρο σουσάμι',
          'price' => 4.5,
          'slug' => 'shrimp-roll',
          'position' => 7,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Caterpillar roll',
          'description' => '8 Τεμάχια. Ρολό με τόνο, αγγούρι, sweer chili sauce, sriracha & φρέσκο κρεμμύδι',
          'price' => 6.5,
          'slug' => 'caterpillar-roll',
          'position' => 8,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Crazy horse roll',
          'description' => '8 Τεμάχια. Ρολό με γαρίδα tempura, τυρί κρέμα, φρέσκο κρεμμύδι, αβοκάντο & κόκκινο tobiko',
          'price' => 7,
          'slug' => 'crazy-horse-roll',
          'position' => 9,
      ]);

      DB::table('products')->insert([
          'category_id' => 4,
          'title' => 'Shrimp tempura roll',
          'description' => '8 Τεμάχια. Ρολό με γαρίδα tempura, λευκό σουσάμι & μαγιονέζα wasabi',
          'price' => 6.5,
          'slug' => 'shrimp-tempura-roll',
          'position' => 10,
      ]);


      //Fried Rice
      DB::table('products')->insert([
          'category_id' => 5,
          'title' => 'Fried Rice με κοτόπουλο',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, καλαμπόκι, αρακά & αυγό',
          'price' => 6,
          'slug' => 'fried-rice-me-kotopoulo',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 5,
          'title' => 'Fried Rice με γαρίδα',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, καλαμπόκι & αρακά',
          'price' => 7,
          'slug' => 'fried-rice-me-garida',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 5,
          'title' => 'Fried Rice με μοσχάρι',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, καλαμπόκι, αρακά & αυγό',
          'price' => 6.5,
          'slug' => 'fried-rice-me-mosxari',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 5,
          'title' => 'Fried Rice με λαχανικά',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, καλαμπόκι, αρακά & αυγό',
          'price' => 5,
          'slug' => 'fried-rice-me-laxanika',
          'position' => 4,
      ]);


      //Maki Rolls
      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Kappa maki roll',
          'description' => '6 Τεμάχια. Ρολά με αγγούρι',
          'price' => 3,
          'slug' => 'kappa-maki-roll',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Avocado maki roll',
          'description' => '6 Τεμάχια. Ρολά με αβοκάντο',
          'price' => 3.5,
          'slug' => 'avocado-maki-roll',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Seabass maki roll',
          'description' => '6 Τεμάχια. Ρολά με λαβράκι',
          'price' => 4.5,
          'slug' => 'seabass-maki-roll',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Salmon maki roll',
          'description' => '6 Τεμάχια. Ρολά με σολομό',
          'price' => 4.8,
          'slug' => 'salmon-maki-roll',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Tuna maki roll',
          'description' => '6 Τεμάχια. Ρολά με τόνο',
          'price' => 5,
          'slug' => 'tuna-maki-roll',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 6,
          'title' => 'Eal maki roll',
          'description' => '6 Τεμάχια. Ρολά με καπνιστό χέλι, αγγούρι, λευκό σουσάμι & Teriyaki sauce',
          'price' => 5,
          'slug' => 'eal-maki-roll',
          'position' => 6,
      ]);


      //Wok Tossed Noodles-Mendaki Noodles
      DB::table('products')->insert([
          'category_id' => 7,
          'title' => 'Μendaki Noodles με κοτόπουλο',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7.5,
          'slug' => 'mendaki-noodles-me-kotopoulo',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 7,
          'title' => 'Μendaki Noodles με γαρίδα',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 9,
          'slug' => 'mendaki-noodles-me-garida',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 7,
          'title' => 'Μendaki Noodles με μοσχάρι',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 8.5,
          'slug' => 'mendaki-noodles-me-mosxari',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 7,
          'title' => 'Μendaki Noodles με λαχανικά',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7,
          'slug' => 'mendaki-noodles-me-laxanika',
          'position' => 4,
      ]);


      //Wok Tossed Noodles - Rice Noodles
      DB::table('products')->insert([
          'category_id' => 8,
          'title' => 'Rice Noodles με κοτόπουλο',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7.5,
          'slug' => 'rice-noodles-me-kotopoulo',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 8,
          'title' => 'Rice Noodles με γαρίδα',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 9,
          'slug' => 'rice-noodles-me-garida',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 8,
          'title' => 'Rice Noodles με μοσχάρι',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 8.5,
          'slug' => 'rice-noodles-me-mosxari',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 8,
          'title' => 'Rice Noodles με λαχανικά',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7,
          'slug' => 'rice-noodles-me-laxanika',
          'position' => 4,
      ]);


      //Wok Tossed Noodles-Udon Noodles
      DB::table('products')->insert([
          'category_id' => 9,
          'title' => 'Udon Noodles με κοτόπουλο',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7.5,
          'slug' => 'udon-noodles-me-kotopoulo',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 9,
          'title' => 'Udon Noodles με γαρίδα',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 9,
          'slug' => 'udon-noodles-me-garida',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 9,
          'title' => 'Udon Noodles με μοσχάρι',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 8.5,
          'slug' => 'udon-noodles-me-mosxari',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 9,
          'title' => 'Udon Noodles με λαχανικά',
          'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
          'price' => 7,
          'slug' => 'udon-noodles-me-laxanika',
          'position' => 4,
      ]);


      //New Style Rolls
      DB::table('products')->insert([
          'category_id' => 10,
          'title' => 'Spicy shrimp roll',
          'description' => '8 Τεμάχια. Ρολό με γαρίδα, αβοκάντο, αγγούρι, κόκκινο αυγοτάραχο & μαγιονέζα καυτερή',
          'price' => 6,
          'slug' => 'spicy-shrimp-roll',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 10,
          'title' => 'Rainbow roll',
          'description' => '8 Τεμάχια. Ρολό με σολομό, λαβράκι, γαρίδα, τόνο, χέλι, αβοκάντο & αγγούρι',
          'price' => 5.5,
          'slug' => '',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 10,
          'title' => 'Salmon teriyaki roll',
          'description' => '8 Τεμάχια. Ρολό με σολομό, αβοκάντο, αγγούρι, teriyaki sauce & λευκό σουσάμι',
          'price' => 5.5,
          'slug' => 'salmon-teriyaki-roll',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 10,
          'title' => 'Seabass roll',
          'description' => '8 Τεμάχια. Ρολό με λαβράκι, αβοκάντο, αγγούρι, γλυκόξινη sauce & μαύρο αυγοτάραχο',
          'price' => 5.5,
          'slug' => '',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 10,
          'title' => 'Dragon roll',
          'description' => '8 Τεμάχια. Ρολό με καπνιστό χέλι, αβοκάντο, αγγούρι, teriyaki σως & λευκό σουσάμι',
          'price' => 5.5,
          'slug' => 'dragon-roll',
          'position' => 5,
      ]);


      //Nigiri

      DB::table('products')->insert([
          'category_id' => 11,
          'title' => 'Salmon nigiri',
          'description' => '4 Τεμάχια. Ρύζι με φιλέτο σολομού',
          'price' => 5.3,
          'slug' => 'salmon-nigiri',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 11,
          'title' => 'Tuna nigiri',
          'description' => '4 Τεμάχια. Ρύζι με φιλέτο τόνου',
          'price' => 5.8,
          'slug' => 'tuna-nigiri',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 11,
          'title' => 'Seabass nigiri',
          'description' => '4 Τεμάχια. Ρύζι με φιλέτο λαβράκι',
          'price' => 5,
          'slug' => 'seabass-nigiri',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 11,
          'title' => 'Shrimp nigiri',
          'description' => '4 Τεμάχια. Ρύζι με γαρίδα',
          'price' => 6.5,
          'slug' => 'shrimp-nigiri',
          'position' => 4,
      ]);

      DB::table('products')->insert([
        'category_id' => 11,
        'title' => 'Eel nigiri',
        'description' => '4 Τεμάχια. Ρύζι με φιλέτο χέλι',
        'price' => 5,
        'slug' => 'eel-nigiri',
        'position' => 5,
      ]);



      //Gunkan
      DB::table('products')->insert([
          'category_id' => 12,
          'title' => 'Gunkan tuna',
          'description' => '2 Τεμάχια. Ρύζι τυλιγμένο σε φύκι, ψιλοκομμένα φιλέτα τόνου, spicy mayo & πράσινο αυγοτάραχο',
          'price' => 4.3,
          'slug' => 'gunkan-tuna',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 12,
          'title' => 'Gunkan salmon',
          'description' => '2 Τεμάχια. Ρύζι τυλιγμένο σε φύκι, ψιλοκομμένα φιλέτα σολομού, spicy mayo & πράσινο αυγοτάραχο',
          'price' => 4,
          'slug' => 'gunkan-salmon',
          'position' => 2,
      ]);


      //Homu Special Roll
      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Alaskan crispy roll',
          'description' => '10 Τεμάχια. Με δέρμα σολομού, αβοκάντο, φρέσκο κρεμμύδι, λευκό σουσάμι & spicy mayo',
          'price' => 8.5,
          'slug' => 'alaskan-crispy-roll',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Flying chicken special roll',
          'description' => '8 Τεμάχια. Με σπαράγγια Tempura, κοτόπουλο, φρέσκο κρεμμύδι, αβοκάντο, Tobiko κόκκινο, Tobiko μαύρο & Teriyaki sauce',
          'price' => 7.5,
          'slug' => 'flying-chicken-special-roll',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Dynamite roll',
          'description' => '8 Τεμάχια. Με γαρίδα tempura, αβοκάντο, αγγούρι, sweet chili mayo sauce, σχοινόπρασο & μαύρο αυγοτάραχο',
          'price' => 7.5,
          'slug' => 'dynamite-roll',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Tiger crispy roll',
          'description' => '8 Τεμάχια. Με γαρίδα tempura, τυρί κρέμα, αβοκάντο, μαύρο & λευκό σουσάμι & sweet mayo sauce',
          'price' => 8,
          'slug' => 'tiger-crispy-roll',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Volcano roll',
          'description' => '8 Τεμάχια. Ρολό με Σολομό, Surimi (συνθετικό καβούρι), σχοινόπρασο, spicy mayonnaise, teriyaki Sauce & κόκκινο αυγοτάραχο',
          'price' => 6.5,
          'slug' => 'volcano-roll',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Homu special roll',
          'description' => '8 Τεμάχια. Ρολό με τόνο, σολομό, αγγούρι ,αβοκάντο, τυρί κρέμα, teriyaki sauce & χρυσό αυγοτάραχο',
          'price' => 6.8,
          'slug' => 'homu-special-roll',
          'position' => 6,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Crazy Horse Roll',
          'description' => '8 Τεμάχια. Γαρίδα tempura, τυρί κρέμα, φρέσκο κρεμμύδι, αβοκάντο & κόκκινο Tobiko',
          'price' => 7,
          'slug' => 'crazy-horse-roll',
          'position' => 7,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Salmon Shrimp Tempura roll',
          'description' => '8 Τεμάχια. Γαρίδα Τempura, σολομός tempura, τυρί κρέμα & sauce',
          'price' => 7,
          'slug' => 'salmon-shrimp-tempura-roll',
          'position' => 8,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Crisp Roll maki',
          'description' => '8 Τεμάχια. Με σολομό, αβοκάντο, κόκκινο αυγοτάραχο, sauce, panko bread crumbs & τυρί κρέμα',
          'price' => 7,
          'slug' => 'crisp-roll-maki',
          'position' => 9,
      ]);

      DB::table('products')->insert([
          'category_id' => 13,
          'title' => 'Paradise roll',
          'description' => '8 Τεμάχια. Ρολό με surimi (συνθετικό καβούρι), μάνγκο, καρότο, αγγούρι, καυτερή μαγιονέζα, μαγιονέζα wasabi & μαύρο αυγοτάραχο',
          'price' => 6.5,
          'slug' => 'paradise-roll',
          'position' => 10,
      ]);



      //Homu Vegeterian Secrets
      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Veggie roll',
          'description' => '8 Τεμάχια. Mε αγγούρι, Ιαπωνική πίκλα, αβοκάντο & καρότο',
          'price' => 4,
          'slug' => 'veggie-roll',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Veggie special roll',
          'description' => '8 Τεμάχια. Με πράσινη πιπεριά, κόκκινη πιπεριά, λόλα πράσινη, λόλα κόκκινη, τυρί κρέμα, καρότο, αγγούρι & λευκό σουσάμι',
          'price' => 5.8,
          'slug' => 'veggie-special-roll',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Maki Mushroom & asparagus sushi roll',
          'description' => '6 Τεμάχια. Με φρέσκο μανιτάρι, σπαράγγια & sweet chili sauce',
          'price' => 5.5,
          'slug' => 'maki-mushroom-asparagus-sushi-roll',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Gunkan cucumber roll',
          'description' => '4 Τεμάχια. Με αγγούρι, πάστα αβοκάντο, surimi (συνθετικό καβουριού), καρότο & Tobiko',
          'price' => 5.8,
          'slug' => 'gunkan-cucumber-roll',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Frushi roll',
          'description' => '8 Τεμάχια. Με φράουλα, μπανάνα, mango, σαντιγύ & σιρόπι σοκολάτας',
          'price' => 6.3,
          'slug' => 'frushi-roll',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 14,
          'title' => 'Nigiri Mushroom roll',
          'description' => '4 Τεμάχια. Με φρέσκο παναρισμένο μανιτάρι, τυρί κρέμα, κόκκινο αυγοτάραχο & Teriyaki sauce',
          'price' => 5.8,
          'slug' => 'nigiri-mushroom-roll',
          'position' => 6,
      ]);


      //Sushi Lovers|Nigiri mix combo
      DB::table('products')->insert([
          'category_id' => 15,
          'title' => 'Nigiri mix combo',
          'description' => '12 Τεμάχια. Με 2 nigiri tuna, 2 nigiri mushroom, 2 nigiri salmon, 2 nigiri eel, 2 nigiri seabass & 2 nigiri shrimp',
          'price' => 15,
          'slug' => 'nigiri-mix-combo',
          'position' => 1,
      ]);

      //Sushi Lovers|Nigiri mix combo
      DB::table('products')->insert([
          'category_id' => 15,
          'title' => 'Homu special combo',
          'description' => '29 Τεμάχια. Με 4 dynamite roll, 4 crispy roll, 5 alaskan roll, 4 volcano roll, 4 caterpillar roll, 4 salmon shrimp tempura roll & 4 crazy horse roll',
          'price' => 30,
          'slug' => 'homu-special-combo',
          'position' => 2,
      ]);




      //Desserts
      DB::table('products')->insert([
          'category_id' => 16,
          'title' => 'Mochi chocolate',
          'description' => '2 Τεμάχια. Ρύζι κρούστας & γέμιση σοκολάτα',
          'price' => 4,
          'slug' => 'mochi-chocolate',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 16,
          'title' => 'Mochi cheesecake',
          'description' => '',
          'price' => 4.3,
          'slug' => 'Mochi Cheesecake',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 16,
          'title' => 'Banana roll',
          'description' => 'Ρολό με μπανάνα, καρύδια, πραλίνα σοκολάτα, φράουλα & σιρόπι σοκολάτα',
          'price' => 6.8,
          'slug' => 'banana-roll',
          'position' => 3,
      ]);


      //Beverages
      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Coca-Cola 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'coca-cola-330ml',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Coca-Cola light 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'coca-cola-light-330ml',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Coca-Cola zero 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'coca-cola-zero-330ml',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Ηβη κόκκινη 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'hvh-kokkini-330ml',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Ηβη λεμόνι 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'hvh-lemoni-330ml',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Ηβη μπλε 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'hvh-mple-330ml',
          'position' => 6,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Sprite 330ml',
          'description' => '',
          'price' => 1.8,
          'slug' => 'sprite-330ml',
          'position' => 7,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Νερό 1lt',
          'description' => '',
          'price' => 1.8,
          'slug' => 'nero-1lt',
          'position' => 8,
      ]);

      DB::table('products')->insert([
          'category_id' => 17,
          'title' => 'Ανθρακούχο νερό 250ml',
          'description' => '',
          'price' => 2,
          'slug' => 'anthrakouxo-nero-250ml',
          'position' => 9,
      ]);



      //BEERS|DRINKS
      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Μπύρα Asahi 330ml',
          'description' => '',
          'price' => 5.5,
          'slug' => 'mpira-asahi-330ml',
          'position' => 1,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Carlsberg 330ml',
          'description' => '',
          'price' => 5.5,
          'slug' => 'carlsberg-330ml',
          'position' => 2,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Grimbergen 330ml',
          'description' => '',
          'price' => 5.5,
          'slug' => 'grimbergen-330ml',
          'position' => 3,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Sake 200ml',
          'description' => '',
          'price' => 8,
          'slug' => 'sake-220ml',
          'position' => 4,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Caramelo 187ml',
          'description' => '',
          'price' => 4.8,
          'slug' => 'caramelo-187ml',
          'position' => 5,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Bianconero ροζέ 187ml',
          'description' => '',
          'price' => 4.8,
          'slug' => 'bianconero-roze-187ml',
          'position' => 6,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Bianconero λευκό 187ml',
          'description' => '',
          'price' => 4.8,
          'slug' => 'bianconero-lefko-187ml',
          'position' => 7,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Κόκκινο κρασί 750ml',
          'description' => '',
          'price' => 12,
          'slug' => 'kokkino-krasi-750ml',
          'position' => 8,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Λευκό κρασί 750ml',
          'description' => '',
          'price' => 12,
          'slug' => 'lefko-krasi-750ml',
          'position' => 9,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Κτήμα Άλφα λευκό 750ml',
          'description' => '',
          'price' => 26,
          'slug' => 'ktima-alfa-lefko-750ml',
          'position' => 10,
      ]);

      DB::table('products')->insert([
          'category_id' => 18,
          'title' => 'Κρασί Βίβλια Χώρα λευκό 750ml',
          'description' => '',
          'price' => 24,
          'slug' => 'krasi-vivlia-xwra-lefko-750ml',
          'position' => 11,
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


    }
}

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
          'email' => 'technopos',
          'password' => Hash::make('admin'),
      ]);





      //Background
      DB::table('backgrounds')->insert([
        'image_path' => 'demo/background.jpg',
      ]);





      //Slider
      DB::table('sliders')->insert([
          'title' => 'Lorem ipsum dolor sit amet',
          'content' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi!',
          'btntext' => 'Order Now',
          'btnlink' => '/',
          'image_path' => 'demo/slider.jpg'
      ]);
      DB::table('sliders')->insert([
          'title' => 'Sed ut perspiciatis unde omnis',
          'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
          'btntext' => 'Order Now',
          'btnlink' => '/',
          'image_path' => 'demo/slider.jpg'
      ]);
      DB::table('sliders')->insert([
          'title' => 'At vero eos et accusamus',
          'content' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur',
          'btntext' => 'Order Now',
          'btnlink' => '/',
          'image_path' => 'demo/slider.jpg'
      ]);






      //Daily
      DB::table('dailies')->insert([
          'titleBig' => 'Lorem Ispum',
          'titleSmall' => 'Lorem ipsum dolor sit amet',
          'description' => 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
          'btntext'=> 'READ MORE',
          'btnlink' => '/about',
          'image_path' => 'demo/daily.jpg'
      ]);









      //SPECIAL DISHES
      DB::table('specials')->insert([
        'title' => 'California roll',
        'description' => '8 Τεμάχια. Ρολό με surimi (συνθετικό καβούρι), αγγούρι, αβοκάντο, λευκό σουσάμι & wasabi μαγιονέζα',
        'price' => 4.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Shrimp tempura roll',
        'description' => '8 Τεμάχια. Ρολό με γαρίδα tempura, λευκό σουσάμι & μαγιονέζα wasabi',
        'price' => 6.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Μendaki Noodles με κοτόπουλο',
        'description' => 'Με καρότο, κρεμμύδι, λάχανο, πράσινες & κόκκινες πιπεριές',
        'price' => 7.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Salmon teriyaki roll',
        'description' => '8 Τεμάχια. Ρολό με σολομό, αβοκάντο, αγγούρι, teriyaki sauce & λευκό σουσάμι',
        'price' => 5.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Flying chicken special roll',
        'description' => '8 Τεμάχια. Με σπαράγγια Tempura, κοτόπουλο, φρέσκο κρεμμύδι, αβοκάντο, Tobiko κόκκινο, Tobiko μαύρο & Teriyaki sauce',
        'price' => 7.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Dynamite roll',
        'description' => '8 Τεμάχια. Με γαρίδα tempura, αβοκάντο, αγγούρι, sweet chili mayo sauce, σχοινόπρασο & μαύρο αυγοτάραχο',
        'price' => 7.5,
        'image_path' => 'demo/special.jpg'
      ]);

      DB::table('specials')->insert([
        'title' => 'Crisp Roll maki',
        'description' => '8 Τεμάχια. Με σολομό, αβοκάντο, κόκκινο αυγοτάραχο, sauce, panko bread crumbs & τυρί κρέμα',
        'price' => 7,
        'image_path' => 'demo/special.jpg'
      ]);









      //Kitchen Section
      DB::table('photokitchens')->insert([
        'title' => 'Lorem Ipsum',
        'description' => 'Κάθε μας πιάτο φτιάχνεται με επιμέλεια και με υψηλής ποιότητας πρώτες ύλες. Το εκπαιδευμένο μας προσωπικό κουζίνας με γνώσεις και εμπειρία πάνω στην Ασιατική κουζίνα σας εγγυάται όχι μόνο υπέροχα πιάτα αλλά και παραδοσιακές τεχνικές και γεύσεις αναμειγμένες με μοντέρνες πινελιές. Συχνά μας αρέσει βέβαια να πειραματιζόμαστε με συνδυασμούς και γεύσεις και να δημιουργούμε νέα πιάτα ώστε να δίνουμε επιπλέον επιλογές στους πελάτες μας.',
        'image_path' => 'demo/kitchen.jpg'
      ]);





      //Background Reviews
      DB::table('reviews')->insert([
        'image_path' => 'demo/background.jpg'
      ]);






      // About section
      DB::table('abouts')->insert([
        'title_first' => 'ΣΧΕΤΙΚΑ ΜΕ ΕΜΑΣ',
        'description_first' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        'image_path_first' => 'demo/about.jpg',
        'title_second' => 'ΑΝΑΠΤΥΣΣΟΜΑΣΤΕ',
        'description_second' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful',
        'image_path_second' => 'demo/about.jpg'
      ]);






      // Stats section
      DB::table('stats')->insert([
        'title' => 'ΧΡΟΝΙΑ ΛΕΙΤΟΥΡΓΙΑΣ',
        'text' => '4',
      ]);

      DB::table('stats')->insert([
        'title' => 'ΙΚΑΝΟΠΟΙΗΜΕΝΟΙ ΠΕΛΑΤΕΣ',
        'text' => '10.000',
      ]);

      DB::table('stats')->insert([
        'title' => 'ΚΑΤΑΣΤΗΜΑΤΑ',
        'text' => '5',
      ]);

      DB::table('stats')->insert([
        'title' => 'ΔΙΑΦΟΡΕΤΙΚΕΣ ΓΕΥΣΕΙΣ',
        'text' => '100',
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











    }
}

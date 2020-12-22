<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use \App\Slider;
use \App\Category;
use \App\About;

class FooterComposer
{
    private $about;
    private $posts;
    private $categories;
    public function __construct(About $about, Slider $posts, Category $category)
    {
        $this->about = About::first();
        $this->posts = Slider::all();
        $this->categories = Category::orderBy('position')->get();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('about', $this->about)
             ->with('posts', $this->posts)
             ->with('categories', $this->categories);
    }
}

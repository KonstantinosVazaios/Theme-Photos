<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use \App\Slider;
use \App\Category;

class FooterComposer
{
    private $posts;
    private $categories;
    public function __construct(Slider $posts, Category $category)
    {
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
        $view->with('posts', $this->posts)
             ->with('categories', $this->categories);
    }
}

<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use \App\Background;

class BackgroundComposer
{
    private $background;

    public function __construct(Background $background)
    {
        $this->background = Background::first();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('background', $this->background);
    }
}

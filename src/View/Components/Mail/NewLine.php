<?php

namespace Bjnstnkvc\MailComponents\View\Components\Mail;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewLine extends Component
{
    /**
     * @var string New Line Break height.
     */
    public $height;

    /**
     * @var string Determine whether the component should be rendered as a table.
     */
    public $asTable;

    /**
     * @var string New Line Break background color.
     */
    public $background;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($height = null, $asTable = false, $background = null)
    {
        $this->height     = $height ?: config('mail_components.new_line.height');
        $this->asTable    = $asTable ?? config('mail_components.new_line.as_table');
        $this->background = $background ?: config('mail_components.new_line.background');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('mail-components::mail.new-line');
    }
}

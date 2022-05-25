<?php

namespace TwenyCode\TwenyUiKit\Components\Button;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
{
    /* @var  */
    public $action;

    /* @var  */
    public $label;

    public $class;

    //  Create a new component instance.
    public function __construct($action, $label = '<i class="fa fa-trash-alt"></i> Delete', $class="btn-block")
    {
        $this->action = $action;
        $this->label = $label;
        $this->class = $class;
    }

    //  Get the view / contents that represent the component.
    public function render(): View
    {
        return view('tweny-ui-kit-views::components.button.delete');
    }
}

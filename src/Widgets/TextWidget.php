<?php

namespace Akopean\widgets\Widgets;

use Akopean\widgets\AbstractWidget;

class TextWidget extends AbstractWidget
{
    //Widget Data
    protected $data;
    /**
     * Constructor.
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->data = $config['data'];
        unset($config['data']);

        parent::__construct($config);
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets::widgets.text_widget', [
            'data' => $this->data,
        ]);
    }

}
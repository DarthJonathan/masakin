<?php

/**
 * Created by PhpStorm.
 * User: JohnNate
 * Date: 8/26/17
 * Time: 10:37 AM
 */
class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index ()
    {
        $this->data['page_title'] = 'Masakin Home';
        $this->template->load('template/template', 'home_page', $this->data);
    }


}
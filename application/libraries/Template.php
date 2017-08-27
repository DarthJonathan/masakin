<?php

/**
 * Created by PhpStorm.
 * User: JohnNate
 * Date: 8/26/17
 * Time: 10:16 AM
 */
class Template
{
    private $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function load ($template, $view_page, $data) {

        $data['body']   = $this->ci->load->view($view_page, $data, true);
        return $this->ci->load->view($template, $data);

    }

    function parse ($template, $view, $data) {

        $data['body']   = $this->ci->parser->parse($view, $data, true);
        return $this->ci->load->view($template, $data);

    }
}
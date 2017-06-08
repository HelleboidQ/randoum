<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use Core\View;
use Core\Controller;
use Helpers\Session;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Piece extends Controller
{
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcomeText');
        $data['welcomeMessage'] = $this->language->get('welcomeMessage');

        View::renderTemplate('header', $data);
        View::render('Piece/piece', $data);
        View::renderTemplate('footer', $data);
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Jr Pichon Bautista
 * Date: 1/19/14
 * Time: 3:35 PM
 */
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('table_model');
    }

    public function index()
    {
        $this->load->view('home_view');
    }

    public function table_view(){
        $result = $this->table_model->fetch_data();
        $this->load->view('table_view', array("result" => $result));
    }
}

?>
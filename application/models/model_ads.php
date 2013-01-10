<?php defined('IN_MZ') or die("Have any error!");
class Model_ads extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
}

?>
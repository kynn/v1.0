<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
defined('IN_MZ') or die("Are you hacker?");
class Home extends CI_Controller {

    public function index()
    {
        $this->smarty->assign("name","Nguyễn Ngọc Kỳ");
        $data['years_old'] = 18;
        $this->smarty->assign(
            "contacts", array(
                array(
                    "phone" => "555-1234",
                    "fax" => "555-2345",
                    "cell" => "999-9999"
                ),
                array(
                    "phone" => "555-4444",
                    "fax" => "555-3333",
                    "cell" => "888-8888")
            )
        );
        $this->smarty->view( 'welcome_message.tpl', $data );
    }
}

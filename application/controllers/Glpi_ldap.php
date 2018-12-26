<?php
/**
 * Created by Hamid.
 * User:
 * Date: 19/01/2018
 * Time: 12:21 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'third_party/Cli.php';

use Stunt\Console\Cli as Cli;

class Glpi_ldap extends CI_Controller {
    public $cli;

    public function __construct()
    {
        parent::__construct();

        set_time_limit(0);
        $this->cli = new Cli('', '', array());

    }

    public function index()
    {
        if(is_cli())
        {
            $this->cli->out("[white_bold]glpi SSO script help :(".date('Y-m-d H:i:s').").[reset]\n")->new_line();
            $this->cli->out("[green_bold]- get_all :[white_bold] get all ldap users.[reset]\n")->new_line();

        }
    }


    public function get_all()
    {
        $this->load->model('ActiveDirectory_model','AD');
        $users = $this->AD->get_all();

        printr_pre($users);

    }

}
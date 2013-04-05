<?php
/**
 * Created by JetBrains PhpStorm.
 * User: frank.xu
 * Date: 4/5/13
 * Time: 3:41 PM
 * To change this template use File | Settings | File Templates.
 */
class Git extends CI_Controller
{
    public function index()
    {
        $client = new Github\Client();
        $user = $client->api('user')->show('ornicar');
        $this->load->view('common/header');
        $this->load->view('home', array('user'=>$user));
        $this->load->view('common/footer');
    }
}

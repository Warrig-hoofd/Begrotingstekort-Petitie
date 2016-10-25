<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property  foundings foundings model.
 */
class Welcome extends CI_Controller
{
    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_foundings', 'foundings');
    }

    /**
     * Get the frontpage for the petition.
     *
     * @url    GET|HEAD: >/
     * @return void
     */
    public function index()
    {
        $data['title'] = 'Index';

        // Count foundings.
        $data['count_lux_leaks']     = $this->foundings->count();
        $data['count_swiss_leaks']   = $this->foundings->count();
        $data['count_behama_leaks']  = $this->foundings->count();
        $data['count_panama_papers'] = $this->foundings->count();
        $data['count_vermogens_tax'] = $this->foundings->count();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('welcome', $data);
        $this->load->view('template/footer');
    }
}

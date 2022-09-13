<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('cookie');
    $this->load->model('Etudiant_model');

    
  }

  public function index()
  {
    $session = $this->session;

    // $matricule = ["matricule"=>1];

    // $session->set_userdata($matricule);

    // $session->unset_userdata('matricule');

    if ($session->matricule == null) 
    {
      return $this->load->view('vitrine');
      // set_cookie('matricule', $session->matricule);
      // echo json_encode(get_cookie('matricule'));    
    } 
    else 
    {
      $etudiant = new Etudiant_model();
      $data['data'] = $etudiant->get_connected_etudiant($session->matricule);


      // echo json_encode($data);
      $this->load->view('Layouts/header', $data);
      $this->load->view('Pages/home', $session);
      $this->load->view('Layouts/footer');
    }
  }
}

/* End of file MainController.php and path \application\controllers\MainController.php */

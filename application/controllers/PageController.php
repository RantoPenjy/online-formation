<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
  }

  public function index()
  {
    $session = $this->session;

    if ($session->matricule == null) 
    {
      return $this->load->view('vitrine');
    } 
    else 
    {
      $etudiant = new Etudiant();
      $data['data'] = $etudiant->getUser($session->matricule);

      return $this->load->view('Layouts/header', $data)
        . $this->load->view('Pages/home')
        . $this->load->view('Layouts/footer');
    }
  }
}

/* End of file PageController.php and path \application\controllers\PageController.php */

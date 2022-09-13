<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EtudiantController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Etudiant_model');
    $this->load->model('Visite_model');
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->helper('cookie');
    $this->load->library('session');
    $this->load->library('form_validation');
  }

  public function login()
  {
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Mot de passe', 'required');

    if ($this->form_validation->run()) 
    {
      $mail = $this->input->post('email');
      $password = $this->input->post('password');

      // If the user exist
      if ($this->Etudiant_model->login_etudiant($mail))
      {
        //Get user's matricule to add in session
        $data = $this->Etudiant_model->get_etudiant_for_session($mail); 

        $mdp = $data->mdp;

        $authenticatePassword = password_verify($password, $mdp);

        if($authenticatePassword)
        {
          $session_data = array(
            'matricule' => $data->matricule,
            'email' => $mail
          );

          $this->session->set_userdata($session_data);
          // set_cookie('matricule', $this->session->matricule);
          $this->Visite_model->insert($this->session->matricule);

          // echo json_encode(get_cookie('matricule'));

          echo 'success';
          // redirect(base_url());
        }
        else
        {
          echo 'failed';
        }
      }
      else 
      {
        echo 'incorrect mail address';
        // $this->session->set_flashdata('error', 'Email ou mot de passe invalide');
        // redirect(base_url());
      } 
    } 
  }
  
  public function logout()
  {
    $this->session->sess_destroy();

    redirect(base_url());
  }
}

/* End of file EtudiantController.php and path \application\controllers\EtudiantController.php */

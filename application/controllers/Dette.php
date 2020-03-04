<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Dette
 *
 * @author    Abdoulaye Dia
 * @link      https://github.com/mabdoualyedia
 *
 */

class Dette extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function creer()
  {
    $this->load->model('Dette_model');
     $this->form_validation->set_rules('nomClient','nomClient','required');
     $this->form_validation->set_rules('telephone','telephone','required');
     $this->form_validation->set_rules('description','description','required');
     $this->form_validation->set_rules('date','date','required');
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('creer');
    }
    else
    {
      // enregistrement dans la base ()
      $formArray=array();
      $formArray['nomClient']= $this->input->post('nomClient');
      $formArray['telephone']= $this->input->post('telephone');
      $formArray['description']= $this->input->post('description');
      $formArray['date']= $this->input->post('date');
      $this->Dette_model->save($formArray);
      $this->session->set_flashdata('success','Dette ajouter avec succes');
      redirect(base_url().'index.php/dette/index');

    }
    
  }

  public function edit($id)
  {
    $this->load->model('Dette_model');
    $dette = $this->Dette_model->getDette($id);
    $data = array();
    $data['dette']=$dette;

    $this->form_validation->set_rules('nomClient','nomClient','required');
    $this->form_validation->set_rules('telephone','telephone','required');
    $this->form_validation->set_rules('description','description','required');
    $this->form_validation->set_rules('date','date','required');
    
    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('edit',$data);
    }
    else
    {
      $formArray=array();
      $formArray['nomClient']= $this->input->post('nomClient');
      $formArray['telephone']= $this->input->post('telephone');
      $formArray['description']= $this->input->post('description');
      $formArray['date']= $this->input->post('date');
      $this->Dette_model->updateDette($id,$formArray);
      $this->session->set_flashdata('success','Dette modifier');
      redirect(base_url().'index.php/dette/index');
    }

    
  }

  public function index()
  {
    $this->load->model('Dette_model');
    $dette = $this->Dette_model->selectAll();
    $data = array();
    $data['dette']=$dette;
    $this->load->view('liste',$data);
  }

  public function supprimer($id)
  {
    $this->load->model('Dette_model');
    $dette = $this->Dette_model->getDette($id);
    if(empty($dette))
    {
      $this->session->set_flashdata('failure','Dette no trouver');
      redirect(base_url().'index.php/dette/index');
    }
    $this->Dette_model->supprimerDette($id);
    $this->session->set_flashdata('success','Dette supprimer avec success');
    redirect(base_url().'index.php/dette/index');
  }

}




/* End of file Dette.php */
/* Location: ./application/controllers/Dette.php */
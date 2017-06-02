<?php
  class Zamestnanci extends CI_Controller{
    public function index(){
          $data['title'] = 'Naši Zamestnanci';

          $data['zamestnanci'] = $this->model_zamestnanci->get_zamestnanec();

      $this->load->view('templates/header');
      $this->load->view('zamestnanci/index', $data);
      $this->load->view('templates/footer');
    }


      public function view($id = NULL){
      $data['zamestnanec'] = $this->model_zamestnanci->get_zamestnanec($id);

      if(empty($data['zamestnanec'])){
        show_404();
      }
        $data['Meno'] = $data['zamestnanec']['Meno'];

        $this->load->view('templates/header');
        $this->load->view('zamestnanci/view', $data);
        $this->load->view('templates/footer');
    }
  }

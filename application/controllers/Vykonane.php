<?php
  class Vykonane extends CI_Controller{
    public function index(){
          $data['title'] = 'Vykonaneé služby';

          $data['vykonane'] = $this->model_vykonane->get_vykonana();

      $this->load->view('templates/header');
      $this->load->view('vykonane/index', $data);
      $this->load->view('templates/footer');
    }


      public function view($id = NULL){
      $data['vykonana'] = $this->model_vykonane->get_vykonana($id);

      if(empty($data['vykonana'])){
        show_404();
      }
        $data['Názov služby'] = $data['vykonana']['Názov služby'];

        $this->load->view('templates/header');
        $this->load->view('vykonane/view', $data);
        $this->load->view('templates/footer');
    }
  }

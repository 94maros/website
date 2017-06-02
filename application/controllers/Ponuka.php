<?php
  class Ponuka extends CI_Controller{
    public function index(){
          $data['title'] = 'Ponuka služieb';

          $data['ponuka'] = $this->model_ponuk->get_ponuky();

      $this->load->view('templates/header');
      $this->load->view('ponuka/index', $data);
      $this->load->view('templates/footer');
    }


      public function view($id = NULL){
      $data['ponuky'] = $this->model_ponuk->get_ponuky($id);

      if(empty($data['ponuky'])){
        show_404();
      }
        $data['Názov služby'] = $data['ponuky']['Názov služby'];

        $this->load->view('templates/header');
        $this->load->view('ponuka/view', $data);
        $this->load->view('templates/footer');
    }
  }

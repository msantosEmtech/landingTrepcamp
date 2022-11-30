<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Winners extends CI_Controller
{

 public function index()
 {
  $linkJsVista = base_url('assets/js/winners/winners.js');
  $footer = array(
   'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
  );
  $this->load->view('header');
  $this->load->view('winners/index');
  $this->load->view('footer', $footer);
 }
}
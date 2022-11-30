<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ChallengeTiktok extends CI_Controller
{

 public function index()
 {
  $linkJsVista = base_url('assets/js/challenge/tiktok.js');
  $footer = array(
   'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
  );
  $this->load->view('header');
  $this->load->view('challenge/tiktok');
  $this->load->view('footer', $footer);
 }
}
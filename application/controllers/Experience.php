<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Experience extends CI_Controller
{

 public function index()
 {
  $linkJsVista = base_url('assets/js/experience/experience.js');
  $footer = array(
   'scriptVista' => '<script src="' . $linkJsVista . '"></script>',
  );
  $this->load->view('header');
  $this->load->view('experience/index');
  $this->load->view('footer', $footer);
 }
 public function downloadItinerary()
 {
  $this->load->helper('download');
  $routeFile = "assets/pdf/Experience.pdf";
  force_download(FCPATH . $routeFile, null);
 }
}
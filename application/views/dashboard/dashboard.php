<?php
//if (!isset($unload_theme)):
    $this->load->view('dashboard/header');
    $this->load->view('dashboard/sidebar');
    $this->load->view('dashboard/footer');
//else:

//    $this->load->view('dashboard/important_header_only');
//    //$this->load->view('dashboard/sidebar');
//    $this->load->view($content);
//endif;
?>
<?php

class TrombinoController extends BaseController {


  public function index() {

    $vars = array(
      'title' => 'Trombinoscope wf3',
      'description' => 'Les étudinats de votre groupe',
    );

    $this->render('trombino', $vars);
  }





}

<?php

class TrombinoController extends BaseController {


  public function index() {

    $vars = array(
      'title' => 'Trombinoscope wf3',
      'description' => 'Les étudinats de votre groupe',
      'url_photos' => IMG_HTTP. '/trombino/10',
      'pwf3Css' => CSS_HTTP. 'pwf3.css',

    );

    $this->render('trombino', $vars);
  }





}

<?php

class PresenceController extends BaseController {

public function index() {

  $session_id = 10;
  $students = Student::getList( 'SELECT session_id, firstname, photo, sex FROM student WHERE session_id='.$session_id );

  $vars = array(
    'title' =>'Feuille de présence WebForce 3',
    'description' => '', // date du jour à indiquer
    'url_trombino' => IMG_HTTP.'trombino/',
    'pwf3Css' => CSS_HTTP. 'pwf3.css',
    'students' => $students,
  );

  $this->render('presence', $vars);
 }

}

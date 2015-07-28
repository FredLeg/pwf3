<?php

class TrombinoController extends BaseController {

 public function index() {

   $students = Student::getList('SELECT firstname, photo FROM student WHERE session_id=10');

   $vars = array(
     'title' => 'Trombinoscope wf3',
     'description' => 'Les étudiants de votre groupe',
     'url_photos' => IMG_HTTP. 'trombino/10',
     'pwf3Css' => CSS_HTTP. 'pwf3.css',
     'students' => $students,
   );

   $this->render('trombino', $vars);
 }

}

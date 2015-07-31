<?php

class Presence extends Model {

  protected $id;
  protected $student_id;
  protected $day;
  protected $r1;
  protected $r2;
  protected $d1;
  protected $d2;
  protected $absent;
  protected $motif;
  protected $update_user_id;
  protected $update_date;

  /* Getters */
  public function getId() {
    return $this->id;
  }
  public function getStudentId() {
    return $this->student_id;
  }
  public function getDay() {
    return $this->day;
  }
  public function getR1() {
    return $this->r1;
  }
  public function getR2() {
    return $this->r2;
  }
  public function getD1() {
    return $this->d1;
  }
  public function getD2() {
    return $this->d2;
  }
  public function getAbsent() {
    return $this->absent;
  }
  public function getMotif() {
    return $this->motif;
  }
  public function getUpdateUserId() {
    return $this->update_user_id;
  }
  public function getUpdateDate() {
    return $this->update_date;
  }

  /* Setters */
  public function setId($id) {
    $this->id = $id;
  }
  public function setStudentId($student_id) {
    $this->student_id = $student_id;
  }
  public function setDay($day) {
    $this->day = $day;
  }
  public function setR1($r1) {
    $this->r1 = $r1;
  }
  public function setR2($r2) {
    $this->r2 = $r2;
  }
  public function setD1($d1) {
    $this->d1 = $d1;
  }
  public function setD2($d2) {
    $this->d2 = $d2;
  }
  public function setAbsent($absent) {
    $this->absent = $absent;
  }
  public function setMotif($motif) {
    $this->motif = $motif;
  }
  public function setUpdateUserId($update_user_id) {
    $this->update_user_id = $update_user_id;
  }
  public function setUpdateDate($update_date) {
    $this->update_date = $update_date;
  }
}

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

  public function getForm($type, $action, $request, $isPost = false, $errors = array()) {

    $form = new Form('form-presence-'.$type, 'form-presence-'.$type, $action, 'POST', 'form-horizontal', $errors, $isPost);
    $form->addField('student_id', Lang::_('Student_id'), 'text', $this->_getfieldvalue('student_id', $type, $request), true, '', @$errors['student_id']);
    $form->addField('day', Lang::_('Day'), 'date', $this->_getfieldvalue('day', $type, $request), true, '', @$errors['day']);
    $form->addField('r1', Lang::_('R1'), 'checkbox', $this->_getfieldvalue('r1', $type, $request), false, '', @$errors['r1']);
    $form->addField('r2', Lang::_('R2'), 'checkbox', $this->_getfieldvalue('r2', $type, $request), false, '', @$errors['r2']);
    $form->addField('d1', Lang::_('D1'), 'checkbox', $this->_getfieldvalue('d1', $type, $request), false, '', @$errors['d1']);
    $form->addField('d2', Lang::_('D2'), 'checkbox', $this->_getfieldvalue('d2', $type, $request), false, '', @$errors['d2']);
    $form->addField('absent', Lang::_('Absent'), 'checkbox', $this->_getfieldvalue('absent', $type, $request), false, '', @$errors['absent']);
    $form->addField('motif', Lang::_('Motif'), 'text', $this->_getfieldvalue('motif', $type, $request), false, '');

    return $form;
  }

  public function insert() {

    return Db::insert(
      'INSERT INTO presences SET student_id = :student_id, day = :day, r1 = :r1, r2 = :r2, d1 = :d1, d2 = :d2, absent = :absent, motif = :motif, update_date = :update_date',
      array(
        'student_id' => $this->student_id,
        'day' => $this->day,
        'r1' => $this->r1,
        'r2' => $this->r2,
        'd1' => $this->d1,
        'd2' => $this->d2,
        'absent' => $this->absent,
        'motif' => $this->motif,
        //'update_user_id' => $this->update_user_id,
        'update_date' => date('Y-m-d H:i:s'),
      )
    );
  }

  public function update() {

    if (empty($this->id)) {
      throw new Exception('Update error - Undefined post id');
    }

    return Db::update(
      'UPDATE presences SET student_id = :student_id, day = :day, r1 = :r1, r2 = :r2, d1 = :d1, d2 = :d2, absent = :absent, motif = :motif, update_date = :update_date WHERE id = :id',
      array(
        'student_id' => $this->student_id,
        'day' => $this->day,
        'r1' => $this->r1,
        'r2' => $this->r2,
        'd1' => $this->d1,
        'd2' => $this->d2,
        'absent' => $this->absent,
        'motif' => $this->motif,
        //'update_user_id' => $this->update_user_id,
        'update_date' => date('Y-m-d H:i:s'),
        'id' => (int) $this->id
      )
    );
  }

  public function delete() {

    if (empty($this->id)) {
      throw new Exception('Delete error - Undefined post id');
    }

    return Db::delete('DELETE FROM presence WHERE id = :id', array('id' => $this->id));
  }

}

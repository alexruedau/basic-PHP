<?php

namespace App\Models;

require_once 'Printable.php';


class BaseElement implements Printable {
  protected $title;
  public $description;
  public $visible = true;
  public $months;
  ////////////////////////
  protected $user;
  protected $password;

  public function __construct($title, $description, $user, $password){
    $this->setTitle($title);
    $this->description = $description;
    ///////////////////////////////////
    $this->setUser($user);
    $this->password = $password;
  }

  public function setTitle($title){
    if ($title==''){
      $this->title = 'N/A';
    } else {
      $this->title = $title;
    }
  }

  public function getTitle(){
    return $this->title;
  }

  public function getDescription(){
    return $this->description;
  }
  ////////////////////////////////////////7
  public function setUser($user){
    if ($user==''){
      $this->user = 'N/A';
    } else {
      $this->user = $user;
    }
  }

  public function getUser(){
    return $this->user;
  }

  public function getPassword(){
    return $this->password;
  }

}
?>

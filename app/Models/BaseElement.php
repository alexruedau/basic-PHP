<?php
class BaseElement {
  protected $title;
  public $description;
  public $visible = true;
  public $months;

  public function __construct($title, $description){
    $this->setTitle($title);
    $this->description = $description;
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

}
?>

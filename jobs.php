<?php

class Job {
  private $title;
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

  public function getDurationAsString(){
    $years = floor($this->months/12);
    $extraMonths = $this->months % 12;
      if ($years == 0){
        return "$extraMonths months";
      } elseif ($extraMonths == 0) {
        return "$years years";
      } else
      return "$years years $extraMonths months";
  }
}

$job1 = new Job('PHP Developer', 'Éste es un gran trabajo!');
$job1->months = 6;

$job2 = new Job('Python Developer', 'Éste es un gran trabajo!');
$job2->months = 12;

$job3 = new Job('Devops', 'Éste es un gran trabajo!');
$job3->months = 18;

// Arreglos dentro de arreglos
$jobs = [
  $job1,
  $job2,
  $job3
  /*
  [
    'title' => 'PHP Developer',
    'description' => 'Éste es un gran trabajo!',
    'visible' => true,
    'months' => 6
  ],
  [
    'title' => 'Python Dev',
    'visible' => true,
    'months' => 12
  ],
  [
    'title' => 'DevOps',
    'visible' => true,
    'months' => 80
  ],
  [
    'title' => 'Node Dev',
    'visible' => true,
    'months' => 20
  ],
  [
    'title' => 'Frontend Dev',
    'visible' => true,
    'months' => 70
  ]*/
];

function printJob($job){
  if ($job->visible == false){
    return;
  }

  echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
  echo '</li>';
}

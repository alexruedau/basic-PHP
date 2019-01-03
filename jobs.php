<?php

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }
}

$job1 = new Job();
$job1->setTitle('PHP Developer');
$job1->description = 'Éste es un gran trabajo!';
$job1->visible = true;
$job1->months = 6;

$job2 = new Job();
$job2->setTitle('Python Developer');
$job2->description = 'Éste es un gran trabajo!';
$job2->visible = true;
$job2->months = 12;

// Arreglos dentro de arreglos
$jobs = [
  $job1,
  $job2
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

function getDuration($months){
  $years = floor($months/12);
  $extraMonths = $months % 12;
    if ($years == 0){
      return "$extraMonths months";
    } elseif ($extraMonths == 0) {
      return "$years years";
    } else
    return "$years years $extraMonths months";
}

function printJob($job){
  if ($job->visible == false){
    return;
  }

  echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
  echo '</li>';
}

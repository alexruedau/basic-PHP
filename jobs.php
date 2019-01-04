<?php

require 'app/Models/Job.php';
require 'app/Models/Project.php';

$job1 = new Job('PHP Developer', 'Éste es un gran trabajo!');
$job1->months = 6;

$job2 = new Job('Python Developer', 'Éste es un gran trabajo!');
$job2->months = 12;

$job3 = new Job('Devops', 'Éste es un gran trabajo!');
$job3->months = 18;

$project1 = new Project('Project 1', 'Description');

// Arreglos dentro de arreglos
$jobs = [
  $job1,
  $job2,
  $job3
];

$projects = [
  $project1
];

function printElement($job){
  if ($job->visible == false){
    return;
  }

  echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    //echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationAsString() . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
  echo '</li>';
}

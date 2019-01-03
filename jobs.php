<?php

// Arreglos dentro de arreglos
$jobs = [
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
  ]
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
  if ($job['visible'] == false){
    return;
  }

  echo '<li class="work-position">';
    echo '<h5>' . $job['title'] . '</h5>';
    echo '<p>' . $job['description'] . '</p>';
    echo '<p>' . getDuration($job['months']) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
  echo '</li>';
}

<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController{
  public function indexAction(){

    $jobs = Job::all();
    $projects = Project::all();

    //require('jobs.php');//se pueden hacer los llamados que sean necesarios
    //require_once('jobs.php');//solo un llamado
    $lastName = 'Rueda U.';
    $name = 'Alex ' . $lastName;
    $limitMonths = 1000;

    return $this->renderHTML('index.twig', [
      'name' => $name,
      'jobs' => $jobs
    ]);

  }
}

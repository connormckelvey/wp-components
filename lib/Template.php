<?php

require_once __DIR__ . '/Container.php';

class Template extends Container {
  protected $header;
  protected $footer;

  public function __construct() {
    parent::__construct();
  }

  public function display() {
    get_header();
    echo $this->render();
    get_footer();
  }


}

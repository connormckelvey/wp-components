<?php

require_once 'Component.php';

abstract class Container extends Component {

  protected $context;
  protected $posts;

  public function __construct() {

    $this->context = Timber::get_context();    
    $this->posts = Timber::get_posts();

  }

}

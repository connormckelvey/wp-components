<?php

abstract class Component {

  protected $props;
  protected $children;

  public function __construct($props = array(), $children = '') {
     $this->props = $props;
     $this->children = $children;

  }

  public function render() {
    return <<<HTML
HTML;
  }

  public function display() {
    echo $this->render();
  }

}
?>

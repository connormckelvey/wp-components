<?php

require_once __DIR__ . '/../Component.php';
require_once __DIR__ . '/BlogPost.php';

class Blog extends Component {

  private function renderBlogs() {

    $blogsArray = array_map(function($blog) {
      $b = new BlogPost($blog);
      return $b->render();
    }, $this->props['posts']);

    return implode($blogsArray);
  }

  public function render() {
    return <<<HTML
        <h1>{$this->props['title']}</h1>
        {$this->renderBlogs()}
HTML;
  }
}

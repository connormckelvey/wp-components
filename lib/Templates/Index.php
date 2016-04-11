<?php

require_once __DIR__ . '/../Template.php';
require_once __DIR__ . '/../Components/Blog.php';


class Index extends Template {

  private function renderBlog() {
    $props = array(
      'title' => 'My New Blog',
      'posts' => $this->posts
    );

    //var_dump($props);

    $blog = new Blog($props, '');
    $html = $blog->render();
    return $html;

  }
  public function render() {
    return <<<HTML
      <div>
        {$this->renderBlog()}
      </div>
HTML;
  }
}

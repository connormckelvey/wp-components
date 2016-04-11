<?php

require_once __DIR__ . '/../Template.php';
require_once __DIR__ . '/../Components/Blog.php';


class Page extends Template {

  public function renderPage() {
    $page = $this->posts[0];
    return <<<HTML
      <h1>{$page->post_title}</h1>
      <div>{$page->post_content}</div>
HTML;
  }

  public function render() {
    return <<<HTML
      <div>
        {$this->renderPage()}
      </div>
HTML;
  }
}

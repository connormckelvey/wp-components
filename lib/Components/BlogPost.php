<?php

require_once __DIR__ . '/../Component.php';

class BlogPost extends Component {

  private function renderContent() {
    if(is_single()) {
      return $this->props->content;
    } else {
      return $this->props->get_preview(50);
    }
  }

  private function renderTitle() {
    if(is_single()) {
      return $this->props->title;
    } else {
      return <<<HTML
        <a href="{$this->props->link()}">
          {$this->props->title}
        </a>
HTML;
    }
  }

  private function renderCategories() {
    $categories = array_map(function($cat) {
      return <<<HTML
        <a href="{$cat->link()}">{$cat->title}</a>
HTML;
    }, $this->props->categories);

    $html = implode($categories, ' ');
    return $html;
  }

  public function render() {
    //var_dump($this->props);
    return <<<HTML
      <article class="{$this->props->class}">
        <h1>{$this->renderTitle()}</h1>
        <p><small>{$this->props->date}</small></p>
        <p>{$this->renderCategories()}</p>
        <div>
          {$this->renderContent()}
        </div>
      </article>
HTML;
  }

}

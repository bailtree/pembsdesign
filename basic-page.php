<?php
$headline = $page->get("headline|title");

// bodycopy is body text plus comments
$bodycopy = $page->body . $page->comments->render();
$sidebar = $page->sidebar;

// check if this page has any children
if(count($page->children)) {
  // render sub-navigation in sidebar
  $sidebar .= "<ul class='nav'>";
  foreach($page->children as $child) {
    $sidebar .= "<li><a href='$child->url'>$child->title</a></li>";
  }
  $sidebar .= "</ul>";
}

include("./main.php");
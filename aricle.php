<?php
require_once ("database.php");
require_once ("views/articles.php");
$article = articles_get($_GET['id']);
include ("views/article.php");

# Bugfix
## Описание проблемы
> При попытке перехода на страницу отдельной статьи выпадает сообщение об ошибке (некорректная ссылка)
## Что было сделано.
- Выполнен откат до коммита _lesson 5_ и начата ветка _bugfix1_.
- Создание "заглушки" в файле _models/articles.php_
  * Функцию _articles_all_ привели к следующему виду:
      ```php
        function articles_all(){
            $art1 = ["id"=> 1, "title" => "Title 1", "date" => "2020-01-01", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien risus, tempus nec massa ut, venenatis mattis nisi. Ut eu nibh orci."];
            $art2 = ["id"=> 2, "title" => "Title 2", "date" => "2020-01-01", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien risus, tempus nec massa ut, venenatis mattis nisi. Ut eu nibh orci."];
    
                $arr[0] = $art1;
                $arr[1] = $art2;
    
                return $arr;
    
    
        }
      ```
- К файлу _index.php_ был подключен файл _views/articles.php_:
```php
<?php
    require_once ("database.php");
    require_once ("models/articles.php");
    
    $articles = articles_all();
    
    include ("views/articles.php"); //подключение файла.
```
### Редактирование файла views/articles.php
В файл _views/articles.php_ был скопирован код из _index.html_
из него были удалены лишние блоки _article_, а в блок контента был добавлен следующий код:

```php
  <div>
      <?php foreach($articles as $a): ?>
          <div class="article">
              <h2><a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
              <em><em> Опубликовано: <?=$a['date']?> </em></em>
              <p><?=$a['content']?></p>
          </div><!-----------------------------END ARTICLE----------------------------------->
      <? endforeach; ?>
  </div>
```

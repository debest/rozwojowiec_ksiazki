<div class="book<?=isset($new)===true ? ' newBook' : ''?>">
    <h4><?=$book->title?> (<?=$book->publish_year?>)</h4>
    <a class="delete" href="#<?=$book->id?>">Usuń książkę</a>
    <span><?=$book->author->name?>, <?=$book->publisher->name?></span>
    <p><?=$book->comment?></p>
</div>
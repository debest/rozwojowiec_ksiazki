<button class="addNewBook" type="button">Dodaj nową książkę</button>

<div id="books">
    <?php foreach($books as $book){?>
    <?=View::factory('book')->set('book', $book)?>
    <?php } ?>
</div>

<button class="addNewBook" type="button">Dodaj nową książkę</button>


<div id="addNewBook" title="Dodaj nową książkę">
    <?=Form::open()?>
    <table>
        <tr>
            <td>Tytuł</td>
            <td><?=Form::input('title')?></td>
        </tr>
        <tr>
            <td>Autor</td>
            <td><?=Form::input('author')?></td>
        </tr>
        <tr>
            <td>Rok wydania</td>
            <td><?=Form::input('publish_year', NULL, array('type'=>'number'))?></td>
        </tr>
        <tr>
            <td>Wydawca</td>
            <td><?=Form::input('publisher')?></td>
        </tr>
        <tr>
            <td>Komentarz</td>
            <td><?=Form::textarea('comment')?></td>
        </tr>
    </table>
    
    <?=Form::submit('submit', 'Dodaj książkę')?>
    <?=Form::close()?>
</div>

<div id="progress" title="Trwa przetwarzanie...">
    <div id="progressbar"></div>
</div>

<div id="confirm" title="Czy usunąć książkę?">
    <p>
        Czy jesteś pewien, że chcesz usunąć książkę pt.: "<span></span>" ?
    </p>
</div>
<div id="dialog">
    <p></p>
</div>

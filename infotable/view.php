<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<table class="table table-condensed">
    <?php if ($tel) :?>
        <tr><th>TEL</th><td><?= h($tel) ?></td></tr>
    <?php endif;?>
    <?php if ($mail) :?>
        <tr><th>MAIL</th><td><?= h($mail) ?></td></tr>
    <?php endif;?>
    <?php if ($url) :?>
        <tr><th>URL</th><td><?= h($url) ?></td></tr>
    <?php endif;?>
    <?php
    $c = Page::getCurrentPage();
    if ($c->isEditMode()) :?>
        <tr><th></th><td>電話番号、メール、URLが入力できます</td></tr>
    <?php endif;?>
</table>

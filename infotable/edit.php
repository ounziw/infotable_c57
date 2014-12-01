<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<table class="table">
    <tr><th>TEL</th><td><?php echo $form->text('tel', $controller->tel);?></td></tr>
    <tr><th>MAIL</th><td><?php echo $form->text('mail', $controller->mail);?></td></tr>
    <tr><th>URL</th><td><?php echo $form->text('url', $controller->url);?></td></tr>
</table>

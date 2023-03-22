<?php
/**
 * @var rex_fragment $this
 * @psalm-scope-this rex_fragment
 */
?>
<div class="rex-branding">
    <?= dd_part::logo(true) ?>
    <?= rex_file::get(rex_path::coreAssets('redaxo-logo.svg')) ?>
</div>

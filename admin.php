<?php

$app->on('admin.init', function() {
    $this->helper('admin')->addAssets('numberfield:assets/field-number.tag');
});

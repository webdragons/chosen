<?php
namespace bulldozer\chosen;

use yii\web\AssetBundle;

class ChosenAsset extends AssetBundle
{
    public $sourcePath = '@bower/chosen';

    public $js = [
        'chosen.jquery.js'
    ];

    public $css = [
        'chosen.css'
    ];
}

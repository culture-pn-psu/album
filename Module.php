<?php

namespace culturePnPsu\album;

/**
 * album module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'culturePnPsu\album\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->layout = 'left-menu.php';
        parent::init();

        // custom initialization code goes here
    }
}

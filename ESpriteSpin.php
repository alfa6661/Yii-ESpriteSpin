<?php
/**
 * SpriteSpin widget class file.
 *
 * @author Alfa Adhitya <alfa2159@gmail.com>
 *
 * @link http://www.lab-informatika.com
 *
 * SpriteSpin extends CWidget and implements a base class for a SpriteSpin widget.
 * more about SpriteSpin can be found at http://spritespin.ginie.eu.
 */
class ESpriteSpin extends CWidget
{
    /**
     * @var string the id of the widget
     */
    public $id;

    /**
     * @var array The array of options for spritespin
     */
    public $options = [];

    /**
     * @var array The array of urls to image frames
     */
    public $frames = [];

    /**
     * Initialize widget.
     */
    public function init()
    {
        if (!isset($this->id)) {
            $this->id = $this->getId();
        }

        $assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__).'/assets');
        $cs = Yii::app()->clientScript;
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($assets.'/spritespin.js');
    }

    /**
     * run the widget.
     */
    public function run()
    {
        echo CHtml::tag('div', ['id' => $this->id], null);
        $this->options = CMap::mergeArray(
            [
                'frames' => count($this->frames),
                'source' => $this->frames,
            ],
            $this->options
        );
        $options = CJavaScript::encode($this->options);

        Yii::app()->clientScript->registerScript($this->id, "
			$('#$this->id').spritespin($options);
		");
    }
}

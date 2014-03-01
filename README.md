Yii-ESpriteSpin
===============

ESpriteSpin is an extension of Yii Framework, which is wrapper for [Spritespin](http://spritespin.ginie.eu/ "SpriteSpin"). Spritespin is a jQuery plugin that is able to play sprite image animations.

It takes an array of images or a stiched sprite sheet and plays them frame by frame like a flip book. 


##Requirements

Yii 1.1 or above (tested on 1.1.13)


##Usage

- Extract the downloaded file to your application extensions directory
- Just place the following code inside your view file:

```php
$this->widget('ext.spritespin.ESpriteSpin', array(
	'id' => '360view',
	'frames' => array(
		'/images_path/1.jpg',
		'/images_path/2.jpg',
		'/images_path/3.jpg',
		'/images_path/4.jpg',
		'/images_path/5.jpg',
	),
	'options' => array(
		'width' => 770,
		'height' => 391,
		'animate' => true,
		'loop' => false,
		'frameWrap' => true,
		'frameStep' => 1,
		'frameTime' => 500,
		'enableCanvas' => true
	)
));
```

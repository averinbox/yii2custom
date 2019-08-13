<?php
/**
 * Main bootstrap file.
 */

Yii::setAlias('common', dirname(__DIR__ ) . '/src');
Yii::setAlias('public', dirname(__DIR__ ) . '/public');
Yii::setAlias('applications', dirname(__DIR__ ) . '/src/applications');
Yii::setAlias('frontend', dirname(__DIR__ ) . '/src/applications/frontend');
Yii::setAlias('backend', dirname(__DIR__ ) . '/src/applications/backend');
Yii::setAlias('vendor', dirname(__DIR__ ) . '/vendor');
Yii::setAlias('bower', dirname(__DIR__ ) . '/vendor/bower-asset');
Yii::setAlias('bower/jquery/dist', dirname(__DIR__ ) . '/vendor/bower-asset/jquery/dist');
Yii::setAlias('yii/gii', dirname(__DIR__ ) . '/vendor/yiisoft/yii2-gii/src');

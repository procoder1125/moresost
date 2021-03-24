<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
       'css/site.css',

       'css/bootstrap.min.css',
       'css/mdb.min.css',
       'css/style.css',
       'font-awesome/css/font-awesome.min.css',

        // 'scc/base/_base.scss',
        // 'scc/base/_mixins.scss',
        // 'scc/base/_variables.scss',
        // 'scc/layouts/_footer.scss',
        // 'scc/layouts/_header.scss',
        // 'scc/layouts/_nav.scss',
        // 'scc/modules/_buttons.scss',
        // 'scc/modules/_responsive.scss',
        // 'scc/modules/_sections.scss',
        // 'scc/modules/_theme-color.scss',
        // 'scc/modules/_typography.scss',
        // 'scc/style.scss',
        // 'assets/css/font-awesome.css',
        // 'assets/img/favicon.ico',
        // 'assets/css/bootstrap.css',
        // 'assets/css/slick.css',
        // 'assets/css/jquery.fancybox.css',
        // 'assets/css/theme-color/default-theme.css',
        // 'assets/css/style.css',
    ];
    public $js = [

        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/mdb.min.js',
        'js/main.js',
        'js/jquery-3.2.1.min.js',

        


        // 'assets/js/bootstrap.js',
        // 'assets/js/custom.js',
        // 'assets/js/jquery.counterup.js',
        // 'assets/js/jquery.min.js',
        // 'assets/js/jquery.fancybox.pack.js',
        // 'assets/js/jquery.mixitup.js',
        // 'assets/js/slick.js',
        // 'assets/js/waypoints.js',

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}


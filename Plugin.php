<?php
/**
 * Typecho评论转Hexo的Valine、Twikoo等评论所支持的JSON文件
 *
 * @package Export2ValineJson
 * @author Han
 * @version 1.0.1
 * @link https://www.vvhan.com
 */
class Export2ValineJson_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Helper::addAction('Export2ValineJson', 'Export2ValineJson_Action');
        Helper::addPanel(1, 'Export2ValineJson/panel.php', _t('评论导出ValineJson'), _t('评论导出ValineJson'), 'administrator');

        return _t('插件已经激活，左上角控制台即可使用！');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removeAction('Export2ValineJson');
        Helper::removePanel(1, 'Export2ValineJson/panel.php');
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
}
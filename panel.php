<?php
include_once 'common.php';
include 'header.php';
include 'menu.php';
?>

<div class="main">
  <div class="body container">
    <div class="typecho-page-title">
      <h2><?php _e('Typecho评论数据导出为Valine JSON 格式文件'); ?></h2>
    </div>
    <div class="row typecho-page-main" role="form">
      <div id="dbmanager-plugin" class="col-mb-12 col-tb-8 col-tb-offset-2">
        <p>点击下面的按钮后，Typecho会创建一个支持 Valine 格式的 JSON 评论数据文件，保存到计算机中。</p>
        <p>在 Hexo 的 Twikoo、Valine等评论插件中选择刚才导出的 JSON 文件，选择导入类型为 Valine 的 JSON文件，点击导入按钮即可等待导入成功。</p>
        <p>导入的时间会随着评论数的增加而增加，如果评论数比较多的请耐心等待提示。</p>
        <p>使用过程中如果有问题，请到 <a href="https://github.com/uxiaohan/Export2ValineJson/issues">Github</a> 提出。</p>
        <form action="<?php $options->index('/action/Export2ValineJson?export'); ?>" method="post">
          <ul class="typecho-option typecho-option-submit" id="typecho-option-item-submit-3">
            <li>
              <button type="submit" class="primary"><?php _e('导出 Valine JSON 评论文件'); ?></button>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include 'copyright.php';
include 'common-js.php';
include 'table-js.php';
include 'footer.php';
?>
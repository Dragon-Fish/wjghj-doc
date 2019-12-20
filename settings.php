<?php
## Debug Mode
if ($_GET['debug'] === '1' || $_GET['debug'] === 'true') {
  // 提示debug模式启动
  echo '<!-- Attention: Debug mode - on -->';
  // 禁止页面缓存
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");//设置过期时间为过去
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");//标记内容最后修改时间
  header("Cache-Control: no-store, no-cache, must-revalidate");//强制不缓存
  // 输出错误代码
  error_reporting( -1 );
  ini_set( 'display_errors', 1 );
}
## Wjghj Doc Global Settings
define('localDir','/data/wwwroot/doc');
define('globalinvoke',localDir.'/@Global-Template');
define('templateinvoke',localDir.'/@Template');

function template($templatename) {
  if ( file_exists(templateinvoke.'/'.$templatename.'.php') ) {
    include templateinvoke.'/'.$templatename.'.php';
  } else {
    echo '<b style="color:#b00" class="error tooltipped" data-tooltip="Put templates into <code>/@Template</code> directory. Use <code>&lt;</code><code>?php template(\'template_name\'); ?</code><code>&gt;</code> invoke them.">Template Error: <u>'.$templatename.'</u> not exist.</b>';
  }
}
?>

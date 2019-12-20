<!DOCTYPE html>
<html lang="zh">
<head>
<!-- Global head -->
<?php require_once("/data/wwwroot/doc/settings.php"); ?>
<?php require(globalinvoke."/head.php"); ?>
<!-- End -->
</head>
<body>
<!-- Nav header here -->
<?php require(globalinvoke."/nav.php"); ?>
<?php require(globalinvoke."/sidenav.php"); ?>
<!-- End -->
<!-- Content here -->
<main>
<div class="parallax-container">
  <div class="parallax"><img src="https://api.dujin.org/bing/1366.php"></div>
</div>
<div class="container row section scrollspy" style="position: relative">
  <div style="position: absolute; top: -200px; color: #fff; text-shadow: 0 0 4px #666;"><h1 style="font-size: 64px; margin-bottom: 4px">文档中心</h1><div style="width: 100%; height: 6px; background: #fff; box-shadow: 0 0 4px #666"></div><div style="margin-top: 8px; width: 80%; height: 4px; background: #fff; box-shadow: 0 0 4px #666"></div><h1 style="font-size: 32px; margin: 2px 0 0 0">Wjghj Project</h1></div>
  <aside style="font-size:12px; position: absolute; right: 8px; top: -20px; color:#fff;">关于头图：&copy; Copyright Bing.com</aside>
  <h2>首页</h2>
  <h3>一般页面</h3>
  <?php require(globalinvoke."/menu/archive-docs.php"); ?>

  <h3>个人学习资料存档</h3>
  <?php require(globalinvoke."/menu/personal-study-docs.php"); ?>

  <h3>Web Develop 资料、文档与沙盒</h3>
  <h4>Cascading Style Sheet</h4>
  <?php require(globalinvoke."/menu/css-docs.php"); ?>
  <h4>JavaScript & jQuery</h4>
  <?php require(globalinvoke."/menu/js-docs.php"); ?>
  <h4>Hypertext Preprocessor</h4>
  <?php require(globalinvoke."/menu/php-docs.php"); ?>

  <h3>Fandom 存档</h3>
  <?php require(globalinvoke."/menu/fandom-docs.php"); ?>

  <h3>媒体文件</h3>
  <?php require(globalinvoke."/menu/image-docs.php"); ?>

</div>
</main>
<!-- End -->
<!-- Footer -->
<?php require(globalinvoke."/footer.php"); ?>
<!-- End -->
</body>
</html>

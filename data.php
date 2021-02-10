<?php 
$_p = $_SERVER["PHP_SELF"];
require "main.php";
?>
<!DOCTYPE html>
<html lang="zh">
  <?=$header?>
  <body>
    <?=$nav?>
    <?=$hero?>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">游戏存档下载</h2>
            <p>Oops...这里还什么都没有呢</p>
			</div>
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <h3>游戏服务器</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/island.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="index">Minecraft：JAVA</a></h3>
                  <div class="meta">
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/game-banner-dont-starve-together.png);"></a>
                <div class="text">
                  <h3 class="heading"><a href="dst">饥荒 DST</a></h3>
                  <div class="meta">
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/terraria.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="terraria">Terraria：PC</a></h3>
                  <div class="meta">
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
			<img src="images/help.png" alt="Image placeholder" class="img-fluid mb-4">
			<h3>需要帮助？</h3>
			<li>客服邮箱：support@sotap.org</li>
			<li>玩家社区的帮助中心 24H 开放</li>
			<li>前往官方博客中的 support 中心联系客服</li>
			<li>前往官方博客获取最新社区消息和公告</li>
            </div>
            </div>
    </section>

<?=$footer?>
    
  </body>
</html>
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
                    <h2 class="mb-3 mt-5">开始游戏</h2>
                    <p>加入SoTap非常简单，只需要拥有正版游戏，并阅读服务器规则和一些Wiki上的常见问题即可开始游戏！
                        如果你已经完成了这些准备工作，那么就输入下方的连接地址开始你的多人联机生存之旅吧！</p>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="https://sotap.oss-cn-qingdao.aliyuncs.com/server-icon.png" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>play.sotap.org</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>其他你需要知道的...</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/0.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a
                                        href="https://wiki.sotap.org/#/getting-started/faq">FAQ：常见问题及其解答</a></h3>
                                <div class="meta">
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/thumbnail.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="https://g.sotap.org/d/30">社区现行周目制度讲解</a></h3>
                                <div class="meta">
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                                style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/island.png);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="https://g.sotap.org/d/54-minecraft">服务器的世界观和其他各种设定说明</a>
                                </h3>
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

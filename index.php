<?php
$_p = $_SERVER["PHP_SELF"];
require "main.php";
function getMonthCount($startTime, $endTime, $delimiter = "-")
{  
    $startTimeArr = explode($delimiter, $startTime);
    $endTimeArr = explode($delimiter, $endTime);

    return ($endTimeArr[0] - $startTimeArr[0]) * 12 + ($endTimeArr[1] - $startTimeArr[1]);
}
?>
<!DOCTYPE html>
<html lang="zh">
<?=$header?>

<body>
    <?=$nav?>
    <?=$hero?>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last"
                    style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/sunrise1.png);">
                </div>
                <div class="col-md-7 wrap-about pt-md-5 ftco-animate">
                    <div class="heading-section mb-5 pt-5 pl-md-5">
                        <div class="pr-md-5 mr-md-5 text-md-right">
                            <span class="subheading">Providing</span>
                            <h2 class="mb-4">在这里你能体验到...</h2>
                        </div>
                    </div>
                    <div class="pr-md-3 pr-lg-5 pl-md-5 mr-md-5 mb-5">
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-innovation"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">化繁为简</h3>
                                <p>没有繁琐的加入机制，你只需要拥有正版游戏，再阅读简单的社区规则和常见问题即可开始你的多人联机生存之旅！没有加入太多繁杂而无趣的插件，在保证游戏玩法有特色的同时让其浅显易懂。在这里，一切都尽可能向简单靠拢。
                                </p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-innovation"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">稳定可靠</h3>
                                <p>服务器选用国内稳定的阿里云服务器，AnyCast 技术+多线接入，独享硬件带宽资源、快如闪电的 ESSD 硬盘，从此告别游戏卡顿。每日 2 次异地全量备份 + 每小时 1
                                    次的线上热备份，co i 方块变动数据永久保留，意外和灾难不再可怕。
                                </p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-innovation"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">最小限制*</h3>
                                <p>我们一直紧跟最新稳定版本，抛开恼人的条条框框，没有规划限制、没有建筑外观限制、没有流水/岩浆/怪物数量限制。无论是选择当名探险家还是打算找一片“世外桃源”来安心养老抑或是建筑爱好者都可以在这里尽情发挥你的才能。
                                </p>
                            </div>
                        </div>
                        <div class="services-wrap d-flex">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-innovation"></span>
                            </div>
                            <div class="media-body pl-md-0 pl-4 pr-4 order-md-first text-md-right">
                                <h3 class="heading">24/7 Support</h3>
                                <p>服务器管理运营成员轮换值班制度，使玩家的用户支持得到最大的保障。无论是白天或者黑夜、正午或者凌晨都有管理在线，让你的问题第一时间获得解决。社区 Q 群、社区
                                    BBS、Telegram 群等多种官方渠道可供选择。</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm ftco-animate">
                                    <img src="images/server.png" class="img-fluid" alt="server">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">商业友好型</h3>
                            <p>最公益的商业服：遵循 Mojang EULA
                                协议，商业服也可以有公益服的感觉。始终遵循无强制、无限制、无暗费的三大基本准则；不设定任何土旧的「神装|神器|坐骑」等破坏平衡的增值服务；同时提供「Pay as you
                                go」支付方案，按需付费模式使玩家节省更多。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-analysis"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">隐私不留痕</h3>
                            <p>社区管辖的所有服务器均遵循欧盟 GDPR 规定，不在任何情况下收集保存玩家 IP
                                地址、聊天记录、互动记录等敏感数据；在任何时候都不会将玩家数据分享给第三方；同时玩家有权利要求将自己的数据从服务器上永久删除和要求服务器提供自己的个人数据下载。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-web-design"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">用心制作</h3>
                            <p>我们重新设计了社区官网的界面，让其保持轻盈而加载快速的同时又不失其美观性。为了确保游戏服务器和社区相关服务器的平稳运行，我们花费了许多的时间来校调、修改和完善。精心设计的游戏设定到活跃的活动策划团队，这一切都是为了给玩家最好体验。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-4">
                            <span class="flaticon-idea"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">创造力社区</h3>
                            <p>在这片地大物博的世界里，创造是铸造伟大的阶梯。玩家们创建了城镇与市场，谱写了温馨与美好，亦在互助中孕育友情。时间流淌在高楼大厦之间，亦流动在红石的光辉中。从宏伟的世界建筑到喜闻乐见的玩家雕塑，社区驱使着创造力，丰富着世界的多彩。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-counter" id="section-counter"
        style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/sunrise5.png);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-lg-4">
                    <div class="heading-section pl-md-5 heading-section-white">
                        <div class="ftco-animate">
                            <span class="subheading">Some</span>
                            <h2 class="mb-4">Interesting Information</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number"
                                        data-number="<?=floor(getMonthCount("2019-07-07", date("Y-m-d")) / 12)?>">0</strong>
                                    <span>运营年数</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="8">0</strong>
                                    <span>服务器数量(台)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="160">0</strong>
                                    <span>入住玩家(人)</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="7">0</strong>
                                    <span>特色内容(项)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-lg-6 heading-section text-center ftco-animate">
                    <span class="subheading">社区特色预览</span>
                    <h2 class="mb-4">Yeah, Features!</h2>
                    <p>不仅仅是游戏服务器，还是温暖的大家庭<br>一起探索温馨有爱的社区和精彩广阔的世界</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/Epicpets%20header.jpg);">
                        <div class="overlay"></div>
                        <a href="pet" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="pet">史诗宠物来临</a></h3>
                            <span>它的存在就是史诗的存在</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/skyland4.png);">
                        <div class="overlay"></div>
                        <a href="heaven" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="heaven">全新的独立世界：天堂！</a></h3>
                            <span>天穹之上的奇幻旅程</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(https://mcsunrise.oss-cn-qingdao.aliyuncs.com/sunrise2.png);">
                        <div class="overlay"></div>
                        <a href="epic" class="btn-site d-flex align-items-center justify-content-center"><span
                                class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="epic">主题子服：史诗地形世界！</a></h3>
                            <span>史诗地形与你共赏</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(https://sotap.oss-cn-qingdao.aliyuncs.com/food.gif);">
                                <div class="overlay"></div>
                                <a href="itemadder"
                                    class="btn-site d-flex align-items-center justify-content-center"><span
                                        class="icon-subdirectory_arrow_right"></span></a>
                                <div class="text text-center p-4">
                                    <h3><a href="itemadder">原版物品扩展</a></h3>
                                    <span>独特的原版新体验~</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section ftco-no-pt">
        <div class="container-fluid px-4">
            <div class="row ftco-animate">
                <div class="col-md-12 testimony-top">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(images/sapherise.png)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">SoTap
                                        服务器服主、运营者，负责服务器的运维和推广，统筹服务器的各种开销和资金流管理，策划活动和编写文案，调配组织管理组完成服务器事项。
                                    </p>
                                    <p class="name">Sapherise</p>
                                    <span class="position">Owner & Backer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(images/cropenfe.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">大学鸡一只，主要负责新玩家游戏内玩法指导和游戏答疑，参与修建公共设施，维护游戏内的秩序，辅助活动组织，处理玩家游戏内问题和监督玩家行为。
                                    </p>
                                    <p class="name">Cropenfe</p>
                                    <span class="position">In-game Operator</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(images/constant137.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">
                                        爱好物理的大学生，真·量子力学研究者，负责服务器和社区群组内的管理事务，协调问题和解决等。同时也是开发组的一员，负责开发新的插件和项目，丰富服务器内容。</p>
                                    <p class="name">Constant137</p>
                                    <span class="position">Operator & Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5 text-center">
                                <div class="user-img mb-5" style="background-image: url(images/subilan.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text">
                                    <p class="mb-5">现就职
                                        Tencent，负责服务器后台技术指导和一些相关功能的开发，职责是维护所有相关服务器的稳定运行和技术故障排查，开发网页新功能和新插件。</p>
                                    <p class="name">Subilan</p>
                                    <span class="position">Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h2 class="mb-4">创新负责的管理团队</h2>
                    <p>是的，这让一切都变成了可能。无论是最小化限制的游戏制度还是充满创造力的游戏环境，管理团队一直都在努力营造我们理想的社区氛围和负责维护好所有相关服务器的准确运行</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">其他游戏</span>
                    <h2 class="mb-4">And Much More...</h2>
                    <p>SoTap 社区还运营着其他非 MC 游戏服务器，社区玩家可以自由选择游玩任意社区游戏服务器<br>加入本社区来获得以下所有游戏服务器的访问权限！</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a class="block-20"
                            style="background-image: url('https://sotap.oss-cn-qingdao.aliyuncs.com/game-banner-dont-starve-together.png');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a>充满艺术的黑暗世界生存历程</a></div>
                                <div><a>Available</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading">饥荒 DST 服务器</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a class="block-20"
                            style="background-image: url('https://sotap.oss-cn-qingdao.aliyuncs.com/Title.png');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a>类 MC 的方块僵尸冒险之旅</a></div>
                                <div><a>Coming Soon</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading">Unturned 服务器</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a class="block-20"
                            style="background-image: url('https://sotap.oss-cn-qingdao.aliyuncs.com/terraria.jpg');">
                        </a>
                        <div class="text py-4">
                            <div class="meta mb-3">
                                <div><a>动感十足的冒险游戏</a></div>
                                <div><a>Coming Soon</a></div>
                            </div>
                            <div class="desc">
                                <h3 class="heading">Terraria 服务器</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row partner-container ftco-animate">
                <a href="https://www.eumc.cc/" target="_blank" class="partner"><img src="/images/server-logos/eumc.png"
                        class="img-fluid" alt="eumc"></a>
                <a href="https://www.yinwurealm.org/" target="_blank" class="partner"><img
                        src="https://sotap.oss-cn-qingdao.aliyuncs.com/logo-mini.png" class="img-fluid" alt="yinwu"></a>
                <a href="https://www.9sakura.com/" target="_blank" class="partner"><img
                        src="/images/server-logos/sakura.png" class="img-fluid" alt="nightsakura"></a>
                <a href="https://mgate.club/" target="_blank" class="partner"><img
                        src="/images/marble_gate.png" class="img-fluid"
                        alt="MARBLE GATE"></a>
                <a href="https://www.mcmod.cn/" target="_blank" class="partner"><img
                        src="https://cdn.fghrsh.net/azcdn/img/mcmod.gif" class="img-fluid" alt="mcmod"></a>
                <a href="https://www.aizecraft.cn/" target="_blank" class="partner"><img
                        src="https://cdn.fghrsh.net/azcdn/img/aizecraft.gif" class="img-fluid" alt="aize"></a>
                <a href="https://www.lhteam.top/" target="_blank" class="partner"><img
                        src="/images/server-logos/lhteam.jpg" class="img-fluid" alt="lhteam"></a>
                <a href="https://cnxfans.com/" target="_blank" class="partner"><img src="/images/cnxfans.png"
                        class="img-fluid" alt="CnXFans"></a>
            </div>
        </div>
    </section>



    <?=$footer?>
</body>

</html>

<?php

use yii\helpers\Html;
$this->title = 'pjax';
$this->params['breadcrumbs'][] = $this->title;

?>
<script>
    var pageName = 'demo-pjax-test';
    var url = "<?= $url ?>"
</script>
<div id="main">
    <h1>HTML5 history API与ajax分页实例页面</h1>
    <div id="body" class="light">
        <div id="content" class="show">
            <h3>展示</h3>
            <div class="article_new"><a href="http://www.zhangxinxu.com/wordpress/?p=3432">回到相关文章 »</a></div>
            <div class="demo">
                <h4 class="tc f14">上海3月开盘项目汇总</h4>
                <div class="mt10 cho_box z">
                    <b class="cho_line"></b>
                    <div class="fix">
                        <!-- 左边的选菜项 -->
                        <div class="cho_left">
                            <div class="equal_height cho_equal_height"></div>
                            <ul id="choMenu" class="rel cho_menu">
                                <li><a href="javascript:;" data-url="pudong" class="cho_link">浦东区<span class="ml20">8</span></a></li>
                                <li><a href="javascript:;" data-url="baoshan" class="cho_link">宝山区<span class="ml20">7</span></a></li>
                                <li><a href="javascript:;" data-url="jiading" class="cho_link">嘉定区<span class="ml20">8</span></a></li>
                            </ul>
                        </div>

                        <!-- 右侧主列表 -->
                        <div class="cell">
                            <ul class="fix cho_list_title">
                                <li class="l pct20">楼盘名</li>
                                <li class="l pct30">价格</li>
                                <li class="cell">项目地址</li>
                            </ul>
                            <div id="listBox">
                                <div class="cho_loading"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

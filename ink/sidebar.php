<div class="mdui-container">
    <!--appnav-->
    <div class="mdui-appbar mdui-appbar-scroll-hide mdui-appbar-fixed">
        <div class="mdui-toolbar">
            <a class="mdui-btn mdui-btn-icon mdui-ripple" mdui-drawer="{overlay: true, target: '#sidebar'}"><i class="mdui-icon material-icons">menu</i></a>
            <a href="<?php $this->options->siteUrl(); ?>" class="mdui-typo-title"><?php $this->options->title(); ?></a>
            <a href="javascript:;" class="mdui-typo-body-2"><?php $this->options->description(); ?></a>
            <div class="mdui-toolbar-spacer"></div>

            <!--admin-menu-->
            <button class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#admin-menu'}"><i class="mdui-icon material-icons">settings</i></button>
            <ul class="mdui-menu mdui-list" id="admin-menu">
                <?php if($this->user->hasLogin()): ?>
                    <li class="mdui-list-item mdui-ripple">
                        <a href="<?php $this->options->profileUrl(); ?>"><i class="mdui-menu-item-icon mdui-icon material-icons">account_circle</i><?php $this->user->screenName(); ?></a>
                    </li>

                    <li class="mdui-list-item mdui-ripple">
                        <a href="<?php Helper::options()->siteUrl()?>admin"><i class="mdui-menu-item-icon mdui-icon material-icons">settings</i>控制台</a>
                    </li>

                <?php else: ?>
                    <li class="mdui-list-item mdui-ripple">
                        <a href="<?php Helper::options()->siteUrl()?>admin/login.php"><i class="mdui-menu-item-icon mdui-icon material-icons">undo</i>登陆</a>
                    </li>

                <?php endif; ?>
            </ul>
            <!--admin-menu_end-->

        </div>
    </div>
    <!--appnav_end-->

    <!--sidebar-->
    <div class="mdui-drawer mdui-drawer-close mdui-drawer-full-height mdui-color-white" id="sidebar">

        <ul class="mdui-list" mdui-collapse="{accordion: true}">
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
                <a href="<?php $this->options->siteUrl();?>" class="mdui-list-item-content">首页</a>
            </li>

            <li class="mdui-collapse-item">
                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">folder</i>
                    <div class="mdui-list-item-content">文章归档</div>
                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                </div>
                <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<a href="{permalink}" class="mdui-list-item mdui-ripple">{date}</a>'); ?>
                </ul>
            </li>

            <li class="mdui-collapse-item">
                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">view_list</i>
                    <div class="mdui-list-item-content">文章分类</div>
                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                </div>
                <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                    <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}" class="mdui-list-item mdui-ripple">{name}<span class="mdui-m-l-5">{count}</span><span class="mdui-m-l-1">篇</span></a>'); ?>
                </ul>
            </li>

            <li class="mdui-collapse-item mdui-collapse-item-open">
                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons">view_carousel</i>
                    <div class="mdui-list-item-content">独立页面</div>
                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                </div>
                <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                        <?php if($this->is('page', $pages->slug)): ?><?php endif; ?>
                        <a class="mdui-list-item mdui-ripple" href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </ul>
            </li>
        </ul>
    </div>
    <!--sidebar_end-->
</div>
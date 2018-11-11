<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('ink/header.php'); ?>

    <!--artile-->
    <div class="mdui-container">
        <div class="mdui-row mdui-row-gapless">
            <!--notice-->
                <div class="mdui-card mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-1 mdui-color-red-accent">
                    <div class="mdui-card-content mdui-text-center"><?php $this->archiveTitle(array(
                            'category'  =>  _t('分类 %s 下的文章'),
                            'search'    =>  _t('包含关键字 %s 的文章'),
                            'tag'       =>  _t('标签 %s 下的文章'),
                            'author'    =>  _t('%s 发布的文章')
                        ), '', ''); ?></div>
                </div>
            <!--notice_end-->
            <?php while($this->next()): ?>
                <div class="mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-2">
                    <div class="bopi-artile mdui-card mdui-hoverable">
                        <div class="mdui-card-primary">
                            <div class="mdui-card-menu">
                                <button class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">devices</i></button>
                            </div>
                            <div class="mdui-card-primary-title"><?php $this->title(); ?></div>
                            <div class="mdui-card-primary-subtitle"><?php $this->date(); ?></div>
                        </div>
                        <div class="mdui-card-actions">
                            <a href="<?php $this->permalink(); ?>"><button class="mdui-btn mdui-btn-icon mdui-float-right"><i class="mdui-icon material-icons">chevron_right</i></button></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <!--page-nav-->
            <div class="mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-3">
                <div class="mdui-text-center">
                    <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-btn-raised  mdui-float-left mdui-color-white"><i class="mdui-icon material-icons">arrow_back</i></button>', 'prev'); ?>
                    <button class="mdui-btn" disabled><strong><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> / <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></strong></button>
                    <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-btn-raised  mdui-float-right mdui-color-white"><i class="mdui-icon material-icons">arrow_forward</i></button>', 'next'); ?>
                </div>
            </div>
            <!--page-nav_end-->
        </div>
    </div>
    <!--artile_end-->

<?php $this->need('ink/sidebar.php'); ?>
<?php $this->need('nk/footer.php'); ?>
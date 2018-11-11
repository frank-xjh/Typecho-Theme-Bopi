<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('ink/header.php'); ?>
    <div class="mdui-container">
        <div class="mdui-row">
            <div class="mdui-col-md-8 mdui-col-offset-md-2">
                <div class="mdui-card mdui-m-y-3 mdui-shadow-2">
                    <div class="mdui-card-primary">
                        <div class="mdui-card-primary-title"><?php $this->title(); ?></div>
                        <div class="mdui-card-primary-subtitle"><?php $this->date('F j, Y'); ?></div>
                    </div>
                    <div class="mdui-card-content mdui-typo"><?php $this->content(); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php $this->need('ink/sidebar.php'); ?>
<?php $this->need('ink/comments.php'); ?>
<?php $this->need('ink/footer.php'); ?>
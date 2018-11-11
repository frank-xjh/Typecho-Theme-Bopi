<?php
/**
 *  A New Typecho Theme Bopi By Material Design
 *
 * @package Bopi
 * @author BoPiXia
 * @version 1.0.0-Beta.1
 * @link http://cuttle.ink
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('ink/header.php');
?>

    <div class="bopi-container">

        <div class="mdui-container">
            <div class="mdui-row mdui-row-gapless">

                <!--notice-->
                <?php if ($this->options->notice): ?>
                    <div class="mdui-card mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-1 mdui-color-red-accent">
                        <div class="mdui-card-content mdui-text-center"><?php $this->options->notice(); ?></div>
                    </div>
                <?php endif; ?>
                <!--notice_end-->

                <!--artile-->
                <?php while($this->next()): ?>
                    <div class="mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-2">
                        <div class="bopi-artile mdui-card mdui-hoverable">
                            <div class="mdui-card-primary">
                                <div class="mdui-card-menu">
                                    <button class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">apps</i></button>
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
                <!--artile_end-->

                <!--page-nav-->
                <div class="mdui-col-md-8 mdui-col-offset-md-2 mdui-m-y-3">
                    <div class="mdui-text-center">
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-btn-raised  mdui-float-left"><i class="mdui-icon material-icons">arrow_back</i></button>', 'prev'); ?>
                        <button class="mdui-btn" disabled><strong><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> / <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></strong></button>
                        <?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-btn-raised  mdui-float-right"><i class="mdui-icon material-icons">arrow_forward</i></button>', 'next'); ?>
                    </div>
                </div>
                <!--page-nav_end-->

            </div>
        </div>
    </div>

<?php $this->need('ink/sidebar.php'); ?>
<?php $this->need('ink/footer.php'); ?>
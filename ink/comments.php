<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>

    <div class="mdui-card mdui-m-y-2" id="<?php $comments->theId(); ?>">
        <div class="mdui-card-header">
        	<?php
            	$host = 'https://secure.gravatar.com';
            	$url = '/avatar/';
            	$size = '80';
            	$default = 'mm';
            	$rating = Helper::options()->commentsAvatarRating;
            	$hash = md5(strtolower($comments->mail));
            	$avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=' . $default;
        	?>
            <img class="mdui-card-header-avatar" src="<?php echo $avatar ?>" />
            <div class="mdui-card-header-title"><?php $comments->author(); ?></div>
            <div class="mdui-card-header-subtitle">Time: <?php $comments->dateWord(); ?></div>
        </div>
        <div class="mdui-card-menu">
            <?php $comments->reply('<button class="mdui-btn mdui-btn-icon mdui-float-right"><i class="mdui-icon material-icons">reply</i></button>'); ?>
        </div>

        <div class="mdui-card-content mdui-typo">
            <?php $comments->content(); ?>
        </div>

        <?php if ($comments->children) { ?>
            <div class="mdui-container">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </div>

<?php } ?>

<div class="mdui-container mdui-m-y-2">
    <div class="mdui-row">
        <div class="mdui-col-md-8 mdui-col-offset-md-2">
            <?php $this->comments()->to($comments); ?>
            <?php if($this->allow('comment')): ?>
            <div id="<?php $this->respondId(); ?>">
                <?php if($this->user->hasLogin()): ?>

                    <div class="mdui-card mdui-p-x-2 mdui-p-y-2">
                        <div class="mdui-text-center"><button class="mdui-btn">已登录:<a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a></button></div>
                        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                            <div class="mdui-p-x-2 mdui-m-y-2">
                                <div class="mdui-textfield mdui-textfield-floating-label">
                                    <label class="mdui-textfield-label">评论</label>
                                    <textarea class="mdui-textfield-input" type="text" name="text"><?php $this->remember('text'); ?></textarea>
                                </div>
                                <div class="mdui-card-actions">
                                    <button class="mdui-btn mdui-ripple mdui-float-right" type="submit"><i class="mdui-icon material-icons mdui-icon-right">keyboard_return</i>吐槽一下</button>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php else: ?>
                    <div class="mdui-card mdui-p-x-2 mdui-p-y-2">
                        <div class="mdui-text-center">评论框</div>

                        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">

                            <div class="mdui-textfield mdui-textfield-floating-label">
                                <label class="mdui-textfield-label">评论</label>
                                <textarea class="mdui-textfield-input" type="text" name="text"><?php $this->remember('text'); ?></textarea>
                            </div>

                            <div class="mdui-textfield mdui-textfield-floating-label">
                                <label class="mdui-textfield-label">名称(必填)</label>
                                <input class="mdui-textfield-input" type="text" name="author" value="<?php $this->remember('author'); ?>" required/>
                                <div class="mdui-textfield-error">Cannot be empty</div>
                            </div>

                            <div class="mdui-textfield mdui-textfield-floating-label">
                                <label class="mdui-textfield-label">邮箱(必填)</label>
                                <input class="mdui-textfield-input" type="email" name="mail" value="<?php $this->remember('mail'); ?>" required/>
                                <div class="mdui-textfield-error">Error in mailbox format</div>
                            </div>

                            <div class="mdui-textfield mdui-textfield-floating-label">
                                <label class="mdui-textfield-label">网站(选填)</label>
                                <input class="mdui-textfield-input" type="url" name="url" value="<?php $this->remember('url'); ?>" />
                            </div>
                            <div class="mdui-card-actions">
                                <button class="mdui-btn mdui-ripple mdui-float-right" type="submit"><i class="mdui-icon material-icons mdui-icon-right">keyboard_return</i>吐槽一下</button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
                <?php else: ?>
                    <div class="mdui-card mdui-p-y-2 mdui-text-center">
                        <i class="mdui-icon material-icons">not_interested</i>已关闭评论功能.
                    </div>
                <?php endif; ?>
                <?php if ($comments->have()): ?>
                    <?php $comments->listComments(); ?>
                    <?php $comments->pageNav('&laquo;', '&raquo;'); ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>
<section class="post_comments" id="comments">
    <!-- COMMENT -->
    <h2 class="post_comments-title">
        <?php
            $comment_count = $post->{"comment_count"};
            if ($comment_count > 1) {
                echo esc_html("$comment_count Comments");
            } else {
                echo esc_html("$comment_count Comment");
            }
        ?>
    </h2>

    <?php if( is_single() ) : ?>
        <ul class="post_comments-list">
            <?php 
                $comment_list = get_comments(array('post_id' => $post->ID, 'number' => '5' ));
                if(!empty($comment_list)): 
                foreach($comment_list as $comment):
            ?>
                    <li class="post_comments-list_item d-flex">
                        <?php 
                            $emaill_user = $comment->comment_author_email;
                            $thumnail = get_avatar_url($emaill_user);
                        ?>
                        <?php if(!empty($thumnail)): ?>
                            <img alt="" src="<?php echo esc_url($thumnail) ?>" class="avatar avatar-100 photo" height="100" width="100" loading="lazy" />
                        <?php endif; ?>

                        <div class="comment">
                            <div class="comment_panel d-flex flex-wrap align-items-center justify-content-between">
                                <span class="comment_panel-name">
                                    <span class="url"><?php echo esc_html($comment->comment_author); ?></span>
                                </span>
                                <span class="comment_panel-timestamp d-flex flex-wrap align-items-center">
                                    <span class="date"><?php echo esc_html($comment->comment_date); ?></span>
                                </span>
                                <a rel="nofollow" class="comment-reply-link"
                                    href="https://shtheme.com/demosd/axialwp/?p=21&amp;replytocom=6#respond" data-respondelement="respond"
                                    data-replyto="Reply to admin" aria-label="Reply to admin">Reply</a>
                            </div>
                            <p class="comment_text"><?php echo esc_html($comment->comment_content); ?></p>
                            <p></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else: ?> <!-- No Comment -->
                <!-- <p class="comment_text">This post has no comment.</p> -->
            <?php endif;?>
        </ul>
    <?php endif;?>
</section>
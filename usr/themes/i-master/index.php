<?php
/**
 * 一款简洁的Typecho模板
 * 
 * @package i
 * @author iami233
 * @version 1.0
 * @link https://5ime.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12" id="index" >
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title"><span><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title(20, '...') ?></a></span></h2>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>

    <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5oj95qxbf2p&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
    </section>
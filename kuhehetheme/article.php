<?php while($this->next()): ?>
<?php if ($this->fields->showzy == 1): ?>
<?php if ($this->fields->mode === "半图") : ?>

<a class="post-card post photo" href="<?php $this->permalink() ?>">
<article class="md-text" id="hh">
<div class="post-cover">
<img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->datu(); ?>" style="height:<?php $this->fields->imghight(); ?>;" alt="<?php $this->title() ?>-<?php $this->options->title(); ?>" onerror="this.src='/error.svg'" /></div><h2 style="font-weight:bold" class="post-title"><?php $this->sticky(); $this->title() ?></h2>

<div class="excerpt"><p>
<?php if ($this->fields->zhaiyao): ?><?php $this->fields->zhaiyao(); ?><?php else: ?>
<?php $this->excerpt(); ?><?php endif;?>
</p></div>
<div class="meta cap">
<span class="cap" id="post-meta">
<svg style="margin-bottom:2px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.94 2c.416 0 .753.324.753.724v1.46c.668-.012 1.417-.012 2.26-.012h4.015c.842 0 1.591 0 2.259.013v-1.46c0-.4.337-.725.753-.725s.753.324.753.724V4.25c1.445.111 2.394.384 3.09 1.055c.698.67.982 1.582 1.097 2.972L22 9H2v-.724c.116-1.39.4-2.302 1.097-2.972c.697-.67 1.645-.944 3.09-1.055V2.724c0-.4.337-.724.753-.724"/><path fill="currentColor" d="M22 14v-2c0-.839-.004-2.335-.017-3H2.01c-.013.665-.01 2.161-.01 3v2c0 3.771 0 5.657 1.172 6.828C4.343 22 6.228 22 10 22h4c3.77 0 5.656 0 6.828-1.172C22 19.658 22 17.772 22 14" opacity=".5"/><path fill="currentColor" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0"/></svg>
<time datetime="2024-03-30T01:40:29.000Z"><?php $this->date('Y-m-d'); ?></time></span><span class="cap breadcrumb">
<svg style="margin-bottom:1px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6.95c0-.883 0-1.324.07-1.692A4 4 0 0 1 5.257 2.07C5.626 2 6.068 2 6.95 2c.386 0 .58 0 .766.017a4 4 0 0 1 2.18.904c.144.119.28.255.554.529L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .848.352C14.098 6 14.675 6 15.828 6h.374c2.632 0 3.949 0 4.804.77c.079.07.154.145.224.224c.77.855.77 2.172.77 4.804V14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14z" opacity=".5"/><path fill="currentColor" d="M20 6.238c0-.298-.005-.475-.025-.63a3 3 0 0 0-2.583-2.582C17.197 3 16.965 3 16.5 3H9.988c.116.104.247.234.462.45L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .849.352C14.098 6 14.675 6 15.829 6h.373c1.78 0 2.957 0 3.798.238"/><path fill="currentColor" fill-rule="evenodd" d="M12.25 10a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/></svg><span><?php $this->category(',', false); ?></span>
&nbsp;&nbsp;
<span><?php Postviews($this); ?></span>
</span>
</div></article>
</a>


<?php elseif ($this->fields->mode === "大图") : ?>


<a class="post-card post photo" href="<?php $this->permalink() ?>">
<div class="cover">
<img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABGdBTUEAALGPC/xhBQAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAAaADAAQAAAABAAAAAQAAAADa6r/EAAAAC0lEQVQIHWNgAAIAAAUAAY27m/MAAAAASUVORK5CYII=" data-src="<?php $this->fields->datu(); ?>" style="height:<?php $this->fields->imghight(); ?>" alt="<?php $this->title() ?>-<?php $this->options->title(); ?>" onerror="this.src='/error.svg'" />
<?php if ($this->fields->datutmetashow == 1): ?>
<div class="cover-info"style="color:white"position="<?php if ($this->fields->datuposition == 1): ?>top<?php elseif ($this->fields->datuposition == 0): ?>bottom<?php endif;?>">
<div class="cap">

<?php if ($this->fields->datu1()): ?>
<?php $this->fields->datu1(); ?>
&nbsp;
<?php endif;?>

</div>

<div style="font-weight:bold" class="title">
<?php if ($this->fields->datutitleshow == 1): ?>
<?php if ($this->fields->datutitle): ?>
    <!--输出自定义字段-->
    <?php $this->sticky(); $this->fields->datutitle(); ?>
<?php else: ?>
    <!--输出标题-->
    <?php $this->sticky(); $this->title(); ?>
<?php endif; ?>
<?php endif; ?>
</div>

<div class="cap">
<?php $this->fields->datu2(); ?>&nbsp;<?php Postviews($this); ?>
</div>
</div>

<?php endif; ?>

</div>
</a>

<?php else : ?>

<a class="post-card post" href="<?php $this->permalink() ?>">
<article class="md-text" id="hh">
<h2 style="font-weight:bold" class="post-title">
<?php $this->sticky(); $this->title() ?>
</h2>
<div class="excerpt">
<p><?php if ($this->fields->zhaiyao): ?><?php $this->fields->zhaiyao(); ?><?php else: ?><?php $this->excerpt(100, '...'); ?><?php endif;?></p>
</div>
<div class="meta cap">
<span class="cap" id="post-meta">
<svg style="margin-bottom:2px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M6.94 2c.416 0 .753.324.753.724v1.46c.668-.012 1.417-.012 2.26-.012h4.015c.842 0 1.591 0 2.259.013v-1.46c0-.4.337-.725.753-.725s.753.324.753.724V4.25c1.445.111 2.394.384 3.09 1.055c.698.67.982 1.582 1.097 2.972L22 9H2v-.724c.116-1.39.4-2.302 1.097-2.972c.697-.67 1.645-.944 3.09-1.055V2.724c0-.4.337-.724.753-.724"></path><path fill="currentColor" d="M22 14v-2c0-.839-.004-2.335-.017-3H2.01c-.013.665-.01 2.161-.01 3v2c0 3.771 0 5.657 1.172 6.828C4.343 22 6.228 22 10 22h4c3.77 0 5.656 0 6.828-1.172C22 19.658 22 17.772 22 14" opacity=".5">
</path>
<path fill="currentColor" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0">
</path>
</svg>
<time datetime="2023-05-02T07:08:53.000Z">
<?php $this->date('Y-m-d'); ?>
</time>
</span>
<span class="cap breadcrumb">
<svg style="margin-bottom:1px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M2 6.95c0-.883 0-1.324.07-1.692A4 4 0 0 1 5.257 2.07C5.626 2 6.068 2 6.95 2c.386 0 .58 0 .766.017a4 4 0 0 1 2.18.904c.144.119.28.255.554.529L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .848.352C14.098 6 14.675 6 15.828 6h.374c2.632 0 3.949 0 4.804.77c.079.07.154.145.224.224c.77.855.77 2.172.77 4.804V14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14z" opacity=".5">
</path>
<path fill="currentColor" d="M20 6.238c0-.298-.005-.475-.025-.63a3 3 0 0 0-2.583-2.582C17.197 3 16.965 3 16.5 3H9.988c.116.104.247.234.462.45L11 4c.816.816 1.224 1.224 1.712 1.495a4 4 0 0 0 .849.352C14.098 6 14.675 6 15.829 6h.373c1.78 0 2.957 0 3.798.238"></path><path fill="currentColor" fill-rule="evenodd" d="M12.25 10a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5a.75.75 0 0 1-.75-.75" clip-rule="evenodd">
</path>
</svg>
<span>
<?php $this->category(',', false); ?>
</span>
&nbsp;&nbsp;
<span><?php Postviews($this); ?></span>
</span>
</div>
</article>
</a>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
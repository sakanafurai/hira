<!-- Title -->
  <h1 class="page-title"><?php echo $page->title(); ?></h1>

<?php if (!$page->isStatic() && !$url->notFound()): ?>
<!-- Page data -->
  <ul class="page-data">
    <li><?php echo $page->date(); ?></li>
    <li><?php echo $page->user('nickname'); ?></li>
    <li class="page-category"><?php echo $page->category(); ?></li>
  </ul>
<?php endif ?>

<!-- Load Bludit Plugins: Page Begin -->
  <?php Theme::plugins('pageBegin'); ?>

<!-- Cover image -->
<?php if ($page->coverImage()): ?>
  <figure>
    <img alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
    <figcaption><?php echo $page->custom('coverImageCaption'); ?></figcaption>
  </figure>
<?php endif ?>

<!-- Content -->
  <div class="article">
    <?php echo $page->content(); ?>
  </div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

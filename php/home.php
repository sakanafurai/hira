<?php if (empty($content)) : ?>
  <?php $language->p('No pages found') ?>
<?php endif ?>

<!-- Title -->
<?php if ( $WHERE_AM_I == 'home' ): ?>
  <h1><?php echo $site->title(); ?></h1>
  <p><?php echo $site->slogan(); ?></p>
<?php elseif ( $WHERE_AM_I == 'category' ): ?>
  <h1><?php echo $page->category(); ?></h1>
<?php endif ?>

  <!-- Post -->
  <ul class="posts-list">
    <?php foreach ($content as $page): ?>
    <li>
        <span class="list-item"><a href="<?php echo $page->permalink(); ?>"><span class="page-title"><?php echo $page->title(); ?></span></a></span>
        <span class="list-item"><?php echo $page->date(); ?></span>
        <?php if ( $WHERE_AM_I != 'category' ): ?><span class="list-item page-category"><?php echo $page->category(); ?></span><?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>

<?php if (Paginator::numberOfPages() > 1) : ?>
<!-- Pagination -->
  <nav class="paginator">
    <ul class="pagination">

  <!-- Previous button -->
    <?php if (Paginator::showPrev()) : ?>
      <li>
        <a href="<?php echo Paginator::previousPageUrl() ?>">&#9664; <?php echo $L->get('Previous'); ?></a>
      </li>
    <?php endif; ?>

  <!-- Page number -->
      <li>
        <?php echo Paginator::currentPage() ?> / <?php echo Paginator::numberOfPages() ?>
      </li>

  <!-- Next button -->
    <?php if (Paginator::showNext()) : ?>
      <li>
        <a href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next'); ?> &#9654;</a>
      </li>
    <?php endif; ?>

    </ul>
  </nav>
<?php endif ?>

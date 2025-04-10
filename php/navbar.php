<nav class="navbar">
  <ul class="navbar-content">
      <li class="nav-item">
        <a href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('home'); ?></a>
      </li>

    <!-- Static pages -->
    <?php foreach ($staticContent as $staticPage) : ?>
      <li class="nav-item">
        <a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a>
      </li>
    <?php endforeach ?>

    <!-- Social Networks -->
    <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
      <li class="nav-item">
        <a href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?></a>
      </li>
    <?php endforeach; ?>

    <!-- RSS -->
    <?php if (Theme::rssUrl()): ?>
      <li class="nav-item">
        <a href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a>
      </li>
    <?php endif; ?>

    <!-- Print button -->
      <li class="nav-item">
        <a href="<?php echo $page->permalink() ?>?print"><?php echo $L->get('print'); ?></a>
      </li>

  </ul>
</nav>


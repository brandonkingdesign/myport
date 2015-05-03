<?php snippet('header') ?>

  <main class="main" role="main">
    <section class="wrapper cf">
      <div class="projInfo">

        <h1><?php echo $page->title()->html() ?></h1>

        <ul class="meta cf">
          <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
          <br>
          <li><b>Tags:</b> <?php echo $page->tags() ?></li>
        </ul>

        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
      </div>

      <div class="projImages cf">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        </figure>
        <?php endforeach ?>
      </div>

      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>"><span class="navarrow">&larr;</span>previous</a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>">next<span class="navarrow">&rarr;</span></a>
        <?php endif ?>
      </nav>
    </section>
  </main>

<?php snippet('footer') ?>
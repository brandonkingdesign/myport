<?php snippet('header') ?>

  <main class="main" role="main">
    <section class="aboutWrapper cf">
      

      <div class="aboutImage cf">
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure>
            <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
          </figure>
        <?php endforeach ?>
      </div>

      <div class="aboutText">
        <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div>
        <br>
        <p>Click <a href="#">Here</a> to download my resume.</p>
      </div>

    </section>
  </main>

<?php snippet('footer') ?>
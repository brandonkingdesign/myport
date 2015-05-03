<nav class="nav-collapse" role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <div class="navselect">
        <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        <div class="selectedmarker"></div>
      </div>
    </li>
    <?php endforeach ?>
  </ul>

</nav>

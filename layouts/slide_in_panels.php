<section class="slide-in-panels">
  <?php foreach (get_sub_field('panels') as $panel) { ?>
    <div class="panel">
      <h2><?= $panel['title']; ?></h2>
      <?= $panel['copy']; ?>
    </div>
  <?php } ?>
</section>
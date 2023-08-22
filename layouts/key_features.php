<section class="key-features">
  <div class="container">
    <div class="features">
      <?php foreach (get_sub_field('features') as $feature) { ?>
        <div class="feature">
          <div class="icon-container">
            <img src="<?= $feature['icon']['url']; ?>" alt="">
          </div>
          <div class="text-container">
            <h3><?= $feature['title']; ?></h3>
            <p><?= $feature['description']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<?php

$title = '';
include('./common_php/_header.php');

?>

<section class="search-title">
  <!-- <div class="container is-widescreen">
    <div class="notification is-primary">
      <strong class="container_text">栄養価から探す</strong> -->
      <div class="dropdown column">
        <div class="dropdown-trigger">
          <button class="button" aria-haspopup="true" aria-controls="dropdown-menu6">
            <span>ー</span>
            <span class="icon is-small">
              <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
          </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu3" role="menu">
          <div class="dropdown-content">
            <a href="search_from_nutritional_value.php" class="dropdown-item">
              栄養価から探す
            </a>
            <a href="search_from_vegetables.php" class="dropdown-item">
              野菜(食材)から探す
            </a>
          </div>
        </div>
      </div>
      <!-- <span>で絞って検索</span> -->
    <!-- </div>
  </div> -->
</section>

<section class="search_result">
  
</section>

<?php

include('./common_php/_footer.php');
<?php

$title = '';
include('./common_php/_header.php');

?>

<section class="search-title">
  <div class="container is-widescreen">
    <div class="notification is-primary">
      <strong class="container_text">栄養価から探す</strong>
      <div class="dropdown">
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
            <a href="#" class="dropdown-item">
              ビタミンA
            </a>
            <a href="#" class="dropdown-item">
              ビタミンB
            </a>
          </div>
        </div>
      </div>
      <!-- <span>で絞って検索</span> -->
    </div>
  </div>
</section>

<section class="search_result">
  
</section>

<?php

include('./common_php/_footer.php');
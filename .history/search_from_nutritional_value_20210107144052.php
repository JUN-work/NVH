<?php

$title = '';
include('./common_php/_header.php');

?>

<section class="main-title">
  <img src="img/NVH-TOP.jpg" alt="TOP-img">
  <h1 class="title">
  <!-- 　<h1 @onload="anime1=!anime1"><TextAnime1 v-if="anime1"/></h1> -->
    NVH
  </h1>
  <h2 class="title2">
  Nutritional value List Site of Vegetables to your Health
  </h2>
    <p class="subtitle">
    あなたの健康のための野菜栄養価一覧サイト
    </p>
</section>

<section class="section">
  <div class="container">
    <p class="body-title">野菜の栄養価が一目で見れるサイトになります</p>
    <div class="columns main-body">
      <div class="column is-half search-link">栄養価から探す</div>
      <div class="column is-half search-link">野菜(食材)から探す</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <p class=body-subtitle>参考サイト・書籍</p>
    <div class="columns main-body">
      <div class="column is-half reference-link">
      <a href="https://www.mhlw.go.jp/stf/newpage_08517.html" target="_blank" rel="noopener noreferrer">
        日本人の食事摂取基準(2020年版)策定検討会報告書 厚生労働省</a>
      </div>
      <div class="column is-half reference-link">
      <a href="https://healthy-food-navi.jp/" target="_blank" rel="noopener noreferrer">
      栄養指導Navi</a>
      </div>
      <div class="column is-half reference-link">
      <a href="https://foodslink.jp/syokuzaihyakka/index.htm" target="_blank" rel="noopener noreferrer">
      旬の食材百科事典</a>
      </div>
    </div>
  </div>
</section>

<?php

include('./common_php/_footer.php');
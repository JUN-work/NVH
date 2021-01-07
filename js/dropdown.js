// document.addEventListener('DOMContentLoaded', function() {
//     var nodelist = document.querySelectorAll('.dropdown-trigger');
//     var elements = Array.prototype.slice.call(nodelist, 0);

//     // ※ Dropwdonwを開く処理は省略

//     // Dropdownを閉じる処理
//     // 1. window全体に対して、クリックイベントを登録
//     window.onclick = function(event) {
//         elements.forEach(function(element) {
//         var button = element.querySelector('button');
//         var dropdown = element.parentNode;

//         // 2. aria-controlsより対象のDropdownのMenuを取得
//         var menu = document.querySelector('#' + button.getAttribute('aria-controls'));

//         // 3. 自身のTriggerButtonクリック時はMenuを閉じない
//         if(event.target && element.contains(event.target)) {
//             return;
//         }

//         // 4. クリックがDropdownのMenuの範囲外の場合は、Dropdownを閉じる
//         if(event.target && !menu.contains(event.target)) {
//             dropdown.classList.remove('is-active');
//         }
//         });
//     };
// });

var dropdown = document.querySelector('.dropdown');
dropdown.addEventListener('click', function(event) {
  event.stopPropagation();
  dropdown.classList.toggle('is-active');
});
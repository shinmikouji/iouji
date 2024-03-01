jQuery(function ($) {
  $(document).ready(function () {
    // ハンバーガーメニュー
    $(".l-header__icon").click(function () {
      $(this).toggleClass("active");
      $(".l-header__nav--sp").toggleClass("active");
      $(".l-header").toggleClass("fixed");
      $("body").toggleClass("menu-open");
    });

    // ニュース一覧ページのラベルの色付け
    $(".p-archive__list .p-archive__items").each(function () {
      let label = $(this).find(".p-archive__items-label");
      let labelText = label.text();
      if (labelText === "重要なお知らせ") {
        label.css("background", "#3D603B");
      } else if (labelText === "行事・イベント") {
        label.css("background", "#C4A231");
      } else {
        return false;
      }
    });
  });

  // ニュースのタブ
  const importantButton = $("#importantButton");
  const eventButton = $("#eventButton");
  $("#important").css("display", "grid");
  importantButton.addClass("active");

  importantButton.on("click", function () {
    toggleCategory("important");
  });
  eventButton.on("click", function () {
    toggleCategory("event");
  });

  function toggleCategory(tabName) {
    if (tabName === "important") {
      $("#event").css("display", "none");
      $("#important").css("display", "grid");
      $("#eventButton").removeClass("active");
      importantButton.addClass("active");
      console.log(123);
    }
    if (tabName === "event") {
      $("#important").css("display", "none");
      $("#event").css("display", "grid");
      $("#importantButton").removeClass("active");
      eventButton.addClass("active");
    }
  }
});

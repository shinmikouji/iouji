jQuery(function ($) {
  // ハンバーガーメニュー
  $(document).ready(function(){
    $(".l-header__icon").click(function () {
      $(this).toggleClass("active");
      $(".l-header__nav--sp").toggleClass("active");
      $(".l-header").toggleClass("fixed");
      $('body').toggleClass('menu-open');
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

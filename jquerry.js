$("header a").click(function(e) {
    e.preventDefault();
    var target = $(this).attr("href");
    $("div").not(target).hide();
    $(target).show();
  });
  
$(document).ready(function () {
  $(".novidades_lista a").css("opacity", "1");
  $(".novidades_lista a").hover(function () {
    $(this).parent().parent().parent().find(".novidades_lista a").css("opacity", "0.7");
    $(this).css("opacity", "1");
    $(this).mouseleave(function () {
      $(this).parent().parent().parent().find(".novidades_lista a").css("opacity", "1");
    });
  });

  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 70) {
      $(".topo").addClass("topo-fixo");
      console.log("a");

    } else {
      $(".topo").removeClass("topo-fixo");
    }
  });
  $(".clique-menu").click(function(){
    $(".menu-mobile").toggleClass("abrir");
  });
});

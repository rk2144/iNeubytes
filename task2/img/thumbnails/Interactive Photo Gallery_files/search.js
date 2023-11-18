$("#image_search").change(function() {
  var filter = $(this).val();
  console.log(filter);
  $("img[title~='" + filter + "']").addClass('match');
})

/*
$("li").has($('img[title~=""'+ filter'"]')).addClass("match");*/

/*$("#image_search").keyup(function () {
  //Get the value of the image search input
  var filter = $(this).val();
  console.log(filter);
  var match = $("img[title*=filter]");
  var parentAnchor = $("img[title*=filter]").parent();
  console.log(parentAnchor.attr("href"));
});*/

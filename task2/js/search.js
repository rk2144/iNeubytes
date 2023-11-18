//The #gallery li are the items being filtered
var $galleryElement = $("#gallery li");

//Creates a custom jQuery expression that looks for case-insensitive matches between search input value (passed as arugment) and image titles or alt text
jQuery.expr[':'].Match = function(elem, index, m) {
  return ($("elem").attr("title") || $(elem).attr("alt") || "").toUpperCase().indexOf(m[3].toUpperCase()) > -1;
};

//Function to slide matches to search input value down and slide non-matches up
var filterGalleryElements = function () {
  //Stores search input value in variable
  var contentFilter = $(this).val();

  //Passes search input value to custom :Match selector and looks for <li> containing matching <img> elements
  if (contentFilter) {
    var match = $galleryElement.has('img:Match(' + contentFilter + ')');

    //Adds a class to matched elements
    match.addClass("match");

    //Slide items with the class down
    $("#gallery .match").slideDown(300);

    //Slide items without the class up
    $galleryElement.not($("#gallery .match")).slideUp(300);
    }
    //If there's nothing in the search box, remove the class from all items
    else {
    $galleryElement.slideDown();
    $galleryElement.removeClass("match");
  }
};

//Function executes when contents of search box change and focus is removed or
$("#image_search").change(filterGalleryElements);

//After each letter is typed
$("#image_search").keyup(filterGalleryElements);

//The keydown press removes the "match" class to update the search
$("#image_search").keydown(function () {
  $galleryElement.removeClass("match");
});

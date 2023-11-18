//Create a lightbox that produces an overlay with the selected image. Users can scroll through the images while in lightbox mode using forwards and backwards arrows or left and right keyboard arrows.

//Variables needed for overlay
var $overlay = $('<div id="overlay"></div');
var $imageContainer = $('<div id="img_container"></div>');
var $image = $('<img id="feature_img">');
var $iFrame = $('<iframe width="420" height="315" src="" frameborder="0" allowfullscreen></iframe>');
var $caption = $("<p></p>");
var $buttonLeft = $('<button id="left"><i class="material-icons">chevron_left</i></button>');
var $buttonRight = $('<button id="right"><i class="material-icons">chevron_right</i></button>');
var $buttonClose = $('<button id="close"><i class="material-icons">close</i></button>');

//CSS for responsive image container in lighbbox view
$imageContainer.css("height", ("width" * .625));

//Variables needed for scrolling functions
var $galleryElement = $("#gallery li");

//Creating the overlay

  //Insert feature image into container div
  $imageContainer.prepend($image);

  //Insert iFrame into container div
  $imageContainer.append($iFrame);

  //Add the buttons inside the container div (for relative positioning)
  $imageContainer.prepend($buttonLeft);
  $buttonRight.insertAfter($buttonLeft);
  $buttonClose.insertAfter($buttonRight);

  //Add image container div to overlay
  $overlay.append($imageContainer);

  //Add the caption
  $overlay.append($caption);

  //Append overlay to body
  $("body").append($overlay);

//iFrame hidden by default
$iFrame.hide();

//Toggles the .selected class on specific gallery items (<a>)
function selectItem($item) {
  $galleryElement.removeClass("selected");
  $item.toggleClass("selected");
}

//Replaces the image and caption to match .selected <li> when scrolling
var replaceImage = function() {
  var newImageLocation = $("#gallery .selected").children("a").attr("href");
  var newCaption = $("#gallery .selected a").children("img").attr("alt");
  $caption.text(newCaption);

  //If .video, set anchor's href as iFrame src
  if ($("#gallery .selected").hasClass("video")) {
    $iFrame.show();
    $image.hide();
    $iFrame.attr("src", newImageLocation);
  }
  //If image, set anchor's href as img src
  else {
    $iFrame.hide();
    $image.show();
    $image.attr("src", newImageLocation);}
};

//On page load, all gallery <li> are selected
selectItem($galleryElement);

//Initial click into lightbox: when user clicks on a thumbnail, display an overlay with the full-size image
  //Get the anchor's href
  $("#gallery li a").on("click", function(event){
    event.preventDefault();
    var $item = $(this).parent();
    selectItem($item);
    var imageLocation = $(this).attr("href");

  //If li has class .video, show iFrame and hide image
  if ($(this).parent().hasClass("video")) {
    $iFrame.show();
    $image.hide();
    $iFrame.attr("src", imageLocation);
  }
  //If it's just an image, update overlay with image from link
  else {
  $iFrame.hide();
  $image.show();
  $image.attr("src", imageLocation);}

  //Get the image's alt attribute and set it as the caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);

  //Show the overlay
  $overlay.show();

  //Prevent users from scrolling while the overlay is in place
  $("body").addClass("no_scroll");
  $($overlay).css("overflow", "scroll");
  });

//To scroll right, advance index of the <li> with feature image by 1 (except last image)

var scrollRight = function() {
  var featureImageIndex = $("#gallery").find("li.selected").index();

  if (featureImageIndex < 14) {
    newIndex = featureImageIndex + 1;
  }

  //Put the item with new index in the function variable
  $item = $galleryElement.eq(newIndex);

  //Toggle .selected class on that item
  selectItem($item);

  replaceImage();
};

//To scroll left, regress index of the <li> with feature image by 1 (except first image)
var scrollLeft = function() {
  var featureImageIndex = $("#gallery").find("li.selected").index();

  if (featureImageIndex > 0) {
    newIndex = featureImageIndex - 1;
  }

  //Put the item with new index in the function variable
  $item = $galleryElement.eq(newIndex);

  //Toggle .selected class on that item
  selectItem($item);

  replaceImage();
};

//If right button clicked or right keyboard arrow pressed, scroll right
$buttonRight.click(scrollRight);

$(document).keydown(function () {
  if (event.which === 39) scrollRight();
});

//If left button clicked or left keyboard arrow pressed, scroll left

$buttonLeft.click(scrollLeft);

$(document).keydown(function () {
  if (event.which === 37) scrollLeft();
});

//Close the lightbox
var closeLightbox = function () {
  $overlay.hide();
  //Allow user to scroll again when overlay disappears
  $("body").removeClass("no_scroll");
  //Remove class .selected from all <ul> <a> so user can start over
  $(".selected").removeClass("selected");
};

//Close on X button click or
$buttonClose.click(closeLightbox);

//Escape key press
$(document).keydown(function () {
  if (event.which === 27) closeLightbox();
});

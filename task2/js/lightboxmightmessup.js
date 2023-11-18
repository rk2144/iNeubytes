//Create a lightbox that produces an overlay with the selected image. Users can scroll through the images while in lightbox mode using forwards and backwards arrows.

//Variables for the overlay
var $overlay = $('<div id="overlay"></div');
var $imageContainer = $('<div id="img_container"></div>');
var $image = $('<img id="feature_img">')
var $caption = $("<p></p>");

//CSS for responsive image container
$imageContainer.css("width");
$imageContainer.css("height", ("width" * .625));

//Button variables
var $buttonLeft = $('<button id="left"><i class="material-icons">chevron_left</i></button>');
var $buttonRight = $('<button id="right"><i class="material-icons">chevron_right</i></button>');

//Variables needed for scrolling through images
var $galleryElement = $("#gallery li");
var $galleryElementSelected = $("#gallery li selected");
var newImageLocation

//Creating the overlay

//Insert feature image into div
$imageContainer.prepend($image);

//Adds the buttons
$imageContainer.prepend($buttonLeft);
$buttonRight.insertAfter($buttonLeft);

//Add image container div to overlay
$overlay.append($imageContainer);

//Adds the caption
$overlay.append($caption);

//Append overlay to body
$("body").append($overlay);

//Toggles the .selected class on specific gallery items (<a>)
function selectItem($item) {
  $galleryElement.removeClass("selected");
  $item.toggleClass("selected");
}

//Replaces the image and caption on scroll
var replaceImage = function() {
  var newImageLocation = $("#gallery .selected").children("a").attr("href");
  $image.attr("src", newImageLocation);
  var newCaption = $("#gallery .selected a").children("img").attr("alt");
  $caption.text(newCaption);
}

//On page load, all gallery items (<a>) are selected
selectItem($galleryElement);

//When the user clicks on a thumbnail, display an overlay with the full-size image
  //Get the anchor's href
  $("#gallery a").on("click", function(event){
    event.preventDefault();
    var $item = $(this).parent();
    selectItem($item);
    var imageLocation = $(this).attr("href");

  //Update overlay with the image from the link
  $image.attr("src", imageLocation);

  //Get the image's alt attribute and set it as the caption
  var captionText = $(this).children("img").attr("alt");
  $caption.text(captionText);

  //Show the overlay
  $overlay.show();

  //Prevent users from scrolling while the overlay is in place
  $("body").addClass("no_scroll");
});

//When right button clicked, advance index of the <li> with feature image by 1 (except last image)

$buttonRight.click(function(){
  var featureImageIndex = $("#gallery").find("li.selected").index();

  if (featureImageIndex < 11) {
    newIndex = featureImageIndex + 1;
  }

  //Put the item with new index in the function variable
  $item = $galleryElement.eq(newIndex);

  //Toggle .selected class on that item
  selectItem($item);

  replaceImage();

})

//When left button clicked, regress index of <li> with feature image by 1 (except first image)
$buttonLeft.click(function(){
  var featureImageIndex = $("#gallery").find("li.selected").index();

  if (featureImageIndex > 0) {
    newIndex = featureImageIndex - 1;
  }

  //Put the item with new index in the function variable
  $item = $galleryElement.eq(newIndex);

  //Toggle .selected class on that item
  selectItem($item);

  replaceImage();

})

//Hide the overlay when the user clicks on it
  //They can hide the overlay by clicking on the image container
  $image.click(function(){
    $overlay.hide();
    //Allow user to scroll again when overlay disappears
    $("body").removeClass("no_scroll");
    //Remove class .selected from all <ul> <a> so user can start over
    $(".selected").removeClass("selected");
  })

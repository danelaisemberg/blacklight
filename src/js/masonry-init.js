var $grid = $('.grid').imagesLoaded( function() {
  // init Masonry after all images have loaded
  $grid.masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    horizontalOrder: true, // new!
    percentPosition: true,
});
});
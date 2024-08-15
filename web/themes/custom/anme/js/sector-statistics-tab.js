(function ($) {

// Find the element to move
    var elementToMove = document.querySelector('.sector-node #tab1 .field-sector-statistics');

// Find the target location where you want to move the element
    var targetLocation = document.querySelector('.sector-node #tab3 .sector-statistics');

// Check if both elements exist before proceeding
    if (elementToMove && targetLocation) {
        // Append the element to the target location
        targetLocation.appendChild(elementToMove);
    } else {
        console.log('Either element to move or target location not found.');
    }

})(jQuery);
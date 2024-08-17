(function ($) {
    // Image element selector
    const imgElement = document.querySelector('#block-anme-anme-site-logo img');

    // Create a new link element
    const linkElement = document.createElement('a');
    linkElement.href = "https://ama-business.cloud/anme.dev/web/";

    // Insert the image inside the link
    imgElement.parentNode.insertBefore(linkElement, imgElement);
    linkElement.appendChild(imgElement);

})(jQuery);
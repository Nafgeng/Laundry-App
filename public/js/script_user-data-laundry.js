
//tab animation
$(document).ready(function() {
    // Hide all tab content except the first
    $('.main-content__list').not(':first').hide();

    $('.main-content__tab-header button').click(function() {
        //Hide all tab content
        $('.main-content__list').hide();

        // Remove active class from all tabs links
        $('.main-content__tab-header button').removeClass('active');

        // Add active class to clicked tab link
        $(this).addClass('active');

        // Get data-tab attribute value
        var tab = $(this).data('tab');

        // Show corresponding tab content
        $('#' + tab).show();
    });
})

//sidebar responsive
const hamburgerButton = document.querySelector('.menu-icon');
const sideBar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main');

hamburgerButton.addEventListener('click', () => {
    sideBar.classList.toggle('active');
    mainContent.classList.toggle('active');
});

document.onclick = function (e) {
    if (!hamburgerButton.contains(e.target) && !sideBar.contains(e.target) ) {
        sideBar.classList.remove('active');
        mainContent.classList.remove('active');
    }
}



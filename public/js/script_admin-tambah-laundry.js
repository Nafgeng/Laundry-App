//sidebar responsive
const hamburgerButton = document.querySelector('.menu-icon');
const sideBar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main');

hamburgerButton.addEventListener('click', () => {
    sideBar.classList.toggle('on');
    mainContent.classList.toggle('active');
});

document.onclick = function (e) {
    if (!hamburgerButton.contains(e.target) && !sideBar.contains(e.target) ) {
        sideBar.classList.remove('on');
        mainContent.classList.remove('active');
    }
}


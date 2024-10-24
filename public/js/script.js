getYear();
mobileMenuHandle();

function mobileMenuHandle() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mainMenu = document.getElementById('mainMenu');
    const homepageContent = document.getElementById('homepageContent');
    const bodyMobileMenu = document.querySelector('body');

    if (!mobileMenu) return;

    if (mobileMenu) {
        mobileMenu.addEventListener('click', () => {
            bodyMobileMenu.classList.toggle('mobile');
            console.log('mobileMenu click');
            mobileMenu.classList.toggle('isActive');

            mainMenu.classList.toggle('showMenu');
            homepageContent.classList.toggle('active');
        });
    }
}

function getYear() {
    const currentYr = document.getElementById('currentYear');

    if (!currentYr) return;

    const date = new Date();
    const year = date.getFullYear();

    currentYr.innerText = year;
}

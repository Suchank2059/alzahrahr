document.addEventListener('livewire:navigated', () =>{
    setTimeout(function(){
        const mobileNav = document.querySelector('.mnav');
        const closeBtn = document.querySelector('.mnav__close-btn');
        const closeBtnIcn = document.querySelector('.mnav__close-btn-icon');
        const navOpenedClass = 'left-0';
        const navClosedClass = '-left-[300px]';
        const arrowLeftClass = 'fa-arrow-left';
        const arrowRightClass = 'fa-arrow-right';

        closeBtn.addEventListener('click', () => {
            mobileNav.classList.toggle(navOpenedClass);
            mobileNav.classList.toggle(navClosedClass);
            closeBtnIcn.classList.toggle(arrowLeftClass);
            closeBtnIcn.classList.toggle(arrowRightClass);
        });
    }, 1);
});

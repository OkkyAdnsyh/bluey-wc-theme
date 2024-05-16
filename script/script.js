
const faqs = document.querySelectorAll('.accordion');

// accordion function
faqs.forEach( faq => {
    faq.addEventListener('click', () => {
        
        let isOpen = document.querySelector('.accordion.isOpen');
        isOpen.classList.remove('isOpen');

        faq.classList.add('isOpen');
    })
})

// nav toggle
const toggle = document.querySelector('.menu--toggle');
const mobileNav = document.querySelector('.mobile--nav');
toggle.addEventListener('click', () => {
    toggle.classList.toggle('isActive');
    mobileNav.classList.toggle('isActive');
})
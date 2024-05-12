
const faqs = document.querySelectorAll('.accordion');

// accordion function
faqs.forEach( faq => {
    faq.addEventListener('click', () => {
        
        let isOpen = document.querySelector('.accordion.isOpen');
        isOpen.classList.remove('isOpen');

        faq.classList.add('isOpen');
    })
})
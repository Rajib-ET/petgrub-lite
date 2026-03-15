/**
 * Omnipress WooCommerce JS
 */

(function () {

    // Product Search Modal
    function petgrub_product_search_modal() {
        const searchModal = document.querySelector('.search-modal__content');
        const searchOpen = document.querySelector('.open-search-modal');
        const searchClose = document.querySelector('.close-search-modal');

        searchOpen.addEventListener('click', (e) => {
            searchModal.style.display = "flex";
            document.body.style.overflow = "hidden";
        });

        // close search modal
        searchClose.addEventListener('click', (e) => {
            searchModal.style.display = "none";
            document.body.style.overflow = "auto";
        });

        window.addEventListener('click', (e) => {
            if (e.target === searchModal) {
                searchModal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        });

    }


    // Review Stars
    function petgrub_product_review_stars() {
        for (let i = 1; i <= 5; i++) {
            const starLink = document.querySelector(`a.star-${i}`);
            if (starLink) {
                starLink.textContent = starLink.textContent.charAt(0);
            }
        }
    }

    window.addEventListener('load', function () {

        petgrub_handle_quantity();
        petgrub_product_search_modal()
        petgrub_product_review_stars();  

        // Change Product add to cart button text
        const atcBtns = document.querySelectorAll('.add_to_cart_button');
        if (atcBtns !== null) {
            atcBtns.forEach((atcBtn) => {
                atcBtn.addEventListener('click', function () {
                    atcBtn.innerHTML = 'added to cart';
                });
            });
        }

    });

     
const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
});

})();
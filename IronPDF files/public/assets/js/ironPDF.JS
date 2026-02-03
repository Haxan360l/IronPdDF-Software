document.addEventListener('DOMContentLoaded', function () {

    const dropdowns = document.querySelectorAll('.nav-item.dropdown');
    let closeTimeout;

    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]')

        dropdown.addEventListener('mouseleave', function () {
            closeTimeout = setTimeout(() => {
                const instance = bootstrap.Dropdown.getInstance(toggle);

                if (instance) {
                    instance.hide();
                }
            }, 200)

        });


        dropdown.addEventListener('mouseenter', function () {
            if (closeTimeout) {
                clearTimeout(closeTimeout);
            }
        })
    });

});
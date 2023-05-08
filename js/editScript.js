
$(document).ready(function () {
    const animationLogo = document.querySelector('.animation-logo h1');
    let intervalId = 0;

    function animateLogoOnHover() {
        animationLogo.addEventListener('mouseenter', () => {
            animationLogo.classList.add('active');
            intervalId = setInterval(() => {
                animationLogo.classList.remove('active');
                setTimeout(() => {
                    animationLogo.classList.add('active');
                }, 100);
            }, 3000);
        });

        animationLogo.addEventListener('mouseleave', () => {
            animationLogo.classList.remove('active');
            clearInterval(intervalId);
        });
    }

    animateLogoOnHover();

    function containsNoLetters(str) {
        return !/[a-zA-Z]/.test(str);
    }

    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()

});

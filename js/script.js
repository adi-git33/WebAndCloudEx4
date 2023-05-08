$(document).ready(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        });

    let ageSelect = document.getElementById('validationCustom04');
    ageSelect.addEventListener('change', function () {
        let selectedValue = parseInt(this.value);
        if (selectedValue < 23 || selectedValue > 38) {
            this.setCustomValidity('Please select an age between 23 and 38.');
        } else {
            this.setCustomValidity('');
        }
    });

    let checkboxes = document.querySelectorAll('input[type="checkbox"]');
    let checked = document.querySelectorAll('input[type="checkbox"]:checked').length;
    if (checked < 3) {
        checkboxes.forEach(function (checkbox) {
            checkbox.setCustomValidity('Please select at least three hobbies.');
        });
    } else {
        checkboxes.forEach(function (checkbox) {
            checkbox.setCustomValidity('');
        });
    }

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            let checked = document.querySelectorAll('input[type="checkbox"]:checked').length;
            if (checked < 3) {
                checkboxes.forEach(function (checkbox) {
                    checkbox.setCustomValidity('Please select at least three hobbies.');
                });
            } else {
                checkboxes.forEach(function (checkbox) {
                    checkbox.setCustomValidity('');
                });
            }
        });
    });
})


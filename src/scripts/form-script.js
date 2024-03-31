document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.signup-form');
    form.addEventListener('submit', function (event) {
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function (errorMessage) {
            errorMessage.textContent = '';
        });
        let isValid = true;
        const firstNameInput = document.getElementById('FirstName');
        if (firstNameInput.value.trim() === '') {
            document.getElementById('FirstNameError').textContent = '*Please enter your first name*';
            isValid = false;
        }

        const lastNameInput = document.getElementById('LastName');
        if (lastNameInput.value.trim() === '') {
            document.getElementById('LastNameError').textContent = '*Please enter your last name*';
            isValid = false;
        }

        const phoneInput = document.getElementById('phone');
        if (phoneInput.value.trim() === '') {
            document.getElementById('phoneError').textContent = '*Please enter your phone number*';
            isValid = false;
        }

        const addressInput = document.getElementById('address');
        if (addressInput.value.trim() === '') {
            document.getElementById('addressError').textContent = '*Please enter your address*';
            isValid = false;
        }

        const emailInput = document.getElementById('email');
        if (emailInput.value.trim() === '') {
            document.getElementById('emailError').textContent = '*Please enter your email*';
            isValid = false;
        }

        const passwordInput = document.getElementById('password');
        if (passwordInput.value.trim() === '') {
            document.getElementById('passwordError').textContent = '*Please enter your password*';
            isValid = false;
        }

        const passwordConfirmationInput = document.getElementById('password_confirmation');
        if (passwordConfirmationInput.value.trim() === '') {
            document.getElementById('passwordConfirmationError').textContent = '*Please confirm your password*';
            isValid = false;
        }
        

                if (passwordInput.value !== passwordConfirmationInput.value) {
                    document.getElementById('passwordConfirmationError').textContent = 'Passwords do not match';
                    isValid = false;
                }

        if (!isValid) {
            event.preventDefault();
        }
    });
  
});
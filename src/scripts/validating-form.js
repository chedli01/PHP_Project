function validateForm(event) {
    event.preventDefault(); 

    var form = event.target;
    var inputs = form.querySelectorAll('input');

    inputs.forEach(function(input) {
        var errorMessage = form.querySelector('#' + input.id + 'Error');
        if (!input.value.trim()) {
            errorMessage.textContent = input.name + ' is required.';
        } else {
            errorMessage.textContent = '';
        }
    });

    return false;}
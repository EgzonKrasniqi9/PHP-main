document.addEventListener('DOMContentLoaded', function() {
    // Handle button clicks
    const buttons = document.querySelectorAll('.event-button');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            alert('Button clicked: ' + this.textContent);
        });
    });

    // Handle form submissions
    const forms = document.querySelectorAll('.event-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            // Process form data here
            console.log('Form submitted:', formData);
        });
    });
});
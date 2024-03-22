document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".form__input, .form__textarea").forEach(function(input) {
        const errorMessage = input.nextElementSibling; // Select the next sibling element (error message) of the input

        input.addEventListener("input", function() {
            const pattern = input.getAttribute("pattern"); // Get the pattern attribute value of the input (if applicable)
            const inputValue = input.value; // Get the value entered by the user
            
            if (pattern && !new RegExp(pattern).test(inputValue)) {
                input.classList.add("form__input--error"); // Add error class to input
                errorMessage.style.visibility = "visible"; // Show error message
            } else {
                input.classList.remove("form__input--error"); // Remove error class from input
                errorMessage.style.visibility = "hidden"; // Hide error message
            }
        });
    });
});


function back(){
    window.location.href = "form.html";
}
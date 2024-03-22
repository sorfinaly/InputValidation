document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Validate form fields
        const firstName = document.getElementById("firstname").value.trim();
        const lastName = document.getElementById("lastname").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const date = document.getElementById("date").value.trim();
        const time = document.getElementById("time").value.trim();
        const guests = document.getElementById("guests").value.trim();
        const type = document.getElementById("type").value;
        
        // Regex patterns
        const namePattern = /^[A-Za-z]+$/;
        const emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
        const phonePattern = /^\d{3}[\-]\d{3}[\-]\d{4}$/;
        
        // Validation
        if (!namePattern.test(firstName)) {
            alert("Please enter a valid first name.");
            return; // Stop form submission
        } 
        
        if (!namePattern.test(lastName)) {
            alert("Please enter a valid last name.");
            return;
        }
        
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return;
        }
        
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid phone number (XXX-XXX-XXXX).");
            return;
        }
        
        
        // If all validations pass, you can submit the form
        alert("Form submitted successfully!");
        // Uncomment the line below to submit the form
        // form.submit();
    });
});

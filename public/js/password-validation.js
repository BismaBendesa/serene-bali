document.addEventListener("DOMContentLoaded", () => {
    const passwordInput = document.getElementById("password");
    const passwordMoreThan8Char = document.getElementById("moreThan8Char");
    const containNumber = document.getElementById("containNumber");
    const uppercaseChar = document.getElementById("uppercaseChar");
    let circleIndicator, valid;

    // function validatePassword(password) {
    //     // Define password requirements
    //     const minLength = 8;
    //     const hasLetters = /[a-zA-Z]/.test(password);
    //     const hasNumbers = /[0-9]/.test(password);

    //     // Check if password meets requirements
    //     if (password.length >= minLength && hasLetters && hasNumbers) {
    //         return "valid";
    //     }
    //     return "invalid";
    // }

    function validatePasswordChar(password) {
        // Define password requirements
        const minLength = 8;
        // const hasLetters = /[a-zA-Z]/.test(password);
        // const hasNumbers = /[0-9]/.test(password);

        // Check if password meets requirements
        if (password.length >= minLength) {
            return "valid";
        }
        return "invalid";
    }
    function validatePasswordContainNumber(password) {
        // Define password requirements
        // const minLength = 8;
        // const hasLetters = /[a-zA-Z]/.test(password);
        const hasNumbers = /[0-9]/.test(password);

        // Check if password meets requirements
        if (hasNumbers) {
            return "valid";
        }
        return "invalid";
    }
    function validatePasswordUppercase(password) {
        // Define password requirements
        // const minLength = 8;
        const hasLetters = /[A-Z]/.test(password);
        // const hasNumbers = /[0-9]/.test(password);

        // Check if password meets requirements
        if (hasLetters) {
            return "valid";
        }
        return "invalid";
    }

    function validateStatus(element, valid) {
        if (valid == "valid") {
            element.classList.toggle("text-green-600");
            element.style.color = "green";
            circleIndicator = element.querySelector("div");
            circleIndicator.style.backgroundColor = "green";
            circleIndicator.classList.toggle("bg-gray-200");
        } else {
            element.classList.toggle("text-green-600");
            element.style.color = "red";
            circleIndicator = element.querySelector("div");
            circleIndicator.style.backgroundColor = "red";
            circleIndicator.classList.toggle("bg-gray-200");
        }
    }

    passwordInput.addEventListener("input", () => {
        const password = passwordInput.value;
        // const validation = validatePassword(password);

        // // more than 8 char
        if (validatePasswordChar(password) === "valid") {
            validateStatus(
                passwordMoreThan8Char,
                validatePasswordChar(password)
            );
        } else if (validatePasswordChar(password) === "invalid") {
            validateStatus(
                passwordMoreThan8Char,
                validatePasswordChar(password)
            );
        }
        // // contain number
        if (validatePasswordContainNumber(password) === "valid") {
            validateStatus(
                containNumber,
                validatePasswordContainNumber(password)
            );
        } else if (validatePasswordContainNumber(password) === "invalid") {
            validateStatus(
                containNumber,
                validatePasswordContainNumber(password)
            );
        }
        // // uppercase
        if (validatePasswordUppercase(password) === "valid") {
            validateStatus(uppercaseChar, validatePasswordUppercase(password));
        } else if (validatePasswordUppercase(password) === "invalid") {
            validateStatus(uppercaseChar, validatePasswordUppercase(password));
        }
        // else {
        //     statusParagraph.textContent =
        //         "Password must be at least 8 characters long and include both letters and numbers.";
        //     statusParagraph.style.color = "red";
        // }
    });
});

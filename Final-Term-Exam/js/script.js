function searchEmployees() {
    let searchValue = document.getElementById('searchInput').value.trim();
    let searchResultsContainer = document.getElementById('searchResults');

    
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'search_employees.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                
                searchResultsContainer.innerHTML = xhr.responseText;
            } else {
                console.error('Error:', xhr.status);
            }
        }
    };

    xhr.send('query=' + searchValue);
}


function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username.trim() === "") {
        alert("Please enter your username");
        return false;
    }

    if (password.trim() === "") {
        alert("Please enter your password");
        return false;
    }

    return true;
}

function validateRegister() {
    var name = document.getElementById("name").value;
    var contact = document.getElementById("contact").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("cpassword").value;

    if (name.trim() === "") {
        alert("Please enter your name");
        return false;
    }

    if (contact.trim() === "") {
        alert("Please enter your contact number");
        return false;
    }

    if (username.trim() === "") {
        alert("Please enter a username");
        return false;
    }

    if (password.trim() === "") {
        alert("Please enter a password");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match");
        return false;
    }

    return true;
}

function validateUpdate() {
    var name = document.getElementsByName("name")[0].value;
    var contact = document.getElementsByName("contact")[0].value;
    var username = document.getElementsByName("username")[0].value;

    if (name.trim() === "") {
        alert("Please enter the employee's name");
        return false;
    }

    if (contact.trim() === "") {
        alert("Please enter the contact number");
        return false;
    }

    if (username.trim() === "") {
        alert("Please enter the username");
        return false;
    }

    return true;
}

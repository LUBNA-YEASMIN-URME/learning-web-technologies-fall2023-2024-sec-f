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

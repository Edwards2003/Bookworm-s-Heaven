$(document).ready(function () {
    // Function to handle button click
    $('.btn-transparent').click(function (event) {
        // Prevent the default button click behavior
        event.preventDefault();

        // Get the user input from the search bar
        const searchTerm = $('#search').val();

        // Update the search URL with the user input
        const searchUrl = `https://www.googleapis.com/books/v1/volumes?q=${searchTerm}`;

        // Update the AJAX settings with the new search URL and API key
        const settings = {
            async: true,
            crossDomain: true,
            url: searchUrl,
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'AIzaSyDGWUZ3iPObMF5Pw3cWeVw8vW4fj5vG-bM'
            }
        };

        // Make the AJAX request with the updated settings
        $.ajax(settings)
            .done(function (response) {
                // Handle the response by updating the HTML content
                displaySearchResults(response);
            })
            .fail(function (xhr, status, error) {
                // Log any errors to the console
                console.error("AJAX request failed:", status, error);
            });
    });

    // Function to display search results in the HTML
    function displaySearchResults(data) {
        const searchResultsContainer = $('#searchResults');
        searchResultsContainer.empty();

        if (data.items && data.items.length > 0) {
            // Loop through the items and create Bootstrap cards
            data.items.forEach(function (item) {
                const card = $('<div class="col-md-4 mb-4">');
                card.append(`
                    <div class="card">
                    <br>
                        <img src="${item.volumeInfo.imageLinks.thumbnail}" class="card-img-top img-small mx-auto d-block" alt="Book Cover">
                        <div class="card-body">
                            <h5 class="card-title">${item.volumeInfo.title}</h5>
                            <p class="card-text">Author(s): ${item.volumeInfo.authors.join(', ')}</p>
                            <p class="card-text">Published Date: ${item.volumeInfo.publishedDate}</p>
                            <p class="card-text">Rating: ${item.volumeInfo.averageRating || 'N/A'}</p>
                            <p class="card-text">ISBN: ${item.volumeInfo.industryIdentifiers[0].identifier}</p>
                        </div>
                    </div>
                `);
                searchResultsContainer.append(card);
            });
        } else {
            const noResultsMessage = $('<div class="col-md-12 text-center">').text('No results found.');
            searchResultsContainer.append(noResultsMessage);
        }
    }
});

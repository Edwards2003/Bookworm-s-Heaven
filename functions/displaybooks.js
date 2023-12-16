$(document).ready(function () {
    // Entry point to fetch and display Romance books
    function initializeRomanceBooks() {
        const searchUrl = 'https://www.googleapis.com/books/v1/volumes?q=romance';
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

        // Make the AJAX request
        $.ajax(settings)
            .done(handleRomanceBooksResponse)
            .fail(handleRequestError);
    }

    // Handle the response and display Romance books
    function handleRomanceBooksResponse(response) {
        const romanceBooksContainer = $('#romanceBooks'); // Updated ID
        romanceBooksContainer.empty();

        if (response.items && response.items.length > 0) {
            // Loop through the items and create Bootstrap cards
            response.items.forEach(createRomanceBookCard);
        } else {
            displayNoResultsMessage(romanceBooksContainer);
        }
    }

    // Create a card for a Romance book
    function createRomanceBookCard(item) {
        const card = $('<div class="col-md-4 mb-4">');

        // Check if imageLinks property exists before accessing thumbnail
        if (item.volumeInfo.imageLinks && item.volumeInfo.imageLinks.thumbnail) {
            card.append(`
                <div class="card h-100">
                <br>
                    <img src="${item.volumeInfo.imageLinks.thumbnail}" class="img-small mx-auto d-block mb-3" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">${item.volumeInfo.title}</h5>
                        <p class="card-text">Author(s): ${item.volumeInfo.authors ? item.volumeInfo.authors.join(', ') : 'N/A'}</p>
                        <p class="card-text">Published Date: ${item.volumeInfo.publishedDate || 'N/A'}</p>
                        <p class="card-text">Rating: ${item.volumeInfo.averageRating || 'N/A'}</p>
                        <p class="card-text">ISBN: ${item.volumeInfo.industryIdentifiers && item.volumeInfo.industryIdentifiers.length > 0 ? item.volumeInfo.industryIdentifiers[0].identifier : 'N/A'}</p>
                    </div>
                </div>
            `);
        }

        $('#romanceBooks').append(card); // Updated ID
    }

    // Display a message when no Romance books are found
    function displayNoResultsMessage(container) {
        const noResultsMessage = $('<div class="col-md-12 text-center">').text('No Romance books found.');
        container.append(noResultsMessage);
    }

    // Handle AJAX request errors
    function handleRequestError(xhr, status, error) {
        console.error("AJAX request failed:", status, error);
    }

    // Fetch and display Romance books on page load
    initializeRomanceBooks();
});

const options = {
    method: 'GET',
    headers: {
        'accept': 'application/json',
        'X-RapidAPI-Key': '2058c34f07msh182828430be7ac8p1d8a2ejsn6dc1238e1e74'
    }
};

// Async function to fetch books from the Goodreads API
async function fetchBooks() {
    try {
        const response = await fetch('https://goodreads-books.p.rapidapi.com/lists', options);
        const data = await response.json();

        const responseData = data;
        return responseData;
    } catch (error) {
        console.log(error);
    }
}

// Fetch books and display them in Bootstrap cards
fetchBooks().then(result => {
    console.log(result);
    const booksContainer = $("#books-container");

    for (let i = 0; i < result.results.works.length; i++) {
        const book = result.results.works[i];

        // Use the information from the Goodreads API response to populate Bootstrap cards
        booksContainer.append(`
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">${book.title}</h5>
                        <p class="card-text"><strong>Author:</strong> ${book.author_name.join(', ')}</p>
                        <p class="card-text"><strong>Publication Year:</strong> ${book.original_publication_year || 'N/A'}</p>
                        <!-- Add other details as needed -->
                    </div>
                </div>
            </div>
        `);
    }
});

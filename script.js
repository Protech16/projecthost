document.getElementById('addBookForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData();
    formData.append('title', document.getElementById('title').value);
    formData.append('author', document.getElementById('author').value);
    formData.append('year', document.getElementById('year').value);
    formData.append('genre', document.getElementById('genre').value);

    fetch('add_book.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        location.reload(); // Refresh to update book list
    });
});

document.getElementById('search').addEventListener('input', function () {
    const searchValue = this.value.toLowerCase();
    const books = document.querySelectorAll('.book');

    books.forEach(book => {
        const title = book.querySelector('h3').innerText.toLowerCase();
        if (title.includes(searchValue)) {
            book.style.display = '';
        } else {
            book.style.display = 'none';
        }
    });
});

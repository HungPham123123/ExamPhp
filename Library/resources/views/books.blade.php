<!-- resources/views/books.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center display-2">Library Management System</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Search by book title">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" onclick="searchBooks()">Search</button>
                </div>
            </div>
            <ul id="bookList" class="list-group">
                @foreach($books as $book)
                    <li class="list-group-item">Book Name: {{ $book->title }}
                        <div class="">Publication Year: {{$book->pub_year}}</div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<script>
    function searchBooks() {
        let searchTerm = document.getElementById('searchInput').value;
        fetch(`/books/search?search=${searchTerm}`)
            .then(response => response.json())
            .then(data => {
                displayBooks(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function displayBooks(books) {
        let bookList = document.getElementById('bookList');
        bookList.innerHTML = '';
        books.forEach(book => {
            let li = document.createElement('li');
            li.textContent = book.title;
            bookList.appendChild(li);
        });
    }
</script>
</body>
</html>

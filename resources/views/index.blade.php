<html>
    <head>
    <title>Web Reader</title>
    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h3 class=version>{{ $bible_version }}</h3>

<?php for($i = 1; $i <= $number_of_chapters; $i++):?>
<h3>
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h3>
<?php endfor;?>
</body>
</html>
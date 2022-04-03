<html>
    <head>
    <title>Web Reader</title>
    <link href="https://fonts.googleapis.com/css2?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Noto+Serif+Display&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap" rel="stylesheet">
    
    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h3 class=bookversion>{{ $bible_version }}</h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h3>
@endfor

<hr>
<pre class=textstyle>
@include("chapter" . $chapter_number)
</pre>
</body>

<style>
    .textstyle{
        color: maroon;
        background-color: #85C1E9;
        border-style: inset;
        font-family:'Karma', serif;
    }
    .bookname{
        text-align: center;
        font-family: 'Domine', serif;
    }
    .bookversion{
        text-align: center;
    }

    
</style>
</html>



@extends('layout')

<title>home</title>



@section('content')
<nav>
    <ul class="list">
        <li><a class="log" href="/">Stumble</a></li>

        <li><a class="musicTab" href="/music">Music</a></li>

        <li><a class="booksTab" href="/books">Books</a></li>

        <li><a class="moviesTab" href="/movies">Movies</a></li>

        <li><a class="seriesTab" href="/series">Series</a></li>
    </ul>

    <ul>
        <li>
            <img class="search" src="/bilder/search.png" alt="search" height="27" width="27">
            <a class="userName">Felix</a>
            <img class="userPic" src="/bilder/pingvin.png" alt="userPic" height="55" width="55">
        </li>
    </ul>

</nav>


<div class="container">
    <img class="movie7" src="/bilder/star.jpg" alt="movie6" height="513" width="350">

    <div class="moviePosters">
        <img class="movie1" alt="movie1" id="movie" src="/bilder/eternal.jpg" height="250" width="200">
        <img class="movie2" alt="movie2" id="movie" src="/bilder/big.jpg" height="250" width="200">
        <img class="movie3" alt="movie3" id="movie" src="/bilder/inception.jpg" height="250" width="200">
        <img class="movie4" alt="movie4" id="movie" src="/bilder/nice.jpg" height="250" width="200">
        <img class="movie5" alt="movie5" id="movie" src="/bilder/great.jpg" height="250" width="200">
        <img class="movie6" alt="profilPic" id="movie" src="/bilder/avatar.jpg" height="250" width="200">
    </div>
</div>


<div class="listContainer">

    <h1 class="liked">Liked</h1>
    <div>
        <ul>
            <li class="listExempel">Exempel</li>
            <li class="listExempel">Exempel</li>
            <li class="listExempel">Exempel</li>
            <li class="listExempel">Exempel</li>
            <li class="listExempel">Exempel</li>
        </ul>
    </div>
</div>

@endsection

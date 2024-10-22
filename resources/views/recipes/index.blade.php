<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <!-- Add a search form -->
    <form method="GET" action="{{ route('recipe.index') }}">
      <input type="text" name="search" placeholder="Search by title" value="{{ request('search') }}">
      <button type="submit">Search</button>
    </form>
  </div>

  <div>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>Uptoves</th>
        <th>Increment Uptoves</th>
        <th>Edit</th>
        <th>Bookmark</th>
      </tr>
      @foreach($recipes as $recipe)
        <tr>
          <td>{{$recipe->id}}</td>
          <td>{{$recipe->title}}</td>
          <td>{{$recipe->image}}</td>
          <td>{{$recipe->ingredients}}</td>
          <td>{{$recipe->instructions}}</td>
          <td>{{$recipe->uptoves}}</td>
          <td>
            <form action="{{ route('recipe.incrementUptoves', ['recipe' => $recipe]) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Increment Uptoves</button>
            </form>
          </td>
          <td>
            <a href="{{ route('recipe.edit', ['recipe' => $recipe]) }}">Edit</a>
          </td>
          <td>
            @if(auth()->user()->bookmarkedRecipes->contains($recipe->id))
              <form action="{{ route('recipe.unbookmark', ['recipe' => $recipe]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Unbookmark</button>
              </form>
            @else
              <form action="{{ route('recipe.bookmark', ['recipe' => $recipe]) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Bookmark</button>
              </form>
            @endif
          </td>
          <td>
            <form method="post" action="{{route('recipe.destroy', ['recipe' => $recipe])}}">
              @csrf
              @method('delete')
              <input type="submit" value="Delete" />
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>

  <div>
    <p>
      Make a new recipe <a href="/recipe/create">here</a>.
    </p>
  </div>

  <div>
    <p>
      See your Bookmarked recipes <a href="/recipe/bookmark">here</a>.
    </p>
  </div>

  <div>
    <p>
      Back to wellcome page <a href="/">here</a>.
    </p>
  </div>

  <div>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit">Logout</button>
    </form>
  </div>
</body>
</html>

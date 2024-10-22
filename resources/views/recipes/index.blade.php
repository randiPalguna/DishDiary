<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>Uptoves</th>
        <th>Edit</th>
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
            <a href="{{ route('recipe.edit', ['recipe' => $recipe]) }}">Edit</a>
          </td>
          <td>
           <form action="{{ route('recipe.incrementUptoves', ['recipe' => $recipe]) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Increment Uptoves</button>
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
</body>
</html>
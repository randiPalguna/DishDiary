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
        <th>Image</th>
        <th>Title</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>uptoves</th>
      </tr>
      @foreach($recipes as $recipe)
        <tr>
          <td>{{$recipe->id}}</td>
          <td>{{$recipe->image}}</td>
          <td>{{$recipe->title}}</td>
          <td>{{$recipe->ingredients}}</td>
          <td>{{$recipe->instructions}}</td>
          <td>{{$recipe->uptoves}}</td>
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
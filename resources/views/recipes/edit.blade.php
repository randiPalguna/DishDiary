<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Edit a Recipe</h1>
  <form method="post" action="{{route('recipe.update', ['recipe' => $recipe])}}">
    @csrf
    @method('put')
    <div>
      <label>Title</label>
      <input type="text" name="title" value={{$recipe->title}} />
    </div>
    <div>
      <label>Image</label>
      <input type="text" name="image" value={{$recipe->image}} />
    </div>
    <div>
      <label>Ingredients</label>
      <input type="text" name="ingredients" value={{$recipe->ingredients}}  />
    </div>
    <div>
      <label>Instructios</label>
      <input type="text" name="instructions" value={{$recipe->instructions}}  />
    </div>
    <div>
      <input type="submit" value="Update" />
    </div>
  </form>
</body>
</html>
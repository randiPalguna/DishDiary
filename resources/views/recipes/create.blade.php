<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Recipe</title>
</head>
<body>
  <h1>Create a Recipe</h1>
  <form method="post" action="{{route('recipe.store')}}" enctype="multipart/form-data">
    @csrf
    <div>
      <label>Title</label>
      <input type="text" name="title" />
    </div>
    <div>
      <label>Image</label>
      <input type="file" name="image" />
    </div>
    <div>
      <label>Ingredients</label>
      <input type="text" name="ingredients" />
    </div>
    <div>
      <label>Instructions</label>
      <input type="text" name="instructions" />
    </div>
    <div>
      <input type="submit" value="Save a New Recipe" />
    </div>
  </form>
</body>
</html>

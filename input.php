<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<title>Word Translation</title>
</head>

<body>






<form action = "./get.php" method = "post">


<div class="form-group">
    <label for="exampleFormControlSelect1">元々の文章</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>英語</option>
    </select>
  </div>



<div class="form-group">
    <label for="exampleFormControlSelect1">翻訳する文章</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>日本語</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">文章</label>
    <input type = "text" name ="comment"><br/>
  </div>

  <button type="submit" class="btn btn-primary">翻訳する</button>

</form>





</body>
</html>
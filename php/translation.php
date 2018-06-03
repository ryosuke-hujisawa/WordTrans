<?php

$comment = $_POST['comment'];

$from = $_POST['from'];

$to= $_POST['to'];

//不必要な文字を削除する
$str = "$comment";
$str = str_replace("'", '', $str);
$str = str_replace("(", '', $str);
$str = str_replace(")", '', $str);
$str = preg_replace('/\n|\r|\r\n/', '.', $str );

if ($to == "英語" or $to == "English" or $to == "ngelsk" or $to == "영어")
{
ob_start();
passthru("/home/bitnami/.pyenv/shims/python /home/bitnami/htdocs/WordTrans/python/to_en_translation.py $str");
$output = ob_get_clean(); 
}
elseif($to == "日本語" or $to == "Japanese" or $to == "japansk" or $to == "일본어") 
{
ob_start();
passthru("/home/bitnami/.pyenv/shims/python /home/bitnami/htdocs/WordTrans/python/to_ja_translation.py $str");
$output = ob_get_clean(); 
}
elseif($to == "韓国語" or $to == "Korean" or $to == "koreanska" or $to == "한국") 
{
ob_start();
passthru("/home/bitnami/.pyenv/shims/python /home/bitnami/htdocs/WordTrans/python/to_korean_translation.py $str");
$output = ob_get_clean(); 
}


?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Word Translation Result</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="../css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0"></h1>
          <h2 class="masthead-subheading mb-0"><?php echo $output; ?></h2>


<?php
if ($_POST['Ja_lang_hide'] == "Ja_lang_hide")
{
echo '<a href="./../html/word_trans.html" class="btn btn-primary btn-xl rounded-pill mt-5">戻る</a>';
}

if ($_POST['En_lang_hide'] == "En_lang_hide") 
{
echo '<a href="./../html/word_trans_en.html" class="btn btn-primary btn-xl rounded-pill mt-5">Back</a>';
}
?>

        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){

    $(".jp_p_class").click(function()
    {

    // alert(   $(this).attr('id')   );
    var synthes = new SpeechSynthesisUtterance($(this).attr('id'));
    synthes.lang = "ja-JP"
    speechSynthesis.speak( synthes );


    });

    $(".en_p_class").click(function(){

     speechSynthesis.speak(new SpeechSynthesisUtterance($(this).attr('id')));

    });

});

</script>
  </body>

</html>
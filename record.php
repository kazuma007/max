<?php
  $set = $_POST['set'];
  $rep = $_POST['rep'];
  $volume = $_POST['volume'];
  $total_volume = $set * $rep * $volume;

  if ($set == '') {
    $set_result = 'セット数が入力されていません。';
  } else {
    $set_result = $set;
  }
  // メールアドレス
  if ($rep == '') {
    $rep_result = 'レップ数が入力されていません。';
  } else {
    $rep_result = $rep;
  }
  // お問い合わせ内容
  if ($volume == '') {
    $volume_result = 'お問い合わせ内容が入力されていません。';
  } else {
    $volume_result = $volume;
  }

  if ($rep == '' || $volume == '') {
    $max_range = 'セット数、重量どちらも入力してください';
  } else {
    $total_volume_result = $total_volume;
  }

  $max_calculator1 = $volume * $rep / 40 + $volume;
  $max_calculator2 = $volume * $rep * 0.03333 + $volume;
  $max_range


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MAX CALCULATOR</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/form.css" rel="stylesheet">
    <link href="assets/css/timeline.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--
      designフォルダ内では2つパスの位置を戻ってからcssにアクセスしていることに注意！
     -->

  </head>
  <body class="boxed">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><span class="strong-title"><i class="fa fa-thumbs-up"></i> MAX CALCULATOR</span></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>
    <div id="fh5co-intro" class="fh5co-section">
      <div class="container">
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 col-md-offset-2 text-center ts-intro">
            <h1>あなたのマックス値</h1>
            <h2><?php echo $max_calculator1.'kg' ?>〜<?php echo $max_calculator2.'kg' ?></h2>
          </div>
        </div>
        <div class="row row-bottom-padded-sm">
          <div class="col-md-6">
            <div class="fh5co-service text-center">
              <h2>計算式①</h2>
              <p>(MAX＝重量×回数÷40＋重量)</p>
              <h3>MAX: <?php echo $max_calculator1.'kg'; ?></h3><br>
              <p>計算式①を参考にしたRM換算早見表</p>
                <table class="table table-striped table-condensed">
                    <tbody>
                      <!-- 登録内容を表示 -->
                      <tr>
                        <td><div class="text-center">レップ数</div></td>
                        <td><div class="text-center">重量</div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">1</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">2</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.95 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">3</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.93 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">4</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.90 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">5</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.87 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">6</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.85 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">7</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.83 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">8</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.80 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">9</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.77 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">10</div></td>
                        <td><div class="text-center"><?php echo $max_calculator1 * 0.75 ?></div></td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <div class="col-md-6">
            <div class="fh5co-service text-center">
              <h2>計算式②</h2>
              <p>(MAX＝重量×回数×0.0333＋重量)</p>
              <h3>MAX: <?php echo $max_calculator2.'kg'; ?></h3><br>
              <p>計算式②を参考にしたRM換算早見表</p>
                <table class="table table-striped table-condensed">
                    <tbody>
                      <!-- 登録内容を表示 -->
                      <tr>
                        <td><div class="text-center">レップ数</div></td>
                        <td><div class="text-center">重量</div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">1</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">2</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.95 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">3</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.93 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">4</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.90 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">5</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.87 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">6</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.85 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">7</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.83 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">8</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.80 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">9</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.77 ?></div></td>
                      </tr>
                      <tr>
                        <td><div class="text-center">10</div></td>
                        <td><div class="text-center"><?php echo $max_calculator2 * 0.75 ?></div></td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../assets/js/jquery-3.1.1.js"></script>
    <script src="../../assets/js/jquery-migrate-1.4.1.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
  </body>
</html>

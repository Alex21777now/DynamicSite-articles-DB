<!DOCTYPE html>
<html>

<head>
   <?php
     require_once "functions/functions.php";
     $title = "Новости обо всем";
	 require_once "blocks/head.php";
	 $news = getNews (3, $id);
   ?>

</head>
<body>
    <?php require_once "blocks/header.php" ?>
   
   <div id="wrapper">
      <div id="leftCol">
	  
	  <?php
	    for ($i = 0; $i < count($news); $i++) {
			if($i == 0)
				echo "<div id=\"bigArticle\">";
			else
				echo "<div class=\"article\">";
			echo '<img src="/img/articles/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
			  <h2>'.$news[$i]["title"].'</h2>
			  <p>'.$news[$i]["intro_text"].'</p>
			  <a href="/article.php?id='.$news[$i]["id"].'">
			    <div class="more">Далее</div>
			  </a>
		  </div>';
		   if($i == 0)
			   echo "<div class=\"clear\"><br></div>";
			}
	  ?>
	  
	  <!--
	       <div id="bigArticle">
		      <img src="/img/articles/1.jpg" alt="Статья 1" title="Статья 1">
			  <h2>Статья 1</h2>
			  <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не
			  совсем так. Его корни уходят в один фрагмент классической латыни 45 года
			  н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни
			  из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem
			  Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате
			  он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus
			  Bonorum et Malorum" ("О пределах добра и зла"), написанной Цицероном в 45 году н.э. Этот трактат
			  по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, "Lorem ipsum
			  dolor sit amet..", происходит от одной из строк в разделе 1.10.32</p>
			  <a href="/article.php">
			    <div class="more">Далее</div>
			  </a>
		  </div>
		  <div class="clear"><br></div>
		  <div class="article">
		       <img src="/img/articles/2.jpg" alt="Статья 1" title="Статья 1">
			  <h2>Статья 1</h2>
			  <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не
			  совсем так. Его корни уходят в один фрагмент классической латыни 45 года
			  н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни
			  из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem
			  Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате
			  он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги</p>
			  <a href="/article.php">
			    <div class="more">Далее</div>
			  </a>
		  </div>
		  <div class="article">
		       <img src="/img/articles/3.jpg" alt="Статья 1" title="Статья 1">
			  <h2>Статья 1</h2>
			  <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не
			  совсем так. Его корни уходят в один фрагмент классической латыни 45 года
			  н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни
			  из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem
			  Ipsum, "consectetur", и занялся его поисками в классической латинской литературе. В результате
			  он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги</p>
			  <a href="/article.php">
			    <div class="more">Далее</div>
			  </a>
		  </div> 
		  -->
	  </div>
      <?php require_once "blocks/rightCol.php" ?> 	  
   </div>
   
   <?php require_once "blocks/footer.php" ?>

</body>

</html>
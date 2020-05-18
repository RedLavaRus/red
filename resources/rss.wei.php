<?php
// Локаль.
setlocale(LC_ALL, 'ru_RU');
date_default_timezone_set('Europe/Moscow');
 
$url = 'http://adj';
 
$out = '<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:yandex="http://news.yandex.ru" 
	 xmlns:media="http://search.yahoo.com/mrss/" 
	 xmlns:turbo="http://turbo.yandex.ru" 
	 version="2.0">
	<channel>
		<title>Майнкрафт сервера проекта </title>
		<link>' . $url . '</link>
		<description>Игровой мир маинкрафт - </description>
		<language>ru</language>
		<turbo:analytics id="КОД_ЯНДЕКС_МЕТРИКИ" type="Yandex" params=""></turbo:analytics>';
 
		
		$sth = DB::pdo()->prepare("SELECT `h1`, `text` FROM `urlArg`");
		$sth->execute();
		$articles = $sth->fetchAll(PDO::FETCH_ASSOC);	
 
		foreach ($articles as $row) {
			$text = $row['text'];
			$links='';//сгенерировать линк
			// Удаление лишних тегов.
			$text = strip_tags($text, '<p><img><iframe><br><ul><ol><li><b><strong><i><em><sup><sub><ins><del><small><big><pre></pre><abbr><u><a>'); 
 
			// Замена относительных ссылок.
			//$text = str_replace('src="/', 'src="' . $url . '/', $text); 
			//$text = str_replace('href="/', 'href="' . $url . '/', $text); 
 
			$out .= '
			<item turbo="true">		
				<link>' . $url . $links.'</link>
				<turbo:content>
					<![CDATA[
						<header>
							<h1>' . $row['h1'] . '</h1>
							<menu>
								<a href="' . $url . '/">Главная</a>
								<a href="' . $url . '/shop/">Магазин</a>
								<a href="' . $url . '/servers/">Сервера</a>
								<a href="' . $url . '/trade/">Рынок</a>
								<a href="' . $url . '/banlist/">Каталог страниц</a>
							</menu>
						</header>
						' . $text . '
					]]>
				</turbo:content>			
			</item>';	
		}
	
		$out .= '
	</channel>
</rss>';
 
header('Content-Type: text/xml; charset=utf-8');
echo $out;
<?IncludeTemplateLangFile(__FILE__);?>
			</div>
            <!-- // Content -->
            </div>

              <!-- Footer -->

            <footer>
            

                <!-- Bottom Block -->
                <div class="clear:both;"></div>
                	<?if (CSite::InDir(SITE_DIR.'index.php')) {?>
                		<div class="main_news_out">
	                	
	                		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/news.php"), false);?>
	                	</div>
	                <?} 
						else {?>
					<?}?>
					
					<div style="clear:both;"></div>
				<div class="brick_wall_out">
					<div class="brick_wall">
		                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/payment_post_bricks.php"), false);?>
					</div>	
				</div>
				<div style="clear:both;"></div>

				<div  class="bottom-block-1">
				  <div  class="bottom-block-1_1">

				  

						<div style=" float:left; padding:10px;">
							<h2> Мега.онлайн</h2>
							<h4>Как с нами связаться:</h4>
							 <h4>8 (351) 751 09 19</h4>
							<h4>Челябинск, пр. Комсомольский 7</h4>
							<h4>sale@mirmega.ru</h4>
							<h4>Работаем пн — пт с 9 до 19, сб с 9 до 14</h4>
							<hr>
							</div>
							
						<div id="fb-root">
						</div>

				<div style="float:right; width:640px;">
					<div style="float:right; padding:10px;">
						<h4> <a href="http://xn--80aff1a.xn--80asehdb/e-store/">О магазине</a></h4>
							<h4> <a href="http://xn--80aff1a.xn--80asehdb/contacts/">Контакты</a></h4>
						
					</div>

				</div>
						<div style="clear:both">
						</div>
						<br>

					</div>
				</div>


				 <div class="bottom-block">
					<div class="brd">



						<div class="clear"></div>
					</div>
                </div>
                <!-- // Bottom Block -->


            </footer>
            <!-- // Footer -->
        
					<div class="copyright">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?>
					<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter28686586 = new Ya.Metrika({id:28686586,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28686586" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
					</div>
					
        <div class="overlay">
        </div>
			<a href="#x" class="overlay1" id="feedback"></a> 
			    <div class="popup1"> 
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.feedback", 
						"mega_main_feedback", 
						array(
							"COMPONENT_TEMPLATE" => "mega_main_feedback",
							"EMAIL_TO" => "andreyjktl@gmail.com",
							"EVENT_MESSAGE_ID" => array(
								0 => "7",
							),
							"OK_TEXT" => "Спасибо, ваше сообщение принято.",
							"REQUIRED_FIELDS" => array(
								0 => "NONE",
							),
							"USE_CAPTCHA" => "N"
						),
						false
					);?>
					<a class="close" title="Закрыть" href="#close"></a> 
				</div>


    </body>
</html>
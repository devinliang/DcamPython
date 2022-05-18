<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

			<h2>Selenium</h2>
			<p>Selenium 套件可以使用於自動化測試，模擬使用者的動作，進行登入後爬取資料或滾動卷軸，並且能夠執行JavaScript程式碼。對於開發網頁爬蟲來說，就可以結合 Selenium 套件的特點，讓網頁動態載入資料後，再利用BeautifulSoup套件方法，將所需的資料爬取下來。</p>

			<h3>WebDriver</h3>
			<p>Selenium 需要透過特殊的 WebDriver 才能跟瀏覽器溝通，進行各種控制，而不同的瀏覽器所對應的 WebDriver 也不同，以下是各種瀏覽器的 WebDriver 名稱：</p>
			
			<table class="table">
				<thead>
					<tr>
						<td>瀏覽器</td>
						<td>WebDriver</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Chrome</td>
						<td>ChromeDriver</td>
					</tr>
					<tr>
						<td>Edge</td>
						<td>Microsoft WebDriver</td>
					</tr>
					<tr>
						<td>Firefox</td>
						<td>geckodriver</td>
					</tr>
					<tr>
						<td>Safari</td>
						<td>WebDriver Support in Safari 10</td>
					</tr>
				</tbody>
			</table>

			<p>請依照想要控制的瀏覽器，下載對應的 WebDriver 程式，同時請注意瀏覽器與 WebDriver 的版本，如果兩者的版本不同，是不能用的。</p>
			<p>下載的瀏覽器 WebDriver 不需要安裝，但要跟使用 Selenium 的 Python 程式（*.py）放在一起執行，</p>
			<h4>開啟 Firefox 瀏覽器</h4>
			<pre data-enlighter-language="python">
from selenium import webdriver

driverPath = r"D:\downloads\webdriver\geckodriver.exe"
browser = webdriver.Firefox(executable_path=driverPath)
print(type(browser))
</pre>
			<h4>開啟 Chrome 瀏覽器</h4>
			<pre data-enlighter-language="python">
from selenium import webdriver

driverPath = r"D:\downloads\webdriver\chromedriver.exe"
browser = webdriver.Chrome(driverPath)
print(type(browser))
</pre>
			<h3>擷取網頁</h3>
			<pre data-enlighter-language="python">
url = "https://tw.yahoo.com"
browser.get(url)
</pre>

			<h3>擷取網頁元件</h3>
			<p>Selenium 函式有八種方法擷取網頁的元件，其中每一種方法有兩種寫法，然後再分為只擷取第一個項目和擷取所有項目</p>
			<table class="table">
				<thead>
					<tr>
						<td>順序</td>
						<td>類型</td>
						<td>方法</td>
						<td>用途</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="4">1</td>
						<td rowspan="4">ID = id</td>
						<td nowrap>find_element_by_id("id")</td>
						<td>擷取符合 id 的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_id("id")</td>
						<td>擷取符合 id 的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.ID, "id")</td>
						<td>擷取符合 id 的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.ID, "id")</td>
						<td>擷取符合 id 的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">2</td>
						<td rowspan="4" nowrap>CLASS_NAME = class_name</td>
						<td nowrap>find_element_by_class_name("class_name)</td>
						<td>擷取符合 class 屬性第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_class_name("class_name")</td>
						<td>擷取符合 class 屬性的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.CLASS_NAME, "id")</td>
						<td>擷取符合 class 屬性的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.CLASS_NAME, "id")</td>
						<td>擷取符合 class 屬性的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">3</td>
						<td rowspan="4" nowrap>NAME = name</td>
						<td nowrap>find_element_by_name("name")</td>
						<td>擷取符合 name 屬性的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_name("name")</td>
						<td>擷取符合 name 屬性的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.NAME, "name")</td>
						<td>擷取符合 name 屬性的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.NAME, "name")</td>
						<td>擷取符合 name 屬性的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">4</td>
						<td rowspan="4" nowrap>LINK_TEXT = link_text</td>
						<td nowrap>find_element_by_link_text("text")</td>
						<td>擷取符合超連結文字的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_link_text("text")</td>
						<td>擷取符合超連結文字的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.LINK_TEXT, "text")</td>
						<td>擷取符合超連結文字的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.LINK_TEXT, "text")</td>
						<td>擷取符合超連結文字的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">5</td>
						<td rowspan="4" nowrap>PARTIAL_LINK_TEXT = partial_link_text</td>
						<td nowrap>find_element_by_partial_link_text("text")</td>
						<td>擷取符合&quot;部份超連結文字&quot;的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_partial_link_text("text")</td>
						<td>擷取符合&quot;部份超連結文字&quot;的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.PARTIAL_LINK_TEXT, "text")</td>
						<td>擷取符合&quot;部份超連結文字&quot;的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.PARTIAL_LINK_TEXT, "text")</td>
						<td>擷取符合&quot;部份超連結文字&quot;的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">6</td>
						<td rowspan="4" nowrap>TAG_NAME = tag_name</td>
						<td nowrap>find_element_by_tag_name("tag")</td>
						<td>擷取符合 HTML標籤 的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_tag_name("tag")</td>
						<td>擷取符合 HTML標籤 的所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.TAG_NAME, "tag")</td>
						<td>擷取符合 HTML標籤 的第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.TAG_NAME, "tag")</td>
						<td>擷取符合 HTML標籤 的所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">7</td>
						<td rowspan="4" nowrap>XPATH = xpath</td>
						<td nowrap>find_element_by_xpath("xpath")</td>
						<td>依照 Xpath 擷取第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_xpath("xpath")</td>
						<td>依照 Xpath 擷取所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.XPATH, "xpath")</td>
						<td>依照 Xpath 擷取第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.XPATH, "xpath")</td>
						<td>依照 Xpath 擷取所有項目</td>
					</tr>

					<tr>
						<td rowspan="4">8</td>
						<td rowspan="4" nowrap>CSS_SELECTOR = css_selector</td>
						<td nowrap>find_element_by_css_selector("css_rule")</td>
						<td>依照 css selector 擷取第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements_by_css_selector("css_rule")</td>
						<td>依照 css selector 擷取所有項目</td>
					</tr>
					<tr>
						<td nowrap>find_element(By.CSS_SELECTOR, "css_rule")</td>
						<td>依照 css selector 擷取第一個項目</td>
					</tr>
					<tr>
						<td nowrap>find_elements(By.CSS_SELECTOR, "css_rule")</td>
						<td>依照 css selector 擷取所有項目</td>
					</tr>
				</tbody>
			</table>
			<p>參考：<a href="https://selenium-python.readthedocs.io/locating-elements.html">Selenium Python - Locating Elements</a> </p>
			<h3>關閉瀏覽器</h3>
			<pre data-enlighter-language="python">
from selenium import webdriver
option = webdriver.ChromeOptions()

# 使用以下方法執行時，瀏覽器不會開啟
option.add_argument("headless")
browser = webdriver.Chrome(options=option)

# 使用以下方法執行時，瀏覽器會開啟
# driver = webdriver.Chrome()

browser.get("https://tw.yahoo.com")
print(browser.title)
browser.find_element_by_id("kw").send_keys("selenium")
browser.find_element_by_id("su").click()
print(browser.title)
browser.quit()
			</pre>


		<h2>參考資料</h2>
			<ul>
				<li>Selenium - <a href="https://www.selenium.dev">Selenium automates browsers</a></li>
				<li>Selenium with Python - <a href="https://selenium-python.readthedocs.io">Selenium with Python</a></li>
			</ul>


		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>
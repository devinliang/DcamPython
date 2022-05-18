<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>網路爬蟲</h2>
			<p>網路爬蟲(web
				crawler)意思是指透過程式擷取網路上的資料，網路資料通常可以透過輸入網址，瀏覽頁面後獲得，將這樣的過程自動化，透過程式自動執行，由程式自動尋找網址，再由網址連結網站，取得網頁資料。這種方式透過網路連線到處遊走，尋找資料，因此網路爬蟲程式又被稱為網路蜘蛛(spider)或網路機器人。
			</p>
			<p>一般的靜態網頁可以透過網址直接取得頁面內容，再針對內容解析萃取，找出所需要的資料。若是動態網頁，通常必須找出表單欄位，提供欄位內容後，再送出產生資訊頁面內容，再擷取資料。因此網路爬蟲必須了解網站的運作方式，網頁的產生方法，以及網頁內容的標籤語法，才能順利自動擷取到所需的資訊。
			</p>
			<p>以下介紹一些 Python 相關的第三方套件。</p>

			<h3>Webbrowser</h3>
			<p>Webbrowser 模組提供 open() 方法，可以透過程式開啟預設瀏覽器，並顯示指定頁面。</p>
			<pre>
import webbrowser
url = "https://tw.yahoo.com/"
webbrowser.open(url);
		</pre>
			<p>參考：<a href="https://docs.python.org/3/library/webbrowser.html"> Convenient web-browser controller</a></p>

			<h3>Requests</h3>
			<p>Requests 模組可以將指定網址的網頁資料讀取回來，並提供回應狀態。</p>
			<pre>
import requests
url = "https://tw.yahoo.com"
html = requests.get(url)
print(type(html))

# 執行結果
# &lt;class 'requests.models.Response'&gt;

if (html.status_code == requests.codes.ok):
    print(f"取得資料, 大小為 {len(html.text)} ")
else:
    print("無法取得網頁資料: {url=}")
		</pre>
			<p>回傳的資料型態為 Responsive 物件，並提供 status_code 與 text。</p>
			<p>參考：<a href="https://docs.python-requests.org/en/latest/user/quickstart/">how to get started with
					Requests</a>、<a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes">List of HTTP status
					codes</a></p>


			<p class="item">偽裝瀏覽器</p>
			<p>有些網站會阻擋機器人程式擷取資料，requests 可以偽裝成瀏覽器連結網站。以下範例為偽裝成 Firefox 瀏覽器：</p>
			<pre>
import requests

url = "https://tw.yahoo.com"

headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:77.0) Gecko/20100101 Firefox/77.0'}

html = requests.get(url, headers=headers)
print(html.status_code)
		</pre>
			<p>瀏覽器的 User-Agent strings 可以由此取得：<a href="http://www.useragentstring.com/pages/useragentstring.php">
					http://www.useragentstring.com/pages/useragentstring.php</a></p>

			<h3>Beautiful Soup</h3>
			<p>Beautiful Soup 的功能是解析 html 文件，並從中取出內容。</p>
			<h4>解析文件</h4>
			<pre>
import requests
from bs4 import BeautifulSoup

url = "https://tw.yahoo.com"
html = requests.get(url)

soup = BeautifulSoup(html.text, 'html.parser')
soup.encoding = 'utf-8'
print(soup.prettify())
			</pre>
			<table class="table">
				<thead>
					<tr>
						<td>語法</td>
						<td>說明</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td nowrap>soup.title</td>
						<td>取得網頁 title 標籤<br />&lt;title&gt;Hello Title&lt;/title&gt;</td>
					</tr>
					<tr>
						<td nowrap>soup.title.name</td>
						<td>取得網頁標籤的名稱<br />title</td>
					</tr>
					<tr>
						<td nowrap>soup.title.string</td>
						<td>取得網頁標籤的文字<br />Hello Title</td>
					</tr>
					<tr>
						<td nowrap>soup.title.parent.name</td>
						<td>取得 title 網籤的上層標籤名稱<br />Hello Title</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all('a')</td>
						<td>找出所有特定的 HTML 標籤節點</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all(['a','b'])</td>
						<td>同時搜尋多種 HTML 標籤，可用 list 列出</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all(['a','b'], <span class="keyitem">limit=2</span>)</td>
						<td>限制搜尋節點數量</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all(['a','b'], <span class="keyitem">recursive=False</span>)</td>
						<td>預設會以遞迴方式尋找所有節點，若只找第一層的節點，可以加上 recursive=False 設定。</td>
					</tr>
					<tr>
						<td nowrap>soup.find('a') <br />soup.a</td>
						<td>取得符合條件的第一個節點</td>
					</tr>
					<tr>
						<td nowrap>a_tag.get('href') 或 a_tag["href"] <br />img_tag.get('src') 或 img_tag['src']</td>
						<td>找出標籤節點的屬性</td>
					</tr>
				</tbody>
			</table>
			<h4>以標籤屬性搜尋</h4>
			<table class="table">
				<thead>
					<tr>
						<td>語法</td>
						<td>說明</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td nowrap>soup.find(id='link2')</td>
						<td>取得 id 為 link2 的標籤</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all('a', href="/link1")</td>
						<td>取得標籤a, 它的 href 屬性為 /link1 的節點。以標籤名稱與屬性進行更精確的搜尋</td>
					</tr>
					<tr>
						<td nowrap>soup.find_all(data-foo="value") (X)<br /> soup.find_all(attrs={"data-foo":"value"})
						</td>
						<td>有些特殊屬性，直接以屬性名稱會有問題，可以把名稱和值放到字典元件，再指定 attrs 參數。</td>
					</tr>
				</tbody>
			</table>

			<h4>以 CSS 搜尋</h4>
			<p>由於 class 是 python 的保留字，因此 BeautifulSoup 改用 class_ 代表標籤節點的 class 屬性。</p>
			<p>一個 HTML 標籤，可能同時有多個 CSS 的 class 屬性值，在以 class_ 比對時，只要其中一個 class 符合就算比對成功。但如果多個 class 名稱排列順序不同時，會找不到。此時可改用
				select 選擇器篩選。</p>

			<table class="table">
				<thead>
					<tr>
						<td>語法</td>
						<td>說明</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td nowrap>soup.find_all("b", class_="boldtext")</td>
						<td>取得 class 為 boldtext 的 b 節點</td>
					</tr>
					<tr>
						<td nowrap>soup.select("p.strkeout.body")</td>
						<td>使用 CSS 選擇器找出節點</td>
					</tr>
				</tbody>
			</table>

			<h4>以文字內容搜尋</h4>
			<p>若要依據文字內容來搜尋特定的節點，可以使用 find_all 配合 string 參數。</p>

			<h3>取得統一發票中獎號碼</h3>
			<pre data-enlighter-language="python">
import requests
from bs4 import BeautifulSoup

url = "https://invoice.etax.nat.gov.tw"
html = requests.get(url)
html.encoding = 'utf-8'

soup = BeautifulSoup(html.text, 'html.parser')
nums = soup.find_all("p", class_="etw-tbiggest")

# for n in nums:
#    print(n.text)

print("本期統一發票得獎號碼：")
print("特別獎：", nums[0].text)
print("特獎：", nums[1].text)
print("頭獎：", nums[2].text.strip(), nums[3].text.strip(), nums[4].text.strip())
</pre>


			<h3>取得中央社即時新聞</h3>
			<pre data-enlighter-language="python">
import requests
from bs4 import BeautifulSoup

url = "https://www.cna.com.tw/list/aall.aspx"
html = requests.get(url)
html.encoding ='uft-8'

soup = BeautifulSoup(html.text, 'html.parser')

all = soup.find(id='jsMainList').find_all('li')

for i in all[:10]:
	# 項目內容
    # print(i)

	# 標題文字
    mtext = i.find('h2').text

	# 日期時間
    mdate = i.find('div',class_='date').text

	# 新聞連結
    mlink = i.find('a').get('href')

	# 新聞照片
    mimg=""
    if (i.find('img')):
        mimg=i.find('img').get('src')

    print(mdate,'\n', mtext,'\n', mlink,'\n',  mimg, '\n', )
</pre>
			<h2>參考資料</h2>
			<ul>
				<li><a href="https://www.crummy.com/software/BeautifulSoup/bs4/doc/">Beautiful Soup
						Documentation</a></a></li>
				<li><a
						href="https://blog.gtwang.org/programming/python-beautiful-soup-module-scrape-web-pages-tutorial/">Python
						使用 Beautiful Soup 抓取與解析網頁資料，開發網路爬蟲教學</a></li>
			</ul>

		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>
<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
	<div id="main">
		<h2>套件 package</h2>

		<h3>什麼是套件</h3>
		<p>將功能相關的模組集合在一個資料夾之下，即可成為套件。在 python 3.3 以前的版本，必須再加上 __init__.py 這個檔案。</p>
		<p>模組本身是一個檔案，套件則是一個資料夾。__init__.py 這個檔案是套件被匯入的時候，自動執行的程式。套件的資料夾裡面，除了存放功能相關的模組檔案，和 __init__.py 之外，也可以再建立子資料夾，存放子套件。</p>

		<p>例如，若有已經寫好了一組各種處理圖形檔案的模組，每個模組裡面均有load(),save()函式，這些模組像是 Bmp.py, Jpeg.py, Png.py, Tiff.py，若將之集合在一個叫做 Graphics 套件中，如此檔案結構則可以用以下方式存放：</p>
		<pre>
Graphics
└── __init__.py
└── Bmp.py
└── Jpeg.py
└── Png.py
└── Tiff.py
		</pre>

		<p>當程式需要使用套件裡面的模組時，可以用 套件名稱.模組名稱 來滙入套件裡面的模組，例如:</p>
		<pre data-enlighter-language="python">
import Graphics.Bmp
img = Graphics.Bmp.load("pic.bmp")
		</pre>

		<p>或是</p>
		<pre data-enlighter-language="python">
import Graphics.Jpen as Jpeg
img = Jpeg.load("pic.jpeg")
		</pre>

		<p>或是</p>
		<pre data-enlighter-language="python">
from Graphics import Png
img = Png.load("pic.png")
		</pre>

		<p>或是</p>
		<pre data-enlighter-language="python">
from Graphics import Tiff as picture
img = picture.load("pic.tiff")
		</pre>

		<p>若要一次匯入所有模組，可以在 __init__.py 檔案裡面，設定一個特別變數 __all__。例如:</p>
		<pre data-enlighter-language="python">
__all__ = ["Bmp", "Jpeg", "Png", "Tiff"]
		</pre>

		<p>設定之後即可以使用以下語法：</p>
		<pre data-enlighter-language="python">
from Graphics import *
img = Bmp.load("pic.bmp")
		</pre>
		<p>from package import * 將會匯入所有在 __all__ 裡面所指名的模組。同理若要使用 from module import * 時，設定被匯入的函式，也可以在模組檔案內，新增一個 __all__ 變數，列出要被匯入的函式。此時，若未被列入到 __all__ 變數裡面的項目，將不會被匯入。</p>

		<h3>套件內的套件</h3>
		<p>Python 可以在套件內再建立子套件，使用任何深度的子資料夾。例如:</p>
		<pre data-enlighter-language="python">
Graphics
└── __init__.py
└── Bmp.py
└── Jpeg.py
└── Png.py
└── Tiff.py
└── Vector/
    └── __init__.py
	└── Eps.py
	└── Svg.py
		</pre>
		<p>取用子套件的方法,可以用資料夾的路徑名稱，例如:</p>
		<pre data-enlighter-language="python">
import Graphics.Vector.Eps
img = Graphics.Vector.Eps.load("pic.eps")
		</pre>
		<p>或是:</p>
		<pre data-enlighter-language="python">
import Graphics.Vector.Svg as Svg
img = Svg.load("pic.svg")
		</pre>
		<p>參考資料：<a href="https://june.monster/python-101-module-and-package/" target="_blank">Python 101 基礎教學 (9) - 模組 module 與套件 package</a></p>

		<h2>第三方套件</h2>
		<p>Python 之所以功能強大，並使用到許多領域，最主要原因就是有功能齊全的第三方套件。所謂的第三方套件就是許多的程式開發者，將各種領域的應用程式撰寫好，以套件的方式存放，放到公共分享的空間，提供給所有應用程式開發者使用。</p>
		<p>這個公共分享集中地就是PyPI(Python Package Index)，網址為 <a href="https://pypi.org " target="_blank">https://pypi.org </a>，目前已收集超過30萬個第三方套件，並持續在擴充之中。在網站上可以透過查詢功能，找到各種應用的套件。</p>

		<h3>管理套件 pip</h3>

		<p> 要使用 PyPI 上面的第三方套件，最通用的方法是透過 pip 程式來安裝、升級和移除套件。pip 預設會從 Python Package Index(<a href="https://pypi.org " target="_blank">https://pypi.org </a>)安裝套件。</p>
		<p>pip 是 Python 的套件管理工具，它集合下載、安裝、升級、管理、移除套件等功能，藉由統一的管理，可以事半功倍，更重要的是，避免手動執行上述任務會發生的種種錯誤。</p>

		<ul>
			<li>查看 pip 版本： pip -V / pip --version</li>
			<li>查看已安裝套件： pip list / pip freeze</li>
			<li>查看可更新套件： pip list --outdated</li>
			<li>安裝套件： pip install package-name</li>
			<li>更新套件： pip install -U package-name / pip install --upgrade package_name</li>
			<li>移除套件： pip uninstall package-name</li>
			<li>查看套件資訊： pip show package-name</li>
			<li>查看套件檔案： pip show --files package-name</li>
			<li>搜尋套件： pip search package-name</li>
		</ul>

		<h3>管理套件 conda</h3>
		<p><a href="https://www.anaconda.com" target="_blank">Anaconda</a>是目前廣受歡迎的 Python 安裝和套件管理平台，尤其是在數據科學(Data Science)的應用，並且適用於Windows、Linux和MacOS 不同作業系統環境。Anaconda預設安裝超過 250 個常用套件(package)和虛擬環境管理器，使用在安裝、執行及升級複雜的數據科學(Data Science)及機器學習(Machine Learning)環境上變得簡單快速。</p>

		<b>Anaconda套件管理</b>
		<ul>
			<li>查看 conda 版本： conda -V/--version</li>
			<li>查看目前環境： conda info</li>
			<li>升級 conda 版本： conda update conda</li>
			<li>查看已安裝的套件： conda list / conda list package-name</li>
			<li>安裝套件： conda install package-name</li>
			<li>更新套件： conda update/upgrade package-name</li>
			<li>移除套件： conda remove/uninstall package-name</li>
			<li>查看可安裝套件： conda search package-name</li>
		</ul>

		<b>Anaconda虛擬環境管理</b>
		<ul>
			<li>查看環境列表： conda env list</li>
			<li>建立虛擬環境： conda create --name ENV_Name</li>
			<li>移除虛擬環境： conda remove --name ENV_Name --all</li>
			<li>切換指定環境： conda activate ENV_Name</li>
			<li>回到base環境： conda deactivate</li>
			<li>匯出環境： conda env export --name ENVIRONMENT --file ENVIRONMENT.yml</li>
			<li>匯入環境： conda env create --name ENVIRONMENT --file ENVIRONMENT.yml </li>
		</ul>

		<h2>常用套件</h2>
		<table class="table">
			<thead>
				<tr><td>用途</td><td>套件名稱</td><td>說明</td></tr>
			</thead>
				<tr>
					<td>網站框架</td>
					<td>Django</td>
					<td>完整而強大的網站框架</td>
				</tr>
				<tr>
					<td>網站框架</td>
					<td>Flask</td>
					<td>輕量型的網站框架</td>
				</tr>
				<tr>
					<td>科學計算</td>
					<td>Numpy</td>
					<td>支援非常多的科學計算，包含矩陣運算、線性代數、傅立葉轉換等。可說是集大成者，大多數科學計算套件皆有使用</td>
				</tr>
				<tr>
					<td>科學計算</td>
					<td>pandas</td>
					<td>提供特殊資料結構，具有數據處理和資料分析的功能</td>
				</tr>
				<tr>
					<td>科學計算</td>
					<td>scikit-learn</td>
					<td>機器學習的套件，包含內建的分群分類計算、回歸、統計等功能</td>
				</tr>
				<tr>
					<td>圖表繪製</td>
					<td>Matplotlib</td>
					<td>可以畫出各種圖型如長條圖、分佈圖、立體圖等</td>
				</tr>
				<tr>
					<td>二維條碼</td>
					<td>PyQRCode</td>
					<td>建立二維條碼的圖片</td>
				</tr>
			<tbody>

			</tbody>
		</table>




		<h2>參考網站</h2>
		<ul>
			<li>PyPI - The Python Package Index <a href="https://pypi.org" target="_blank">https://pypi.org</a></li>
			<li>anaconda - <a href="https://www.anaconda.com/" target="_blank">https://www.anaconda.com/</a></li>
		</ul>

	</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>
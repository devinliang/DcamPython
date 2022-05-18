<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
	<div id="main">
		<h2>Matplotlib</h2>
		<p>Matplotlib 是 Python 用來呈現資料圖表的的一個套件，功能龐力，其中 pyplot 子模組透過易設定產生數據化的圖表。</p>

		<p>使用 pyplot 建立圖表可以分為四步驟：</p>
		<ol>
			<li>匯入套件：import matplotlib.pyplot as plt</li>
			<li>將數據資料設定給plt</li>
			<li>調整顯示參數</li>
			<li>顯示圖表：plt.show()</li>
		</ol>

		<h3>折線圖</h3>
		<p>繪製折線圖的函式為 plot，以下為基本實例：</p>
		<p>1.折線圖基本實例</p>
		<pre data-enlighter-language="python">
# 折線圖實例(1)
import matplotlib.pyplot as plt

data = [15, 18, 29, 35, 12, 25, 22, 60]
plt.plot(data)

plt.show()
		</pre>
		<div>
			<img src="assets/image/plot_01.png" alt="">
		</div>

		<p>2.設定標題：title - 圖表標題， xlabel - x 軸標題， ylabel - y 軸標題</p>
		<pre data-enlighter-language="python">
# 折線圖實例(2)
import matplotlib.pyplot as plt

data = [15, 18, 29, 35, 12, 25, 22, 60]
plt.plot(data)
plt.title("Production Chart")
plt.xlabel("class")
plt.ylabel("number")

plt.show()
</pre>

		<div>
			<img src="assets/image/plot_02.png" alt="">
		</div>

		<p>3.設定座標軸基本刻度: axis([x_start, x_end, y_start, y_end])</p>
		<pre data-enlighter-language="python">
# 折線圖實例(3)
import matplotlib.pyplot as plt

data = [15, 18, 29, 35, 12, 25, 22, 60]
plt.plot(data)
plt.title("Production Chart")
plt.xlabel("class")
plt.ylabel("number")
plt.axis([-1, 8, 0, 100])

plt.show()
</pre>

		<div>
			<img src="assets/image/plot_03.png" alt="">
		</div>


		<p>4.指定 x 軸刻度: 增加list項目到plot</p>
		<pre data-enlighter-language="python">
# 折線圖實例(4)
import matplotlib.pyplot as plt

data = [15, 18, 29, 35, 12, 25]
xlabel = [1,2,3,4,5,6]
plt.plot(xlabel, data)
plt.title("Production Chart")
plt.xlabel("class")
plt.ylabel("number")

plt.show()
</pre>

		<div>
			<img src="assets/image/plot_04.png" alt="">
		</div>


		<p>5. 多組數據資料</p>
		<pre data-enlighter-language="python">
# 折線圖實例(5)
import matplotlib.pyplot as plt

data1 = [15, 18, 29, 35, 12, 25]
data2 = [10, 15, 21, 30, 22, 20]
data3 = [12, 16, 19, 45, 17, 15]
xlabel = [1,2,3,4,5,6]
plt.plot(xlabel, data1, xlabel, data2, xlabel, data3)
plt.title("Production Chart")
plt.xlabel("class")
plt.ylabel("number")

plt.show()
</pre>

		<div>
			<img src="assets/image/plot_05.png" alt="">
		</div>
		<p>以上第8行亦可分寫成三行，結果相同。</p>
		<pre data-enlighter-language="python">
plt.plot(xlabel, data1)
plt.plot(xlabel, data2)
plt.plot(xlabel, data3)
		</pre>


		<h3>長條圖 bar</h3>
		<h3>圓餅圖 </h3>
		<h3>散佈圖 </h3>

		<h2>呈現多個圖表</h2>

		<h2>參考網站</h2>
		<ul>
			<li>python - <a href="https://www.python.org/" target="_blank">https://www.python.org/</a></li>
			<li>anaconda - <a href="https://www.anaconda.com/" target="_blank">https://www.anaconda.com/</a></li>
		</ul>

	</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>
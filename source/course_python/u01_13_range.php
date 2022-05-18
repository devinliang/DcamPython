<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<<div class="container" id="content">
		<div id="main">

			<h2>範圍函式 Range</h2>
			<p>range() 函式可建立一個整數清單，一般用在 for 迴圈中。</p>

			<h3>函式語法</h3>
			<pre data-enlighter-language="python">
range(start, stop[, step])
			</pre>

			<p>參數說明：</p>
			<ul>
				<li>start: 計數從 start 開始。預設是從 0 開始。例如range（5）等同於range（0， 5）</li>
				<li>stop: 計數到 stop 結束，但不包括 stop。例如：range（0， 5） 是[0, 1, 2, 3, 4]沒有5</li>
				<li>step：間隔，預設為1。例如：range（0， 5） 等同於 range(0, 5, 1)</li>
			</ul>

			<h3>實例</h3>
			<pre data-enlighter-language="python">
>>>range(10) 		# 從 0 開始到 10
[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

>>> range(1, 11) 	# 從 1 開始到 11
[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

>>> range(0, 30, 5) 	# 間隔為 5
[0, 5, 10, 15, 20, 25]

>>> range(0, 10, 3) 	# 間隔為 3
[0, 3, 6, 9]

>>> range(0, -10, -1) 	# 負數
[0, -1, -2, -3, -4, -5, -6, -7, -8, -9]

>>> range(0)
[]

>>> range(1, 0)
[]
			</pre>

			<p>對於 range() 函式，有幾個注意點：</p>
			<ol>
				<li>它表示的是左閉右開區間</li>
				<li>它接收的參數必須是整數，可以是負數，但不能是浮點數等其它類型</li>
				<li>它是不可變的序列類型，可以進行判斷元素、查找元素、切片等操作，但不能修改元素</li>
			</ol>

		</div>
		<!--end of main-->
	</div>
	<!--end of content-->
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>
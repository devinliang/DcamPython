<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
        <div id="main">

            <h2>條件敍述</h2>

            <p>Python條件敍述是通過一條或多條敍述的執行結果（True或者False）來決定執行的程式區塊。</p>

            <p>下圖說明條件敍述的執行過程:</p>
            <img src="assets/image/if_else01.svg">

            <p>Python可以指定任何非0和非空（null）值為true，0 或者 null為false。</p>

            <p>Python 程式設計中 if 敍述用於控制程式的執行，基本形式有三種：</p>

            <h3>形式一(if only)</h3>

			<pre data-enlighter-language="python">
if 判斷條件：
    執行敍述…
			</pre>
            <p>說明:形式一只有if, 當判斷條件成立時, 執行敍述才會執行, 否則執行敍述不會執行</p>

            <h3>形式二(if else)</h3>
			<pre data-enlighter-language="python">
if 判斷條件：
    執行敍述…
else：
    執行敍述…
			</pre>
            <p>其中"判斷條件"成立時，則執行後面的敍述，而執行內容可以多行，以縮排來區分表示同一範圍。</p>
            <p>else 不可單獨存在，必須要有 if 才可以有 else，當條件不成立時執行相關敍述。</p>

            <p>具體例子如下：</p>

            <p>實例</p>

            <pre data-enlighter-language="python">
score = 65
if score >= 60 :
    print("成績及格")
else :
    print("成績不及格")
</pre>

			<p>輸出結果為：</p>
			<pre data-enlighter-language="python">
成績及格
			</pre>
            <p>if 敍述的判斷條件可以用&gt;（大於）、&lt;(小於)、==（等於）、&gt;=（大於等於）、&lt;=（小於等於）來表示其關係。</p>

			<b>注意事項：</b>
			<ol>
				<li>判斷條條後面要加上冒號(:)</li>
				<li>程式區塊必須縮排</li>
			</ol>

			<h3>形式三(multiple if)</h3>
            <p>當判斷條件為多個值時，可以使用以下形式：</p>
			<pre data-enlighter-language="python">
if 判斷條件1:
    執行敍述1…
elif 判斷條件2:
    執行敍述2…
elif 判斷條件3:
    執行敍述3…
else:
    執行敍述4…
</pre>
			<p>實例如下：</p>
			<pre data-enlighter-language="python">
#!/usr/bin/python
# -*- coding: UTF-8 -*-
# elif用法
num = 5
if num == 3: 	# 判斷num的值
    print 'boss'
elif num == 2:
    print 'user'
elif num == 1:
	print 'worker'
elif num < 0: 	# 值小於零時輸出
	print 'error'
else:
	print 'roadman' # 以上條件均不成立時輸出
			</pre>

            <p>輸出結果為：</p>
            <pre data-enlighter-language="python">
roadman
			</pre>

            <p>由於 python 並不支持 switch 敍述，所以多個條件判斷，只能用 elif 來實現，如果判斷需要多個條件需同時判斷時，可以使用 or （或），表示兩個條件有一個成立時判斷條件成功；使用 and （與）時，表示只有兩個條件同時成立的情況下，判斷條件才成功。</p>

            <p>實例</p>
            <pre data-enlighter-language="python">
#!/usr/bin/python
# -*- coding: UTF-8 -*-
# 例3：if語句多個條件
num = 9
if num >= 0 and num <= 10: # 判斷值是否在0~10之間
	print 'hello'
# 輸出結果: hello

num = 10
if num < 0 or num > 10: # 判斷值是否在小於0或大於10
	print 'hello'
else:
	print 'undefine'
# 輸出結果: undefine

num = 8 				# 判斷值是否在0~5或者10~15之間
if (num >= 0 and num <= 5) or (num >= 10 and num <= 15):
	print 'hello'
else:
	print 'undefine'
# 輸出結果: undefine
			</pre>

            <p>當if有多個條件時可使用括弧來區分判斷的先後順序，括弧中的判斷優先執行，此外 and 和 or 的優先順序低於&gt;（大於）、&lt;（小於）等判斷符號，即大於和小於在沒有括弧的情況下會比與或要優先判斷。</p>

            <h3>簡單的敍述組合</h3>
            <p>if若是只有一個執行敍述, 可以寫在冒號之後, 同一行的位置，如下實例：</p>

            <pre data-enlighter-language="python">
#!/usr/bin/python
# -*- coding: UTF-8 -*-
var = 100
if ( var == 100 ) : print "變數 var 的值為100"
print "Good bye!"
</pre>

            <p>以上代碼執行輸出結果如下：</p>
            <pre data-enlighter-language="python">
變數 var 的值為100
Good bye!
			</pre>
        </div>
    </div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>
<?php include_once("u01_00_head.html"); ?>
<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">

		<h2>字典 dict</h2>

			<p>字典是另一種可變容器模型，且可存儲任意類型物件。</p>

			<p>字典每個項目使用逗號(,)分割，每個項目由鍵key和值value成對組成，鍵和值用冒號(:)隔開，整個字典包括在花括弧{}中,格式如下所示： </p>

			<pre data-enlighter-language="python">
d = {key1 : value1, key2 : value2}
			</pre>

			<p>鍵的項目不可重複，必須唯一，但值則不必。</p>
			<p>值可以取任何資料類型，但鍵必須是不可變的，如字串，數字或元組。</p>

			<p>一個簡單的字典實例：</p>

			<pre data-enlighter-language="python">
# 水果與價格
fruits = {"蘋果":80, "西瓜":60, "香蕉":75, "水蜜桃":120}

# 國家與首都
capital = {"USA":"Washington DC", "Japan":"Tokyo", "UK":"London", "Taiwan":"Taipei"}
			</pre>

			<h3>列出字典裡的值</h3>

			<p>把相應的鍵放入到方括號中，如下實例:</p>
			<pre data-enlighter-language="python">
print(f"fruits['蘋果'] = {fruits['蘋果']}")
# 執行結果
# fruits['蘋果'] = 80

print(f"capital['Japan'] = {capital['Japan']}")
# 執行結果
# capital['Japan'] = Tokyo

dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
print(f"dict['Name']:{dict['Name']}")
print(f"dict['Year']:{dict['Year']}")
print(f"dict['Class']:{dict['Class']}")

# 執行結果
# dict['Name']:Wenzao
# dict['Year']:100
# dict['Class']:English
			</pre>

			<p>如果用字典裡沒有的鍵，會輸出錯誤如下：</p>
			<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
print(f"dict['Age']:{dict['Age']}")
			</pre>

			<p>以上實例輸出結果：</p>
			<pre data-enlighter-language="python">
KeyError             Traceback (most recent call last)
&lt;ipython-input-14-84a5be166611&gt; in &lt;module&gt;
      1 dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
----> 2 print(f"dict['Age']:{dict['Age']}")

KeyError: 'Age'
			</pre>


			<h3>新增項目與修改項目</h3>
			<p>新增一個字典項目的方法和修改字典項目的方法相同，使用中括號設定鍵值對，如下實例:</p>

			<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}

# 更新項目
dict['Year'] = 200

# 增加項目
dict['Depart'] = "文藻數位"

print(f"dict['Year']:{dict['Year']} ")
# 執行結果
# dict['Year']:200

print(f"dict['Depart']:{dict['Depart']}")
# 執行結果
# dict['Depart']:文藻數位
			</pre>

			<p>另一個實例：</p>
			<pre data-enlighter-language="python">
# 水果與價格
fruits = {"蘋果":80, "西瓜":60, "香蕉":75, "水蜜桃":120}

# 更新項目
fruits["蘋果"] = 120

# 增加項目
fruits["芭樂"] = 150

print(fruits)
# 執行結果
# {'蘋果': 120, '西瓜': 60, '香蕉': 75, '水蜜桃': 120, '芭樂': 150}
			</pre>

			<h3>刪除項目</h3>
			<p>利用 del 函式可以刪除字典的項目。清空可以使用 clear 方法。如下實例：</p>

			<pre data-enlighter-language="python">
# 水果與價格
fruits = {"蘋果":80, "西瓜":60, "香蕉":75, "水蜜桃":120}

# 刪除項目
del fruits['蘋果']

print(fruits)
# 執行結果
# {'西瓜': 60, '香蕉': 75, '水蜜桃': 120}

# 清空字典
fruits.clear()

print(fruits)
# 執行結果
# {}

# 刪除字典
del fruits

print(fruits)
# 執行結果
# 出現 NameError 錯誤
			</pre>



			<h3>字典鍵的特性</h3>
			<p>字典值可以是任何的 python 物件，可以是標準的物件，也可以是使用者定義的物件，但鍵的資料類型有限制。</p>

			<p>特別提醒兩個重要項目：</p>
			<p>（1）同一個鍵不會出現兩次。字典建立時，如果同一個鍵被賦值兩次，前一項會被後一項值會被覆蓋，如下實例：</p>

			<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Name': '小菜鳥'}
print ("dict['Name']: ", dict['Name'])

# 執行結果
# dict['Name']:  小菜鳥
			</pre>


			<p>（2）鍵必須是不可變的型態，所以可以用數字、字串或元組充當，而清單則不行，如下實例：</p>

			<pre data-enlighter-language="python">
dict = {['Name']: 'Wenzao', 'Year': 100}
print ("dict['Name']: ", dict['Name'])
			</pre>

			<p>以上實例輸出結果：</p>
			<pre data-enlighter-language="python">
Traceback (most recent call last):
  File "test.py", line 3, in &lt;module&gt;
    dict = {['Name']: 'Wenzao', 'Year': 100}
TypeError: unhashable type: 'list'
			</pre>




			<h3>字典排序</h3>
			<p>1. 使用 sorted 內建函式對字典排序，得到的結果是以 key 排序的列表：</p>
			<pre>
fruits = {"pineapple":100, "banana":70, "watermelon":90, "apple":120}

print(sorted(fruits))

# 執行結果
# ['apple', 'banana', 'pineapple', 'watermelon']
			</pre>

			<p>使用此方法，逐一取出鍵值配對，設定給新字典，即可產生以鍵排序的新字典:</p>
			<pre>
fruits = {"pineapple":100, "banana":70, "watermelon":90, "apple":120}
fs = {}
for k in sorted(fruits):
    fs[k] = fruits[k]

print(fs)

# 執行結果
# {'apple': 120, 'banana': 70, 'pineapple': 100, 'watermelon': 90}
			</pre>

			<p>2. 使用字典的 items 方法，可以得鍵值配對的元組項目列表：</p>
			<pre>
fruits = {"pineapple":100, "banana":70, "watermelon":90, "apple":120}
print(fruits.items())

# 執行結果
# dict_items([('pineapple', 100), ('banana', 70), ('watermelon', 90), ('apple', 120)])
			</pre>

			<p>使用此方法，針對項目排序，再轉換為字典，即可得到以鍵排序的新字典。</p>
			<pre>
fruits = {"pineapple":100, "banana":70, "watermelon":90, "apple":120}
sk = dict(sorted(fruits.items()))
print(sk)

# 執行結果
# {'apple': 120, 'banana': 70, 'pineapple': 100, 'watermelon': 90}
			</pre>

			<p>3. 若要針對字典的值作排序，必須使用 sorted 函式，搭配使用 lamda (無記名)函式，實例如下：</p>
			<pre>
fruits = {"pineapple":100, "banana":70, "watermelon":90, "apple":120}

# sorted by values
ss1 = sorted(fruits.items(), key=lambda x:x[1])
print(ss1)

# 執行結果
# [('banana', 70), ('watermelon', 90), ('pineapple', 100), ('apple', 120)]

ss2 = sorted(fruits.items(), reverse=True, key=lambda x:x[1])
print(ss2)

# 執行結果
# [('apple', 120), ('pineapple', 100), ('watermelon', 90), ('banana', 70)]
			</pre>



			<h3>字典可用的內建函式</h3>

			<table class="table table-sm">
				<thead class="thead-dark">
					<tr>
						<th nowrap>序號</th>
						<th>函式及描述</th>
						<th>實例</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>len(dict)<br>
							計算字典元素個數，即鍵的總數。
						</td>
						<td>
							<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
len(dict)
# 執行結果
# 3
							</pre>
						</td>
					</tr>

					<tr>
						<td>2</td>
						<td>str(dict)<br>
							輸出字典，以可列印的字串表示。
						</td>
						<td>
							<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
str(dict)
# 執行結果
# "{'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}"
							</pre>
						</td>
					</tr>

					<tr>
						<td>3</td>
						<td>type(variable)<br>
							返回輸入的變數類型，如果變數是字典就返回字典類型。
						</td>
						<td>
							<pre data-enlighter-language="python">
dict = {'Name': 'Wenzao', 'Year': 100, 'Class': 'English'}
type(dict)
# 執行結果
# &lt;class 'dict'&gt;
							</pre>
						</td>
					</tr>
				</tbody>
			</table>

			<h3>字典內建方法</h3>
			<table class="table table-sm">
				<thead class="thead-sm">
					<tr>
						<th nowrap>序號</th>
						<th>函數</th>
						<th>描述</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>dict.clear()</td>
						<td>刪除字典內所有元素</td>
					</tr>
					<tr>
						<td>2</td>
						<td>dict.copy()</td>
						<td>返回一個字典的淺複製</td>
					</tr>
					<tr>
						<td>3</td>
						<td>dict.fromkeys()</td>
						<td>創建一個新字典，以序列seq中元素做字典的鍵，val為字典所有鍵對應的初始值</td>
					</tr>
					<tr>
						<td>4</td>
						<td>dict.get(key, default=None)</td>
						<td>返回指定鍵的值，如果值不在字典中返回default值</td>
					</tr>
					<tr>
						<td>5</td>
						<td>key in dict</td>
						<td>判斷key是否在字典dict裡，若有返回True，否則返回False</td>
					</tr>
					<tr>
						<td>6</td>
						<td>dict.items()</td>
						<td>以列表返回所有的 (鍵, 值) 元組陣列</td>
					</tr>
					<tr>
						<td>7</td>
						<td>dict.keys()</td>
						<td>列出在字典中的所有的鍵</td>
					</tr>
					<tr>
						<td>8</td>
						<td>dict.setdefault(key, default=None)</td>
						<td>和get()類似, 但如果鍵不存在於字典中，將會添加鍵並將值設為default</td>
					</tr>
					<tr>
						<td>9</td>
						<td>dict.update(dict2)</td>
						<td>把字典dict2的鍵/值對更新到dict裡</td>
					</tr>
					<tr>
						<td>10</td>
						<td>dict.values()</td>
							<td>列出在字典中的所有可用的值</td>
					</tr>
					<tr>
						<td>11</td>
						<td>dict.pop(key[,default])</td>
						<td>刪除鍵 key 所對應的值，返回值為被刪除的值。key值必須給出，否則，返回default值。</td>
					</tr>
					<tr>
						<td>12</td>
						<td>dict.popitem()</td>
						<td>返回並刪除字典中的最後一對鍵和值。</td>
					</tr>

				</tbody>
			</table>

			<h3>實做練習</h3>
			<ul>
				<li>找出一篇英文文章，移除標點符號與無特定意義的用詞，列出該文章每個用詞出現的次數。</li>
			</ul>
		</div>
		<!--end of main-->
	</div>
	<!--end of content-->
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>
</html>
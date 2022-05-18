<?php include_once("u01_00_head.html"); ?>

<body>
	<?php include_once("u01_00_banner.html"); ?>

	<!-- Content Start here -->
	<div class="container" id="content">
		<div id="main">
			<h2>File I/O</h2>

			<p><strong>Files</strong> are named locations on disk to store related information. They are used to
				permanently store data in a non-volatile memory (e.g. hard disk).</p>

			<p>Since Random Access Memory (RAM) is volatile (which loses its data when the computer is turned off), we
				use files for future use of the data by permanently storing them.</p>

			<p>When we want to read from or write to a file, we need to open it first. When we are done, it needs to be
				closed so that the resources that are tied with the file are freed.</p>

			<p>In Python, a file operation takes place in the following order:</p>

			<ol>
				<li>Open a file</li>
				<li>Read or write (perform operation)</li>
				<li>Close the file</li>
			</ol>

			<h2>Opening Files</h2>
			<p>Python has a built-in <span class="keyitem">open()</span> function to open a file. This function returns
				a file object, also called a handle, as it is used to read or modify the file accordingly.</p>

			<pre data-enlighter-language="python">
# open file in current directory
f = open("test.txt")

# specifying full path
f = open("C:/Python38/README.txt")
</pre>
			<p>We can specify the mode while opening a file. In mode, we specify whether we want to <span
					class="keyword">read r</span>, <span class="keyword">write w</span> or <span class="keyword">append
					a</span> to the file. We can also specify if we want to open the file in text mode or binary mode.
			</p>

			<p>The default is reading in text mode. In this mode, we get strings when reading from the file.</p>

			<p>On the other hand, binary mode returns bytes and this is the mode to be used when dealing with non-text
				files like images or executable files.</p>

			<table class="table table-hover table-striped">
				<tbody>
					<tr>
						<th>Mode</th>
						<th>Description</th>
					</tr>
					<tr>
						<td><code>r</code></td>
						<td>Opens a file for reading. (default)</td>
					</tr>
					<tr>
						<td><code>w</code></td>
						<td>Opens a file for writing. Creates a new file if it does not exist or truncates the file if
							it exists.</td>
					</tr>
					<tr>
						<td><code>a</code></td>
						<td>Opens a file for appending at the end of the file without truncating it. Creates a new file
							if it does not exist.</td>
					</tr>
					<tr>
						<td><code>x</code></td>
						<td>Opens a file for exclusive creation. If the file already exists, the operation fails.</td>
					</tr>
					<tr>
						<td><code>+</code></td>
						<td>Opens a file for updating (reading and writing)</td>
					</tr>
					<tr>
						<td><code>t</code></td>
						<td>Opens in text mode. (default)</td>
					</tr>
					<tr>
						<td><code>b</code></td>
						<td>Opens in binary mode.</td>
					</tr>
				</tbody>
			</table>

			<pre data-enlighter-language="python">
f = open("test.txt")      # equivalent to 'r' or 'rt'
f = open("test.txt",'w')  # write in text mode
f = open("img.bmp",'r+b') # read and write in binary mode
</pre>

			<p>The default encoding is platform dependent. In windows, it is cp1252 but utf-8 in Linux. We must not also
				rely on the default encoding or else our code will behave differently in different platforms. When
				working with files in text mode, it is highly recommended to specify the encoding type.</p>

			<pre data-enlighter-language="python">
f = open("test.txt", mode='r', encoding='utf-8')
</pre>

			<p>For example, the most simplest way to read a text file:</p>
			<pre data-enlighter-language="python">
f = open("test.txt", mode='r', encoding='utf-8')
data = f.read()
print(data)
</pre>


			<h2>Closing Files</h2>
			<p>When we are done with performing operations on the file, we need to properly close the file.</p>
			<p>Closing a file will free up the resources that were tied with the file. It is done using the <span
					class="keyitem">close()</span> method available in Python.</p>

			<p>Python has a garbage collector to clean up unreferenced objects but we must not rely on it to close the
				file.</p>
			<pre data-enlighter-language="python">
f = open("test.txt", encoding = 'utf-8')
# perform file operations
f.close()
</pre>

			<p>This method is not entirely safe. If an exception occurs when we are performing some operation with the
				file, the code exits without closing the file.</p>

			<p>A safer way is to use a <span class="keyitem">try...finally</span> block.</p>

			<pre data-enlighter-language="python">
try:
	f = open("test.txt", encoding = 'utf-8')
	# perform file operations
finally:
	f.close()
</pre>
			<p>This way, we are guaranteeing that the file is properly closed even if an exception is raised that causes
				program flow to stop.</p>


			<p>The best way to close a file is by using the with statement. This ensures that the file is closed when
				the block inside the with statement is exited.
				We don't need to explicitly call the close() method. It is done internally.
			</p>
			<pre data-enlighter-language="python">
with open("test.txt", encoding = 'utf-8') as f:
	# perform file operations
</pre>

			<h2>Writing to Files</h2>
			<p>In order to write into a file in Python, we need to open it in <span class="keyitem">write</span> <span
					class="keyword">w</span>, <span class="keyitem">append</span> <span class="keyword">a</span> or
				<span class="keyitem">exclusive creation</span> <span class="keyword">x</span> mode.</p>
			<p>We need to be careful with the w mode, as it will overwrite into the file if it already exists. Due to
				this, all the previous data are erased.</p>

			<p>Writing a string or sequence of bytes (for binary files) is done using the write() method. This method
				returns the number of characters written to the file.</p>

			<pre data-enlighter-language="python">
with open("test.txt",'w',encoding = 'utf-8') as f:
	f.write("my first file\n")
	f.write("This file\n\n")
	f.write("contains three lines\n")
</pre>

			<p>This program will create a new file named test.txt in the current directory if it does not exist. If it
				does exist, it is overwritten.</p>

			<p>We must include the newline characters ourselves to distinguish the different lines.</p>


			<h2>Reading Files</h2>

			<p>There are three methods to read data from a file:</p>
			<ul>
				<li>read(n) - Reads and returns a string of n characters, or the entire file as a single string if n is
					not provided.</li>
				<li>readline() - return a line from the file when called.</li>
				<li>readlines() - return all the lines in a file in the format of a list where each element is a line in
					the file.</li>
			</ul>
			<img src="./assets/images/readline.png" alt="readline()" class="img-fluid">
			<img src="./assets/images/readlines.png" alt="readlines()" class="img-fluid">

			<p>To read a file in Python, we must open the file in reading r mode.</p>

			<p>There are various methods available for this purpose. We can use the read(size) method to read in the
				size number of data. If the size parameter is not specified, it reads and returns up to the end of the
				file.</p>

			<p>We can read the text.txt file we wrote in the above section in the following way:</p>

			<pre data-enlighter-language="python">
>>> f = open("test.txt",'r',encoding = 'utf-8')
>>> f.read(4)    # read the first 4 data
'This'

>>> f.read(4)    # read the next 4 data
' is '

>>> f.read()     # read in the rest till end of file
'my first file\nThis file\ncontains three lines\n'

>>> f.read()  # further reading returns empty sting
''
</pre>

			<p>We can see that the read() method returns a newline as '\n'. Once the end of the file is reached, we get
				an empty string on further reading.</p>

			<p>We can change our current file cursor (position) using the seek() method. Similarly, the tell() method
				returns our current position (in number of bytes).</p>

			<pre data-enlighter-language="python">
>>> f.tell()    # get the current file position
56

>>> f.seek(0)   # bring file cursor to initial position
0

>>> print(f.read())  # read the entire file
This is my first file
This file
contains three lines
</pre>

			<p>We can read a file line-by-line using a for loop. This is both efficient and fast.</p>

			<pre data-enlighter-language="python">
>>> for line in f:
...     print(line, end = '')
...
This is my first file
This file
contains three lines
</pre>

			<p>In this program, the lines in the file itself include a newline character \n. So, we use the end
				parameter of the print() function to avoid two newlines when printing.</p>

			<p>Alternatively, we can use the readline() method to read individual lines of a file. This method reads a
				file till the newline, including the newline character.</p>

			<pre data-enlighter-language="python">
>>> f.readline()
'This is my first file\n'

>>> f.readline()
'This file\n'

>>> f.readline()
'contains three lines\n'

>>> f.readline()
''
</pre>

			<p>Lastly, the readlines() method returns a list of remaining lines of the entire file. All these reading
				methods return empty values when the end of file (EOF) is reached.</p>

			<pre data-enlighter-language="python">
>>> f.readlines()
['This is my first file\n', 'This file\n', 'contains three lines\n']
</pre>

			<h3>Reference:</h3>
			<ul>
				<li>Programiz - <a href="https://www.programiz.com/python-programming/file-operation">Python File
						I/O</a></li>
				<li>GeeksforGeeks - <a href="https://www.geeksforgeeks.org/read-a-file-line-by-line-in-python/">Read a
						file line by line in Python</a></li>
			</ul>





		</div>
	</div>
	<!-- Content Start here -->

	<?php include_once("u01_00_footer.html"); ?>
</body>

</html>
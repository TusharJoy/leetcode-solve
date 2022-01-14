<h2><a href="https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/">167. Two Sum II - Input Array Is Sorted</a></h2><h3>Easy</h3><hr><div><p>Given a <strong>1-indexed</strong> array of integers <code style="font-family: monospace, Bangla614, sans-serif;">numbers</code> that is already <strong><em>sorted in non-decreasing order</em></strong>, find two numbers such that they add up to a specific <code style="font-family: monospace, Bangla614, sans-serif;">target</code> number. Let these two numbers be <code style="font-family: monospace, Bangla614, sans-serif;">numbers[index<sub>1</sub>]</code> and <code style="font-family: monospace, Bangla614, sans-serif;">numbers[index<sub>2</sub>]</code> where <code style="font-family: monospace, Bangla614, sans-serif;">1 &lt;= index<sub>1</sub> &lt; index<sub>2</sub> &lt;= numbers.length</code>.</p>

<p>Return<em> the indices of the two numbers, </em><code style="font-family: monospace, Bangla614, sans-serif;">index<sub>1</sub></code><em> and </em><code style="font-family: monospace, Bangla614, sans-serif;">index<sub>2</sub></code><em>, <strong>added by one</strong> as an integer array </em><code style="font-family: monospace, Bangla614, sans-serif;">[index<sub>1</sub>, index<sub>2</sub>]</code><em> of length 2.</em></p>

<p>The tests are generated such that there is <strong>exactly one solution</strong>. You <strong>may not</strong> use the same element twice.</p>

<p>&nbsp;</p>
<p><strong>Example 1:</strong></p>

<pre style="font-family: SFMono-Regular, Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace, Bangla614, sans-serif;"><strong>Input:</strong> numbers = [<u>2</u>,<u>7</u>,11,15], target = 9
<strong>Output:</strong> [1,2]
<strong>Explanation:</strong> The sum of 2 and 7 is 9. Therefore, index<sub>1</sub> = 1, index<sub>2</sub> = 2. We return [1, 2].
</pre>

<p><strong>Example 2:</strong></p>

<pre style="font-family: SFMono-Regular, Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace, Bangla614, sans-serif;"><strong>Input:</strong> numbers = [<u>2</u>,3,<u>4</u>], target = 6
<strong>Output:</strong> [1,3]
<strong>Explanation:</strong> The sum of 2 and 4 is 6. Therefore index<sub>1</sub> = 1, index<sub>2</sub> = 3. We return [1, 3].
</pre>

<p><strong>Example 3:</strong></p>

<pre style="font-family: SFMono-Regular, Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace, Bangla614, sans-serif;"><strong>Input:</strong> numbers = [<u>-1</u>,<u>0</u>], target = -1
<strong>Output:</strong> [1,2]
<strong>Explanation:</strong> The sum of -1 and 0 is -1. Therefore index<sub>1</sub> = 1, index<sub>2</sub> = 2. We return [1, 2].
</pre>

<p>&nbsp;</p>
<p><strong>Constraints:</strong></p>

<ul>
	<li><code style="font-family: monospace, Bangla614, sans-serif;">2 &lt;= numbers.length &lt;= 3 * 10<sup>4</sup></code></li>
	<li><code style="font-family: monospace, Bangla614, sans-serif;">-1000 &lt;= numbers[i] &lt;= 1000</code></li>
	<li><code style="font-family: monospace, Bangla614, sans-serif;">numbers</code> is sorted in <strong>non-decreasing order</strong>.</li>
	<li><code style="font-family: monospace, Bangla614, sans-serif;">-1000 &lt;= target &lt;= 1000</code></li>
	<li>The tests are generated such that there is <strong>exactly one solution</strong>.</li>
</ul>
</div>
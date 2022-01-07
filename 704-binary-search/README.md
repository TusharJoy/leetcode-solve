<h2><a href="https://leetcode.com/problems/binary-search/">704. Binary Search</a></h2><h3>Easy</h3><hr><div><p>Given an array of integers <code style="font-family: monospace, Bangla295, sans-serif;">nums</code> which is sorted in ascending order, and an integer <code style="font-family: monospace, Bangla295, sans-serif;">target</code>, write a function to search <code style="font-family: monospace, Bangla295, sans-serif;">target</code> in <code style="font-family: monospace, Bangla295, sans-serif;">nums</code>. If <code style="font-family: monospace, Bangla295, sans-serif;">target</code> exists, then return its index. Otherwise, return <code style="font-family: monospace, Bangla295, sans-serif;">-1</code>.</p>

<p>You must write an algorithm with <code style="font-family: monospace, Bangla295, sans-serif;">O(log n)</code> runtime complexity.</p>

<p>&nbsp;</p>
<p><strong>Example 1:</strong></p>

<pre style="font-family: SFMono-Regular, Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace, Bangla295, sans-serif;"><strong>Input:</strong> nums = [-1,0,3,5,9,12], target = 9
<strong>Output:</strong> 4
<strong>Explanation:</strong> 9 exists in nums and its index is 4
</pre>

<p><strong>Example 2:</strong></p>

<pre style="font-family: SFMono-Regular, Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace, Bangla295, sans-serif;"><strong>Input:</strong> nums = [-1,0,3,5,9,12], target = 2
<strong>Output:</strong> -1
<strong>Explanation:</strong> 2 does not exist in nums so return -1
</pre>

<p>&nbsp;</p>
<p><strong>Constraints:</strong></p>

<ul>
	<li><code style="font-family: monospace, Bangla295, sans-serif;">1 &lt;= nums.length &lt;= 10<sup>4</sup></code></li>
	<li><code style="font-family: monospace, Bangla295, sans-serif;">-10<sup>4</sup> &lt; nums[i], target &lt; 10<sup>4</sup></code></li>
	<li>All the integers in <code style="font-family: monospace, Bangla295, sans-serif;">nums</code> are <strong>unique</strong>.</li>
	<li><code style="font-family: monospace, Bangla295, sans-serif;">nums</code> is sorted in ascending order.</li>
</ul>
</div>
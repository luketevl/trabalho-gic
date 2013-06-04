## Selectize API

Selectize controls can be controlled programmatically via the methods described in this section.
When initializing the control, the "selectize" property is
added on the original &lt;select&gt; / &lt;input&gt; element—this
property points to the underlying Selectize instance.

```js
// initialize the selectize control
var $select = $('select').selectize(options);

// fetch the instance
var selectize = $select[0].selectize;
```

### Methods

<table width="100%">
	<tr>
		<th valign="top" colspan="3" align="left"><a href="#methods_options" name="methods_options">Options</a></th>
	</tr>
	<tr>
		<th valign="top" width="120px" align="left">Method</th>
		<th valign="top" align="left">Description</th>
	</tr>
	<tr>
		<td valign="top"><code>addOption(value, data)</code></td>
		<td valign="top">Adds an available option. If it already exists, nothing will happen. Note: this does not refresh the options list dropdown (use refreshOptions() for that).</td>
	</tr>
	<tr>
		<td valign="top"><code>updateOption(value, data)</code></td>
		<td valign="top">Updates an option available for selection. If it is visible in the selected items or options dropdown, it will be re-rendered automatically.</td>
	</tr>
	<tr>
		<td valign="top"><code>removeOption(value)</code></td>
		<td valign="top">Removes the option identified by the given value.</td>
	</tr>
	<tr>
		<td valign="top"><code>getOption(value)</code></td>
		<td valign="top">Retrieves the data for the option identified by the given value.</td>
	</tr>
	<tr>
		<td valign="top"><code>refreshOptions(triggerDropdown)</code></td>
		<td valign="top">Refreshes the list of available options shown in the autocomplete dropdown menu.</td>
	</tr>
	<tr>
		<th valign="top" colspan="3" align="left"><a href="#methods_items" name="methods_items">Items</a></th>
	</tr>
	<tr>
		<th valign="top" width="120px" align="left">Method</th>
		<th valign="top" align="left">Description</th>
	</tr>
	<tr>
		<td valign="top"><code>clear()</code></td>
		<td valign="top">Resets / clears all selected items from the control.</td>
	</tr>
	<tr>
		<td valign="top"><code>getItem(value)</code></td>
		<td valign="top">Returns the jQuery element of the item matching the given value.</td>
	</tr>
	<tr>
		<td valign="top"><code>addItem(value)</code></td>
		<td valign="top">"Selects" an item. Adds it to the list at the current caret position.</td>
	</tr>
	<tr>
		<td valign="top"><code>removeItem(value)</code></td>
		<td valign="top">Removes the selected item matching the provided value.</td>
	</tr>
	<tr>
		<td valign="top"><code>createItem(value)</code></td>
		<td valign="top">Invokes the "create" method provided in the selectize options that should provide the data for the new item, given the user input. Once this completes, it will be added to the item list.</td>
	</tr>
	<tr>
		<td valign="top"><code>refreshItems()</code></td>
		<td valign="top">Re-renders the selected item lists.</td>
	</tr>
	<tr>
		<th valign="top" colspan="3" align="left"><a href="#methods_search" name="methods_search">Search</a></th>
	</tr>
	<tr>
		<th valign="top" width="120px" align="left">Method</th>
		<th valign="top" align="left">Description</th>
	</tr>
	<tr>
		<td valign="top"><code>getScoreFunction(search)</code></td>
		<td valign="top">Returns a function for scoring individual options. This should only be used within the "score" callback provided in the options. Returns a float.</td>
	</tr>
	<tr>
		<th valign="top" colspan="3" align="left"><a href="#methods_dropdown" name="methods_dropdown">Dropdown</a></th>
	</tr>
	<tr>
		<th valign="top" width="120px" align="left">Method</th>
		<th valign="top" align="left">Description</th>
	</tr>
	<tr>
		<td valign="top"><code>open()</code></td>
		<td valign="top">Shows the autocomplete dropdown containing the available options.</td>
	</tr>
	<tr>
		<td valign="top"><code>close()</code></td>
		<td valign="top">Closes the autocomplete dropdown menu.</td>
	</tr>
	<tr>
		<td valign="top"><code>positionDropdown()</code></td>
		<td valign="top">Calculates and applies the appropriate position of the dropdown.</td>
	</tr>
	<tr>
		<th valign="top" colspan="3" align="left"><a href="#methods_other" name="methods_other">Other</a></th>
	</tr>
	<tr>
		<th valign="top" width="120px" align="left">Method</th>
		<th valign="top" align="left">Description</th>
	</tr>
	<tr>
		<td valign="top"><code>focus()</code></td>
		<td valign="top">Brings the control into focus.</td>
	</tr>
	<tr>
		<td valign="top"><code>blur()</code></td>
		<td valign="top">Forces the control out of focus.</td>
	</tr>
	<tr>
		<td valign="top"><code>lock()</code></td>
		<td valign="top">Disables user input on the control.</td>
	</tr>
	<tr>
		<td valign="top"><code>unlock()</code></td>
		<td valign="top">Re-enables user input on the control.</td>
	</tr>
	<tr>
		<td valign="top"><code>getValue()</code></td>
		<td valign="top">Returns the value of the control. If multiple items can be selected (e.g. &lt;select multiple&gt;), this returns an array. If only one item can be selected, this returns a string.</td>
	</tr>
	<tr>
		<td valign="top"><code>setValue(value)</code></td>
		<td valign="top">Resets the selected items to the given value.</td>
	</tr>
	<tr>
		<td valign="top"><code>setCaret(index)</code></td>
		<td valign="top">Moves the caret to the specified position ("index" being the index in the list of selected items).</td>
	</tr>
	<tr>
		<td valign="top"><code>isFull()</code></td>
		<td valign="top">Returns whether or not the user can select more items.</td>
	</tr>
</table>

### Related Objects

#### Search

<table width="100%">
	<tr>
		<th valign="top" width="120px" align="left">Option</th>
		<th valign="top" align="left">Description</th>
		<th valign="top" width="60px" align="left">Type</th>
	</tr>
	<tr>
		<td valign="top"><code>query</code></td>
		<td valign="top">The raw user input.</td>
		<td valign="top"><code>string</code></td>
	</tr>
	<tr>
		<td valign="top"><code>tokens</code></td>
		<td valign="top">An array containing parsed search tokens. A token is an object containing two properties: "string" and "regex".</td>
		<td valign="top"><code>array</code></td>
	</tr>
	<tr>
		<td valign="top"><code>total</code></td>
		<td valign="top">The total number of results.</td>
		<td valign="top"><code>int</code></td>
	</tr>
	<tr>
		<td valign="top"><code>items</code></td>
		<td valign="top">A list of matched results. Each result is an object containing two properties: "score" and "value".</td>
		<td valign="top"><code>array</code></td>
	</tr>
</table>
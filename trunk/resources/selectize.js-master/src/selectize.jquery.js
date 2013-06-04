var defaults = {
	delimiter: ',',
	persist: true,
	diacritics: true,
	create: false,
	highlight: true,
	openOnFocus: true,
	maxOptions: 1000,
	maxItems: null,
	hideSelected: null,

	scrollDuration: 60,
	loadThrottle: 300,

	dataAttr: 'data-data',
	sortField: null,
	sortDirection: 'asc',
	valueField: 'value',
	labelField: 'text',
	searchField: ['text'],

	mode: null,
	theme: 'default',
	wrapperClass: 'selectize-control',
	inputClass: 'selectize-input',
	dropdownClass: 'selectize-dropdown',

	load            : null, // function(query, callback)
	score           : null, // function(search)
	onChange        : null, // function(value)
	onItemAdd       : null, // function(value, $item) { ... }
	onItemRemove    : null, // function(value) { ... }
	onClear         : null, // function() { ... }
	onOptionAdd     : null, // function(value, data) { ... }
	onOptionRemove  : null, // function(value) { ... }
	onDropdownOpen  : null, // function($dropdown) { ... }
	onDropdownClose : null, // function($dropdown) { ... }
	onType          : null, // function(str) { ... }

	render: {
		item: null,
		option: null,
		option_create: null
	}
};

$.fn.selectize = function (settings) {
	var defaults = $.fn.selectize.defaults;
	settings = settings || {};

	return this.each(function() {
		var instance, value, values, i, n, data, dataAttr, settings_element, tagName;
		var $options, $option, $input = $(this);

		tagName = $input[0].tagName.toLowerCase();

		if (typeof settings === 'string') {
			instance = $input.data('selectize');
			instance[settings].apply(instance, Array.prototype.splice.apply(arguments, 1));
		} else {
			dataAttr = settings.dataAttr || defaults.dataAttr;
			settings_element = {};
			settings_element.placeholder = $input.attr('placeholder');
			settings_element.options = {};
			settings_element.items = [];

			if (tagName === 'select') {
				settings_element.maxItems = !!$input.attr('multiple') ? null : 1;
				$options = $input.children();
				for (i = 0, n = $options.length; i < n; i++) {
					$option = $($options[i]);
					value = $option.attr('value') || '';
					if (!value.length) continue;
					data = (dataAttr && $option.attr(dataAttr)) || {
						'text'  : $option.html(),
						'value' : value
					};

					if (typeof data === 'string') data = JSON.parse(data);
					settings_element.options[value] = data;
					if ($option.is(':selected')) {
						settings_element.items.push(value);
					}
				}
			} else {
				value = $.trim($input.val() || '');
				if (value.length) {
					values = value.split(settings.delimiter || defaults.delimiter);
					for (i = 0, n = values.length; i < n; i++) {
						settings_element.options[values[i]] = {
							'text'  : values[i],
							'value' : values[i]
						};
					}
					settings_element.items = values;
				}
			}

			instance = new Selectize($input, $.extend(true, {}, defaults, settings_element, settings));
			$input.data('selectize', instance);
			$input.addClass('selectized');
		}
	});
};

$.fn.selectize.defaults = defaults;
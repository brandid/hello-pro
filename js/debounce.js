jQuery(document).ready(function($) {

	/* De-Bouncer script: pause resize calculations until last resize event is finished */
	/* http://www.hnldesign.nl/work/code/debouncing-events-with-jquery/ */
	var deBouncer = function($,cf,of, interval){
		var debounce = function (func, threshold, execAsap) {
			var timeout;
			return function debounced () {
				var obj = this, args = arguments;
				function delayed () {
					if (!execAsap)
						func.apply(obj, args);
					timeout = null;
				}
				if (timeout)
					clearTimeout(timeout);
				else if (execAsap)
					func.apply(obj, args);
				timeout = setTimeout(delayed, threshold || interval);
			};
		};
		jQuery.fn[cf] = function(fn){  return fn ? this.bind(of, debounce(fn)) : this.trigger(cf); };
	};

	// Register DeBouncing functions
	// deBouncer(jQuery,'new eventname', 'original event', timeout);
	// Note: keep the jQuery namespace in mind, don't overwrite existing functions!
	deBouncer(jQuery,'smartresize', 'resize', 100);
	deBouncer(jQuery,'smartscroll', 'scroll', 100);

});

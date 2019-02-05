/**
 * Numbers Widgets object
 *
 * @type object
 */
Numbers.Widgets.ServiceScripts = {

	/**
	 * Initialize
	 */
	init: function() {
		$('.numbers_ss_price_select').change(function() {
			setTimeout(function() {
				Numbers.Widgets.ServiceScripts.recalculate();
			}, 250);
		});
		$('.numbers_ss_price_amount').keyup(function() {
			setTimeout(function() {
				Numbers.Widgets.ServiceScripts.recalculate();
			}, 250);
		});
	},

	/**
	 * Recalculate
	 */
	recalculate: function() {
		var total = '0';
		$('.numbers_ss_price_amount').each(function(index, element) {
			var temp = Numbers.Format.readBcnumeric($(this).val());
			if (temp) {
				total = Numbers.Math.add(total, temp, 2);
			}
		});
		$('.numbers_ss_price_select').each(function(index, element) {
			$(this).find('option').filter(":selected").map(function() {
				total = Numbers.Math.add(total, $(this).attr('price'), 2);
			});
		});
		$('.wg_ss_script_total_amount').val(Numbers.Format.number(total)).change();
	}
};
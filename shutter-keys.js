shutterKeys = {
	init: function() {
		jQuery(document).keydown(function (e) {
			shutterKeys.pressKey(e);
		});
	},
	
	pressKey: function(e)
	{
		var linkDiv = null;
		if(e.which == 37)
		{
			var linkDiv = document.getElementById('shPrev');
		}else if(e.which == 39)
		{
			var linkDiv = document.getElementById('shNext');
		}else
		{
			return;
		}
		
		if(linkDiv != null)
		{
			jQuery(linkDiv).find("a").trigger('onclick');
		}
		
		return;
	}
}

jQuery(document).ready(function($) {
	if(shutterReloaded != null)
	{
		shutterKeys.init();
	}
});
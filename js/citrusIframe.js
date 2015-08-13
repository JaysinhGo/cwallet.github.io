var citrusWalletPopUp = function() {
	var trigger_class = "trigger-citrus-pay";
	var iframe_url = '../wallet/index.html';
	var iframe_zindex = 9999999;
	var citrusUserData;
	return {
		process_request: function(citrusUserJsonData){
			citrusUserData = JSON.parse(citrusUserJsonData);
			setTimeout(function(){
				citrusWalletPopUp.load_form();
			},0);
		},
		load_form: function(userJsonData) {
			var citrusIframe = document.createElement('iframe');
			citrusIframe.id = 'iframeId';
			citrusIframe.src = 'http://jaysinhgohil.github.io/';
			citrusIframe.setAttribute("style", "position:absolute;width:100%;height:100vh;left:0;top:0;z-index:10000;");			
			document.getElementById("citrusWallet").appendChild(citrusIframe);	
			setTimeout(function() {
				var message = JSON.stringify(citrusUserData);							 
				document.getElementById("iframeId").contentWindow.postMessage(message,"*");							
			},400);
		}
	};
}();
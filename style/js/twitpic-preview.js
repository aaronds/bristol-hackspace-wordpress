
/* Enhance the twitter feed */
try{
	jQuery(document).ready(function(){
		jQuery("#twitter_update_list a[href^='http://twitpic.com']").each(function(index,el){
			var href = el.href;
			var twitpicIdRegex = new RegExp("http:\\/\\/twitpic.com\\/(.*)");

			var twitpicIdMatches = twitpicIdRegex.exec(href);

			if(twitpicIdMatches){
				var twitpicId = twitpicIdMatches[1];
				var twitpicA = document.createElement("A");
				jQuery(twitpicA).click(function(evt){
					evt.preventDefault();
					window.open(href);
				});

				var tweetSpan = el.parentNode;
				twitpicA.href = href;
				twitpicA.className = "twitpic-preview";
				var twitpicImg = document.createElement("IMG");
				twitpicImg.src = "http://twitpic.com/show/thumb/" + twitpicId + ".jpg";

				twitpicA.appendChild(twitpicImg);
				tweetSpan.replaceChild(twitpicA,el);
			}
		});
	});
}catch(e){
}

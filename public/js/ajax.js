var isAnimating = false;

function ajaxSetHomeContent(contentHTML) {
	$("#main-content").html(contentHTML);
}

/*
Add to local browser history.
stateObj: object containing page content
title: string containing page title
url: string containing page url
*/
function addHistory(page, title, url) {
	window.history.pushState(page, title, url);
}

function whichTransitionEvent() {
    var el = document.createElement('fake'),
        transEndEventNames = {
            'WebkitTransition' : 'webkitTransitionEnd',// Saf 6, Android Browser
            'MozTransition'    : 'transitionend',      // only for FF < 15
            'transition'       : 'transitionend'       // IE10, Opera, Chrome, FF 15+, Saf 7+
        };

    for(var t in transEndEventNames){
        if( el.style[t] !== undefined ){
            return transEndEventNames[t];
        }
    }
}

/* 
Whenever a page needs to be updated through AJAX. For example clicking (internal) links or after a history popstate.
page: name of page to be retrieved from ./allesaanhuis/pages/
args: object to be sent to requested page as $_GET args
url: full url containing pagename at the end
history: boolean, wether to add page to history
*/

function ajaxVisit(page, args, url, history) { 
	
	if(!isAnimating) {
		isAnimating = true;
		var ajaxObj = args;
		ajaxObj['ajax'] = true;
		ajaxObj['page'] = page;
		console.log('isAnimating: ' + isAnimating);
		
		$("#main-content").addClass('scrolled-out');
			
		var transEndEventName = whichTransitionEvent();
		
		$("#main-content").one(transEndEventName, function(e) { 
			console.log(e);
			console.log('Fired transitionEnd ');
			
			$("#main-content").load(siteUrl + "/getAjaxPage.php", $.param(ajaxObj), function(data, textStatus, jqxhr) {
				
				$.getScript(
					siteUrl + "/assets/js/pages/" + page + ".js", 
					function(data2, textStatus2, jqxhr2) {
						console.log( data2 ); // Data returned
						console.log( textStatus2 ); // Success
						console.log( jqxhr2.status ); // 200
						console.log( "Load was performed." );
					});
				
				if(history == true) {
					var href = siteUrl;
					href = href + url;
					
					var stateObj = args;
					args['page'] = page;
					addHistory(stateObj, page, href);
				}
				
				$('body').scrollTop(0);
				ajaxSetHomeContent(data);
				
				isAnimating = false;
				$('#main-content').removeClass('scrolled-out');
			});
			
			/*
			$.get(
				siteUrl + "/getAjaxPage.php", 
				ajaxObj, 
				function(data) {
					
					$.getScript(
						siteUrl + "/assets/js/pages/" + page + ".js", 
						function(data, textStatus, jqxhr) {
							//console.log( data ); // Data returned
							//console.log( textStatus ); // Success
							//console.log( jqxhr.status ); // 200
							//console.log( "Load was performed." );
						});
					
					if(history == true) {
						var href = siteUrl;
						href = href + url;
						
						var stateObj = args;
						args['page'] = page;
						addHistory(stateObj, page, href);
					}
					
					$('body').scrollTop(0);
					ajaxSetHomeContent(data);
					
					isAnimating = false;
					$('#main-content').removeClass('scrolled-out');
				}, 
				"html"
			);*/
		});		
	}
} 

$(document).ready(function() {

	window.addEventListener('popstate', function(popStateEvent) {
		if(!isAnimating) {
			var popState = popStateEvent['state'];
			if(typeof popState == 'object') {
				var page = popState['page'];
				ajaxVisit(page, popState, false);
			}			
		}
	});
	
	var page = sitePage;
	if(Object.keys(siteArgs).length > 0) { var args = siteArgs; }
	else { var args = {page: page, pagename: page}; }
	
	window.history.replaceState(args, page, window.location.href);
});
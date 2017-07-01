'use strict';

//-------------------- Load some deferred styles --------------------//
var loadDeferredStyles = function() 
{
	var addStylesNode = document.getElementById('deferred-styles');
	var replacement = document.createElement('div');
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement);
	addStylesNode.parentElement.removeChild(addStylesNode);
}
var raf = requestAnimationFrame || mozRequestAnimationFrame ||
    webkitRequestAnimationFrame || msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);
//-------------------- /Load some deferred styles --------------------//

function hasClass(el, cls) 
{
	return el.className && new RegExp("(\\s|^)" + cls + "(\\s|$)").test(el.className);
}

function siemaAutoplay($time, $siema, $carousel) 
{
	var timer = setInterval(function() {
		$siema.next();
	}, $time);
	$carousel.addEventListener('mouseenter', function() {
		clearInterval(timer);
	});
	$carousel.addEventListener('mouseleave', function() {
		timer = setInterval(function() {
			$siema.next();
		}, $time);
	});
}

function loadCarousel() 
{
	var siema = document.getElementById('comments-carousel');
	if(siema) {
		const mySiema = new Siema({
			selector: '#comments-carousel',
			duration: 500,
			easing: 'ease',
			perPage: 1,
			startIndex: 0,
			draggable: true,
			threshold: 20,
			loop: true
		});
		document.getElementById('siema-prev').addEventListener('click', function() {
			mySiema.prev()
		});
		document.getElementById('siema-next').addEventListener('click', function() {
			mySiema.next()
		});
		siemaAutoplay(5000, mySiema, siema);
	}
}

loadCarousel();
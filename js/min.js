	  function getSelect(s) {
	    return s.options[s.selectedIndex].value
	  }
	  function toggle(id) {
  		'use strict';
  		var e = document.getElementById(id);
  		if (e.style.display == '')
    		e.style.display = 'none';
  		else
    		e.style.display = '';
	}
	function toggle2(id, link) {
  		'use strict';
  		var e = document.getElementById(id);
  		if (e.style.display == '') {
    		e.style.display = 'none';
    		link.innerHTML = 'dw';
  		} else {
    			e.style.display = '';
    			link.innerHTML = 'up';
  		}
	}
	document.createElement("article");
	document.createElement("audio");
	document.createElement("video");
	document.createElement("header");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");

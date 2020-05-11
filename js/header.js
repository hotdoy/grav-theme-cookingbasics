function headerToggle() {

	let header = document.getElementById("header");
	let toggleOn = document.getElementById("header__toggle-on");
	let toggleOff = document.getElementById("header__toggle-off");

	toggleOn.addEventListener("click", function(){
		header.classList.add("header--deployed");
	})

	toggleOff.addEventListener("click", function(){
		header.classList.remove("header--deployed");
	})

	window.addEventListener('resize', function(){
		if (window.innerWidth > 735 && header.classList.contains("header--deployed")) {
			header.classList.remove("header--deployed");
		}
	});
}

headerToggle();

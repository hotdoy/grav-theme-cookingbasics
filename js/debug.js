function debug(log){
	const qs = new URLSearchParams(window.location.search);
	const dev = qs.get('dev');
	if (!!dev && !!log) {
		console.log(log);
	}
}
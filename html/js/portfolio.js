const btnExpan = document.querySelectorAll('.js-btn-expan');

btnExpan.forEach((value) => {
	value.addEventListener('click', () => {
		var element = value;

		for (let i = 0; i < 3; i++) {
			element = element.parentNode;
		}

		const visible = document.querySelectorAll('.visible');

		visible.forEach((value) => {
			value.classList.remove('visible');
		});

		element.classList.toggle('visible');
	});
});

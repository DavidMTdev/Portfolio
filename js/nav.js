const navLiA = document.querySelectorAll('.js-nav li a');

navLiA.forEach((value) => {
	value.addEventListener('mouseover', () => {
		const header = document.querySelector('header');

		header.style.right = '0px';
	});

	value.addEventListener('mouseout', () => {
		const header = document.querySelector('header');

		header.style.right = '-90px';
	});
});

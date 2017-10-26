let carousels = document.getElementsByClassName('image-carousel');

[].forEach.call(carousels, function(c) {
	let next = c.getElementsByClassName('next')[0],
		prev = c.getElementsByClassName('prev')[0],
		bubbles = c.getElementsByClassName('bubbles')[0],
		inner = c.getElementsByClassName('inner')[0],
		imgs = inner.getElementsByTagName('img'),
		currentImageIndex = 0,
		width = 360;

		function switchImg() {
			inner.style.left = -width * currentImageIndex + 'px';
		}

		next.addEventListener('click', function (){
			currentImageIndex++;

			if (currentImageIndex >= 2) {
				currentImageIndex = 0;
			}

			switchImg();
		});

		prev.addEventListener('click', function (){
			if (currentImageIndex == 0) {
				currentImageIndex == 0; 
			} else {
				currentImageIndex --;
			}
			switchImg();
		});
});
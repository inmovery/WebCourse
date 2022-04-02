const inner = document.querySelector('.inner');
const squareColors = ['#ed220d', '#b542e5', '#0d93ed', '#f2770b', '#8affbc', '#f2ff8a', '#ff38c2', '#e37f35'];
const BLOCKS = 48;

//arrow function
var divContainer = {
    doSomethingLater : function(){
		//DOM element create
        const square = document.createElement('div');
		square.classList.add('square');
		//событие наведения и отведения мышки
		square.addEventListener('mouseover', () => setColor(square));
		square.addEventListener('mouseout', () => removeColor(square));
		inner.appendChild(square)
    }
}

//цикл for
for (let i = 0; i < BLOCKS; i++) {
	divContainer.doSomethingLater()
}

function setColor(elemStyle) {
	const color = getRandomColor();
	elemStyle.style.background = color;
	elemStyle.style.boxShadow = '0 0 12px ${color}';
}

function removeColor(elemStyle) {
	elemStyle.style.background = '#2d2d2d';
	elemStyle.style.boxShadow = '0 0 4px #000';
}

const getRandomColor = () => squareColors[Math.floor(Math.random() * squareColors.length)];


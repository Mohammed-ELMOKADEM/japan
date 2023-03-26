const links = document.getElementsByClassName('links')[0];
const button = document.getElementsByClassName('circle')[0];
const linev = document.getElementsByClassName('vertical')[0];
const linev2 = document.getElementsByClassName('vertical1')[0];
const button2 = document.getElementsByClassName('circle1')[0];
const left_menu = document.getElementsByClassName('left_menu')[0];
const flech = document.getElementsByClassName('flech')[0];
const menu = document.getElementsByClassName('menu')[0];
const currentLocation = location.href;
const menuItem = document.querySelectorAll('navbar ul li a');
const menuLength = menuItem.length;
const current = location.for;
const images = document.querySelectorAll('label');
const labelLength= images.length;

button.addEventListener('click',() =>{
	left_menu.classList.toggle('active2');
	linev.classList.toggle('open');
});
button2.addEventListener('click',() =>{
	links.classList.toggle('active');
	linev2.classList.toggle('open');
});
flech.addEventListener('click', () =>{
	menu.classList.toggle('show');
	flech.classList.toggle('op');
});

for(let i=0;i<menuLength;i++){
	if(menuItem[i].href === currentLocation){
		menuItem[i].className="clicked";
	}
};

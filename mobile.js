let colorslider;
let sizeslider;


function setup() {
    createCanvas(600, 600);
    colorslider = createColorPicker();
    sizeslider = createSlider(30, 120);
    noStroke();
    fill("black");
    circle(0, 0, 15);
    circle(600, 0, 15);
    circle(600, 600, 15);
    circle(0, 600, 15);
}

function draw() {
    fill(colorslider.value());
    if (mouseIsPressed)
    {
	circle(mouseX, mouseY, sizeslider.value());
    }
}


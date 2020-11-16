let colorslider;
let sizeslider;


function setup() {
    createCanvas(400, 400);
    colorslider = createColorPicker();
    sizeslider = createSlider(10, 40);
    noStroke();
    fill("black");
    circle(0, 0, 5);
    circle(400, 0, 5);
    circle(400, 400, 5);
    circle(0, 400, 5);
}

function draw() {
    fill(colorslider.value());
    if (mouseIsPressed)
    {
	circle(mouseX, mouseY, sizeslider.value());
    }
}


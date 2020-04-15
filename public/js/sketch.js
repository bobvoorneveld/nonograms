/**
Nonogram:
- id (int)
- created (datetime)
- modified (datetime)
- title (string) ("Eye")
- rows (int) (5)
- cols (int) (10)
- solution (string) ("1,0,1,0,1,0,1,0,1,0;0,1,1,1,1,1,1,1,0,1;1,1,0,0,1,1,0,0,1,0;1,0,0,0,1,1,0,0,1,1;0,1,1,1,1,1,1,1,0,0;")
*/

// let solution = [
//   [1, 0, 1, 0, 1, 0, 1, 0, 1, 0],
//   [0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
//   [1, 1, 0, 0, 1, 1, 0, 0, 1, 0],
//   [1, 0, 0, 0, 1, 1, 0, 0, 1, 1],
//   [0, 1, 1, 1, 1, 1, 1, 1, 0, 0]
// ]

let grid;
let cellSize;
let canvasWidth = 800;
let canvas;

function setup() {
  canvas = createCanvas(canvasWidth, canvasWidth);
  canvas.parent('nonogram-container');
  windowResized();

  cellSize = 40;
  grid = new Grid(solution, cellSize);
  grid.setup();
}

// Called by p5js when window size changes.
function windowResized() {
  canvasWidth = $('#nonogram-container').width();
  resizeCanvas(canvasWidth, canvasWidth);
}

function draw() {
  background(255);

  grid.show();
}

function mousePressed() {
  let x = floor(mouseX / cellSize);
  let y = floor(mouseY / cellSize);

  let cell = grid.offsetCell(x, y);
  if (mouseButton === RIGHT) {
    cell.lock();
  } else {
    cell.activate();
  }

  let won = grid.checkWinning();

  if (won) {
    alert('You have won!');
  }
}


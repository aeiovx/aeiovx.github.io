const gameElement = document.getElementById('game');
const gridSize = 10;
const gameGrid = [];
const WALL = 'wall', BOX = 'box', TARGET = 'target', PLAYER = 'player', FLOOR = 'floor', STORAGE = 'storage';
let playerPosition = { x: 1, y: 1 };

// 初始化游戏网格
function initializeGame() {
  for (let i = 0; i < gridSize; i++) {
    gameGrid[i] = [];
    for (let j = 0; j < gridSize; j++) {
      gameGrid[i][j] = FLOOR;
      const cell = document.createElement('div');
      cell.classList.add('box');
      gameElement.appendChild(cell);
    }
  }

  // 设置墙壁
  gameGrid[0][0] = WALL;
  gameGrid[0][1] = WALL;
  // ...添加更多的墙壁...

  // 设置目标位置
  gameGrid[8][8] = TARGET;

  // 设置箱子
  gameGrid[2][2] = BOX;

  // 设置玩家
  gameGrid[playerPosition.x][playerPosition.y] = PLAYER;

  renderGame();
}

// 渲染游戏
function renderGame() {
  for (let i = 0; i < gridSize; i++) {
    for (let j = 0; j < gridSize; j++) {
      const cell = gameElement.children[i * gridSize + j];
      cell.className = 'box'; // Reset class
      if (gameGrid[i][j] === WALL) cell.classList.add('wall');
      if (gameGrid[i][j] === BOX) cell.classList.add('storage');
      if (gameGrid[i][j] === TARGET) cell.classList.add('target');
      if (gameGrid[i][j] === PLAYER) cell.classList.add('player');
    }
  }
}

// 添加键盘事件监听
document.addEventListener('keydown', function(event) {
  switch (event.key) {
    case 'ArrowUp':
      // 处理向上移动
      break;
    case 'ArrowDown':
      // 处理向下移动
      break;
    case 'ArrowLeft':
      // 处理向左移动
      break;
    case 'ArrowRight':
      // 处理向右移动
      break;
  }

  renderGame();
});

initializeGame();

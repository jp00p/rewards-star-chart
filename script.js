document.addEventListener('DOMContentLoaded', function () {
  fetchBoardState();
  fetchRewardTitle();
});

function fetchBoardState() {
  fetch('board_state.txt')
    .then(response => response.text())
    .then(boardState => {
      createGrid(boardState);
    });
}

function createGrid(boardState) {
  const gridContainer = document.getElementById('grid-container');
  gridContainer.innerHTML = '';

  for (let i = 0; i < 25; i++) {
    const gridItem = document.createElement('div');
    gridItem.classList.add('grid-item');

    if (boardState.charAt(i) === '1') {
      gridItem.innerHTML = '<span class="star">&#9733;</span>';
    }

    gridContainer.appendChild(gridItem);
  }
}

function addStar() {
  fetch('manage.php?addstar')
    .then(() => fetchBoardState());
}

function clearBoard() {
  fetch('manage.php?clearboard')
    .then(() => fetchBoardState());
}

function fetchRewardTitle() {
  fetch('reward_title.txt')
    .then(response => response.text())
    .then(title => {
      document.getElementById('reward-title').innerText = title;
    });
}

function updateRewardTitle() {
  const newRewardTitle = document.getElementById('reward-title-input').value;
  fetch('manage.php?reward_title=' + encodeURIComponent(newRewardTitle))
    .then(() => fetchRewardTitle());
}
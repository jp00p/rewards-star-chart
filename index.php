<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rewardz</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="reward-chart">
    <h1 id="reward-title">Reward Chart</h1>

    <div class="grid-container" id="grid-container">
    </div>

    <?php if ($_SERVER['REMOTE_ADDR'] === '97.120.83.255' && isset($_GET["momob0nes"])) : ?>
      <input type="text" id="reward-title-input">
      <button onclick="updateRewardTitle()">Update</button>
      <button onclick="addStar()">Add Star</button>
      <button onclick="clearBoard()">Clear Board</button>
    <?php endif; ?>
  </div>

  <script src="script.js"></script>
</body>

</html>
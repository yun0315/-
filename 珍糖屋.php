<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>珍糖屋管理系統</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>珍糖屋</h1>
        <div class="controls">
            <button class="btn" onclick="location.href='index.php'">開/關店</button>
            <button class="btn" onclick="location.href='products.php'">產品管理</button>
            <button class="btn" onclick="location.href='revenue.php'">查看營收</button>
        </div>
        <div id="orders">
            <h2>訂單</h2>
            <?php include 'orders.php'; ?>
        </div>
    </div>
</body>
</html>
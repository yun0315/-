<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>查看營收</title>
	<style>
        body {
            font-family: 'Noto Sans TC', sans-serif;
        }

        .container {
            position: relative;
            padding: 20px;
			border-radius: 8px;
        }

        .back-btn {
            font-size: 15px;
            padding: 10px 10px;
            cursor: pointer;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .revenue {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="back-btn" onclick="location.href='珍糖屋.php'">&#x21A9; 返回</button>
        <h2>查看營收</h2>
        <div class="revenue">
            <?php include 'revenue_data.php'; ?>
        </div>
    </div>
</body>
</html>
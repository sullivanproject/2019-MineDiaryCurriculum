<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>인덱스</title>
        <link rel="stylesheet" href="./public/index.css">
    </head>
    <body>
        <div>
            <div class="side-bar">
                <img src="https://cdn.univ20.com/wp-content/uploads/2015/07/5d98ec0427152056397e9e35f357be87.jpg" alt="">
                <h1>박펭귄</h1>
                <a href="./fileWatch.php">지금까지 썼던 것들 보기</a>
            </div>
            <form action="fileSave.php" method="post">
                <p>제목 : <input type="text" name="title"></P>
                <p>내용 : <textarea name="inside"></textarea></p>
                <!-- <button>버튼</button> -->
                <input type="submit">
            </form>
        </div>
    </body>
</html>

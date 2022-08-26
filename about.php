<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box
    }

    body {
        font-family: cursive;

    }

    .cards {
        width: 25%;
        /* background-color: gray; */
        border-radius: 5px;
        margin: 40px;
        display: inline-block;
        padding: 10px 0;
    }

    .cards:hover {

        box-shadow: 2px 2px 10px black;
    }

    .image {
        margin-left: 120px;
        width: 170px;

    }

    .image img {
        width: 100%;
        border-radius: 70%;
    }

    .intro {
        text-align: center;
        padding: 4px;
    }

    .info {
        text-align: center;
    }

    .para {
        margin-top: 30px;
        margin-left: 40px;
        border: 3px solid rgb(227 28 114);
        display: flex;
        width: 1316px;
        justify-content: center;
        height: 200px;
        align-items: center;
        border-radius: 15px;
        background-color: #370e0e;
        color: antiquewhite;
    }


    @media(max-width:400px) {
        .image .img {
            display: flex;
            width: 44%;
            border-radius: 70%;
            position: absolute;
            margin-top: 55px;
        }

        .cards {
            width: 25%;
            /* background-color: gray; */
            border-radius: 5px;
            margin: 40px;
            /* display: inline-block; */
            padding: 10px 0;
            /* display: flex; */
        }
    }
</style>

<body>
    <?php include 'nav1.php' ?>
    <div class="para">
        <h2>
            We are india's largest growing courier service company. <br>
            With 350+ branches nationwide. <br>
            providing quick and secured service to millions of indians.
            <br>
        </h2>
    </div>

    <div class="cards">
        <div class="image">
            <img src="founder.jpg" alt="">
        </div>
        <div class="intro">
            <h1>Aditya Chandorikar</h1>
        </div>
        <div class="info">
            <p>Msc Computer Science <br>Founder SpeedDiv </p>
        </div>
    </div>
    <div class="cards">
        <div class="image"><a href="https://dattopant91.github.io/sandeshdange/" target="_blank">
                <img src="cofounder.jpg" alt=""></a>
        </div>
        <div class="intro">
            <h1>Dattopant Dange</h1>
        </div>
        <div class="info">
            <p>Msc Computer Science <br>Co-Founder SpeedDiv </p>
        </div>
    </div>
    <div class="cards">
        <div class="image">
            <img src="hod.jpg" alt="">
        </div>
        <div class="intro">
            <h1>Rohit Patil</h1>
        </div>
        <div class="info">
            <p>Msc Computer Science <br>HOD SpeedDiv </p>
        </div>
    </div>
</body>

</html>
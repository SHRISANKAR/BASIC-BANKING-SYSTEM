<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE SPARK BANK</title>
    <link rel="stylesheet" media="screen and (max-width:1170px)"href="phone.css">
    <link rel="stylesheet" href="front.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="img/New folder/aj.png" alt="logo">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="create_user.php">Create User</a></li>
            <li class="item"><a href="transaction_money.php">Transfer Money</a></li>
            <li class="item"><a href="transaction_history.php">Transaction History</a></li>
           
        </ul>
    </nav>
    <section id="home">
        <h1 class="primary">Welcome To Spark Bank</h1>
        <p>Basic Banking System</p>
        <p> The 100% Safest Banking  </p>
        
    
    </section>
    <section class="services-container">
        <h1 class="primary-center">
            Our Services
        </h1>
        <div id="services">
            <div class="box" id="create">
                <img src="image/New folder/pngegg (3).png" alt="image">
                <h2 class="secondary">Create a New User Now </h2>
               <button class="btn"><a href="create_user.php">Create User</a></button>
                
            </div>
            <div class="box" id="make">
                <img src="image/New folder/kisspng-trade-icon-phone-money-transactions-5aa57d76197739.7442122415207949981043.png" alt="image">
                <h2 class="secondary">Make Transaction Now</h2>
                <button class="btn"><a href="select_user_detail.php">Transfer Money</a></button>
               
            </div>
            <div class="box" id="view">
                <img src="image/New folder/icons8-payment-history-64.png" alt="image">
                <h2 class="secondary">View Transaction History</h2>
                <button class="btn"><a href="transaction_history.php">Transaction History</a></button>
                
            </div>

        </div>
    </section>
    
    <footer>
        <div class="center">
        <p>&copy 2021. PROJECT BY <b>SHRI SANKAR</b> <br>THE SPARK BANK</p>
        </div>
    </footer>
</body>
</html>
# Framework
Most of the CSS refers to [Uniswap](https://app.uniswap.org/#/swap) website.

The exchange rate is crawled from the [BANK OF TAIWAN](https://rate.bot.com.tw/xrt/) by using PHP Simple HTML DOM Parser.

By access to Mysql, we can achieve swap, deposit, withdraw and transfer.

The balance display utilizes AJAX post to get responses from our database.

# How to use
1. Clone this repo into htdocs below xampp folder. (using xampp v5.6.40)

2. After opening xampp, start Apache and Mysql.

3. Create a database name final in [phpMyAdmin](http://127.0.0.1/phpmyadmin/), then import the final.sql file to the repo.

4. Go to [BankSwap](http://127.0.0.1/BankSwap/) should see the website.
![image](https://user-images.githubusercontent.com/88305396/149658269-0224fea5-5e39-4389-ac34-818445ff904a.png)
![image](https://user-images.githubusercontent.com/88305396/152166104-b43091ef-2d51-414b-96fb-ded1c76b007f.png)
![image](https://user-images.githubusercontent.com/88305396/152166139-92afaad1-06b0-492a-b97c-79315c5a8cc1.png)
![image](https://user-images.githubusercontent.com/88305396/152166179-36a56b4b-ebda-48c1-b291-6d75c65fec7b.png)
![image](https://user-images.githubusercontent.com/88305396/152166217-0af79020-c421-45f8-9c85-947f7b89aa7d.png)

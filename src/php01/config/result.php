<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
$goods =htmlspecialchars($_GET['goods'], ENT_QUOTES);
$amount =htmlspecialchars($_GET['amount'], ENT_QUOTES);

print "私の名前は、" . $company;
<br/>
print "ご希望の商品は、" . $goods;
<br/>
print "注文数は、" . $amount;
<br/>

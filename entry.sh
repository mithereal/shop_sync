#!/bin/sh

# fetch amazon mws node 
npm i amazon-mws --save
npm i xml-js --save
npm i amqplib --save


chmod +x /nodejs/fetch_amazon_orders.js

# start cron
/usr/sbin/crond -f -l 8


#!/bin/bash
date=$(date +%H%M%S)
while [ $date -lt 061000 ]
do
    sleep 0.5
    curl 'http://jiading.tongji.edu.cn:8080/TJbus/getTicketServlet?username=1352388&get_ticket_time=1415772567939&bus_id=1_5'
    date=$(date +%H%M%S)
done
echo $date;
exit 1;

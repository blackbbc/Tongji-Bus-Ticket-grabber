#同济班车抢票系统

##警告
同济班车已迁移至同心云，故本项目废弃！

##说明
运行环境是Ubuntu 14.10

语言是Linux Shell

##API

请自行修改里面的参数，比如`username`，`route_id`，`bus_id`

- 获取线路

`http://jiading.tongji.edu.cn:8080/TJbus/GetBusServlet?route_id=1`

- 获取历史记录

`http://jiading.tongji.edu.cn:8080/TJbus/TicketServlet?username=1352388&curtime=1415772567939&history=1`

- 订票

`http://jiading.tongji.edu.cn:8080/TJbus/getTicketServlet?username=1352388&get_ticket_time=1415772567939&bus_id=1_5`

- 设定余票（貌似需要管理员权限，没有用，以后再研究）

`http://jiading.tongji.edu.cn:8080/TJbus/SetDailyRestServlet?rest=5&bus_id=1_1`

##使用说明:

首先需要一台服务器（我的是ubuntu），将`getTicket.sh`文件放在任意目录下（我放在了`/home/`目录下），打开终端，输入
```
at 0550-f /home/getTicket.sh
```

然后第二天就可以收获了～～～


###命令说明：

`at`是linux下的一个工作调度命令，用于在指定的时间运行指定的命令或脚本

我设定为第二天的05:50开始抢票，到06:10停止工作

##PS：
第二天中午那班`12:05`的真难抢，由于服务器在美国的原因，经常抢不到票，不知道开5个工作调度会不会提高成功率

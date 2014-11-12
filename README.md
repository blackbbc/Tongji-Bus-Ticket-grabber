Tongji-Bus-Ticket-grabber
=========================

Please see the src and change your username

Use Linux Shell

In the terminal enter the flowing command:

at 05:55 -f (...)getTicket.sh

change the path in (...)

ie.
/home/sweet/getTicket

PS:
shell:syntax error:unexpected end of file
 
执行某bash脚本是发生: syntax error: unexpected end of file
主要问题是由windows下拷出文件到linux下执行的结果，
 
因为windows某些文件格式与Linux并不是完全兼容，两种方法解决：
 
1.vim处理
 
：set fileformat=unix
 
：wq
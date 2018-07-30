# img2ascii  
![WTFPL](https://img.shields.io/badge/license-WTFPL-007EC7.svg)
- 用于把图片转换成字符画  
- 我也不知道有什么实际作用，就是好玩而已  
## 用法
```
php img2ascii.php --in IN [--out OUT] [--ch CHAR] [--xstep NUM] [--ystep NUM]  
```
**参数**
- in：源图片的绝对路径
- out：输出图片的绝对路径，默认为`__DIR__.'\pic\output.png'`
- ch：组成图片的字符，默认为`*`
- xstep：图片x轴取像素点步长，默认为`4`
- ystep：图片y轴取像素点步长，默认为`2`  
  
**特别：输入输出图片只支持jpg、jpeg、png格式**  
## 示例    
**示例图片参数为默认参数**  

源图片|输出图片  
------------- | -------------  
![](https://github.com/loststar/img2ascii/blob/master/pic/1.jpg)  |  ![](https://github.com/loststar/img2ascii/blob/master/pic/1_output.png)
![](https://github.com/loststar/img2ascii/blob/master/pic/2.jpg)  |  ![](https://github.com/loststar/img2ascii/blob/master/pic/2_output.png)  

## 协议
![](http://www.wtfpl.net/wp-content/uploads/2012/12/wtfpl-badge-1.png)  
**WTFPL协议**  
十分因吹斯听的协议，官网 [WTFPL HOME](http://www.wtfpl.net/)  
全文很短，放一下(`・ω・´)
```
        DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
                    Version 2, December 2004 

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net> 

 Everyone is permitted to copy and distribute verbatim or modified 
 copies of this license document, and changing it is allowed as long 
 as the name is changed. 

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

  0. You just DO WHAT THE FUCK YOU WANT TO.
  ```

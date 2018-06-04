# Teacher 张东 Email: zhangdong@tedu.com

## Ready:
1.javascript权威指南
2.

### 选择子字符串
str.substring(starti, endi+1) => str.slice(starti, endi + 1)  
差别: substring 不支持负数参数
    变通：str.length - n

str.substr(starti, n) 从starti 开始选取n个字符

### 查找关键词（4种）：
1.查找一个固定的关键词的位置
```js
    var i = str.indexOf('word', fromi); 
    // 在 str 中， 从fromi 位置开始，找下一个关键词出现位置
    // 返回值：关键词的第一个字的位置
    // 找不到返回-1

    var i = str.lastIndexOf('keyword')
    查找str中关键词最后出现的位置
    优： 设置开始位置，找所有关键词的位置
    缺： 只能查找一个固定的关键词

    2. 判断是否包含符合正则条件的敏感词
    var i = str.search(/regexp/)
    查找str中查找第一个符合正则要求的关键词的位置
    返回值：关键词位置
    找不到返回-1

    3. 获得所有关键词的内容
    var kwords = str.match(/正则/i)
    查找str中所有关键词的内容
    返回值：关键词数组
    找不到返回null

    4.即找所有关键词的内容，又找所有关键词的位置
```
### 替换：
一、简单替换：将所有关键词替换为统一的新内容
    str.replace(/正则/ig, '替换值')
二、高级替换：根据每个关键词的内容，动态选择不同的新值替换
```js
str.replace(/正则/ig, function( kword ) {  //每找到一个关键词都自动调用，自动获得关键词的内容
        return 新值
    })
```
### 切割：
将一个字符串，按指定的字符切割为多段子字符串
如何：2种；
    1，简单切割，按一个固定的分隔符，分隔字符串
    var substr = str.split('分隔字符串')
    固定套路：打散字符串为字符串数组
    
    2.复杂切割：如果分隔符是变化的，可用正在
    var substrs = str.split(正则切割)

    6/2
     RegExp:
        什么是： 专门保存一条正则表达式，并提供正则表达式执行验证和查找操作的API的对象。
        何时：只要在js中使用正则表达式，都要先创建RegExp对象
        主要两个场景：
            1.验证字符串格式
            2.即查找所有关键词的内容，又查找每个关键词的位置
        如何：
        创建：2种：
        1.直接量：如果正则表达式不需要动态生成
        2.new RegExp(): 需要动态生成的
    API：
    1.验证字符串格式：
    var bool = reg.test(str)
        问题:正则，默认只要找到符合条件的内容，即使只是一部分也返回true
        解决：今后凡是验证，必须前加^后加$, 表示从头到尾完整匹配

### Math
专门保存算术运算的常量， 并提供算术运算的API
何时：只要涉及到数学运算时
如何：  
 + 创建: 不能new。 所有API通过Math.调用  
    + 取整：3种。  
        上取整：只要小数部分超过，就取下一个整数  
        ``` js
        Math.ceil(num);
        ```
        下取整：舍弃小数部分  
        ``` js
        Math.floor(num) vs parseInt(str);
        //可去掉数字后非数字字符（单位）
        ```
        四舍五入取整：整数后一位小数够5进1，不够舍弃  
        ``` js
        Math.round( num ) vs toFixed(2);
        /*
        1.Math.round() 只能取整
         .toFixed() 按任意小数位数四舍五入

        2.返回值：Math.round() 返回数字类型
                 .toFixed() 返回字符串类型
        */

        ```
    + 乘方和开平方
        ``` js
        Math.pow(底数, 幂)；
        Math.sqrt(n)；
        ```  
    + 最大值和最小值
        ``` js
        Math.max(n1,n2,n3 ... n)；
        Math.min(n1,n2,n3 ... n)；
        ```
    + 三角函数
        ``` js
        Math.sin();
        Math.cos();
        Math.tan();
        ```
    + 反三角函数：
        ``` js
        Math.asin();
        Math.acos();
        Math.atan();
        ```
    + 随机数
        ``` js
        Math.random();
        // 0 <= Math.random() < 1
        ```
### Date
保存一个时间日期的对象，提供访问时间的API  
何时：只要在程序中保存或操作时间，都要使用Date对象  
创建： 4种  
+  创建日期对象，并获得当前系统时间  
var now = new Date();  
强调：无法获得服务器时间，仅能获得客户端的时间  

+  创建日期对象，封装自定义时间  
var date = new Date("1928/11/12")  

+   可用一个毫秒数转换为一个时间  
原理: 起始日期对象中保存的也是一个毫秒数（1970/1/1)



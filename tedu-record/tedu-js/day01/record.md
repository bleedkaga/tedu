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

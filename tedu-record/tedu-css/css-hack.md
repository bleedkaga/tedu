# CSS Hack 的实现原理：使用CSS样式的优先级解决兼容性问题

## CSS Hack 的实现方式

### css类内部hack
    在样式属性名称前或属性值后增加前后缀，以便于浏览器识别不同的浏览器
    +: IE6/7
    -: IE6
    \0: IE8/9/10 后缀
    \9\0: IE9/10

### CSS选择器Hack
在选择器前增加前缀以识别不同的浏览器
*： IE6
*+： IE7
div~div{}
*div~div: IE6
*+div~div: IE7

### HTML头部引用hack
使用IE条件注释来判断浏览器的版本，从而执行不同的代码
语法：  

    ```
        <!-- [if condition IE version] -->
        ...dosothing
        <![endif] -->
        版本号 6 ~ 10
        condition: 
            1. gt 只有在大于指定版本的浏览器中才会执行代码

            <!--if gt IE 8>
            该段内容只在IE版本大于8的浏览器中
            <![endif] -->

            2. gte  大于等于
            3. lte  小于等于
            4. lt   小于
            5. !    在指定条件以外的浏览器版本中执行操作
            6. 省略条件 只在指定版本中去执行操作
            
    ```

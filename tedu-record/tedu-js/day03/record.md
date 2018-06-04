# 6/3 正课
## Date
API:3句话
+ 1.单位  
    + FullYear  
    + Month  
    + Date  
    + Day  
    + Hours  
    + Minutes  
    + Seconds  
    + Milliseconds
+ 2.每个单位上都有一对儿get/set 方法  
    + 其中：getXXX() 专门获取单位的数值
        setXXX() 专门设置单位的数值
    + 比如：  
        Date.getDate();   
        Date.getFullYear();    
        Date.setDate();  
        Date.setFullYear();
    + 特例：  
        Day 没有set, 不能修改
+ 3.取值范围  
    Month: 0 ~ 11 计算机中的Month比现实小1，在取值和修改时，要修正  
    Date: 1~31  
    Day:  0~6  
    Hours: 0 ~ 23  
    Minutes/Seconds: 0 ~ 59  

+ 4.计算（2种）  
    1.两个日期对象可相减，结果为毫秒差  
    2.对任意单位做加减(3步）：  
    + 1.获得单位上的当前值  


## Error
程序执行过程中，导致程序无法正常执行的异常情况，只要程序发生错误，就会中断错误  
错误处理：即使程序发生错误，也保证不会中断退出的机制  
如何发生错误的正确代码：  
try {
    可能发生错误的正确代码
} catch(err){
    一旦发生错误，就自动执行的错误处理代码
}  
其中：err是错误对象；错误发生时，自动创建并封装错误信息的对象。  
效率：放在try{} catch(err) {} 中执行的代码，效率略有降低。  
解决：用if else 代替try catch  
错误类型：  
    syntaxError： 语法错误  
    ReferenceError: 引用错误  
    RangeError: 范围错误  参数超范围
    typeError: 类型错误  错误的使用了（）【】{}
    URIError: Uri错误
    EvalError: Eval错误

## Function

## Closure
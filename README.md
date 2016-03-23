##关于token验证
接收手机端，头传递参数格式只能为json,
config.js 前端 生成token base64_decode下
 id(传递过来),time(传递过来),key(需要通过id取),版本号(设定值) header json
 key1 固定
 key2 java 固定值
两个版本号
每次调试前都要加上测试的id参数什么的
index.php/api/info/conf?command=homelist&clientid=17804ac281e6ddda&mobile_version=2015-10-01&time=123&token=74fbfeb8631939fdce0e54e5ecc07011&param=64
param 是手机端传过来的 json base64 后的参数，顺序对应什么参数,顺序不能错,$param不能公共部门传递




##关于方法
每次在  MobileController.class.php 文件中新增一个方法，要在 CommandController.class.php 中加入相应的方法模块

##关于数据库
任何在表中取数据的操作都要放到model里面


##关于接口
1、首页数据  加一个推荐，里面有一个title就可以了，其他跟以前的一样

公共接口
2、注册
3、登录
4、验证码


##关于表
t_taskdraw  用户做任务的状态
t_tasksmallinfo 随手与推广任务的详情



##跨域
js端以jsonp形式传参数过来  type:jsonp
php端
动态执行回调函数
$callback=$_GET['callback'];
echo $callback."($result)";
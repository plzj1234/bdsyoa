<?php
//在模型里单独设置数据库连接信息
namespace app\index\model;

use think\Model;
use think\Db;
use app\index\controller\UserInfo as UserInfo;

class PersonalBusiness extends Model
{
    protected $connection = [
        // 数据库类型
        'type'        => 'mysql',
        // 数据库连接DSN配置
        'dsn'         => '',
        // 服务器地址
        'hostname'    => '127.0.0.1',
        // 数据库名
        'database'    => 'bdsyoa',
        // 数据库用户名
        'username'    => 'root',
        // 数据库密码
        'password'    => '',
        // 数据库连接端口
        'hostport'    => '',
        // 数据库连接参数
        'params'      => [],
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => 'bdsy_',
    ];
	
	public function showbusiness($receiverid){
		$userinfo = new UserInfo ;
		$result = Db::query('select bdsy_personal_business.*,bdsy_user_info.name from bdsy_personal_business,bdsy_user_info where bdsy_personal_business.receiverid = "'.$receiverid.'" and bdsy_personal_business.receiverid=bdsy_user_info.id');
		if (count($result)>0){
			$myworklist='';
			foreach ($result as $value){
				//return dump($userinfo->getUserName($value['posterid']));
				$myworklist = $myworklist.'<tr>'.
				'<td>'.$value['type'].'</td>'.
				'<td>'.$value['businessname'].'</td>'.
				'<td>'.$value['name'].'</td>'.
				'<td>'.$value['posttime'].'</td>'.
				'<td>'.$value['sumbittime'].'</td>'.
				'<td>'.
				'<button type="button" class="btn btn-primary btn-xs businessshowsubmit" value="'.$value['id'].'">审批</button>&#12288'.
				'</td></tr>';
			}
		}else{
			$myworklist='<tr><td colspan="5">暂时未有业务！</td></tr>';
		}
		return $myworklist;
	}
}
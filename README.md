# pigeonic
### 框架
Laravel5.8
### 环境配置
php7.2.*
Mysql5.5
Redis
Apache
### 部署步骤
1.在本地环境,也就是自己电脑进行代码的编写等.
2.在 Github 上提交一个 Pull request .
3.在 Github 上提交 Pull request之后，就会进行一次CI检查.
4.Pull Request被通过或者 master 分支被更改,就会触发一次 Auto Deployment .然后,测试环境会自动与 master 分支保持同步,大概需要30秒.在测试环境中进行检查.
5.发起一个 Release ,推送到生产环境中.

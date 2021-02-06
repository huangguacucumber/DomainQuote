# 域名报价页

## 功能

> 前端页面

![snapshot_index.png](https://i.loli.net/2021/02/07/Y4Ud21FKvZO7mLa.png)

> 提交后：

![snapshot_2.png](https://i.loli.net/2021/02/07/TChBRv9EIo6FnXj.png)

> 提交之后邮箱还会收到一封邮件

![snapshot_three](https://i.loli.net/2021/02/06/1zC2VAiaySOvrwD.png)

下方可以直接回复给报价人。

## 如何使用

### 1.开启邮箱的SMTP服务

> 这里以**QQ邮箱**为例

1. 进入QQ邮箱**设置**

   ![qqmail1.png](https://i.loli.net/2021/02/06/28IVYG9PiFCMpED.png)

2. 进入”**账户**“

   ![qqmail2.png](https://i.loli.net/2021/02/06/gpCDskWaSoLHYyv.png)

3. 下滑找到"**POP3/IMAP/SMTP/Exchange/CardDAV/CalDAV服务**"，并开启带有"**SMTP**"的两项

![qqmail3.png](https://i.loli.net/2021/02/06/4po8fzUqEOALRMu.png)

4. 点击下方的"**生成授权码**"，根据提示生成授权码。

   ### 2.编辑config.php

1. 打开"**PHPMailer**"目录下的"**config.php**"文件

2. "**mailusername**"变量是您的**QQ邮箱账号**

3. "**mailpassword**"则是刚才申请的"**授权码**"

4. "**mailsmtpserver**"是邮箱的smtp服务器地址，QQ邮箱为"**smtp.qq.com**"

5. "**mailsmtpserverport**"是邮箱smtp服务器的端口号，QQ邮箱为"**465**"

   ### 开始使用

   运行您的server服务，即可开始使用。


<?php
include "config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
if($_POST["check"]=="check"){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //服务器配置
        $mail->CharSet ="UTF-8";                     //设定邮件编码
        $mail->SMTPDebug = 0;                        // 调试模式输出
        $mail->isSMTP();                             // 使用SMTP
        $mail->Host = $mailsmtpserver;                // SMTP服务器
        $mail->SMTPAuth = true;                      // 允许 SMTP 认证
        $mail->Username = $mailusername;                // SMTP 用户名  即邮箱的用户名
        $mail->Password = $mailpassword;             // SMTP 密码  部分邮箱是授权码(例如qq邮箱)
        $mail->SMTPSecure = 'ssl';                    // 允许 TLS 或者ssl协议
        $mail->Port = $mailsmtpserverport;                            // 服务器端口 25 或者465 具体要看邮箱服务器支持
        $mail->setFrom($mailusername, $_SERVER['HTTP_HOST']);  //发件人
        $mail->addAddress($mailusername,$mailusername );  // 收件人
        $mail->addReplyTo($_POST["email"], '报价人');
        $mail->isHTML(true);                                  // 是否以HTML文档格式发送  发送后客户端可直接显示对应HTML内容
        $mail->Subject = "您收到一份域名报价单";
        $mail->Body    = '<h1>您收到一份来自'.$_SERVER['HTTP_HOST'].'的域名报价单</h1><br /><p>姓：'.$_POST["1stname"].' 名：'.$_POST["lastname"].'</p><br /><p>报价：'.$_POST["price"].'元人民币</p><br /><p>Email：'.$_POST["email"].'</p><br /><p>注释或消息：'.$_POST["msg"].'</p>';
        $mail->AltBody = '您收到一份来自'.$_SERVER['HTTP_HOST'].'的域名报价单。姓：'.$_POST["1stname"].' 名：'.$_POST["lastname"].'；报价：'.$_POST["price"].'元人民币；Email：'.$_POST["email"].'；注释或消息：'.$_POST["msg"].'。';
        $mail->send();
        echo '<h1 style="text-align:center;">尊敬的'.$_POST["1stname"]."&nbsp;".$_POST["lastname"].'</h1><br/>'.
        '<h1 style="text-align:center;">您的报价我们已经收到</h1>'.
        '<h1 style="text-align:center;">后续将会使用Email与您联系。</h1>';
    } catch (Exception $e) {
        echo '邮件发送失败: ', $mail->ErrorInfo;
    }
}
?>
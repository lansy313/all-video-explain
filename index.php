<?php
include "Video.php";

$txt = '5.66 HIi:/ 复制打开抖音，看看【参哥带你走天下的作品】参哥内部团队赋能，告诉你如何在一个公司组织内提升自... https://v.douyin.com/2QKGAwg/';
// $txt = '安徽党媒云在火山分享了视频，快来围观！传送门戳我>>https://share.huoshan.com/hotsoon/s/NrwdjnMCGu8/ 复制此链接，打开【抖音火山版】，直接观看视频~';
// $txt = 'https://v.kuaishou.com/qxuCaH 爸爸认为女儿穿的裤子太短，居然这样做......... "意想不到 该作品在快手被播放过5,675.4万次，点击链接，打开【快手】直接观看！';
// $txt = 'https://v.ixigua.com/2QD15EG/';
// $txt = 'https://www.pearvideo.com/detail_1734295?st=7';
// $txt = 'https://h5.pipix.com/s/2QPYDwr/';
// $txt = 'https://share.xiaochuankeji.cn/hybrid/share/post?pid=246913586&zy_to=applink&share_count=1&m=336f3eedd23bb890a7bb2ff31f159ad1&d=4487cebd488fed22e9529c5a7652c50d0d8deb069457178ba08a814fd458e696a43b9ef0326db835eb20c328102d02f5&app=zuiyou&recommend=r0&name=n0&title_type=t0';
// $txt = 'https://kg3.qq.com/node/3e9WBU66CV/play_v2?s=VgWdL2VgpYFAPVx7&shareuid=619a9d8c272a318830&topsource=a0_pn201001006_z1_u370927634_l1_t1658742833__&chain_share_id=sNCpq1Mlqn6gafN2GWmwSus5xBODnugJ9L4szlcqA_Q&pageId=feed';
// $txt = 'https://video.weibo.com/show?fid=1034:4794488049303570';
// $txt = 'https://m.immomo.com/s/moment/new-share-v2/ax10274960933.html?time=1658741287&name=prh/2QxHVrTmVWkh1Bex2g==&avatar=26F7EDB0-6CBF-6014-3A56-56E0AD15D7C520160420&isdaren=1&isuploader=0&from=qqfriend';
// $txt = 'https://isee.weishi.qq.com/ws/app-pages/share/index.html?wxplay=1&id=7kYbWkiZY1OeHIxYw&spid=3339227596592716038&qua=v1_iph_weishi_8.75.1_131_app_a&chid=100081014&pkg=3670&attach=cp_reserves3_1000370011';
// $txt = 'http://www.meipai.com/video/650/6949941467138782911?client_id=1089857299&utm_media_id=6949941467138782911&utm_source=meipai_share&utm_term=meipai_ios&gid=2756366829&utm_content=9458&utm_share_type=3';
// $txt = 'http://xhslink.com/tfSYwi';
// $txt = '【世界上最幸运的人-哔哩哔哩】 https://b23.tv/xAOA462';
// $txt = 'https://www.xinpianchang.com/a11279266?xpcApp=xpc&channel=link&type=URL&from=share';
// $txt = 'https://h5.pipigx.com/pp/post/648004424804?zy_to=copy_link&share_count=1&m=4b153ae9073a4c7e19cc5c400070d3d1&app=&type=post&did=685e7aa957f32e25ffd2b69751c4ee7b&mid=7936445395310&pid=648004424804';
// $txt = 'https://haokan.hao123.com/v?vid=4846337093237572302&pd=haokan_share&context=%7B%22cuid%22%3A%22luSma0O_Sa_k8Baqg8SZ8YaX2ulLuSazYaHBaliO2u_Pav8ZjOvqajt5HO5WtHPcrIwmA%22%7D';


$api = new Video();
$ret = $api->exp($txt);
var_dump($ret);
<?php
//奥点（广电）云接口及播放线路js获取代码 - iptv信源、网络视频直播ip资源、直播代码 - 恩山无线论坛 - Powered by Discuz!
//https://www.right.com.cn/forum/thread-4128044-1-1.html

//<script src="https://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script><script>
//$.get('https://1812501212048408.cn-hangzhou.fc.aliyuncs.com/2016-08-15/proxy/node-api.online/node-api/tv/channelInfo?id=id',
//     function(data) {
//          //rtmp = data.data.rtmpUrl;
//          m3u8 = data.data.hlsUrl;
//          //flv = data.data.playUrl;
//         location.href = m3u8;
//    })
//<script>

$id=$_GET["id"];
$url="http://1812501212048408.cn-hangzhou.fc.aliyuncs.com/2016-08-15/proxy/node-api.online/node-api/tv/channelInfo?id=".$id."";

$result = file_get_contents($url);
$json = json_decode($result);
$playurl = $json->data->hlsUrl;

header("location: ".$playurl);
//echo $playurl;


//奥点(广电)云线路 - iptv信源、网络视频直播ip资源、直播代码 - 恩山无线论坛 - Powered by Discuz!
//https://www.right.com.cn/forum/thread-4101785-1-1.html
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_587.m3u8 CCTV1
//http://35789.hlsplay.aodianyun.com/tv_radio_35789/tv_channel_1725.m3u8 CCTV1
//
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_589.m3u8 CCTV3
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_590.m3u8 CCTV5
//
//http://39911.hlsplay.aodianyun.com/tv_radio_39911/tv_channel_1089.m3u8 天津卫视
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_547.m3u8 安徽卫视
//http://35498.hlsplay.aodianyun.com/tv_radio_35498/tv_channel_785.m3u8  东南卫视?
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_810.m3u8 湖南卫视
//
//http://33809.hlsplay.aodianyun.com/guangdianyun_33809/tv_channel_170.m3u8  乐清新闻
//http://33809.hlsplay.aodianyun.com/guangdianyun_33809/tv_channel_171.m3u8  乐清综合
//
//http://34540.hlsplay.aodianyun.com/guangdianyun_34540/tv_channel_206.m3u8  高碑店新闻综合
//
//http://30515.hlsplay.aodianyun.com/lms_30515/tv_channel_239.m3u8  吴江新闻综合
//
//http://30814.hlsplay.aodianyun.com/lms_30814/tv_channel_246.m3u8  巴中综合
//http://30814.hlsplay.aodianyun.com/lms_30814/tv_channel_247.m3u8  巴中公共
//
//http://35206.hlsplay.aodianyun.com/guangdianyun_35206/tv_channel_256.m3u8  藤县电视台
//
//http://34766.hlsplay.aodianyun.com/guangdianyun_34766/tv_channel_304.m3u8  随州综合
//http://34766.hlsplay.aodianyun.com/guangdianyun_34766/tv_channel_305.m3u8  随州农村
//
//http://35908.hlsplay.aodianyun.com/guangdianyun_35908/tv_channel_327.m3u8  长乐台
//
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_346.m3u8  长沙新闻
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_348.m3u8  长沙政法
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_349.m3u8  长沙女性
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_350.m3u8  长沙影视
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_354.m3u8  长沙嘉丽购
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_355.m3u8  长沙移动电视-磁浮
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_356.m3u8  长沙移动电视-地铁
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_357.m3u8  长沙移动电视-公交
//
//http://34911.hlsplay.aodianyun.com/guangdianyun_34911/tv_channel_390.m3u8  襄阳综合
//
//http://36504.hlsplay.aodianyun.com/guangdianyun_36504/tv_channel_391.m3u8 射洪综合
//
//http://35498.hlsplay.aodianyun.com/guangdianyun_35498/tv_channel_425.m3u8  沙县新闻综合
//
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_545.m3u8  桐城新闻?
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_546.m3u8  桐城影视?
//
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_564.m3u8  临沂综合
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1243.m3u8  临沂公共
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1244.m3u8  临沂农科
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1245.m3u8  临沂图文
//
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_593.m3u8  平山综合
//
//http://35781.hlsplay.aodianyun.com/tv_radio_35781/tv_channel_643.m3u8  信宜电视台
//
//http://32130.hlsplay.aodianyun.com/tv_radio_32130/tv_channel_679.m3u8  郴州公共
//http://32130.hlsplay.aodianyun.com/tv_radio_32130/tv_channel_680.m3u8  郴州新闻综合
//
//http://37652.hlsplay.aodianyun.com/tv_radio_37652/tv_channel_699.m3u8  福清综合
//
//http://36400.hlsplay.aodianyun.com/tv_radio_36400/tv_channel_732.m3u8  冀州新闻综合
//http://36400.hlsplay.aodianyun.com/tv_radio_36400/tv_channel_734.m3u8  冀州生活资讯
//
//http://31191.hlsplay.aodianyun.com/tv_radio_31191/tv_channel_907.m3u8  平潭综合
//http://31191.hlsplay.aodianyun.com/tv_radio_31191/tv_channel_908.m3u8  平潭文旅
//
//http://40426.hlsplay.aodianyun.com/tv_radio_40426/tv_channel_1588.m3u8  宁国新闻综合
//http://40426.hlsplay.aodianyun.com/tv_radio_40426/tv_channel_1589.m3u8  宁国城市生活
//
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_765.m3u8  尤溪新闻综合
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_766.m3u8  尤溪城市生活
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_767.m3u8  尤溪旅游宣传
//
//http://37425.hlsplay.aodianyun.com/tv_radio_37425/tv_channel_774.m3u8  灌云影视
//http://37425.hlsplay.aodianyun.com/tv_radio_37425/tv_channel_777.m3u8  灌云综合
//
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_800.m3u8 湘阴综合
//
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_812.m3u8  岳阳新闻综合
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1699.m3u8  岳阳新闻综合2
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1700.m3u8  岳阳科教
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1701.m3u8  岳阳公共
//
//http://35983.hlsplay.aodianyun.com/tv_radio_35983/tv_channel_898.m3u8  播州电视台
//
//http://36351.hlsplay.aodianyun.com/tv_radio_36351/tv_channel_1025.m3u8  安溪电视台
//
//http://39768.hlsplay.aodianyun.com/tv_radio_39768/tv_channel_1792.m3u8  永春综合
//http://39768.hlsplay.aodianyun.com/tv_radio_39768/tv_channel_1793.m3u8  永春公共
//
//http://33684.hlsplay.aodianyun.com/tv_radio_33684/tv_channel_1066.m3u8  金普1
//
//http://39911.hlsplay.aodianyun.com/tv_radio_39911/tv_channel_1106.m3u8  河东区电视
//
//http://34666.hlsplay.aodianyun.com/tv_radio_34666/tv_channel_1181.m3u8  富阳综合
//
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1190.m3u8  大庆新闻综合
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1517.m3u8  大庆教育
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1224.m3u8  大庆公共
//
//http://39669.hlsplay.aodianyun.com/tv_radio_39669/tv_channel_1994.m3u8  三明1套HD
//http://39669.hlsplay.aodianyun.com/tv_radio_39669/tv_channel_1995.m3u8  三明2套HD
//
//http://41428.hlsplay.aodianyun.com/tv_radio_41428/tv_channel_1203.m3u8  曲沃电视
//
//http://36656.hlsplay.aodianyun.com/tv_radio_36656/tv_channel_1222.m3u8  怀来综合
//
//http://35813.hlsplay.aodianyun.com/tv_radio_35813/tv_channel_911.m3u8  温岭新闻综合
//http://35813.hlsplay.aodianyun.com/tv_radio_35813/tv_channel_1287.m3u8  温岭民生休闲
//
//http://41138.hlsplay.aodianyun.com/tv_radio_41138/tv_channel_1306.m3u8  嘉祥新闻综合
//http://41138.hlsplay.aodianyun.com/tv_radio_41138/tv_channel_1307.m3u8  嘉祥生活
//
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1315.m3u8  牡丹江新闻综合
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1546.m3u8  牡丹江教育
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1547.m3u8  牡丹江公共
//
//http://36009.hlsplay.aodianyun.com/tv_radio_36009/tv_channel_1330.m3u8  儋州台
//
//http://40604.hlsplay.aodianyun.com/tv_radio_40604/tv_channel_1343.m3u8  道县综合
//
//http://42483.hlsplay.aodianyun.com/tv_radio_42483/tv_channel_1361.m3u8  新昌新闻
//http://42483.hlsplay.aodianyun.com/tv_radio_42483/tv_channel_1362.m3u8  新昌生活
//
//http://36514.hlsplay.aodianyun.com/tv_radio_36514/tv_channel_1381.m3u8  湘西公共
//http://36514.hlsplay.aodianyun.com/tv_radio_36514/tv_channel_1382.m3u8  湘西综合 
//
//http://38649.hlsplay.aodianyun.com/tv_radio_38649/tv_channel_1399.m3u8  中国供销
//
//http://33658.hlsplay.aodianyun.com/tv_radio_33658/tv_channel_1423.m3u8  宁海新闻综合
//
//http://35608.hlsplay.aodianyun.com/tv_radio_35608/tv_channel_1476.m3u8  上杭综合
//
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1499.m3u8  安吉新闻综合
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1526.m3u8  安吉生活
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1528.m3u8  安吉影视
//
//http://35789.hlsplay.aodianyun.com/tv_radio_35789/tv_channel_1724.m3u8 南县电视台
//
//http://40874.hlsplay.aodianyun.com/tv_radio_40874/tv_channel_1729.m3u8 沅陵新闻综合
//
//http://46988.hlsplay.aodianyun.com/tv_radio_46988/tv_channel_1794.m3u8 望奎电视台
//
//https://46888.hlsplay.aodianyun.com/tv_radio_46888/tv_channel_1788.m3u8 浏阳电视台
//
//http://30814.hlsplay.aodianyun.com/tv_radio_30814/tv_channel_1839.m3u8 巴州电视
//
//http://36903.hlsplay.aodianyun.com/copy_gdy_36903/copy_stream_1_channel_45820.m3u8 南江电视台
//
//http://36391.hlsplay.aodianyun.com/tv_radio_36391/tv_channel_1886.m3u8 潞州电视台
//
//http://31472.hlsplay.aodianyun.com/tv_radio_31472/tv_channel_1898.m3u8 神农架新闻综合
//
//http://47447.hlsplay.aodianyun.com/tv_radio_47447/tv_channel_1902.m3u8 柳州新闻综合
//http://47447.hlsplay.aodianyun.com/tv_radio_47447/tv_channel_1808.m3u8 柳州科教
//
//http://41007.hlsplay.aodianyun.com/tv_radio_41007/tv_channel_1923.m3u8 阜阳新闻综合
//http://41007.hlsplay.aodianyun.com/tv_radio_41007/tv_channel_2066.m3u8 阜阳新闻综合2
//
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1969.m3u8 平顶山新闻综合
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1972.m3u8 平顶山清风
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1973.m3u8 平顶山民生
//
//http://46166.hlsplay.aodianyun.com/tv_radio_46166/tv_channel_1982.m3u8 蔡甸新闻综合
//
//http://44621.hlsplay.aodianyun.com/tv_radio_44621/tv_channel_1997.m3u8 六合新闻综合
//http://44621.hlsplay.aodianyun.com/tv_radio_44621/tv_channel_1998.m3u8 六合影视
//
//http://40278.hlsplay.aodianyun.com/tv_radio_40278/tv_channel_2042.m3u8 汉川新闻综合
//http://40278.hlsplay.aodianyun.com/tv_radio_40278/tv_channel_2043.m3u8 汉川生活资讯
//
//http://40419.hlsplay.aodianyun.com/tv_radio_40419/tv_channel_2063.m3u8 布尔津汉语综合
//http://40419.hlsplay.aodianyun.com/tv_radio_40419/tv_channel_2064.m3u8 布尔津哈语综合
//
//http://41442.hlsplay.aodianyun.com/tv_radio_41442/tv_channel_2068.m3u8 闽侯综合
//
//http://34808.hlsplay.aodianyun.com/tv_radio_34808/tv_channel_2073.m3u8 十堰教育
//
//http://49121.hlsplay.aodianyun.com/tv_radio_49121/tv_channel_2083.m3u8 芮城综合
//
//http://37307.hlsplay.aodianyun.com/guangdianyun_37307/program_live_channel_14054.m3u8 山西社会与法治
//
//http://40195.hlsplay.aodianyun.com/diantaizhibo/stream.m3u8 浮梁综合
//
//http://42263.hlsplay.aodianyun.com/tv_radio_42263/tv_channel_1335.m3u8 永嘉新闻综合

?>
<?php
//�µ㣨��磩�ƽӿڼ�������·js��ȡ���� - iptv��Դ��������Ƶֱ��ip��Դ��ֱ������ - ��ɽ������̳ - Powered by Discuz!
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


//�µ�(���)����· - iptv��Դ��������Ƶֱ��ip��Դ��ֱ������ - ��ɽ������̳ - Powered by Discuz!
//https://www.right.com.cn/forum/thread-4101785-1-1.html
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_587.m3u8 CCTV1
//http://35789.hlsplay.aodianyun.com/tv_radio_35789/tv_channel_1725.m3u8 CCTV1
//
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_589.m3u8 CCTV3
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_590.m3u8 CCTV5
//
//http://39911.hlsplay.aodianyun.com/tv_radio_39911/tv_channel_1089.m3u8 �������
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_547.m3u8 ��������
//http://35498.hlsplay.aodianyun.com/tv_radio_35498/tv_channel_785.m3u8  ��������?
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_810.m3u8 ��������
//
//http://33809.hlsplay.aodianyun.com/guangdianyun_33809/tv_channel_170.m3u8  ��������
//http://33809.hlsplay.aodianyun.com/guangdianyun_33809/tv_channel_171.m3u8  �����ۺ�
//
//http://34540.hlsplay.aodianyun.com/guangdianyun_34540/tv_channel_206.m3u8  �߱��������ۺ�
//
//http://30515.hlsplay.aodianyun.com/lms_30515/tv_channel_239.m3u8  �⽭�����ۺ�
//
//http://30814.hlsplay.aodianyun.com/lms_30814/tv_channel_246.m3u8  �����ۺ�
//http://30814.hlsplay.aodianyun.com/lms_30814/tv_channel_247.m3u8  ���й���
//
//http://35206.hlsplay.aodianyun.com/guangdianyun_35206/tv_channel_256.m3u8  ���ص���̨
//
//http://34766.hlsplay.aodianyun.com/guangdianyun_34766/tv_channel_304.m3u8  �����ۺ�
//http://34766.hlsplay.aodianyun.com/guangdianyun_34766/tv_channel_305.m3u8  ����ũ��
//
//http://35908.hlsplay.aodianyun.com/guangdianyun_35908/tv_channel_327.m3u8  ����̨
//
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_346.m3u8  ��ɳ����
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_348.m3u8  ��ɳ����
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_349.m3u8  ��ɳŮ��
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_350.m3u8  ��ɳӰ��
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_354.m3u8  ��ɳ������
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_355.m3u8  ��ɳ�ƶ�����-�Ÿ�
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_356.m3u8  ��ɳ�ƶ�����-����
//http://35848.hlsplay.aodianyun.com/guangdianyun_35848/tv_channel_357.m3u8  ��ɳ�ƶ�����-����
//
//http://34911.hlsplay.aodianyun.com/guangdianyun_34911/tv_channel_390.m3u8  �����ۺ�
//
//http://36504.hlsplay.aodianyun.com/guangdianyun_36504/tv_channel_391.m3u8 ����ۺ�
//
//http://35498.hlsplay.aodianyun.com/guangdianyun_35498/tv_channel_425.m3u8  ɳ�������ۺ�
//
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_545.m3u8  ͩ������?
//http://35979.hlsplay.aodianyun.com/tv_radio_35979/tv_channel_546.m3u8  ͩ��Ӱ��?
//
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_564.m3u8  �����ۺ�
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1243.m3u8  ���ʹ���
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1244.m3u8  ����ũ��
//http://36773.hlsplay.aodianyun.com/tv_radio_36773/tv_channel_1245.m3u8  ����ͼ��
//
//http://37248.hlsplay.aodianyun.com/tv_radio_37248/tv_channel_593.m3u8  ƽɽ�ۺ�
//
//http://35781.hlsplay.aodianyun.com/tv_radio_35781/tv_channel_643.m3u8  ���˵���̨
//
//http://32130.hlsplay.aodianyun.com/tv_radio_32130/tv_channel_679.m3u8  ���ݹ���
//http://32130.hlsplay.aodianyun.com/tv_radio_32130/tv_channel_680.m3u8  ���������ۺ�
//
//http://37652.hlsplay.aodianyun.com/tv_radio_37652/tv_channel_699.m3u8  �����ۺ�
//
//http://36400.hlsplay.aodianyun.com/tv_radio_36400/tv_channel_732.m3u8  ���������ۺ�
//http://36400.hlsplay.aodianyun.com/tv_radio_36400/tv_channel_734.m3u8  ����������Ѷ
//
//http://31191.hlsplay.aodianyun.com/tv_radio_31191/tv_channel_907.m3u8  ƽ̶�ۺ�
//http://31191.hlsplay.aodianyun.com/tv_radio_31191/tv_channel_908.m3u8  ƽ̶����
//
//http://40426.hlsplay.aodianyun.com/tv_radio_40426/tv_channel_1588.m3u8  ���������ۺ�
//http://40426.hlsplay.aodianyun.com/tv_radio_40426/tv_channel_1589.m3u8  ������������
//
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_765.m3u8  ��Ϫ�����ۺ�
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_766.m3u8  ��Ϫ��������
//http://38269.hlsplay.aodianyun.com/tv_radio_38269/tv_channel_767.m3u8  ��Ϫ��������
//
//http://37425.hlsplay.aodianyun.com/tv_radio_37425/tv_channel_774.m3u8  ����Ӱ��
//http://37425.hlsplay.aodianyun.com/tv_radio_37425/tv_channel_777.m3u8  �����ۺ�
//
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_800.m3u8 �����ۺ�
//
//http://36132.hlsplay.aodianyun.com/tv_radio_36132/tv_channel_812.m3u8  ���������ۺ�
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1699.m3u8  ���������ۺ�2
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1700.m3u8  �����ƽ�
//http://39006.hlsplay.aodianyun.com/tv_radio_39006/tv_channel_1701.m3u8  ��������
//
//http://35983.hlsplay.aodianyun.com/tv_radio_35983/tv_channel_898.m3u8  ���ݵ���̨
//
//http://36351.hlsplay.aodianyun.com/tv_radio_36351/tv_channel_1025.m3u8  ��Ϫ����̨
//
//http://39768.hlsplay.aodianyun.com/tv_radio_39768/tv_channel_1792.m3u8  �����ۺ�
//http://39768.hlsplay.aodianyun.com/tv_radio_39768/tv_channel_1793.m3u8  ��������
//
//http://33684.hlsplay.aodianyun.com/tv_radio_33684/tv_channel_1066.m3u8  ����1
//
//http://39911.hlsplay.aodianyun.com/tv_radio_39911/tv_channel_1106.m3u8  �Ӷ�������
//
//http://34666.hlsplay.aodianyun.com/tv_radio_34666/tv_channel_1181.m3u8  �����ۺ�
//
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1190.m3u8  ���������ۺ�
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1517.m3u8  �������
//http://34532.hlsplay.aodianyun.com/tv_radio_34532/tv_channel_1224.m3u8  ���칫��
//
//http://39669.hlsplay.aodianyun.com/tv_radio_39669/tv_channel_1994.m3u8  ����1��HD
//http://39669.hlsplay.aodianyun.com/tv_radio_39669/tv_channel_1995.m3u8  ����2��HD
//
//http://41428.hlsplay.aodianyun.com/tv_radio_41428/tv_channel_1203.m3u8  ���ֵ���
//
//http://36656.hlsplay.aodianyun.com/tv_radio_36656/tv_channel_1222.m3u8  �����ۺ�
//
//http://35813.hlsplay.aodianyun.com/tv_radio_35813/tv_channel_911.m3u8  ���������ۺ�
//http://35813.hlsplay.aodianyun.com/tv_radio_35813/tv_channel_1287.m3u8  ������������
//
//http://41138.hlsplay.aodianyun.com/tv_radio_41138/tv_channel_1306.m3u8  ���������ۺ�
//http://41138.hlsplay.aodianyun.com/tv_radio_41138/tv_channel_1307.m3u8  ��������
//
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1315.m3u8  ĵ���������ۺ�
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1546.m3u8  ĵ��������
//http://42098.hlsplay.aodianyun.com/tv_radio_42098/tv_channel_1547.m3u8  ĵ��������
//
//http://36009.hlsplay.aodianyun.com/tv_radio_36009/tv_channel_1330.m3u8  ����̨
//
//http://40604.hlsplay.aodianyun.com/tv_radio_40604/tv_channel_1343.m3u8  �����ۺ�
//
//http://42483.hlsplay.aodianyun.com/tv_radio_42483/tv_channel_1361.m3u8  �²�����
//http://42483.hlsplay.aodianyun.com/tv_radio_42483/tv_channel_1362.m3u8  �²�����
//
//http://36514.hlsplay.aodianyun.com/tv_radio_36514/tv_channel_1381.m3u8  ��������
//http://36514.hlsplay.aodianyun.com/tv_radio_36514/tv_channel_1382.m3u8  �����ۺ� 
//
//http://38649.hlsplay.aodianyun.com/tv_radio_38649/tv_channel_1399.m3u8  �й�����
//
//http://33658.hlsplay.aodianyun.com/tv_radio_33658/tv_channel_1423.m3u8  ���������ۺ�
//
//http://35608.hlsplay.aodianyun.com/tv_radio_35608/tv_channel_1476.m3u8  �Ϻ��ۺ�
//
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1499.m3u8  ���������ۺ�
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1526.m3u8  ��������
//http://32664.hlsplay.aodianyun.com/tv_radio_32664/tv_channel_1528.m3u8  ����Ӱ��
//
//http://35789.hlsplay.aodianyun.com/tv_radio_35789/tv_channel_1724.m3u8 ���ص���̨
//
//http://40874.hlsplay.aodianyun.com/tv_radio_40874/tv_channel_1729.m3u8 ���������ۺ�
//
//http://46988.hlsplay.aodianyun.com/tv_radio_46988/tv_channel_1794.m3u8 ��������̨
//
//https://46888.hlsplay.aodianyun.com/tv_radio_46888/tv_channel_1788.m3u8 �������̨
//
//http://30814.hlsplay.aodianyun.com/tv_radio_30814/tv_channel_1839.m3u8 ���ݵ���
//
//http://36903.hlsplay.aodianyun.com/copy_gdy_36903/copy_stream_1_channel_45820.m3u8 �Ͻ�����̨
//
//http://36391.hlsplay.aodianyun.com/tv_radio_36391/tv_channel_1886.m3u8 º�ݵ���̨
//
//http://31472.hlsplay.aodianyun.com/tv_radio_31472/tv_channel_1898.m3u8 ��ũ�������ۺ�
//
//http://47447.hlsplay.aodianyun.com/tv_radio_47447/tv_channel_1902.m3u8 ���������ۺ�
//http://47447.hlsplay.aodianyun.com/tv_radio_47447/tv_channel_1808.m3u8 ���ݿƽ�
//
//http://41007.hlsplay.aodianyun.com/tv_radio_41007/tv_channel_1923.m3u8 ���������ۺ�
//http://41007.hlsplay.aodianyun.com/tv_radio_41007/tv_channel_2066.m3u8 ���������ۺ�2
//
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1969.m3u8 ƽ��ɽ�����ۺ�
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1972.m3u8 ƽ��ɽ���
//http://40057.hlsplay.aodianyun.com/tv_radio_40057/tv_channel_1973.m3u8 ƽ��ɽ����
//
//http://46166.hlsplay.aodianyun.com/tv_radio_46166/tv_channel_1982.m3u8 �̵������ۺ�
//
//http://44621.hlsplay.aodianyun.com/tv_radio_44621/tv_channel_1997.m3u8 ���������ۺ�
//http://44621.hlsplay.aodianyun.com/tv_radio_44621/tv_channel_1998.m3u8 ����Ӱ��
//
//http://40278.hlsplay.aodianyun.com/tv_radio_40278/tv_channel_2042.m3u8 ���������ۺ�
//http://40278.hlsplay.aodianyun.com/tv_radio_40278/tv_channel_2043.m3u8 ����������Ѷ
//
//http://40419.hlsplay.aodianyun.com/tv_radio_40419/tv_channel_2063.m3u8 ���������ۺ�
//http://40419.hlsplay.aodianyun.com/tv_radio_40419/tv_channel_2064.m3u8 ����������ۺ�
//
//http://41442.hlsplay.aodianyun.com/tv_radio_41442/tv_channel_2068.m3u8 �����ۺ�
//
//http://34808.hlsplay.aodianyun.com/tv_radio_34808/tv_channel_2073.m3u8 ʮ�߽���
//
//http://49121.hlsplay.aodianyun.com/tv_radio_49121/tv_channel_2083.m3u8 �ǳ��ۺ�
//
//http://37307.hlsplay.aodianyun.com/guangdianyun_37307/program_live_channel_14054.m3u8 ɽ������뷨��
//
//http://40195.hlsplay.aodianyun.com/diantaizhibo/stream.m3u8 �����ۺ�
//
//http://42263.hlsplay.aodianyun.com/tv_radio_42263/tv_channel_1335.m3u8 ���������ۺ�

?>
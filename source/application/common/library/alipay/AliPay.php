<?php

namespace app\common\library\alipay;

use app\common\library\alipay\AopClient;
use app\common\library\alipay\AlipayTradeWapPayRequest;
/**
 * 微信支付
 * Class AliPay
 * @package app\common\library\alipay
 */
class AliPay
{
    private $config; // 支付宝支付配置

    /**
     * 构造方法
     * WxPay constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * 统一下单API
     * @param $order_no
     * @param $total_fee
     * @return array
     * @throws BaseException
     */
    public function unifiedorder($order_no,  $total_fee)
    {

        $aop = new AopClient ();
        $aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
        $aop->appId = 'your app_id';
        $aop->rsaPrivateKey = '请填写开发者私钥去头去尾去回车，一行字符串';
        $aop->alipayrsaPublicKey='请填写支付宝公钥，一行字符串';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset='GBK';
        $aop->format='json';
        $aop->return_url='支付完跳转地址';
        $aop->notify_url=base_url() . 'notice.php'; // 异步通知地址
        $request = new AlipayTradeWapPayRequest ();
        $request->setBizContent("{" .
        "\"body\":\"Iphone6 16G\"," .
        "\"subject\":\"测试\"," .
        "\"out_trade_no\":\"70501111111S001111119\"," .
        "\"timeout_express\":\"90m\"," .
        "\"time_expire\":\"2016-12-31 10:05\"," .
        "\"total_amount\":9.00," .
        "\"seller_id\":\"2088102147948060\"," .
        "\"auth_token\":\"appopenBb64d181d0146481ab6a762c00714cC27\"," .
        "\"goods_type\":\"0\"," .
        "\"quit_url\":\"http://www.taobao.com/product/113714.html\"," .
        "\"passback_params\":\"merchantBizType%3d3C%26merchantBizNo%3d2016010101111\"," .
        "\"product_code\":\"QUICK_WAP_PAY\"," .
        "\"promo_params\":\"{\\\"storeIdType\\\":\\\"1\\\"}\"," .
        "\"extend_params\":{" .
        "\"sys_service_provider_id\":\"2088511833207846\"," .
        "\"hb_fq_num\":\"3\"," .
        "\"hb_fq_seller_percent\":\"100\"," .
        "\"industry_reflux_info\":\"{\\\\\\\"scene_code\\\\\\\":\\\\\\\"metro_tradeorder\\\\\\\",\\\\\\\"channel\\\\\\\":\\\\\\\"xxxx\\\\\\\",\\\\\\\"scene_data\\\\\\\":{\\\\\\\"asset_name\\\\\\\":\\\\\\\"ALIPAY\\\\\\\"}}\"," .
        "\"card_type\":\"S0JP0000\"" .
        "    }," .
        "\"sub_merchant\":{" .
        "\"merchant_id\":\"2088000603999128\"," .
        "\"merchant_type\":\"alipay: 支付宝分配的间连商户编号, merchant: 商户端的间连商户编号\"" .
        "    }," .
        "\"merchant_order_no\":\"20161008001\"," .
        "\"enable_pay_channels\":\"pcredit,moneyFund,debitCardExpress\"," .
        "\"disable_pay_channels\":\"pcredit,moneyFund,debitCardExpress\"," .
        "\"store_id\":\"NJ_001\"," .
        "      \"goods_detail\":[{" .
        "        \"goods_id\":\"apple-01\"," .
        "\"alipay_goods_id\":\"20010001\"," .
        "\"goods_name\":\"ipad\"," .
        "\"quantity\":1," .
        "\"price\":2000," .
        "\"goods_category\":\"34543238\"," .
        "\"categories_tree\":\"124868003|126232002|126252004\"," .
        "\"body\":\"特价手机\"," .
        "\"show_url\":\"http://www.alipay.com/xxx.jpg\"" .
        "        }]," .
        "\"settle_info\":{" .
        "        \"settle_detail_infos\":[{" .
        "          \"trans_in_type\":\"cardAliasNo\"," .
        "\"trans_in\":\"A0001\"," .
        "\"summary_dimension\":\"A0001\"," .
        "\"settle_entity_id\":\"2088xxxxx;ST_0001\"," .
        "\"settle_entity_type\":\"SecondMerchant、Store\"," .
        "\"amount\":0.1" .
        "          }]," .
        "\"settle_period_time\":\"7d\"" .
        "    }," .
        "\"invoice_info\":{" .
        "\"key_info\":{" .
        "\"is_support_invoice\":true," .
        "\"invoice_merchant_name\":\"ABC|003\"," .
        "\"tax_num\":\"1464888883494\"" .
        "      }," .
        "\"details\":\"[{\\\"code\\\":\\\"100294400\\\",\\\"name\\\":\\\"服饰\\\",\\\"num\\\":\\\"2\\\",\\\"sumPrice\\\":\\\"200.00\\\",\\\"taxRate\\\":\\\"6%\\\"}]\"" .
        "    }," .
        "\"specified_channel\":\"pcredit\"," .
        "\"business_params\":\"{\\\"data\\\":\\\"123\\\"}\"," .
        "\"ext_user_info\":{" .
        "\"name\":\"李明\"," .
        "\"mobile\":\"16587658765\"," .
        "\"cert_type\":\"IDENTITY_CARD\"," .
        "\"cert_no\":\"362334768769238881\"," .
        "\"min_age\":\"18\"," .
        "\"fix_buyer\":\"F\"," .
        "\"need_check_info\":\"F\"" .
        "    }" .
        "  }");
        $result = $aop->pageExecute ( $request); 

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;
        if(!empty($resultCode)&&$resultCode == 10000){
        echo "成功";
        } else {
        echo "失败";
        }

        return [
            'prepay_id' => $prepay['prepay_id'],
            'nonceStr' => $nonceStr,
            'timeStamp' => (string)$time,
            'paySign' => $paySign
        ];
    }

    /**
     * 支付成功异步通知
     * @param \app\task\model\Order $OrderModel
     * @throws BaseException
     * @throws \Exception
     * @throws \think\exception\DbException
     */
    public function notify($PayOrderModel)
    {

    }

  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BaokimPay\baokim_payment_pro;
use App\BaokimPay\baokim_payment;

class PaymentBaoKim extends Controller
{
    public function index(){
    	//CẤU HÌNH TÀI KHOẢN (Configure account)
		define('EMAIL_BUSINESS','vanchibg@gmail.com');//Email Bảo kim
		define('MERCHANT_ID','33919');                // Mã website tích hợp
		define('SECURE_PASS','4fea91fad61826d3');   // Mật khẩu

		// Cấu hình tài khoản tích hợp
		define('API_USER','test_api');  //API USER
		//define('API_PWD','2q1vYc8pJ57bAW9VjCnXH1htk3GOK');       //API PASSWORD
		define('API_PWD','791LKvVo3qTSzgHR6ysB91ZX1b1t7');       //API PASSWORD
		define('PRIVATE_KEY_BAOKIM','-----BEGIN PRIVATE KEY-----
		MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCv3ZWFmSEHVA3t
		19pxEnx+qdjm4IubJ9oNLVjnIRpLiYKGAmoyzaLU0izTPUSqCek+zDNfkQMNEr6s
		2g9E287AvtIyPv1dgkkgoKXdLy29vII0/aZQMJPNirPl2fbGpp/v7ZN3nfvaKrU4
		NI7XMLvjyOklQ9dKiloCK9JIZyL5wPOtdUTxz187rR4dzLyEs+an682tfPA16LIV
		GDawoxEez6eAM8F3J2oJGNIvkn8lOtfeHw+1LdskyOXQYZdkXybnDnAro1fdzfkH
		+TWKPN//hJ4sKLINGKlKTs8V2UDtmjc3O8ndPdfvqzQ6CJfhLCialCWOzFuNG6Wy
		MfVv2u+VAgMBAAECggEAOBj9ff0njPfh7ZFiC5ly/tBc8OCFh7uBkZx6dFeZ1KiL
		awXQLF5t52cXh1ZO1dKNhUuLw5s1FvF4wxhXsIZRACieUgrHtRE/FFpKLjDDbXd5
		LUAP0hp8ux7YXaRWVG2ILPdih9BsKt5eqgwR2FCiTnmi7REj1pIlPfYOgKvtey7q
		5f+/LIwDR+188C5i+nO8TbEEXVbd58eA3M5hDcbj3pvxMvaFMgESHNIZKwLpndjg
		XPFaHRIcfmttzP+v9eafMv7fDxdKTH7zJ756X1jYegEWSD9qQAL9OzxHgp6psdgB
		AEIT5/KVJAXugrBy+kKx9sx8DhKEaZn1yU4747DPLQKBgQDYzp6MJ+u34PYhVn7z
		AKCA2sSQuc7LVqXeHEJmSYjoO+crIQ6w4xZOpwGwd6RIufiZBKrX0r7WSbV0OqkH
		0HLtrZDityc6z0ddGjywrf4EIiga2eykARewBZiP79prckLft0fQe3U4ZV/K+2ha
		gcjBkJ3ZKva9j8ppSPj1nIGB1wKBgQDPqEaGSHXY2lgYhP0MVNWuc2+ikFOembYz
		ZntX4H8IhtJMdGg0+pxKycxPP07De2318JDAIH41jRU6mHuHJTzGkjX/zrVI4yj+
		YIJcpaN1+xmGR9dvycmVJ9eVQzyJekqudF4SBTYNHwHxCzS8vtlQtWk9blJ4W0Nb
		TdpWGUPEcwKBgBuxUJkQZFBpYKbjeHWrh9TNnLvrr9lTKP6U13pfPCiFtkJRB6Ja
		bzf+pv2WWpqbfoB1EylcFtoiMhY1g++mlXd8avw6br1ZSoE+36+lmcOHZV4ApfRQ
		22i1XkZMWbbNsnMG4xpjGpbog/LWZ/7fgvgOc8sQbNHLswv9sScWJYijAoGAGCdj
		pKTzCDlFe/ykDnYjsLn+pzMQduc8OThXan5TaGN+PKRhpp/r5Asa97DOcZB+1teX
		jrF43LO/X2RzIeIj8pj5LPsXPRYnI4eIQkyF+eguLN9YYMlg6DeNLPB4LymJXEdu
		1bvDcL1FlYsPJFEyp9+iESIu947uA8XHerJPnp8CgYEAgTnqYPBjKbIQgGUIOM4N
		rZCztBqitNkhow2/Cl1GvtB1XieDZfSDSVdW9lArzvL5InAWUPbu8BUzbxh7OP4z
		9CgCSFp7EvABLYQF+ePuSUX/pEzV/MCyF6Ybh+FuKSz2O4t5t508Z7frfZ/v7Q35
		PuEFmGRIQ3Zt2tsGC7p0Ez4=
		-----END PRIVATE KEY-----');

		define('BAOKIM_API_SELLER_INFO','/payment/rest/payment_pro_api/get_seller_info');
		define('BAOKIM_API_PAY_BY_CARD','/payment/rest/payment_pro_api/pay_by_card');
		define('BAOKIM_API_PAYMENT','/payment/order/version11');

		//define('BAOKIM_URL','https://www.baokim.vn');
		//define('BAOKIM_URL','http://baokim.dev');
		// define('BAOKIM_URL','http://kiemthu.baokim.vn');
		define('BAOKIM_URL','https://www.baokim.vn');

		//Phương thức thanh toán bằng thẻ nội địa
		define('PAYMENT_METHOD_TYPE_LOCAL_CARD', 1);
		//Phương thức thanh toán bằng thẻ tín dụng quốc tế
		define('PAYMENT_METHOD_TYPE_CREDIT_CARD', 2);
		//Dịch vụ chuyển khoản online của các ngân hàng
		define('PAYMENT_METHOD_TYPE_INTERNET_BANKING', 3);
		//Dịch vụ chuyển khoản ATM
		define('PAYMENT_METHOD_TYPE_ATM_TRANSFER', 4);
		//Dịch vụ chuyển khoản truyền thống giữa các ngân hàng
		define('PAYMENT_METHOD_TYPE_BANK_TRANSFER', 5);

		$baokim = new baokim_payment_pro();
		$banks = $baokim->get_seller_info();
    }
}

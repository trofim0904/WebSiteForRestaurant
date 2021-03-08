var $container = document.getElementById("IUAfinance6");
$container.style.width = "240";
$container.querySelector(".IUAfinance_block").style.backgroundColor = "rgb(0,0,0)";
$container.querySelector(".IUAfinance_block").style.borderColor = "rgb(255, 255, 255)";
$container.querySelector(".IUAfinance_block").style.color = "rgb(255, 255, 255)";
$container.querySelector(".IUAfinance_content").style.backgroundColor = "rgb(0,0,0)";
$container.querySelector(".IUAfinance_title").style.color = "rgb(255, 255, 255)";
$container.querySelector("#IUAfinanceLink").style.color = "rgb(255, 255, 255)";

if (typeof(iFinance) == "undefined") {
if (typeof(iFinanceData) == "undefined") {
document.write('<scr' + 'ipt src="//i.i.ua/js/i/finance_informer.js?1" type="text/javascript" charset = "windows-1251"></scr' + 'ipt>');
iFinanceData = [];
}
iFinanceData.push({b:15, c:[840,978], enc:0, lang:1, p:6, ver2: true});
} else {
window['oiFinance6'] = new iFinance(2);
window['oiFinance6'].gogo({b:15, c:[840,978], enc:0, lang:1, p:6});
}
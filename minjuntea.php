$urls = array(
    'https://www.minjuntea.com/blog/list.html',
    'https://www.minjuntea.com/blog/2018/12/10/puer-tea-master-xu.html',
    'https://www.minjuntea.com/blog/2018/10/07/why-invest-tea.html'
);
$api = 'http://data.zz.baidu.com/urls?site=https://www.minjuntea.com&token=DVPKbXfBZhnyS9Cj';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
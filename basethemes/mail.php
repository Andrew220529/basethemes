<?php
/*
Template Name: メール送信フォーム
*/
?>
<?php
/*送信項目のデータ*/
$companyname = "";
$companypost = "";
$companytel = "";
$address = "";
$address = "info@japan-ese.info";
$sent_address = "";

// $contact_select[] = $_POST['contact_select'];
// for($n=0; $n<=count($contact_select[0]); $n++){
// 	$contact_select_post = $contact_select_post.",".$contact_select[0][$n];
// }

// フォルダを705でfilesを作成する
// if (is_uploaded_file($_FILES["pdf"]["tmp_name"])) {
// 	$time = time();
// 	$file_info = pathinfo($_FILES["pdf"]["name"]);
// 	$img_extension = strtolower($file_info['extension']);
// 	$filename = $time.".".$img_extension;
// 	$uploadfile = "files/" .$filename;
// 	move_uploaded_file($_FILES["pdf"]["tmp_name"], $uploadfile);
// 	$sent_value .= "\n資料: "."https://example.com/".$uploadfile;
// }

$POST = filter_input_array(INPUT_POST);



mb_language("Japanese");
mb_internal_encoding("UTF-8");
$header = "From:".mb_encode_mimeheader($companyname)."<".$sent_address.">\n";
$header .= "Content-Type: text/plain;charset=iso-2022-jp";

/*------------------------------------*/
$sent_value = "";
$sent_value .= "\n名前:{$POST['username']}";
$sent_value .= "\n電話番号:{$POST['tel']}";
$sent_value .= "\nメールアドレス:{$POST['mail']}";
$sent_value .= "\n項目:{$POST['option']}";
// $sent_value .= "\n資料請求:{$contact_select_post}";
$sent_value .= "\n内容:{$POST['memo']}";
$thanks = "この度はホームページからのお問い合わせありがとうございます。\n頂いた情報は確認後、早急にご連絡致します。\n返信がない場合、お手数をお掛け致しますが、下記連絡先へご連絡頂ければ幸いです。\n\n{$companyname}\n住所：{$companypost}\nTEL：{$companytel}\n\n\n[送信内容]\n";

/*送信処理*/
mb_language("Japanese");
mb_internal_encoding('UTF-8');
$subject="[{$companyname}]ホームページからのお問い合わせ";
if($POST['mail'] != ""){
	if(strlen($POST['memo']) == mb_strlen($POST['memo'],'utf8')) {
		echo "英数字のみの内容は送信できません。<br>";
		echo "<a href='#' onclick='window.history.back(); return false;'>フォームへ戻る</a>";
		exit();
	}
	if(strpos($POST['memo'],'http') === false){
		mb_send_mail($address, $subject, $sent_value, $header);
		mb_send_mail($POST['mail'], "[{$companyname}]ホームページからのお問い合わせありがとうございます。", $thanks.$sent_value, $header);
	}else{
		echo "リンクが入った内容は送信できません。";
		exit();

	}
}else{
	echo "メールアドレスは必ず入力してください。";
	exit();
}

$url= "/thanks";
header("Location: ".$url);
/*------------------------------------*/
?>

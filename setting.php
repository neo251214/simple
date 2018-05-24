<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "J6A2zs5tta+NL/+gwyGoYnNTX2XN0qXeU7AMDMcDvtyg8D5hT6KtiS7sPT++cI5/7YN1I3vWVLaaz2H3QK82/b+QJllx6sOKp5Nsj6IGz8XjfeZX9uSHDKUIdo90+U7QxrNMegBcrNth88NTdl21qQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "a43e7333ad8bba1e05bbf01707a97d20";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}

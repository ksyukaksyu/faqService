<?php
namespace frontend\mods;

use Yii;

/**
 * Class Telegram for Bot
 */
class Telegram {

    /**
     * API url
     * @var string
     */
    private $apiUrl = "http://api.telegram.org/bot%s/";

    /**
     * commands templates
     * @var array
     */
    private $comands = [
        'me' => "getMe",
        'setHook' => "setWebhook?url=%s",
        'getUpdates' => "getUpdates?offset=%d",
        'sendMessage' => "sendMessage?chat_id=%d&reply_to_message_id=%d&text=%s&parse_mode=Markdown",
    ];

    /**
     * Last updated ID
     * @var int
     */
    private $lastUpdate = 0;

    /**
     * Telegram constructor.
     */
    public function __construct()
    {
        $this->apiUrl = sprintf($this->apiUrl, Yii::$app->params['telegramBotToken']);
        $this->comands['setHook'] = sprintf($this->comands['setHook'], urlencode(Yii::$app->params['telegramBotWebHook']));
        $this->lastUpdate = $this->getLastUpdate();
    }

    /**
     * Get Bot info
     * @return array
     */
    public function getMe() {
        return json_decode(file_get_contents($this->apiUrl . $this->comands['me']), true);
    }

    /**
     * Set Bot Web Hook
     * @return array
     */
    public function setHook() {
        return json_decode(file_get_contents($this->apiUrl . $this->comands['setHook']), true);
    }

    /**
     * Send mesage to user
     *
     * @param int $chat
     * @param int $replyTo
     * @param string $text
     * @return array
     */
    public function sendMessage($chat, $replyTo, $text) {
        return json_decode(file_get_contents(
            $this->apiUrl . sprintf($this->comands['sendMessage'], $chat, $replyTo, urlencode($text))
        ), true);
    }

    /**
     * Get new messages
     * @return array
     */
    public function getUpdates() {
        return json_decode(file_get_contents($this->apiUrl .
            sprintf($this->comands['getUpdates'], $this->lastUpdate+1)), true);
    }

    /**
     * Get last updated id
     * @return int
     */
    public function getLastUpdate() {
        $pathToCache = Yii::getAlias('@runtime') . "/tbla.dat";

        return (is_file($pathToCache))
            ? (int)file_get_contents($pathToCache)
            : 0;

    }

    /**
     * Set last updated id
     */
    public function setLastUpdate($id) {
        $pathToCache = Yii::getAlias('@runtime') . "/tbla.dat";
        file_put_contents($pathToCache, (int)$id);
    }
}

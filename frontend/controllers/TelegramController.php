<?php
namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use frontend\mods\Telegram;
use frontend\models\Question;

/**
 * Controller for Telegram bot
 * @author ksyuksksyu
 */
class TelegramController extends BaseController {

    /**
     * Telegram bot
     * @var Telegram
     */
    private $telegram;

    /**
     * TelegramController constructor.
     * @param string $id
     * @param \yii\base\Module $module
     * @param array $config
     */
    public function __construct($id, $module, $config = [])
    {
        $this->layout = false;
        $this->telegram = new Telegram();
        parent::__construct($id, $module, $config);
    }

    /**
     * Access Control
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true
                    ],
                ],
            ],
        ];
    }

    /**
     * Get bot info
     */
    public function actionMe() {
        $this->sendJSONResponse(
            $this->telegram->getMe()
        );
    }

    /**
     * Set bot web hook
     */
    public function actionSethook() {
        $this->sendJSONResponse(
            $this->telegram->setHook()
        );
    }

    /**
     * Get updates and react to it
     */
    public function actionGetupdates() {
        $result = $this->telegram->getUpdates();
        if ($result['ok']) {
            $messages = $result['result'];
            foreach ($messages as $message) {
                if (isset($message['edited_message'])) {
                    $message['message'] = $message['edited_message'];
                }
                // no command
                if (!isset($message['message']['entities'])) {
                    $this->telegram->sendMessage(
                        $message['message']['chat']['id'],
                        $message['message']['message_id'],
                        "*I'm really sorry :(*\nBut you have to use one of my command!\nType /help to get help from me :)"
                    );
                }
                // too many commands
                elseif (count($message['message']['entities']) > 1) {
                    $this->telegram->sendMessage(
                        $message['message']['chat']['id'],
                        $message['message']['message_id'],
                        "*I'm too lazy :(*\nUse just one command at time!"
                    );
                }
                else {
                    $commandInfo = $message['message']['entities'][0];
                    $command = substr(
                        $message['message']['text'],
                        $commandInfo['offset'],
                        $commandInfo['length']);
                    switch ($command) {
                        case '/start' : {
                            $this->telegram->sendMessage(
                                $message['message']['chat']['id'],
                                $message['message']['message_id'],
                                "*Hey ;)*\nI'm funny!\nAsk me anything with /ask or type /help  to get help! :)"
                            );
                            break;
                        }
                        case '/help' : {
                            $this->telegram->sendMessage(
                                $message['message']['chat']['id'],
                                $message['message']['message_id'],
                                "*Hey ;)*\nYou can use\n/start - to say hello!\n/help - to see it again\n/ask = to ask me anything :)"
                            );
                            break;
                        }
                        case '/ask' : {
                            $question = new Question();
                            $question->is_telegram = 1;
                            $question->telegram_message_id = $message['message']['message_id'];
                            $question->telegram_user_id = $message['message']['from']['id'];
                            $question->author_name = "{$message['message']['from']['first_name']} {$message['message']['from']['last_name']}";
                            $question->question = trim(str_replace('/ask', '', $message['message']['text']));
                            if ($question->question == '') {
                                $this->telegram->sendMessage(
                                    $message['message']['chat']['id'],
                                    $message['message']['message_id'],
                                    "You have to ask something ;("
                                );
                                break;
                            }
                            $question->save();

                            $this->telegram->sendMessage(
                                $message['message']['chat']['id'],
                                $message['message']['message_id'],
                                "*Cool ;)*\nWee will try to find the good answer and will send it to you here!"
                            );
                            break;
                        }
                        default : {
                            $this->telegram->sendMessage(
                                $message['message']['chat']['id'],
                                $message['message']['message_id'],
                                "*I'm really sorry :(* Use /ask command to ask me anything or type /help to get help from me :)"
                            );
                            break;
                        }
                    }
                }

                $this->telegram->setLastUpdate($message['update_id']);
            }
        }

        Yii::$app->end();
    }

    /**
     * Send JSON-response
     *
     * @param $data
     * @throws \yii\base\ExitException
     */
    private function sendJSONResponse($data) {
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/json');
        echo json_encode($data, JSON_PRETTY_PRINT && JSON_UNESCAPED_UNICODE);
        Yii::$app->end();
    }
}
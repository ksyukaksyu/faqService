<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Category;
use frontend\models\Question;
use frontend\models\QuestionAddForm;
use frontend\models\QuestionsSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * QuestionsController implements the CRUD actions for Question model.
 */
class QuestionsController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                //'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['create'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        //'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Question models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index.twig', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => $this->getCategoriesForFilters(),
            'statistics' => $this->getStatistics()
        ]);
    }

    /**
     * Lists new Question models.
     * @return mixed
     */
    public function actionNew()
    {
        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 'new');

        return $this->render('last.twig', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => $this->getCategoriesForFilters(),
            'statistics' => $this->getStatistics()
        ]);
    }

    /**
     * Displays a single Question model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view.twig', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Lists blocked Question models.
     * @return mixed
     */
    public function actionBlocked()
    {
        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, 'blocked');

        return $this->render('blocked.twig', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => $this->getCategoriesForFilters(),
            'statistics' => $this->getStatistics()
        ]);
    }

    /**
     * Creates a new Question model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new QuestionAddForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash('success', "Your question is very important for us! Please wait for an answer from our team ;)");
            return $this->goHome();
        } else {
            return $this->render('create.twig', [
                'model' => $model,
                'categories' => Category::find()->select(['name', 'id'])->indexBy('id')->column()
            ]);
        }
    }

    /**
     * Updates an existing Question model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update.twig', [
                'model' => $model,
                'categories' => Category::find()->select(['name', 'id'])->indexBy('id')->column()
            ]);
        }
    }

    /**
     * Deletes an existing Question model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();

        Yii::$app->session->addFlash(
            'warning',
            "Selected question was successfuly deleted :("
        );
        if (!is_null($model->category)) {
            $this->log("deleted the question ({$model->id}) from category \"{$model->category->name}\" ({$model->category->id})");
        }
        else {
            $this->log("deleted the question ({$model->id}) [no category]");
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Question model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Question the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Question::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    private function getStatistics() {
        return [
            'new' => Question::find()->where("is_blocked=0 AND state='".Question::STATE_DRAFT."'")->count(),
            'published' => Question::find()->where("is_blocked=0 AND state IN ('".Question::STATE_PUBLISHED."', '".Question::STATE_HIDDEN."')")->count(),
            'blocked' => Question::find()->where("is_blocked=1")->count(),
        ];
    }

    private function getCategoriesForFilters() {
        return array_replace([-1 => '-- empty -- '], Category::find()->select(['name', 'id'])->indexBy('id')->column());
    }
}

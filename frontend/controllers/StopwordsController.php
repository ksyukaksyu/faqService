<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Stopword;
use frontend\models\StopwordsSearch;
use yii\web\NotFoundHttpException;

/**
 * StopwordsController implements the CRUD actions for Stopword model.
 */
class StopwordsController extends BaseController
{
    /**
     * Lists all Stopword models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StopwordsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index.twig', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Stopword model.
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
     * Creates a new Stopword model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Stopword();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash(
                'success',
                "New stopword was successfuly added :)"
            );
            $this->log("added a new stopword \"{$model->word}\"");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create.twig', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Stopword model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash(
                'success',
                "Current stopword was successfuly updated :)"
            );
            $this->log("updated the stopword ({$model->id}) \"{$model->word}\"");
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update.twig', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Stopword model.
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
            "Selected stopword was successfuly deleted :("
        );
        $this->log("deleted the stopword ({$model->id}) \"{$model->word}\"");

        return $this->redirect(['index']);
    }

    /**
     * Finds the Stopword model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Stopword the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Stopword::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

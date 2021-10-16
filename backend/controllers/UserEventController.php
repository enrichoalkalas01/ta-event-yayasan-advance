<?php

namespace backend\controllers;

use common\models\UserEvent;
use backend\models\search\UserEventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserEventController implements the CRUD actions for UserEvent model.
 */
class UserEventController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['create','delete'],
                    'rules' => [
                        [
                            'actions' => ['create','delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Creates a new UserEvent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($user_id=0,$event_id=0)
    {
        $model = new UserEvent();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['event/view', 'id' => $model->event_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'user_id' => $user_id,
            'event_id' => $event_id,
        ]);
    }

    /**
     * Deletes an existing UserEvent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_id,$event_id)
    {
        $model = $this->findModel($user_id,$event_id);
        $model->delete();

        return $this->redirect(['event/view', 'id' => $model->event_id]);
    }

    /**
     * Finds the UserEvent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return UserEvent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_id,$event_id)
    {
        if (($model = UserEvent::findOne(['user_id' => $user_id, 'event_id' => $event_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
